<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarContract;

class Avatar extends AvatarContract {

    public function getAvatarInfo($email, $width = 80, $path = 'image/', $secure = false) {

        $this->avatarEmail = new AvatarEmail($email);
        $this->avatarProperty = new AvatarProperty($this->avatarEmail, $width, $path, $secure);
        $this->avatarSave = new AvatarSave($this->avatarProperty);        
        $this->avatarSave->save();

        return new AvatarInfo($this->avatarEmail, $this->avatarProperty);
    }

}
