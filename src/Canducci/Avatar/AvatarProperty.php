<?php namespace Canducci\Avatar;

class AvatarProperty {
    
    private $width;
    private $path;
    private $url;
    
    const AvatarUrl = 'http://www.gravatar.com/avatar/';
    
    public function __construct($hash, $width = 80, $path = 'image/') {
        
        $this->width = $width;
        $this->path  = $path;
        $this->url   = sprintf('%s%s.jpg?s=%s', self::AvatarUrl, $hash, $width);        
    }
    
    public function getWidth() {
        return $this->width;
    }
    
    public function getUrl() {
        return $this->url;
    }

    public function getPath() {
        return $this->path;
    }
    
}