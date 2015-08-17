<?php

if (!function_exists('avatar'))
{
    function avatar($email, $width = 80)
    {
        
        $avatar_help = app('Canducci\Avatar\Contracts\AvatarContract');        
        
        return $avatar_help->getAvatarInfo($email,$width);
        
    }
}