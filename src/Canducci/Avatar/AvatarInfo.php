<?php namespace Canducci\Avatar;

class AvatarInfo 
{
    private $url;
    private $hash;
    
    const Url = 'http://www.gravatar.com/avatar/';
    
    public function __construct($hash, $width = 80) {
        
        $this->hash = $hash;
        $this->url  = sprintf('%s%s?s=%s', AvatarInfo::Url, $hash, $width);
        
    }

    public function getUrl() {
        
        return $this->url;
        
    }

    public function getHash() {
        
        return $this->hash;
        
    }
    
    public function getTagImage(){
        
        return sprintf('<img src="%s" />', $this->url);
        
    }
}
