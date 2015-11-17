<?php

use Canducci\Avatar\AvatarRating;
use Canducci\Avatar\AvatarImageExtension;

if (!function_exists('avatar')) {

    function avatar($email, $width = 80, $path = 'image/', $secure = false, $avatarRating = AvatarRating::G, $avatarImageExtension = AvatarImageExtension::Jpg)
    {
        $avatar_help = new Canducci\Avatar\Avatar();

        return $avatar_help->getAvatarInfo($email, $width, $path, $secure, $avatarRating, $avatarImageExtension);
    }

}