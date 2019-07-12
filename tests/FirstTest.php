<?php

use PHPUnit\Framework\TestCase;

use Multiverse\Notazz\NotaFiscal;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;
use Multiverse\Notazz\DSL\Exceptions\CantAddEmailException;

use Multiverse\Notazz\DSL\DestinationBuilder;
use Multiverse\Notazz\DSL\DocumentBuilder;
use Multiverse\Notazz\DSL\ProductsBuilder;
use Multiverse\Notazz\DSL\AliquotasBuilder;
use Multiverse\Notazz\DSL\ServiceBuilder;

class FirstTest extends TestCase
{ 
    public function testDSLClassDestinationBuilder()
    {
        $destination = new DestinationBuilder();

        $this->expectException(MethodNotFoundException::class);

        $destination
            ->name('Leonardo Tumadjian')
            ->tax('3333.333.333-33');
    }

    public function testDSLDestinationBuilderCouldBeFullFilled()
    {
        $destination = new DestinationBuilder();

        $destination
            ->name('John Doe')
            ->taxid('00000000272')
            ->taxtype('F')
            ->street('NÃO INFORMADO')
            ->number('S/N')
            ->district('NÃO INFORMADO')
            ->city('São Paulo')
            ->uf('SP')
            ->zipcode('02102000')
            ->email('teste@gmail.com')
            ->sendEmailList()
            ->add('teste1@gmail.com')
            ->add('teste2@gmail.com')
            ->end()
            ->phone('11955555555');

        $generated = $destination->getArray();

        $result = [
            'DESTINATION_NAME' => 'John Doe',
            'DESTINATION_TAXID' => '00000000272',
            'DESTINATION_TAXTYPE' => 'F',
            'DESTINATION_STREET' => 'NÃO INFORMADO',
            'DESTINATION_NUMBER' => 'S/N',
            'DESTINATION_DISTRICT' => 'NÃO INFORMADO',
            'DESTINATION_CITY' => 'São Paulo',
            'DESTINATION_UF' => 'SP',
            'DESTINATION_ZIPCODE' => '02102000',
            'DESTINATION_PHONE' => '11955555555',
            'DESTINATION_EMAIL' => 'teste@gmail.com',
            'DESTINATION_EMAIL_SEND' => [
                'teste1@gmail.com',
                'teste2@gmail.com'
            ]
        ];

        $this->assertEquals($result, $generated);
    }

    public function testDSLDestinationBuilderCantAddEmailWrongPlace()
    {
        $destination = new DestinationBuilder();

        $this->expectException(CantAddEmailException::class);

        $destination
            ->name('John Doe')
            ->taxid('00000000272')
            ->taxtype('F')
            ->street('NÃO INFORMADO')
            ->number('S/N')
            ->district('NÃO INFORMADO')
            ->city('São Paulo')
            ->uf('SP')
            ->zipcode('02102000')
            ->email('teste@gmail.com')
            ->add('teste1@gmail.com')
            ->sendEmailList()
            ->add('teste2@gmail.com')
            ->end()
            ->phone('11955555555');
    }

    public function testDSLDocumentBuilderIsNFSE()
    {
        $document = new DocumentBuilder;

        $document
            ->nfse()
            ->basevalue(1.00)
            ->description('Descrição teste')
            ->issue_date('2019-07-05 18:11:30');

        $nf = $document->getInstance();

        $this->assertInstanceOf('Multiverse\Notazz\NFSe\Document', $nf);
    }

    public function testDSLDocumentBuilderIsNFE()
    {
        $document = new DocumentBuilder;

        $document
            ->nfe()
            ->basevalue(1.00)
            ->description('Descrição teste')
            ->issue_date('2019-07-05 18:11:30');

        $nf = $document->getInstance();

        $this->assertInstanceOf('Multiverse\Notazz\NFe\Document', $nf);
    }

    public function testDSLDocumentClassCouldBeFullFilledNFSE()
    {
        $document = (new DocumentBuilder)
            ->nfse()
            ->basevalue(1.00)
            ->description('Descrição teste')
            ->issue_date('2019-07-05 18:11:30')
            ->competence('2019-07-05 18:11:30');

        $generated = $document->getArray();

        $result = [
            'DOCUMENT_BASEVALUE' => 1.00,
            'DOCUMENT_DESCRIPTION' => 'Descrição teste',
            'DOCUMENT_ISSUE_DATE' => '2019-07-05 18:11:30',
            'DOCUMENT_COMPETENCE' => '2019-07-05 18:11:30',
        ];

        $this->assertEquals($result, $generated);
    }

