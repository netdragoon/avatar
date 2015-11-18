<?php

use Canducci\Avatar\AvatarRating;
use Canducci\Avatar\AvatarImageExtension;

if (!function_exists('avatar')) 
{

    function avatar($email, $width = 80, $path = 'image/', $secure = false, $avatarRating = AvatarRating::G, $avatarImageExtension = AvatarImageExtension::Jpg)
    {

        $a = app('Canducci\Avatar\Contracts\AvatarContract');
        
        return $a->avatarInfo($email, $width, $path, $secure, $avatarRating, $avatarImageExtension);

    }

}

if (!function_exists('profile')) 
{

    function profile($email)
    {

    	$p = app('Canducci\Avatar\Contracts\AvatarContract');
        
        return $p->profileInfo($email);

    }

}