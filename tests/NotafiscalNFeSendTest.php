<?php

use PHPUnit\Framework\TestCase;
use Multiverse\Notazz\DSL\NotaFiscalBuilder;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;

class NotaFiscalNFeSendTest extends TestCase
{
    protected $notafiscal;

    protected $apiKey;

    public function setUp(): void
    {
        $this->apiKey = '123';

        $this->notafiscal = new NotaFiscalBuilder();
    }

    public function testNotaFiscalBuilderIsNfe()
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

        $result =
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

        $expectedResult = new \stdClass();

        $expectedResult->statusProcessamento = 'sucesso';
        $expectedResult->codigoProcessamento = '000';
        $expectedResult->id = '123';

        $this->assertEquals($expectedResult, $result);
    }
}
