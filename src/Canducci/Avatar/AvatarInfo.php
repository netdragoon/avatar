<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarInfoContract;

class AvatarInfo extends AvatarInfoContract {

    public function __construct(AvatarEmail $avatarEmail, AvatarProperty $avatarProperty)
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
    
    public function getWith()
    {
        return $this->avatarProperty->getWidth();
    }
    
    public function getEmail()
    {
        return $this->avatarEmail->getEmail();
    }
    
    public function getTagImage()
    {
        if (file_exists(substr($this->getImage(), 1))) {
            
            return sprintf('<img src="%s" />', $this->getImage());
            
        }
        return sprintf('<h2>Error: Avatar no find</h2>');
    }

    public function getImage()
    {
        return sprintf('/%s', $this->avatarProperty->getFileName());
    }

}
