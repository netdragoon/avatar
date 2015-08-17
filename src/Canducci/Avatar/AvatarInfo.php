<?php

namespace Canducci\Avatar;

class AvatarInfo {

    private $url;
    private $hash;
    private $path;

    const Url = 'http://www.gravatar.com/avatar/';

    public function __construct($hash, $width = 80, $path = 'image/') {

        $this->path = $path;
        $this->hash = $hash;
        $this->url = sprintf('%s%s.jpg?s=%s', AvatarInfo::Url, $hash, $width);
        $this->saveImage();
        
    }

    public function getPath() {

        return $this->path;
    }
    
    public function getUrl() {

        return $this->url;
    }

    public function getHash() {

        return $this->hash;
    }

    public function getTagImage() {

        return sprintf('<img src="/%s%s.jpg" />', $this->path, $this->hash);
    }

    public function getImage() {

        return sprintf('%s.jpg', $this->hash);
    }

    protected function saveImage() {

        $filename = sprintf('%s%s.jpg', $this->path, $this->hash);

        if (!file_exists($filename)) {
            $ch = curl_init($this->url);
            $fp = fopen($filename, 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);
        }
    }

}
