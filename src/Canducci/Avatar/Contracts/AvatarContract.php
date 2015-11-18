<?php namespace Canducci\Avatar\Contracts;

abstract class AvatarContract {

    protected $avatarEmail;

    protected $avatarProperty;

    protected $avatarSave;

    abstract function getAvatarInfo($email, $width = 80, $path = 'image/', $secure = false);

    abstract function getAvatarProfileData($email);

    protected function exist_get_default($data, $name, $default = null)
    {
        if (array_key_exists($name, $data))
        {

            return $data[$name];
            
        }

        return $default;
    }

    protected function get_contents($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $data = curl_exec($ch);

        curl_close($ch);

        return $data;
    }
}
