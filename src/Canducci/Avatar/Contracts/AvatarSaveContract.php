<?php namespace Canducci\Avatar\Contracts;


abstract class AvatarSaveContract {

    protected $avatarProperty;
    abstract function save();

}