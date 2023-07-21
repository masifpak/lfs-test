<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
		$data['pageTitle'] = 'Order Tracking | eddress';
		$data['pageDesc'] = "Turn your address into a six characters code ABC-123, that's an eddress. Visit the website for more details.";

		$this->load->view('order/html',$data);
		$this->load->view('order/header');
		$this->load->view('order/order');
		$this->load->view('order/footer');
	}

	public function trackorder($orderNumber)
	{
		if($orderNumber != '')
		{
			$response = ApiClient::getOrderDetails($orderNumber);
			$dataObject = $this->jsonmapper->map(json_decode($response->body), new beans\OrderDetailsBean());

			$data['pageTitle'] = 'Order Tracking | eddress';
			$data['pageDesc'] = "Turn your address into a six characters code ABC-123, that's an eddress. Visit the website for more details.";

			$this->load->view('order/html', $data);

			if($dataObject->message == "INVALID")
			{
				$this->load->view('order/orderthankyou', $dataObject);
			}else {
				if ($dataObject->currentState >= 3) {
					if ($dataObject->orderClosed == 1) {
						$this->load->view('order/orderthankyou', $dataObject);
					} else {
						$this->load->view('order/ordercomplete', $dataObject);
					}
				} else {
					$this->load->view('order/order', $dataObject);
				}
			}

			$this->load->view('order/footer');
		}
	}

	public function pin_user_location()
	{
		$lat = $this->input->post('lat');
		$lon = $this->input->post('lon');
		$orderNumber = $this->input->post('orderNumber');

		$response = ApiClient::pinUserLocation($lat,$lon,$orderNumber);

		trackorder($orderNumber);
		echo 1;
	}

	public function send_feedback()
	{
		$rating = $this->input->post('rating');
		$feedback = $this->input->post('feedback');
		$orderNumber = $this->input->post('orderNumber');

		$response = ApiClient::SubmitFeedback($rating,$feedback,$orderNumber);

		echo 1;
	}

	public function get_worker_location()
	{
		$orderNumber = $this->input->post('orderNumber');
		$workerUid = $this->input->post('workerUid');

		$response = ApiClient::getWorkerLocation($orderNumber,$workerUid);

		echo $response->body;
	}

	public function trackorderAjax()
	{
		$orderNumber = $this->input->post('orderNumber');
		$response = ApiClient::getOrderDetails($orderNumber);

		echo $response->body;
	}
		
	public function get_eta_timezone()
	{
		$eta = "N/A";

		$scheduledDate = $this->input->post('scheduledDate');
		$timezoneOffset = $this->input->post('timezone');
		$showTime = $this->input->post('showTime');

		$today = new DateTime(); // This object represents current date/time
		$today->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

		$scheduledDate = $scheduledDate / 1000;

		$etadate = new DateTime("@$scheduledDate");
		if($timezoneOffset > 0){
			$hoursToAdd = 'PT'.$timezoneOffset.'H';
			$etadate->add(new DateInterval($hoursToAdd));
		}else{
			$hoursToAdd = 'PT'.-$timezoneOffset.'H';
			$etadate->sub(new DateInterval($hoursToAdd));
		}

		$match_date = clone $etadate;
		$match_date->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

		$diff = $today->diff( $match_date );
		$diffDays = (integer)$diff->format( "%R%a" ); // Extract days count in interval

		if($diffDays == 0) // today ?
		{
			if($showTime)
			{
				$eta = $etadate->format('h:i A');
			}else{
				$eta = "Today";
			}
		}else{
			if($showTime)
			{
				$eta = $etadate->format('M d, h:i A');
			}else{
				$eta = $etadate->format('M d');
			}
		}

		echo json_encode($eta);
	}
}
