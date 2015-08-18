<?php

namespace Canducci\Avatar;

class AvatarInfo {

    
    private $avatarEmail;
    private $avatarProperty;

    const Url = 'http://www.gravatar.com/avatar/';

    public function __construct(AvatarEmail $avatarEmail, AvatarProperty $avatarProperty) {

        $this->avatarEmail    = $avatarEmail;
        $this->avatarProperty = $avatarProperty;                
        
    }

    public function getPath() {

        return $this->avatarProperty->getPath();
    }

    public function getHash() {

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
    
    public function getTagImage() {

        return sprintf('<img src="/%s%s.jpg" />', $this->getPath(), $this->getHash());
    }

    public function getImage() {

        return sprintf('%s.jpg', $this->getHash());
        
    }

    

}
