<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {

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

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
	}

	public function index()
	{
		if (isset($this->session->userdata['logged_in']))
		{
			$username = ($this->session->userdata['logged_in']['username']);
			$password = ($this->session->userdata['logged_in']['password']);



			$listBusinessresponse = ApiClient::listUserBusinesses($username,$password);
			$listBusinessData = $this->jsonmapper->map(json_decode($listBusinessresponse->body), new beans\BusinessesResponseBean());

			if($listBusinessData->message == "valid")
			{
				$this->load->view('business/header');
				$this->load->view('business/businesslist',$listBusinessData);
				$this->load->view('business/footer');
			}
		} else {
			redirect('business/login');
		}
	}

	public function login()
	{
		if (isset($this->session->userdata['logged_in']))
		{
			redirect('business');
		}

		$username = $this->input->post('textinput_username');
		$password = $this->input->post('passwordinput_password');

		if ($username != '' && $password != '') {
			$response = ApiClient::loginBusinessUser($username,$password);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\ResponseBean());

			if($data->message == "valid")
			{
				$session_data = array(
					'username' => $username,
					'password' => $password
				);

				$this->session->set_userdata('logged_in', $session_data);

				redirect('business');
			}else{
				$this->load->view('business/header');
				$this->load->view('business/login');
				$this->load->view('business/footer');
			}
		}else{
			$this->load->view('business/header');
			$this->load->view('business/login');
			$this->load->view('business/footer');
		}
	}

	public function logout() {

		$sess_array = array(
			'username' => '',
			'password' => ''
		);

		$this->session->unset_userdata('logged_in', $sess_array);

		redirect('business');
	}

	public function add()
	{
		$fullName = $this->input->post('businessFullName');
		$businessImage = '';

		if(isset($_FILES['businessImage']) && $_FILES['businessImage']['size'] > 0)
		{
			$errors=array();
			$allowed_ext = array('jpg','jpeg','png','gif');
			$file_name = $_FILES['businessImage']['name'];
			$tmp_ext = explode('.', $file_name);
			$file_ext = strtolower(end($tmp_ext));
			$file_size = $_FILES['businessImage']['size'];
			$file_tmp = $_FILES['businessImage']['tmp_name'];

			$type = pathinfo($file_tmp, PATHINFO_EXTENSION);
			$data = file_get_contents($file_tmp);
			$base64 = base64_encode($data);

			if(in_array($file_ext,$allowed_ext) === false)
			{
				$errors[]='Extension not allowed';
			}

//			if($file_size > 2097152)
//			{
//				$errors[]= 'File size must be under 2mb';
//
//			}
			if(empty($errors))
			{
				$businessImage = $base64;
			}
			else
			{
				foreach($errors as $error)
				{
					echo $error , '<br/>';
				}
			}

		}

		if ($fullName != '' && isset($this->session->userdata['logged_in']))
		{
			$username = ($this->session->userdata['logged_in']['username']);
			$password = ($this->session->userdata['logged_in']['password']);
			$response = ApiClient::addNewBusiness($username,$password,$fullName,$businessImage);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\BusinessResponseBean());

			if ($data->message == "valid")
			{
				redirect('business/edit/'.$data->businessUser->id);
			} else {
				redirect('business');
			}
		}else{
			redirect('business');
		}
	}

	public function edit($id)
	{
		if (isset($this->session->userdata['logged_in']))
		{
			$username = ($this->session->userdata['logged_in']['username']);
			$password = ($this->session->userdata['logged_in']['password']);

			$response = ApiClient::loadBusinessInfo($username, $password, $id);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\BusinessResponseBean());

			if ($data->message == "valid") {
				$this->load->view('business/header');
				$this->load->view('business/businessedit',$data);
				$this->load->view('business/footer');
			} else {
				redirect('business');
			}
		}
	}

	public function createeddress()
	{
		if (isset($this->session->userdata['logged_in']))
		{
			$username = ($this->session->userdata['logged_in']['username']);
			$password = ($this->session->userdata['logged_in']['password']);

			$businessId = $this->input->post('businessId');
			$lat = $this->input->post('lat');
			$lon = $this->input->post('lon');
			$phoneCountryCode = $this->input->post('phoneCountryCodeInput');
			$country = $this->input->post('countryTextinput');
			$countryShortCode = $this->input->post('countryShortTextinput');
			$state = $this->input->post('stateTextinput');
			$city = $this->input->post('cityTextinput');
			$street = $this->input->post('streetTextinput');
			$building = $this->input->post('buildingTextinput');
			$floor = $this->input->post('floorTextinput');
			$phone = $this->input->post('phoneTextinput');
			$moreinfo = $this->input->post('moreinfoTextinput');
			$unit = $this->input->post('unitTextinput');
			$postalcode = $this->input->post('postalcodeTextinput');
			$name = $this->input->post('nameTextinput');

			if($businessId!= '')
			{
				if($lat != '' && $lon != '')
				{
					$phoneCountryId = self::$countryList[$countryShortCode];
					$phone = str_replace($phoneCountryCode,"",$phone);
					$response = ApiClient::createBusinessEddress($username,$password,$businessId,$lat,$lon,$phoneCountryCode,$phoneCountryId,$name,$country,$state,$city,$street,$building,$floor,$phone,$moreinfo,$unit,$postalcode);
					$data = $this->jsonmapper->map(json_decode($response->body), new beans\AddressBean());

					if ($data->message == "valid")
					{
						redirect('business/edit/'.$businessId);
					} else {
						redirect('business');
					}
				}else{
					$data["businessId"] = $businessId;
					$this->load->view('business/header');
					$this->load->view('business/createeddress',$data);
					$this->load->view('business/footer');
				}
			}else{
				redirect('business');
			}
		} else {
			redirect('business');
		}
	}

	public function moveEddress($id)
	{
		if (isset($this->session->userdata['logged_in'])) {
			$username = ($this->session->userdata['logged_in']['username']);
			$password = ($this->session->userdata['logged_in']['password']);

			$code = $this->input->post('owner_eddresses');

			$response = ApiClient::moveBusinessEddress($username, $password, $code, $id);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\BusinessResponseBean());

			if ($data->message == "valid") {
				redirect('business/edit/'.$id);
			} else {
				redirect('business');
			}
		}
	}
	public function saveBusinessChanges()
	{
		if (isset($this->session->userdata['logged_in'])) {
			$username = ($this->session->userdata['logged_in']['username']);
			$password = ($this->session->userdata['logged_in']['password']);
			$fullName = $this->input->post('businessFullName');
			$ownerId = $this->input->post('businessId');
			$items = $this->input->post('item');
			$businessImage = '';

			if(isset($_FILES['businessImage']) && $_FILES['businessImage']['size'] > 0)
			{
				$errors=array();
				$allowed_ext = array('jpg','jpeg','png','gif');
				$file_name = $_FILES['businessImage']['name'];
				$tmp_ext = explode('.', $file_name);
				$file_ext = strtolower(end($tmp_ext));
//				$file_size = $_FILES['businessImage']['size'];
				$file_tmp = $_FILES['businessImage']['tmp_name'];
//				$type = pathinfo($file_tmp, PATHINFO_EXTENSION);
				$data = file_get_contents($file_tmp);
				$base64 = base64_encode($data);

				if(in_array($file_ext,$allowed_ext) === false)
				{
					$errors[]='Extension not allowed';
				}

//			if($file_size > 2097152)
//			{
//				$errors[]= 'File size must be under 2mb';
//
//			}
				if(empty($errors))
				{
					$businessImage = $base64;
				}
				else
				{
					foreach($errors as $error)
					{
						echo $error , '<br/>';
					}
				}

			}

			$i=0;
			foreach ($items as $item)
			{
				$eddressParams[$i]["id"] = $item['id'];
				$eddressParams[$i]["name"] = $item['nameTextinput'];
				$eddressParams[$i]["countryName"] = $item['countryTextinput'];
				$eddressParams[$i]["state"] = $item['stateTextinput'];
				$eddressParams[$i]["city"] = $item['cityTextinput'];
				$eddressParams[$i]["street"] = $item['streetTextinput'];
				$eddressParams[$i]["building"] = $item['buildingTextinput'];
				$eddressParams[$i]["floor"] = $item['floorTextinput'];
				$eddressParams[$i]["phoneNumber"] = $item['phoneTextinput'];
				$eddressParams[$i]["additionalInfo"] = $item['moreinfoTextinput'];
				$eddressParams[$i]["unit"] = $item['unitTextinput'];
				$eddressParams[$i]["postalCode"] = $item['postalcodeTextinput'];
				$i++;
			}

			$response = ApiClient::editBusinessEddress($username, $password, $ownerId, $fullName,$businessImage, $eddressParams);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\BusinessResponseBean());

			if ($data->message == "valid") {
				redirect('business/edit/'.$ownerId);
			} else {
				redirect('business');
			}
		}
	}

	public function registerUser()
	{
		$email = $this->input->post('email');

		if ($email != '') {
			$response = ApiClient::generateUserPassword($email);
			$data = $this->jsonmapper->map(json_decode($response->body), new beans\ResponseBean());
			if($data->message == 'valid')
			{
				echo 1;
			}
			else{
				echo 0;
			}
		}
	}

	public function changepassword(){
		if (isset($this->session->userdata['logged_in']))
		{
			$this->load->view('business/header');
			$this->load->view('business/changepassword');
			$this->load->view('business/footer');
		}else{
			redirect('business');
		}
	}

	public function dochangepassword(){
		if (isset($this->session->userdata['logged_in']))
		{
			$errormsg = '';
			$username = ($this->session->userdata['logged_in']['username']);
			$password = ($this->session->userdata['logged_in']['password']);

			$oldpassword = $this->input->post('passwordinput_oldpassword');
			$newpassword = $this->input->post('passwordinput_newpassword');
			$confirmpassword = $this->input->post('passwordinput_confirmpassword');

			if($oldpassword != $password)
			{
				$errormsg = "Old password is wrong";
			}

			if($newpassword != $confirmpassword)
			{
				$errormsg = "Passwords do not match";
			}

			if($errormsg == '' && $oldpassword != '' && $newpassword != '' && $confirmpassword != '')
			{
				$response = ApiClient::changeUserPassword($username, $password, $newpassword);
				$data = $this->jsonmapper->map(json_decode($response->body), new beans\ResponseBean());

				if ($data->message == "valid") {
					$sess_array = array(
						'username' => '',
						'password' => ''
					);

					$this->session->unset_userdata('logged_in', $sess_array);

					$this->load->view('business/html');
					$this->load->view('business/header');
					$this->load->view('business/business');
					$this->load->view('business/footer');
				}else{
					$this->load->view('business/html');
					$this->load->view('business/header');
					$this->load->view('business/changepassword');
					$this->load->view('business/footer');
				}
			}else{
				$this->load->view('business/html');
				$this->load->view('business/header');
				$this->load->view('business/changepassword');
				$this->load->view('business/footer');
			}
		}
	}

	private static $countryList = array(
		'AF'=>1,
		'AL'=>2,
		'DZ'=>3,
		'AS'=>4,
		'AD'=>5,
		'AO'=>6,
		'AI'=>7,
		'AQ'=>8,
		'AG'=>9,
		'AR'=>10,
		'AM'=>11,
		'AW'=>12,
		'AU'=>13,
		'AT'=>14,
		'AZ'=>15,
		'BS'=>16,
		'BH'=>17,
		'BD'=>18,
		'BB'=>19,
		'BY'=>20,
		'BE'=>21,
		'BZ'=>22,
		'BJ'=>23,
		'BM'=>24,
		'BT'=>25,
		'BO'=>26,
		'BA'=>27,
		'BW'=>28,
		'BV'=>29,
		'BR'=>30,
		'IO'=>31,
		'BN'=>32,
		'BG'=>33,
		'BF'=>34,
		'BI'=>35,
		'KH'=>36,
		'CM'=>37,
		'CA'=>38,
		'CV'=>39,
		'KY'=>40,
		'CF'=>41,
		'TD'=>42,
		'CL'=>43,
		'CN'=>44,
		'CX'=>45,
		'CC'=>46,
		'CO'=>47,
		'KM'=>48,
		'CG'=>49,
		'CD'=>50,
		'CK'=>51,
		'CR'=>52,
		'CI'=>53,
		'HR'=>54,
		'CU'=>55,
		'CY'=>56,
		'CZ'=>57,
		'DK'=>58,
		'DJ'=>59,
		'DM'=>60,
		'DO'=>61,
		'EC'=>62,
		'EG'=>63,
		'SV'=>64,
		'GQ'=>65,
		'ER'=>66,
		'EE'=>67,
		'ET'=>68,
		'FK'=>69,
		'FO'=>70,
		'FJ'=>71,
		'FI'=>72,
		'FR'=>73,
		'GF'=>74,
		'PF'=>75,
		'TF'=>76,
		'GA'=>77,
		'GM'=>78,
		'GE'=>79,
		'DE'=>80,
		'GH'=>81,
		'GI'=>82,
		'GR'=>83,
		'GL'=>84,
		'GD'=>85,
		'GP'=>86,
		'GU'=>87,
		'GT'=>88,
		'GN'=>89,
		'GW'=>90,
		'GY'=>91,
		'HT'=>92,
		'HM'=>93,
		'VA'=>94,
		'HN'=>95,
		'HK'=>96,
		'HU'=>97,
		'IS'=>98,
		'IN'=>99,
		'ID'=>100,
		'IR'=>101,
		'IQ'=>102,
		'IE'=>103,
		'IL'=>104,
		'IT'=>105,
		'JM'=>106,
		'JP'=>107,
		'JO'=>108,
		'KZ'=>109,
		'KE'=>110,
		'KI'=>111,
		'KP'=>112,
		'KR'=>113,
		'KW'=>114,
		'KG'=>115,
		'LA'=>116,
		'LV'=>117,
		'LB'=>118,
		'LS'=>119,
		'LR'=>120,
		'LY'=>121,
		'LI'=>122,
		'LT'=>123,
		'LU'=>124,
		'MO'=>125,
		'MK'=>126,
		'MG'=>127,
		'MW'=>128,
		'MY'=>129,
		'MV'=>130,
		'ML'=>131,
		'MT'=>132,
		'MH'=>133,
		'MQ'=>134,
		'MR'=>135,
		'MU'=>136,
		'YT'=>137,
		'MX'=>138,
		'FM'=>139,
		'MD'=>140,
		'MC'=>141,
		'MN'=>142,
		'MS'=>143,
		'MA'=>144,
		'MZ'=>145,
		'MM'=>146,
		'NA'=>147,
		'NR'=>148,
		'NP'=>149,
		'NL'=>150,
		'AN'=>151,
		'NC'=>152,
		'NZ'=>153,
		'NI'=>154,
		'NE'=>155,
		'NG'=>156,
		'NU'=>157,
		'NF'=>158,
		'MP'=>159,
		'NO'=>160,
		'OM'=>161,
		'PK'=>162,
		'PW'=>163,
		'PS'=>164,
		'PA'=>165,
		'PG'=>166,
		'PY'=>167,
		'PE'=>168,
		'PH'=>169,
		'PN'=>170,
		'PL'=>171,
		'PT'=>172,
		'PR'=>173,
		'QA'=>174,
		'RE'=>175,
		'RO'=>176,
		'RU'=>177,
		'RW'=>178,
		'SH'=>179,
		'KN'=>180,
		'LC'=>181,
		'PM'=>182,
		'VC'=>183,
		'WS'=>184,
		'SM'=>185,
		'ST'=>186,
		'SA'=>187,
		'SN'=>188,
		'CS'=>189,
		'SC'=>190,
		'SL'=>191,
		'SG'=>192,
		'SK'=>193,
		'SI'=>194,
		'SB'=>195,
		'SO'=>196,
		'ZA'=>197,
		'GS'=>198,
		'ES'=>199,
		'LK'=>200,
		'SD'=>201,
		'SR'=>202,
		'SJ'=>203,
		'SZ'=>204,
		'SE'=>205,
		'CH'=>206,
		'SY'=>207,
		'TW'=>208,
		'TJ'=>209,
		'TZ'=>210,
		'TH'=>211,
		'TL'=>212,
		'TG'=>213,
		'TK'=>214,
		'TO'=>215,
		'TT'=>216,
		'TN'=>217,
		'TR'=>218,
		'TM'=>219,
		'TC'=>220,
		'TV'=>221,
		'UG'=>222,
		'UA'=>223,
		'AE'=>224,
		'GB'=>225,
		'US'=>226,
		'UM'=>227,
		'UY'=>228,
		'UZ'=>229,
		'VU'=>230,
		'VE'=>231,
		'VN'=>232,
		'VG'=>233,
		'VI'=>234,
		'WF'=>235,
		'EH'=>236,
		'YE'=>237,
		'ZM'=>238,
		'ZW'=>239
	);
}