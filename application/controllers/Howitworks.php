<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Howitworks extends CI_Controller {

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
		$data['pageTitle'] = 'How it Works | eddress';
		$data['pageDesc'] = "Turn your address into a six characters code ABC-123, that's an eddress. Visit the website for more details.";

		$this->load->view('templates/html',$data);
		$this->load->view('templates/header');
		$this->load->view('howitworks');
		$this->load->view('templates/footer');
	}
}
