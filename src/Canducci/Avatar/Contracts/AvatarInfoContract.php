<?php namespace Canducci\Avatar\Contracts;

abstract class AvatarInfoContract {

    protected $avatarEmail;

    protected $avatarProperty;

    abstract function getPath();

    abstract function getHash();

    abstract function getWidth();

    abstract function getEmail();

    abstract function getTagImage();

    abstract function getImage();

    abstract function getArray();
    
    abstract function getJson();

}