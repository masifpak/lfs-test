<?php
namespace beans;
class EddressBean extends ResponseBean {

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $idUser;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $voiceNote;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $locality;

    /**
     * @var string
     */
    public $floor;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $building;

    /**
     * @var string
     */
    public $info;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $street;

    /**
     * @var string
     */
    public $additionalInfo;

    /**
     * @var string
     */
    public $image1Url;

    /**
     * @var string
     */
    public $image2Url;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * Full name
     * @var integer
     */
    public $privacy;

    /**
     * @var integer
     */
    public $typeName;

    /**
     * @var string
     */
    public $typeFullName;

    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    /**
     * Full name
     * @var string
     */
    public $userFullName;

    /**
     * @var string
     */
    public $userEmail;

    /**
     * @var string
     */
    public $userImageURL;

    /**
     * @var string
     */
    public $userPhoneNumber;

    /**
     * @var string
     */
    public $distance;

    /**
     * @var CheckpointBean[]
     */
    public $checkPoints;

    /**
     * @var string
     */
    public $hidden;

    /**
     * @var string
     */
    public $privateCode;

    /**
     * @var integer
     */
    public $isVerified;

    /**
     * @var integer
     */
    public $isPinned;
}

?>