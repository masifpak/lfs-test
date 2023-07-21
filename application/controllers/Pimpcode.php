<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpcode extends CI_Controller {

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
		$this->load->view('pimpeddress/pimpeddress');
	}

	public function validatephone(){
		$phonenumber = $this->input->post('phoneNumber');

		if($phonenumber != null)
		{
			$response = ApiClient::validatePhone($phonenumber);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\ResponseBean());

			if($data->message == "valid")
			{
				echo 1;
			}
			else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}

	public function validatecoupon(){
		$coupon = $this->input->post('couponcode');

		if (strcasecmp($coupon, "websmt2015") == 0) {
			echo 1;
		}
		else{
			echo 0;
		}
	}

	public function validateoldeddress(){
		$oldEddress = $this->input->post('oldEddress');

		if($oldEddress != null)
		{
			$response = ApiClient::validateOldEddress($oldEddress);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\ResponseBean());

			if($data->message == "valid")
			{
				echo 1;
			}
			else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}

	public function validateneweddress(){
		$newEddress = $this->input->post('newEddress');

		if($newEddress != null)
		{
			$response = ApiClient::validateNewEddress($newEddress);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\ResponseBean());

			if($data->message == "valid")
			{
				echo 1;
			}
			else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}

	public function submitChangeCode(){
		$phonenumber = $this->input->post('phoneNumber');
		$oldEddress = $this->input->post('oldEddress');
		$newEddress = $this->input->post('newEddress');
		$coupon = $this->input->post('couponcode');

		if($phonenumber != null && $oldEddress != null && $newEddress != null && $coupon != null)
		{
			$response = ApiClient::changeEddressCode($phonenumber,$oldEddress,$newEddress,$coupon);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\ResponseBean());

			if($data->message == "valid")
			{
				echo 1;
			}
			else{
				echo 0;
			}
		}else{
			echo 0;
		}


	}
}
