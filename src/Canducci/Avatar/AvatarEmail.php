<?php

namespace Canducci\Avatar;

use Exception;

class AvatarEmail {

    private $email;

    public function __construct($email) {
        
        $this->valid($email);
        $this->email = $email;
        
    }

    public function getEmail() {

        return $this->email;
        
    }

    public function getHash() {

        return md5(strtolower(trim($this->email)));
        
    }

    private function valid($email) {
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            throw new Exception('Email invalid...');
            
        }
        
    }

}
