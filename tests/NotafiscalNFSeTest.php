<?php

use PHPUnit\Framework\TestCase;
use Multiverse\Notazz\DSL\NotaFiscalBuilder;

class NotaFiscalNFSeTest extends TestCase
{
    protected $notafiscal;

    public function setUp(): void
    {
        $client = new GuzzleHttp\Client();

        $this->notafiscal = new NotaFiscalBuilder($client);
    }

    public function testNotaFiscalBuilderIsNFSE()
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
                    ->nfse()
                    ->basevalue(70.30)
                    ->description('Descrição teste')
                    ->issue_date('2019-07-05 18:11:30')
                ->service()
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

        $this->assertFalse($this->notafiscal->isNFE());
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
                    ->nfse()
                    ->basevalue(70.30)
                    ->description('Descrição teste')
                    ->issue_date('2019-07-05 18:11:30')
                    ->competence('2019-07-12 11:52:30')
                ->service()
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

        $result = <<<JSON
{
  "DOCUMENT_BASEVALUE": 70.3,
  "DOCUMENT_DESCRIPTION": "Descrição teste",
  "DOCUMENT_ISSUE_DATE": "2019-07-05 18:11:30",
  "DOCUMENT_COMPETENCE": "2019-07-12 11:52:30",
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
  "SERVICE_LIST_LC116": 123,
  "WITHHELD_ISS": 123,
  "CITY_SERVICE_CODE": 123,
  "CITY_SERVICE_DESCRIPTION": "Teste",
  "ALIQUOTAS": {
        "COFINS": 1.0, 
        "CSLL": 0.10, 
        "INSS": 2.01, 
        "IR": 1.05, 
        "PIS": 0.5, 
        "ISS": 0.08
  },
  "API_KEY": "123",
  "METHOD": "create_nfse"
}
JSON;
        $this->assertJsonStringEqualsJsonString(
            $this->notafiscal->getJson(),
            $result
        );
    }
}
