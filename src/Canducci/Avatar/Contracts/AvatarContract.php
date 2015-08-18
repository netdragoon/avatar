<?php

namespace Canducci\Avatar\Contracts;

abstract class AvatarContract {

    protected $avatarEmail;
    protected $avatarProperty;
    protected $avatarSave;

    abstract function getAvatarInfo($email, $width = 80, $path = 'image/', $secure = false);
}
