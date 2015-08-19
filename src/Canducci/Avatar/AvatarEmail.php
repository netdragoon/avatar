<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarEmailContract;

final class AvatarEmail extends AvatarEmailContract {

    public function __construct($email)
    {
        $this->valid($email);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getHash()
    {
        return md5(strtolower(trim($this->email)));
    }

}