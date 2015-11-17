<?php namespace Canducci\Avatar\Contracts;

use Exception;

abstract class AvatarEmailContract {

    protected $email;

    abstract function getEmail();

    abstract function getHash();

    protected function valid($email = null)
    {

        if (is_null($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            throw new Exception('Email invalid...');

        }

        $this->email = $email;
    }

}