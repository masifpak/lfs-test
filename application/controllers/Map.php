<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('map/html');
		$this->load->view('map/header');
		$this->load->view('map/map');
		$this->load->view('map/footer');
	}

    public function loadeddress($code)
    {
        if ($code != '')
        {
			$code = str_replace('-','',$code);
            $response = ApiClient::loadEddress($code);
            $data = $this->jsonmapper->map(json_decode($response), new beans\FindEddressResponseBean());

            if($data->eddressList != null)
            {
                $eddress = $data->eddressList[0];
                $eddressData = new beans\SearchEddressResponseBean();
                $eddressData->eddresss = new beans\EddressBean();
                $eddressData->eddresss = $eddress;

                if($eddress != null && $eddress->hidden != null && $eddress->hidden == "1")
                {
//                    $eddressData->eddresss->code = null;
                    $eddressData->eddresss->userFullName = "This eddress is private";
                    $eddressData->eddresss->userImageURL = base_url()."images/lockedon.png";
//                    $eddressData->eddresss->phoneNumber = "";
                }
//                else{
//                    $eddressData->eddresss = $eddress;
//                }

                if($eddressData->eddresss->privacy != 2 && strlen($code)==20)
                {
                    $eddressData->eddresss->privateCode = $code;
                }

                $data = $eddressData;
            }

            $this->load->view('map/html',$data);
            $this->load->view('map/header',$data);
            $this->load->view('map/map',$data);
            $this->load->view('map/footer');
        }
    }

    public function get_business_eddresses() {

        if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
        {
            $response = ApiClient::getBusinessEddresses();
            $data = $this->jsonmapper->map(json_decode($response), new beans\FindEddressResponseBean());

            if($data->eddressList != null)
            {
                echo json_encode ($data);
            }else{
                echo 0;
            }
        } else {
            // ignore....
        }
    }

    public function user_data_submit() {

        $code = $this->input->post('name');

        if ($code != '')
        {
            $response = ApiClient::loadEddress($code);
            $data = $this->jsonmapper->map(json_decode($response), new beans\FindEddressResponseBean());

            if($data->eddressList != null)
            {
                $eddress = $data->eddressList[0];
                $eddressData = new beans\SearchEddressResponseBean();
                $eddressData->eddresss = new beans\EddressBean();
                $eddressData->message = $data->message;

                if($eddress != null && $eddress->hidden)
                {
                    $eddressData->eddresss->code = null;
                    $eddressData->eddresss->userFullName = "This eddress is private";
                    $eddressData->eddresss->userImageURL = base_url()."images/lockedon.png";
                }else{
                    $eddressData->eddresss = $eddress;
                }
                $data = $eddressData;

                echo json_encode ($data);
            }else{
                echo 0;
            }
        }else{
            echo 0;
        }
    }

    public function user_search() {

        //$code = $this->input->post('term');
        $code = trim($_GET['term']);
        if ($code != '')
        {
            $response = ApiClient::loadEddress($code);
            $data = $this->jsonmapper->map(json_decode($response), new beans\FindEddressResponseBean());

//            if($data->eddressList != null)
//            {
//                $eddress = $data->eddressList[0];
//                $eddressData = new beans\SearchEddressResponseBean();
//                $eddressData->eddresss = new beans\EddressBean();
//                $eddressData->message = $data->message;
//
//                if($eddress != null && $eddress->hidden)
//                {
//                    $eddressData->eddresss->code = null;
//                    $eddressData->eddresss->userFullName = "This eddress is private";
//                    $eddressData->eddresss->userImageURL = base_url()."images/lockedon.png";
//                }else{
//                    $eddressData->eddresss = $eddress;
//                }
//                $data = $eddressData;
//
//                echo json_encode ($data);
//            }else{
//                echo 0;
//            }
            foreach ($data->eddressList as $eddress)
            {
                $eddress->value = $eddress->code;
                $eddress->label = '<img width="25" height="30" src="http://www.eddress.co/images/marker_big4.png"/><span>'.$eddress->name.'<br>'.$eddress->code.'</span>';
            }

            echo json_encode ($data->eddressList);
        }else{
            echo 0;
        }
    }

    public function send_share_email()
    {
        $this->load->helper('email');
        $this->load->library('email');

        $emailName = $this->input->post('emailName');
        $emailFrom = $this->input->post('emailFrom');
        $emailTo = $this->input->post('emailTo');
        $emailBody = $this->input->post('emailBody');
        $emailUrl = $this->input->post('email_eddress_code');

        $message = $emailName." has sent you the following eddress to share a location. <br><br> Click on the link below to explore this location on the map:<br>";
        $message .= "<b>".$emailUrl."</b><br><br>";
        $message .= $emailName." also said the following:<br><br>";
        $message .= $emailBody;

        if ($emailFrom != '' && $emailTo != '')
        {
            //send php email
            if (valid_email($emailTo)){
                // compose email
                $this->email->set_mailtype("html");
                $this->email->from("no-reply@myeddress.com" , "Eddress");
                $this->email->to($emailTo);
                $this->email->reply_to($emailFrom);
                $this->email->subject("An eddress has been shared with you!");
                $this->email->message($message);

                // try send mail
                if (!$this->email->send())
                {
                    //error
                    echo 0;
                }
                // successfull message
                    echo 1;
            } else {
                echo 0;
            }
        }else{
            echo 0;
        }
    }

    public function search()
    {
        $code = $this->input->post('eddress_code');

        if ($code != '')
        {
            $response = ApiClient::loadEddress($code);
            $data = $this->jsonmapper->map(json_decode($response), new beans\SearchEddressResponseBean());

            $this->load->view('map/html',$data);
            $this->load->view('map/header',$data);
            $this->load->view('map/map',$data);
            $this->load->view('map/footer');
        }
    }
}
