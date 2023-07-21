<?php
/**
 * Created by PhpStorm.
 * User: JKAADI
 * Date: 6/25/15
 * Time: 3:18 PM
 */

namespace beans;

class BusinessResponseBean extends ResponseBean {

    /**
     * @var UserBean
     */
    public $businessUser;

    /**
     * @var EddressBean[]
     */
    public $businessEddresses;

    /**
     * @var string[]
     */
    public $ownerEddresses;


}