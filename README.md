# CANDUCCI AVATAR

Site Referencia: http://pt.gravatar.com/

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
'providers' => [
  ...,
  ...,
  
  Canducci\Avatar\Providers\AvatarServiceProvider::class
]  
```

Após essas configurações o pacote Canducci/Avatar estará instalado

##Utilização:

Para facilitar foi criado uma `function` (função) para manipular de forma simples seguindo esse exemplo:

```PHP
  Explicação:
  
    $email   = 'email referente ao seu cadastro no site pt.gravatar.com';
    $tamanho = 'tamanho da imagem em pixel (px)';
    $pasta   = 'pasta responsável por guardar uma cópia da imagem para otimização de tráfego de sua rede'
               Observação: se for especificamente para o Laravel ficará dentro da pasta public a pasta que tu passar como                  parametro
  
  Exemplo:
  
  $email   = 'email@email.com';
  $tamanho = 150;
  $pasta   = 'imagem/';
  avatar($email, $tamanho, $pasta);
```


