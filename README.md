# CANDUCCI AVATAR

__Site Referencia: __ http://pt.gravatar.com/

## INSTALAÇÃO

No seu arquivo `composer.json`, na chave `require` insira o item abaixo

```JSON
  "canducci/avatar": "dev-master"
```

Logo após digite na sua linha de código o seguinte comando:

```PHP
  $ composer update
```

Para registrar o seu `ServiceProvider` no Laravel versão `5.0.*` e `5.1.*` abra o arquivo da pasta `config`, `app` e insira no `array` de `providers` a seguinte linha:

```PHP
  Canducci\Avatar\Providers\AvatarServiceProvider::class
```

