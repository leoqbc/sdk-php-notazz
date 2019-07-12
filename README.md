# SDK PHP Notazz
[![Build Status](https://travis-ci.org/leoqbc/sdk-php-notazz.svg?branch=master)](https://travis-ci.org/leoqbc/sdk-php-notazz)

SDK e DSL em PHP para emissão de nota fiscal NFE e NFSE

# Abaixo exemplo de uso
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
    ->make()
;
```

# Obs:
No momento só foi implementado emissão de notafiscal (NFe)
