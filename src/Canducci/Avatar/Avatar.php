<?php

namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarContract;
use Canducci\Avatar\AvatarProperty;

class Avatar implements AvatarContract {
    
    private $avatarEmail;
    private $avatarProperty;
    private $avatarSave;
    private $url;
    
    
    public function getAvatarInfo($email, $width = 80, $path = 'image/') {        
        
        $this->avatarEmail    = new AvatarEmail($email);                        
        $this->avatarProperty = new AvatarProperty($this->avatarEmail->getHash(), $width, $path);
        $this->avatarSave     = new AvatarSave($this->avatarEmail, $this->avatarProperty);
        $this->avatarSave->save();
        
        return new AvatarInfo($this->avatarEmail, $this->avatarProperty);
        
    }
    
    

}
