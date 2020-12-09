<?php

use PHPUnit\Framework\TestCase;
use Multiverse\Notazz\DSL\NotaFiscalBuilder;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;

class NotaFiscalNFeTest extends TestCase
{
    protected $notafiscal;

    public function setUp(): void
    {
        $client = new GuzzleHttp\Client();

        $this->notafiscal = new NotaFiscalBuilder($client);
    }

    public function testNotaFiscalBuilderIsNFE()
    {
        $client = $this->createMock(Client::class);

        $response = $this->createMock(Response::class);

        $stream = $this->createMock(Stream::class);

        $client->method('request')
                ->willReturn($response);

        $response->method('getBody')
                ->willReturn($stream);

        $stream->method('getContents')
                ->willReturn('{"statusProcessamento":"sucesso","codigoProcessamento":"000","id":"123"}');

        $this->notafiscal
              ->setRequestHandler($client)
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
        $client = $this->createMock(Client::class);

        $response = $this->createMock(Response::class);

        $stream = $this->createMock(Stream::class);

        $client->method('request')
                ->willReturn($response);

        $response->method('getBody')
                ->willReturn($stream);

        $stream->method('getContents')
                ->willReturn('{"statusProcessamento":"sucesso","codigoProcessamento":"000","id":"123"}');

        $this->notafiscal
                ->setRequestHandler($client)
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
                ->shipping()
                    ->value(100.00)
                    ->mode(0)
                    ->vehicles()
                        ->placa('ZZZ1100')
                        ->uf('MG')
                    ->volumes()
                        ->qtd(1)
                        ->species('CAIXA')
                        ->netWeight(10.500)
                        ->grossWeight(12.000)
                    ->carrier()
                        ->name('Empresa Brasileira de Correios e Telégrafos')
                        ->taxid('34028316002742')
                        ->ie(12345678)
                        ->street('Rua de teste')
                        ->number(123)
                        ->district('Centro')
                        ->city('Belo Horizonte')
                        ->uf('MG')
                ->save()
            ->make()
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
  "DOCUMENT_FRETE": {
    "DOCUMENT_FRETE_MOD": 0,
    "DOCUMENT_FRETE_VALUE": 100,
    "DOCUMENT_FRETE_TRANSPORTADORA": {
        "DOCUMENT_FRETE_TRANSPORTADORA_NAME": "Empresa Brasileira de Correios e Tel\u00e9grafos",
        "DOCUMENT_FRETE_TRANSPORTADORA_TAXID": "34028316002742",
        "DOCUMENT_FRETE_TRANSPORTADORA_IE": 12345678,
        "DOCUMENT_FRETE_TRANSPORTADORA_STREET": "Rua de teste",
        "DOCUMENT_FRETE_TRANSPORTADORA_NUMBER": "123",
        "DOCUMENT_FRETE_TRANSPORTADORA_DISTRICT": "Centro",
        "DOCUMENT_FRETE_TRANSPORTADORA_CITY": "Belo Horizonte",
        "DOCUMENT_FRETE_TRANSPORTADORA_UF": "MG"
    },
    "DOCUMENT_FRETE_VEICULO": {
        "DOCUMENT_FRETE_VEICULO_PLACA": "ZZZ1100",
        "DOCUMENT_FRETE_VEICULO_UF": "MG"
    },
    "DOCUMENT_FRETE_VOLUMES": {
        "DOCUMENT_FRETE_VOLUMES_QTD": 1,
        "DOCUMENT_FRETE_VOLUMES_SPECIES": "CAIXA",
        "DOCUMENT_FRETE_VOLUMES_NET_WEIGHT": 10.5,
        "DOCUMENT_FRETE_VOLUMES_GROSS_WEIGHT": 12
    }
  },
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
