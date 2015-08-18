<?php namespace Canducci\Avatar;

class AvatarSave
{
    private $avatarEmail;
    private $avatarProperty;
    
    public function __construct(AvatarEmail $avatarEmail, AvatarProperty $avatarProperty) {
     
        $this->avatarEmail    = $avatarEmail;
        
        $this->avatarProperty = $avatarProperty;
        
    }

    public function save()
    {
        $filename = sprintf('%s%s.jpg', 
                $this->avatarProperty->getPath(),
                $this->avatarEmail->getHash());
        
        if (!file_exists($filename)) {
        
            $ch = curl_init($this->avatarProperty->getUrl());
            
            $fp = fopen($filename, 'wb');
            
            curl_setopt($ch, CURLOPT_FILE, $fp);
            
            curl_setopt($ch, CURLOPT_HEADER, 0);
            
            curl_exec($ch);
            
            curl_close($ch);
            
            fclose($fp);
            
            
        }
    }
    
}