    public function testDSLDocumentClassCouldBeFullFilledNFE()
    {
        $document = (new DocumentBuilder)
            ->nfe()
            ->basevalue(1.00)
            ->description('Descrição teste')
            ->issue_date('2019-07-05 18:11:30');

        $generated = $document->getArray();

        $result = [
            'DOCUMENT_BASEVALUE' => 1.00,
            'DOCUMENT_DESCRIPTION' => 'Descrição teste',
            'DOCUMENT_ISSUE_DATE' => '2019-07-05 18:11:30',
        ];

        $this->assertEquals($result, $generated);
    }

    public function testDSLDocumentClassShouldBeNFE()
    {
        $document = (new DocumentBuilder)
            ->nfe()
            ->basevalue(1.00)
            ->description('Descrição teste')
            ->issue_date('2019-07-05 18:11:30');


        $this->assertEquals($document::NFE, $document->getDocumentType());
    }

    public function testDSLDocumentClassCouldBeNFSE()
    {
        $document = (new DocumentBuilder)
            ->nfse()
            ->basevalue(1.00)
            ->description('Descrição teste')
            ->issue_date('2019-07-05 18:11:30')
            ->competence('2019-07-05 18:11:30');

        $generated = $document->getArray();

        $this->assertEquals($document::NFSE, $document->getDocumentType());
    }

    public function testDSLDocumentBuilderProduct()
    {
        $products = (new ProductsBuilder)
            ->add()
            ->cod(123)
            ->name('Escova de dentes Cepacol')
            ->qtd(2)
            ->unitary_value(15.20)
            ->ncm(123)
            ->save()

            ->add()
            ->cod(123)
            ->name('Pano de prato para cozinha')
            ->qtd(1)
            ->unitary_value(55.10)
            ->ncm(123)
            ->save();

        $result = [
            'DOCUMENT_PRODUCT' => [
                [
                    'DOCUMENT_PRODUCT_COD' => 123,
                    'DOCUMENT_PRODUCT_NAME' => 'Escova de dentes Cepacol',
                    'DOCUMENT_PRODUCT_QTD' => 2,
                    'DOCUMENT_PRODUCT_UNITARY_VALUE' => 15.20,
                    'DOCUMENT_PRODUCT_NCM' => 123
                ],
                [
                    'DOCUMENT_PRODUCT_COD' => 123,
                    'DOCUMENT_PRODUCT_NAME' => 'Pano de prato para cozinha',
                    'DOCUMENT_PRODUCT_QTD' => 1,
                    'DOCUMENT_PRODUCT_UNITARY_VALUE' => 55.10,
                    'DOCUMENT_PRODUCT_NCM' => 123
                ]
            ]
        ];

        $this->assertEquals($result, $products->getArray());
    }

    public function testDSLAliquotasClassCouldBeFullFilledNFSE()
    {
        $aliquotas = new AliquotasBuilder;

        $aliquotas
            ->cofins(1.0)
            ->csll(0.10)
            ->inss(2.01)
            ->ir(1.05)
            ->pis(0.5)
            ->iss(0.08);

        $result = [
            'COFINS' => 1,
            'CSLL' => 0.1,
            'INSS' => 2.01,
            'IR' => 1.05,
            'PIS' => 0.5,
            'ISS' => 0.08
        ];

        $this->assertEquals($result, $aliquotas->getArray());
    }

    public function testDSLServiceClassCouldBeFullFilledNFSE()
    {
        $service = new ServiceBuilder;

        $service
            ->description('Teste')
            ->listLc116(123)
            ->withheldIss(123)
            ->cityCode(123)
            ->aliquotas()
                ->cofins(1.0)
                ->csll(0.10)
                ->inss(2.01)
                ->ir(1.05)
                ->pis(0.5)
                ->iss(0.08)
            ->save()
        ;

        $result = [
            'CITY_SERVICE_DESCRIPTION' => 'Teste',
            'SERVICE_LIST_LC116' => 123,
            'WITHHELD_ISS' => 123,
            'CITY_SERVICE_CODE' => 123,
            'ALIQUOTAS' => array(
                'COFINS' => 1.0,
                'CSLL' => 0.10,
                'INSS' => 2.01,
                'IR' => 1.05,
                'PIS' => 0.5,
                'ISS' => 0.08,
            )
        ];

        $this->assertEquals($result, $service->getArray());
    }
}
