<?php namespace Canducci\Avatar\Contracts;

abstract class AvatarProfileDataContract {

    protected $id;

    protected $hash;

    protected $requestHash;

    protected $profileUrl;

    protected $preferredUsername;

    protected $thumbnailUrl;

    protected $photos;

    protected $name;

    protected $profileBackground;

    protected $accounts;

    protected $urls;

    protected $ims;

    protected $emails;

    protected $phoneNumbers;

    protected $aboutMe;

    protected $displayName;

    abstract function getUrls();

    abstract function getIms();

    abstract function getEmails();

    abstract function getPhoneNumbers();

    abstract function getAboutMe();

    abstract function getDisplayName();

    abstract function getProfileBackground();

    abstract function getName();

    abstract function getAccounts();

    abstract function getId();

    abstract function getHash();

    abstract function getRequestHash();

    abstract function getProfileUrl();

    abstract function getPreferredUsername();

    abstract function getThumbnailUrl();

    abstract function getPhotos();

    abstract function getArray();
    
    abstract function getJson();

}