<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarSaveContract;

final class AvatarSave extends AvatarSaveContract {

    public function __construct(AvatarProperty $avatarProperty)
    {
        $this->avatarProperty = $avatarProperty;
    }

    public function save()
    {
        $filename = $this->avatarProperty->getFileName();
        
        if (!file_exists($filename) && $this->avatarProperty->exists()) {
        
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
