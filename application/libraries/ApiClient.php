<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ApiClient {

    const URL = API_URL;

    const APIUSERNAME = 'application';
    const APIPASSWORD = 'HKQ7GEqHUrDfXsXRHga2thsqx3fhsv63KrExs7M2UG8JD6J59UWMPKcH7f6sXTVp';

    protected static function getBasicAuth(){
        return array('auth' => new Requests_Auth_Basic(array(self::APIUSERNAME, self::APIPASSWORD)));
    }
    protected static function getJWTAuth(){
        return array('Authorization' => 'eyJhbGciOiJIUzM4NCJ9.eyJzdWIiOiJhcHBsaWNhdGlvbiIsInVpZCI6IjZzanJXMFNaVEF5UENBVGxWM01LaHciLCJyb2xlcyI6WyJNQVJLRVRQTEFDRSIsIkFETUlOIiwiQVBJX1VTRVIiXSwiYXBpVHlwZSI6IlBPUlRBTCIsInRhZ3MiOlsiQVBJX1VTRVIiXSwiaWF0IjoxNjY2NzM1Njk4LCJ0ZW5hbnQiOiJRSDBWM2stNFE2V19rOXNnY0tuWWhRIiwidmVyc2lvbiI6MX0.0MWaKhtUku8XAZ_4eARPLvyoslt2VIaRrCeuNJc6VgVYgbQxCv6a_sG38Avuv_H3');
    }
    protected static function getJsonHeaders(){
        return array('Content-Type' => 'application/json');
    }

    public static function loadEddress($code){

        $data = ['code'=>$code];

        $apiroute = self::URL. "findEddress";
        $process = curl_init($apiroute);
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($process, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($process, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($process);
        curl_close($process);
        return $response;
    }

    public static function findEddress($lat,$lon,$searchString)
    {
        $apiroute = "findEddress";

        $data = array(
            'lat' => $lat,
            'lon' => $lon,
            'code' => $searchString
        );

        $options = self::getBasicAuth();
        $options["timeout"] = 60;
        $options["connect_timeout"] = 60;
        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),$options);
        return $response;
    }

    public static function createBusinessEddress($username,$password,$idUser,$lat,$lon,$phoneCountryCode,$phoneCountryId,$name,$country,$state,$city,$street,$building,$floor,$phone,$moreinfo,$unit,$postalcode)
    {
        $apiroute = "createEddress/";

        $data = array(
            'username' => $username,
            'password' => $password,
            'idUser' => $idUser,
            'privacy' => 2,
            'type' => 2,
            'phoneCountryCode' => $phoneCountryCode,
            'phoneCountryId' => $phoneCountryId,
            'lat' => $lat,
            'lon' => $lon,
            'countryName' => $country,
            'state' => $state,
            'city' => $city,
            'street' => $street,
            'building' => $building,
            'floor' => $floor,
            'phoneNumber' => $phone,
            'additionalInfo' => $moreinfo,
            'unit' => $unit,
            'postalCode' => $postalcode,
            'name' => $name
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function generateUserPassword($email)
    {
        $apiroute = "generateUserPassword";

        $data = array(
            'username' => $email
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function loginBusinessUser($username,$password)
    {
        $apiroute = "loginBusinessUser";

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function changeUserPassword($username,$password,$newpassword)
    {
        $apiroute = "changeUserPassword";

        $data = array(
            'username' => $username,
            'password' => $password,
            'newpassword' => $newpassword
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function listUserBusinesses($username,$password)
    {
        $apiroute = "listUserBusinesses";

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function loadBusinessInfo($username,$password,$id)
    {
        $apiroute = "loadBusinessInfo";

        $data = array(
            'username' => $username,
            'password' => $password,
            'id' => $id
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function addNewBusiness($username,$password,$fullName,$image)
    {
        $apiroute = "addNewBusiness";

        $data = array(
            'username' => $username,
            'password' => $password,
            'fullName' => $fullName,
            'image' => $image
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function moveBusinessEddress($username,$password,$code,$id)
    {
        $apiroute = "moveBusinessEddress";

        $data = array(
            'username' => $username,
            'password' => $password,
            'eddressCode' => $code,
            'id' => $id
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function editBusinessEddress($username,$password,$id,$fullName,$businessImage,$eddressParams)
    {
        $apiroute = "editBusinessEddress";

        $data = array(
            'username' => $username,
            'password' => $password,
            'id' => $id,
            'fullName' => $fullName,
            'image' => $businessImage,
            'eddressParams' => $eddressParams
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function validatePhone($phoneNumber)
    {
        $apiroute = "validatePhone";

        $data = $phoneNumber;

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), $data,self::getBasicAuth());
        return $response;
    }

    public static function validateOldEddress($oldEddress)
    {
        $apiroute = "validateOldEddress";

        $data = $oldEddress;

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), $data,self::getBasicAuth());
        return $response;
    }

    public static function validateNewEddress($newEddress)
    {
        $apiroute = "validateNewEddress";

        $data = $newEddress;

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), $data,self::getBasicAuth());
        return $response;
    }

    public static function changeEddressCode($phonenumber,$oldEddress,$newEddress,$coupon)
    {
        $apiroute = "changeEddressCodeRequest";

        $data = array(
            'phonenumber' => $phonenumber,
            'oldEddress' => $oldEddress,
            'newEddress' => $newEddress,
            'coupon' => $coupon
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data),self::getBasicAuth());
        return $response;
    }

    public static function getBusinessEddresses()
    {
        $apiroute = "getBusinessEddresses";
        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), null, self::getBasicAuth());
        return $response;
    }

    public static function getOrderDetails($orderNumber)
    {
        $apiroute = "api/v1/weborders/";

        $response = Requests::get(self::URL.$apiroute.$orderNumber, self::getJsonHeaders());

        return $response;
    }

    public static function pinUserLocation($lat,$lon,$orderNumber)
    {
        $apiroute = "api/v1/weborders/pinUserLocation";

        $data = array(
            'lat' => $lat,
            'lon' => $lon,
            'orderNumber' => $orderNumber
        );

        $response = Requests::post(self::URL.$apiroute, self::getJsonHeaders(), json_encode($data), self::getBasicAuth());
        return $response;
    }

    public static function getWorkerLocation($orderNumber,$workerUid)
    {
        $apiroute = "api/v1/weborders/workerLocation/";

        $response = Requests::get(self::URL.$apiroute.$orderNumber.'/'.$workerUid, self::getJsonHeaders(), self::getBasicAuth());
        return $response;
    }

    public static function submitFeedback($rating,$feedbackMessage,$orderNumber)
    {
        $apiroute = "api/v1/weborders/submitFeedback/";

        $data = array(
            'rating' => $rating,
            'feedbackMessage' => $feedbackMessage
        );

        $response = Requests::post(self::URL.$apiroute.$orderNumber, self::getJsonHeaders(), json_encode($data), self::getBasicAuth());
        return $response;
    }
}

?>
