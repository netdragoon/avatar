<?php

namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarContract;

class Avatar implements AvatarContract {

    public function getAvatarInfo($email, $width = 80, $path = 'image/') {

        return new AvatarInfo(md5(strtolower(trim($email))), $width, $path);
        
    }

}
