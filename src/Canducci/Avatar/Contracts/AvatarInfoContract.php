<?php namespace Canducci\Avatar\Contracts;


abstract class AvatarInfoContract {

    protected $avatarEmail;
    protected $avatarProperty;

    abstract function getPath();
    abstract function getHash();
    abstract function getWith();
    abstract function getEmail();
    abstract function getTagImage();
    abstract function getImage();

}