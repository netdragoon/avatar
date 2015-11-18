<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarEmailContract;
use Canducci\Avatar\Contracts\AvatarPropertyContract;
use Canducci\Avatar\Contracts\AvatarInfoContract;

final class AvatarInfo extends AvatarInfoContract {

    public function __construct(AvatarEmailContract $avatarEmail, AvatarPropertyContract $avatarProperty)
    {
        $this->avatarEmail    = $avatarEmail;

        $this->avatarProperty = $avatarProperty;
    }

    public function getPath()
    {
        return $this->avatarProperty->getPath();
    }

    public function getHash()
    {
        return $this->avatarEmail->getHash();
    }
    
    public function getWidth()
    {
        return $this->avatarProperty->getWidth();
    }
    
    public function getEmail()
    {
        return $this->avatarEmail->getEmail();
    }
    
    public function getTagImage()
    {
        if (file_exists(substr($this->getImage(), 1)))
        {
            return sprintf('<img src="%s" style="width:%spx" />', $this->getImage(), $this->getWidth());
        }

        return sprintf('<h2>Error: Avatar no find</h2>');
    }

    public function getImage()
    {
        return sprintf('/%s', $this->avatarProperty->getFileName());
    }

    public function getArray()
    {        
        $var = array('width' => $this->getWidth(),
                'url' => $this->avatarProperty->getUrl(),
                'path' => $this->getPath(),                
                'email' => $this->getEmail(),
                'extension' => $this->avatarProperty->getImageExtension(),
                'hash' => $this->getHash(),
                'rating' => $this->avatarProperty->getAvatarRating(),
                'filename' => $this->avatarProperty->getFileName(),
                'exits' => $this->avatarProperty->exists());

        return $var;
    }

    public function getJson()
    {
        return json_encode($this->getArray(), JSON_PRETTY_PRINT);
    }
}
