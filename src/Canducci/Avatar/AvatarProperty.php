<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarPropertyContract;


class AvatarProperty extends AvatarPropertyContract {

    const AvatarUrl = 'http://www.gravatar.com/avatar/';
    const AvatarUrlSecure = 'https://secure.gravatar.com/avatar';
    
    public function __construct(AvatarEmail $avatarEmail, $width = 80, $path = 'image/', $secure = false)
    {
        $format = '%s%s.jpg?s=%s&d=404';
        $this->validWidth($width);
        $this->validPath($path);
        $this->secure = $secure;
        $this->avatarEmail = $avatarEmail;
        $this->url[0] = sprintf($format, self::AvatarUrl, $avatarEmail->getHash(), $width);
        $this->url[1] = sprintf($format, self::AvatarUrlSecure, $avatarEmail->getHash(), $width);
        $this->fileName = sprintf('%s%s-%s.jpg', 
                        $this->getPath(), 
                        $this->getAvatarEmail()->getHash(),
                        $this->getWidth());
        
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getUrl()
    {
        return (!$this->secure) ? 
            $this->url[0] : 
            $this->url[1];
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getAvatarEmail()
    {
        return $this->avatarEmail;
    }
    
    public function getFileName()
    {
        return $this->fileName;
    }

    public function exists()
    {
        $headers = get_headers($this->getUrl());
        return (!((boolean)(str_contains($headers[0], '404'))));
    }
    

}
