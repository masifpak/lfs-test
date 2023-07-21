<?php
/**
 * Created by PhpStorm.
 * User: JKAADI
 * Date: 6/25/15
 * Time: 3:18 PM
 */

namespace beans;

class AddressBean extends ResponseBean {

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $code;
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
     * @var CheckpointBean[]
     */
    public $checkpoints;

}