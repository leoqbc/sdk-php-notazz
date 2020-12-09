# SDK PHP Notazz
[![Build Status](https://travis-ci.org/leoqbc/sdk-php-notazz.svg?branch=master)](https://travis-ci.org/leoqbc/sdk-php-notazz)
[![Latest Stable Version](https://poser.pugx.org/multiverse/notazzsdk/v/stable)](https://packagist.org/packages/multiverse/notazzsdk)
[![Total Downloads](https://poser.pugx.org/multiverse/notazzsdk/downloads)](https://packagist.org/packages/multiverse/notazzsdk)
[![License](https://poser.pugx.org/multiverse/notazzsdk/license)](https://packagist.org/packages/multiverse/notazzsdk)

[Documentação da API oficial](https://app.notazz.com/docs/api/)

SDK e DSL em PHP para emissão de nota fiscal NFE e NFSE

### Intalação da SDK
`$ composer require multiverse/notazzsdk`


## Abaixo exemplo de uso
###### Emissão da NF-e
```php
// Example NFE
use Multiverse\Notazz\DSL\NotaFiscalBuilder;

$notafiscal = new NotaFiscalBuilder();

$result =
    $notafiscal
        ->key('123') // Notazz Api key 
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
                ->cod(124)
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
```
###### Emissão da NFS-e
```php
// Example NFSE
use Multiverse\Notazz\DSL\NotaFiscalBuilder;

$result = $this->notafiscal
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
```
# Obs:
No momento só foi implementado emissão de notafiscal NF-e / NFS-e
TODO: Criar consulta a notas por código e filtros

