<?php namespace Canducci\Avatar;

use Canducci\Avatar\Contracts\AvatarProfileDataContract;

final class AvatarProfileData extends AvatarProfileDataContract {

    public function __construct($id,
                         $hash,
                         $requestHash,
                         $profileUrl,
                         $preferredUsername,
                         $thumbnailUrl,
                         $photos,
                         $name,
                         $profileBackground,
                         $accounts,
                         $urls,
                         $ims,
                         $emails,
                         $phoneNumbers,
                         $aboutMe,
                         $displayName)
    {
        $this->id = $id;
        $this->hash = $hash;
        $this->requestHash = $requestHash;
        $this->profileUrl = $profileUrl;
        $this->preferredUsername = $preferredUsername;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->photos = $photos;
        $this->name = $name;
        $this->profileBackground = $profileBackground;
        $this->accounts = $accounts;
        $this->urls = $urls;
        $this->ims = $ims;
        $this->emails = $emails;
        $this->phoneNumbers = $phoneNumbers;
        $this->aboutMe = $aboutMe;
        $this->displayName = $displayName;
    }

    public function getUrls()
    {
        return $this->urls;
    }

    public function getIms()
    {
        return $this->ims;
    }

    public function getEmails()
    {
        return $this->emails;
    }

    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function getProfileBackground()
    {
        return $this->profileBackground;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAccounts()
    {
        return $this->accounts;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function getRequestHash()
    {
        return $this->requestHash;
    }

    public function getProfileUrl()
    {
        return $this->profileUrl;
    }

    public function getPreferredUsername()
    {
        return $this->preferredUsername;
    }

    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    public function getPhotos()
    {
        return $this->photos;
    }

}