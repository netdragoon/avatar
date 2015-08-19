<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarPropertyContract;

final class AvatarProperty extends AvatarPropertyContract {

    const AvatarUrl = 'http://www.gravatar.com/avatar/';
    const AvatarUrlSecure = 'https://secure.gravatar.com/avatar/';
    
    public function __construct(AvatarEmail $avatarEmail, $width = 80, $path = 'image/', $secure = false, $avatarRating = AvatarRating::G, $avatarImageExtension = AvatarImageExtension::Jpg)
    {
        $this->validWidth($width);

        $this->validPath($path);

        $this->avatarRating = $avatarRating;

        $this->avatarImageExtension = $avatarImageExtension;

        $format = '%s%s.%s?s=%s&d=404&r=%s';

        $this->secure = $secure;

        $this->avatarEmail = $avatarEmail;

        $this->url[0] = sprintf($format, self::AvatarUrl, $avatarEmail->getHash(), $this->getImageExtension(),$width, $this->getAvatarRating());

        $this->url[1] = sprintf($format, self::AvatarUrlSecure, $avatarEmail->getHash(), $this->getImageExtension(),$width, $this->getAvatarRating());

        $this->fileName = sprintf('%s%s-%s.%s',
                        $this->getPath(), 
                        $this->getAvatarEmail()->getHash(),
                        $this->getWidth(),
                        $this->getImageExtension());

    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getUrl()
    {
        return (!$this->secure) ? $this->url[0] : $this->url[1];
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

    public function getImageExtension()
    {
        return $this->avatarImageExtension;
    }

    public function getAvatarRating()
    {
        return $this->avatarRating;
    }

    public function exists()
    {
        $headers = get_headers($this->getUrl());

        return (!((boolean)(str_contains($headers[0], '404'))));
    }

}
