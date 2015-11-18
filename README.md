# CANDUCCI AVATAR

[![Build Status](https://travis-ci.org/netdragoon/avatar.svg?branch=master)](https://travis-ci.org/netdragoon/avatar)
[![Packagist](https://img.shields.io/packagist/dt/canducci/avatar.svg?style=flat)](https://packagist.org/packages/canducci/avatar)
[![Packagist](https://img.shields.io/packagist/l/canducci/avatar.svg)](https://packagist.org/packages/canducci/avatar)
[![Packagist](https://img.shields.io/packagist/v/canducci/avatar.svg?label=version)](https://packagist.org/packages/canducci/avatar)

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

Após essas configurações o pacote `Canducci/Avatar` estará instalado.

##Utilização:

Para facilitar foi criado uma `function` (função) para manipular de forma simples seguindo esse exemplo:

___1 ) Avatar___

####Como usar?

```PHP
  Explicação:
  
    $email   = 'email referente ao seu cadastro no site pt.gravatar.com';
    $tamanho = 'tamanho da imagem em pixel (px)';
    $pasta   = 'pasta responsável por guardar uma cópia da imagem para 
      otimização de tráfego de sua rede'
               
  Observação: se for especificamente para o Laravel ficará dentro da 
    pasta `public` a pasta da imagem
  
  Exemplo:
  
  $email      = 'email@email.com'; // email do gravatar
  $tamanho    = 150; //tamanho em pixel
  $pasta      = 'imagem/'; //aonde vai ser gravado a imagem

  //FUNCTION
  $avatarInfo = avatar($email, $tamanho, $pasta);

  // OU 

  //FACADE
  $avatarInfo = Avatar::avatarInfo($email, $tamanho, $pasta);
  
```

___Métodos que estão presentes em `$avatarInfo`___

```PHP

  // Caminho aonde a imagem está sendo gravada e disponível
  abstract function getPath();

  // Código Hash da imagem (md5)      
  abstract function getHash();
  
  // Tamanho da Imagem
  abstract function getWith();
  
  // E-mail informado
  abstract function getEmail();
  
  // Retorno da tag <img> com a imagem que foi trazida do site pt.gravatar.com
  abstract function getTagImage();
    //Exemplo: <img src="/image/2f16dd72d50033880dab74299e087b5a-601.jpg" /> 
    // Dados fictios
  
  // Caminho e nome da imagem
  abstract function getImage();

  // Dados no formato array
  abstract function getArray();
    
  // Dados no formato Json  
  abstract function getJson();
    
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

___2 ) Profile (informações do perfil)___

O pacote traz o profile do usuário mediante as informações contidas em seu cadastro.

####Como usar?

```PHP

  $email = 'email@email.com'; // email do gravatar

  //FUNCTION
  $profileInfo = profile($email);

  // OU 

  //FACADE
  $profileInfo = Avatar::profileInfo($email);

```
___Métodos que estão presentes em `$avatarInfo`___

```PHP

  //caminho dos caminhos
  abstract function getUrls();

  //Ims contidos
  abstract function getIms();

  //Emails contidos
  abstract function getEmails();

  //Número de telefones existentes
  abstract function getPhoneNumbers();

  //Sobre mim
  abstract function getAboutMe();

  //Mostrar nome
  abstract function getDisplayName();

  //Imagem de Background
  abstract function getProfileBackground();

  //Seu nome
  abstract function getName();

  //Suas contas
  abstract function getAccounts();

  //Seu Id de identificação
  abstract function getId();

  //Sua hash
  abstract function getHash();

  //Sua Requisição hash
  abstract function getRequestHash();

  //Endereço do perfil
  abstract function getProfileUrl();

  //Nome preferencial 
  abstract function getPreferredUsername();

  //Endereços imagens pequenas
  abstract function getThumbnailUrl();

  //Todas as fotos
  abstract function getPhotos();

  // Dados no formato array
  abstract function getArray();
    
  // Dados no formato Json  
  abstract function getJson();

```

Link exemplo: http://pt.gravatar.com/site/implement/profiles/


