<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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
		$data['pageTitle'] = 'Developers | API | eddress';
		$data['pageDesc'] = "eddress API section is coming soon. Please contact us if you think eddress is complimentary for your business.";

		$this->load->view('templates/html',$data);
		$this->load->view('templates/header');
		$this->load->view('api');
		$this->load->view('templates/footer');
	}

	public function send_email()
	{
		$this->load->helper('email');
		$this->load->library('email');

		$emailName = $this->input->post('emailName');
		$emailCompanyName = $this->input->post('emailCompanyName');
		$emailUser = $this->input->post('emailUser');
		$emailComment = $this->input->post('emailComment');

		$message = $emailName." requested to connect to eddress API. Find below the details: <br><br>";
		$message .= "<b>Name: ".$emailName."</b><br><br>";
		$message .= "<b>Company name: ".$emailCompanyName."</b><br><br>";
		$message .= "<b>User Email: ".$emailUser."</b><br><br>";
		$message .= "<b>Comment: ".$emailComment."</b><br><br>";

		// compose email
		$this->email->set_mailtype("html");
		$this->email->from("no-reply@myeddress.com" , "Eddress");
		$this->email->to("admin@myeddress.com");
		$this->email->subject("API Access Request");
		$this->email->message($message);

		// try send mail
		if (!$this->email->send())
		{
			//error
			echo 0;
		}else{
			// successfull message
			echo 1;
		}
	}
}
