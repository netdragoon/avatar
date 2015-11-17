# CANDUCCI AVATAR

[![Build Status](https://travis-ci.org/netdragoon/avatar.svg?branch=master)](https://travis-ci.org/netdragoon/avatar)

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
               
  Observação: se for especificamente para o Laravel ficará dentro da pasta `public` a pasta da imagem
  
  Exemplo:
  
  $email      = 'email@email.com';
  $tamanho    = 150;
  $pasta      = 'imagem/';
  $avatarInfo = avatar($email, $tamanho, $pasta);
  
```

___Métodos que estão presentes em `$avatarInfo`___

```PHP

  //Caminho aonde a imagem está sendo gravada e disponível
  abstract function getPath();

  //Código Hash da imagem (md5)      
  abstract function getHash();
  
  //Tamanho da Imagem
  abstract function getWith();
  
  //E-mail informado
  abstract function getEmail();
  
  //Retorno da tag <img> com a imagem que foi trazida do site pt.gravatar.com
  abstract function getTagImage();
    //Exemplo: <img src="/image/2f16dd72d50033880dab74299e087b5a-601.jpg" /> 'Dados fictios
  
  //Caminho e nome da imagem
  abstract function getImage();
    
```

___Blade contido de maneira simples para utilização direto na view para Framework Laravel `5.0.*` e `5.1.*`___

```PHP
  // Primeiro parametro é o e-mail do pt.gravatar.com.
  // Sedundo parametro é 0 tamanho da imagem.
  // Terceiro parametro é a pasta que guarda a imagem.
  
  @avatar('email@hotmail.com', 601, 'image/')
  
  //Geração:
    //<img src="/image/2f16dd72d50033880dab74299e087b5a-601.jpg" />
  
```

