<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarContract;

final class Avatar extends AvatarContract {

    public function getAvatarInfo($email, $width = 80, $path = 'image/', $secure = false, $avatarRating = AvatarRating::G, $avatarImageExtension = AvatarImageExtension::Jpg)
    {

        $this->avatarEmail = new AvatarEmail($email);

        $this->avatarProperty = new AvatarProperty($this->avatarEmail, $width, $path, $secure, $avatarRating, $avatarImageExtension);

        $this->avatarSave = new AvatarSave($this->avatarProperty);

        $this->avatarSave->save();

        return new AvatarInfo($this->avatarEmail, $this->avatarProperty);

    }

    function getAvatarProfileData($email)
    {
        $this->avatarEmail = new AvatarEmail($email);

        $ret  = $this->get_contents(sprintf('https://www.gravatar.com/%s.json', $this->avatarEmail->getHash()));

        $data = json_decode($ret, true);

        $data = $data['entry'][0];

        return new AvatarProfileData
        (
            $this->exist_get_default($data,'id', 0),
            $this->exist_get_default($data,'hash',0),
            $this->exist_get_default($data,'requestHash',0),
            $this->exist_get_default($data,'profileUrl'),
            $this->exist_get_default($data,'preferredUsername'),
            $this->exist_get_default($data,'thumbnailUrl'),
            $this->exist_get_default($data,'photos', array()),
            $this->exist_get_default($data,'name'),
            $this->exist_get_default($data,'profileBackground'),
            $this->exist_get_default($data,'accounts',array()),
            $this->exist_get_default($data,'urls', array()),
            $this->exist_get_default($data,'ims', array()),
            $this->exist_get_default($data,'emails', array()),
            $this->exist_get_default($data,'phoneNumbers', array()),
            $this->exist_get_default($data,'aboutMe'),
            $this->exist_get_default($data,'displayName')
        );

    }

}
