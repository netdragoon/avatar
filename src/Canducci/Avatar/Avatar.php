<?php

namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarContract;
use Exception;

class Avatar implements AvatarContract {

    public function getAvatarInfo($email, $width = 80, $path = 'image/') {
        
        if ($this->isEmail($email) == false)
        {
            throw new Exception("\nAvatar\nErro: Email invalid !!!\n\n");
        }
        
        return new AvatarInfo(md5(strtolower(trim($email))), $width, $path);
    }

    private function isEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

}
