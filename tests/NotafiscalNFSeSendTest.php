<?php

use PHPUnit\Framework\TestCase;
use Multiverse\Notazz\DSL\NotaFiscalBuilder;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use Multiverse\Notazz\Exceptions\ErrorStatusProcessamentoException;

class NotaFiscalNFSeSendTest extends TestCase
{
    protected $notafiscal;

    protected $apiKey;

    public function setUp(): void
    {
        $this->apiKey = '123';

        $this->notafiscal = new NotaFiscalBuilder();
    }

    public function testNotaFiscalBuilderIsNfse()
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
                    ->name('Leonardo Tumadjian')
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
                    ->basevalue(0.10)
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
            ->make()
        ;

        $expectedResult = new \stdClass();

        $expectedResult->statusProcessamento = 'sucesso';
        $expectedResult->codigoProcessamento = '000';
        $expectedResult->id = '123';

        $this->assertEquals($expectedResult, $result);
    }

    public function testNotaFiscalBuilderIsNfseRemote()
    {
        $this->expectException(ErrorStatusProcessamentoException::class);

        $client = $this->createMock(Client::class);

        $response = $this->createMock(Response::class);

        $stream = $this->createMock(Stream::class);

        $client->method('request')
                ->willReturn($response);

        $response->method('getBody')
                ->willReturn($stream);

        $stream->method('getContents')
                ->willReturn('{"statusProcessamento":"erro","motivo": "Erro ao processar"}');

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
                ->nfse()
                ->basevalue(1.10)
                ->description('Descrição teste')
                ->issue_date('2019-07-12 12:14:45')
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
        ->make();
    }
}
