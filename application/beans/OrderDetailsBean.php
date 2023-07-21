<?php
namespace beans;
class OrderDetailsBean  extends ResponseBean {

    /**
     * @var integer
     */
    public $canGetDriverLocation;
    public $thankYouMsg;

    /**
     * @var integer
     */
    public $canPinLocation;

    /**
     * @var integer
     */
    public $currentState;

    /**
     * @var DriverDetailsBean
     */
    public $driverDetails;

    /**
     * @var integer
     */
    public $driverLocationRefreshRate;

    /**
     * @var string
     */
    public $scheduledDateText;

    /**
     * @var string[]
     */
    public $feedbackOptions;

    /**
     * @var string
     */
    public $feedbackSubtitle;

    /**
     * @var string
     */
    public $feedbackTitle;


    /**
     * @var string
     */
    public $orderNumber;

    /**
     * @var string
     */
    public $fromEddressCode;

    public $price;


    public $priceTag;


    /**
     * @var integer
     */
    public $isLocationPinned;

    /**
     * @var integer
     */
    public $orderClosed;

    /**
     * @var string
     */
    public $customerImageUrl;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $companyLogo;


    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $scheduledDate;

    /**
     * @var integer
     */
    public $showTime;

    /**
     * @var string
     */
    public $showFeedbackForm;

    /**
     * @var string[]
     */
    public $states;

    /**
     * @var OrdersTaskBean[]
     */
    public $tasks;


    /**
     * @var string
     */
    public $subtitle;


    public $customerEddress;
    /**
     * @var string
     */
    public $title;


    /**
     * @var string
     */
    public $toEddressCode;

    /**
     * @var string
     */
    public $unpinnedSubtitle;

    /**
     * @var string
     */
    public $unpinnedTitle;


}