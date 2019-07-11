<?php

use PHPUnit\Framework\TestCase;

use Multiverse\Notazz\DSL\NotaFiscalBuilder;

class NotaFiscalNFeTest extends TestCase
{
    protected $notafiscal;

    public function setUp() : void
    {
        $client = new GuzzleHttp\Client;

        $this->notafiscal = new NotaFiscalBuilder($client);
    }

    public function testNotaFiscalBuilderIsNFE()
    {
        $this->notafiscal
                ->key('123')
                ->destination()
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
                    ->phone(11955555555)
                ->document()
                    ->nfe()
                    ->basevalue(70.30)
                    ->description('Descrição teste')
                    ->issue_date('2019-07-05 18:11:30')
                ->products()
                    ->add()
                        ->cod(123)
                        ->name('Escova de dentes Cepacol')
                        ->qtd(2)
                        ->unitary_value(15.20)
                    ->save()
                    ->add()
                        ->cod(123)
                        ->name('Pano de prato para cozinha')
                        ->qtd(1)
                        ->unitary_value(55.10)
                    ->save()
        ;

        $this->assertTrue($this->notafiscal->isNFE());
    }

    public function testNotafiscalBuilderJsonValidated()
    {
        $this->notafiscal
                ->key('123')
                ->destination()
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
                    ->phone(11955555555)
                ->document()
                    ->nfe()
                    ->basevalue(70.30)
                    ->description('Descrição teste')
                    ->issue_date('2019-07-05 18:11:30')
                ->products()
                    ->add()
                        ->cod(123)
                        ->name('Escova de dente Cepacol')
                        ->qtd(2)
                        ->unitary_value(15.20)
                    ->save()
                    ->add()
                        ->cod(123)
                        ->name('Pano de prato para cozinha')
                        ->qtd(1)
                        ->unitary_value(55.10)
                    ->save()
        ;

        $result = <<<JSON
{
  "DOCUMENT_BASEVALUE": 70.3,
  "DOCUMENT_DESCRIPTION": "Descrição teste",
  "DOCUMENT_ISSUE_DATE": "2019-07-05 18:11:30",
  "DESTINATION_NAME": "John Doe",
  "DESTINATION_TAXID": "00000000272",
  "DESTINATION_TAXTYPE": "F",
  "DESTINATION_STREET": "NÃO INFORMADO",
  "DESTINATION_NUMBER": "S/N",
  "DESTINATION_DISTRICT": "NÃO INFORMADO",
  "DESTINATION_CITY": "São Paulo",
  "DESTINATION_UF": "SP",
  "DESTINATION_ZIPCODE": "02102000",
  "DESTINATION_PHONE": "11955555555",
  "DESTINATION_EMAIL": "teste@gmail.com",
  "DESTINATION_EMAIL_SEND": [
    "teste1@gmail.com",
    "teste2@gmail.com"
  ],
  "DOCUMENT_PRODUCT": [
    {
      "DOCUMENT_PRODUCT_COD": 123,
      "DOCUMENT_PRODUCT_NAME": "Escova de dente Cepacol",
      "DOCUMENT_PRODUCT_QTD": 2,
      "DOCUMENT_PRODUCT_UNITARY_VALUE": 15.2
    },
    {
      "DOCUMENT_PRODUCT_COD": 123,
      "DOCUMENT_PRODUCT_NAME": "Pano de prato para cozinha",
      "DOCUMENT_PRODUCT_QTD": 1,
      "DOCUMENT_PRODUCT_UNITARY_VALUE": 55.1
    }
  ],
  "API_KEY": "123",
  "METHOD": "create_nfe_55"
}
JSON;
        $this->assertJsonStringEqualsJsonString(
            $this->notafiscal->getJson(),
            $result
        );
    }
}