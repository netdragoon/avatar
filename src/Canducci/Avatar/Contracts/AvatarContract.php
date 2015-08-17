<?php namespace Canducci\Avatar\Contracts;

interface AvatarContract {
    public function getAvatarInfo($email, $width = 80);
}
