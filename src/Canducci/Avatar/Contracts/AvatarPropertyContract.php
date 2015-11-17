<?php namespace Canducci\Avatar\Contracts;

use Exception;

abstract class AvatarPropertyContract {

    protected $width;

    protected $path;

    protected $secure;

    protected $url = array();

    protected $avatarEmail;

    protected $fileName;

    protected $avatarRating;

    protected $avatarImageExtension;

    abstract function getWidth();

    abstract function getUrl();

    abstract function getPath();

    abstract function getAvatarEmail();

    abstract function getImageExtension();

    abstract function getAvatarRating();

    abstract function getFileName();

    abstract function exists();

    protected function validWidth($width)
    {

        if (is_null($width) || (is_numeric($width) === false)) {

            throw new Exception('Number requerid ($width) or Invalid');

        }

        $this->width = $width;
    }

    protected function validPath($path)
    {

        if (is_null($path) || is_dir($path) === false){

            throw new Exception('Path requerid ($path) or Invalid');

        }

        $this->path = $path;

    }
}