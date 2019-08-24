<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends MY_Controller {

 public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Curd_model');
        $this->load->library('session');
        $this->load->library('form_validation');
           
        $this->load->helper('form'); 
        $this->load->helper('url');
          $this->load->helper('common');
		date_default_timezone_set('Asia/Calcutta');

    } 
	public function index()
	{ 
		$data['session']= $this->session->userdata('userdata');
		if(!empty($data['session'])){
		$user_id = $data['session']['session']->user_id;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
		}
		
		$this->load->view('home',$data);
	}
	//login_register
   public function login_register()
	{
			$this->load->view('login-register');
	} 
	public function login()
	{
		$uniqueid = $this->input->post('unique_id');
		$password = $this->input->post('password');
		 $data['session'] = $this->Curd_model->getusers($uniqueid,$password);
		 if(!empty($data['session'])){
		 	$this->session->set_userdata('userdata',$data);
		 	$data['session']= $this->session->userdata('userdata');
		 	$user_id = $data['session']['session']->user_id;
			//$this->session->set_flashdata('flash_message','Login Successfully');	
			//print_r($this->session);
			$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('home',$data);
		//	$this->session->unset_userdata('flash_message');	
		 }
		else{
			 $this->session->set_flashdata('error_message','Invalid credentails');
			 $this->session->unset_userdata('userdata',$data);
			   redirect(site_url('home/login_register'), 'refresh');
			 
		}

	}
	
	public function savedlogin($id){
		 $data['session'] =  $this->Curd_model->ajax_getusers_by_userid($id);
 		
		 if(!empty($data['session'])){
		 	$this->session->set_userdata('userdata',$data);
		 
			  redirect(site_url(), 'refresh'); }
		else{
			 $this->session->set_flashdata('error_message','Invalid credentails');
			 $this->session->unset_userdata('userdata',$data);
			   redirect(site_url('home/login_register'), 'refresh');
			 
		}
		
		
		}
	public function register(){
	   
			
		   $lang = "en";
			$sigin_type = 0 ;

        // $this->form_validation->set_rules('first_name','First Name','required|max_length[20]|trim');            
        // $this->form_validation->set_rules('last_name','Last Name', 'required|max_length[20]|trim');            
        $this->form_validation->set_rules('unique_id','This', 'required|trim|callback_validate_email');                        
       
        // $this->form_validation->set_rules('password','Password', 'required|min_length[6]|trim');           
        // $this->form_validation->set_rules('cpassword', 'Confirm Password','required|matches[password]|trim');  
		
		// $url = "http://ip-api.com/json/"; 
  
		// // Initialize a CURL session. 
		// $ch = curl_init();  
		  
		// // Return Page contents. 
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		  
		// //grab URL and pass it to the variable. 
		// curl_setopt($ch, CURLOPT_URL, $url); 
		  
		// $result = curl_exec($ch); 
		  
		// echo $result;  
		// $location = file_get_contents('');
			// $json = json_decode($location,true);
			// print_r($location);
			
              if ($this->form_validation->run() == FALSE) {
               
           			$this->login_register();         
                }else{
			$first_name =  $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$unique_id = $this->input->post('unique_id'); 
			$day = $this->input->post('day'); 
			$month = $this->input->post('month'); 
			$year = $this->input->post('year'); 
			//$dateofbirth = $this->input->post('password'); 
			$gender = $this->input->post('gender'); 
			$password = $this->input->post('password'); 
			$token = rand(00000,999999);
			$verify_code = rand(00000,999999);
		
			$dateofbirth = $day." ".$month." ".$year;
				$data1 = array(
				'lang' => $lang,
				'sigin_type' => $sigin_type,
				'first_name' => $first_name,
				'last_name' => $last_name, 
				'unique_id' => $unique_id,
			    'password' => base64_encode($password),
				'dateofbirth' => $dateofbirth,
				'gender' => $gender,
				'token' => $token,				
				'creation' => date('Y-m-d H:i:s'),
				'verify_code'=>$verify_code,
				'city' =>  $this->input->post('city'),
				'state' => $this->input->post('state'),
				'country' => $this->input->post('country') ,
				'zipcode' =>  $this->input->post('zipcode')
				);
		  
			$add = $this->Curd_model->addusers($data1);
			//print_r($add);
			$data2 = array('user_id'=>$add);
			$array = array_merge($data2,$data1);
			     //  $this->session->set_flashdata('flash_message','Register Successfully'); 
			$data['session'] = (object)$array;
			$this->session->set_userdata('userdata',$data);
				 redirect(site_url(), 'refresh');
		  //  $this->load->view('home',$data);
                }
     

	}
	
	
	  public function validate_email($str){        
               
    $check_email = $this->Curd_model->checkEmailExistance($str);        
        if(!empty($check_email)){
            $this->form_validation->set_message("validate_email", 'This field is already in use.');            
            return FALSE; 
        }else{           
                return TRUE;        
            }           
    }     
    
    
	//add_listing
	 public function add_listing()
	{ 
		$this->load->view('create-list');
	}

	//forget-password
	 public function forget_password()
	{
		 $unique_id = $this->input->post('unique_id');
		 if($unique_id != ""){
		   
			$data['userdata'] = $this->Curd_model->getusers_by_id($unique_id);
			
			if(!empty($data['userdata'])){
			   //$this->session->set_flashdata('flash_message','Search Successfully');
			   $this->load->view('forget-password-popup',$data);
			}else{
				// $this->session->set_flashdata('error_message','Invalid Entry');
			     $this->load->view('forget-password');
			}
		}else{			
		
		$this->load->view('forget-password'); }
	
	}
	//user after login 
	 public function logout()
	{
		$this->session->unset_userdata('flash_message');	
		$this->session->unset_userdata('userdata');
		$ss = $this->session->sess_destroy();
		$this->load->view('logout');
		
	//	$this->session->set_flashdata('flash_message','Logout Successfully'); }
		
	}
	 //mail function
	 public function mail_detail($email,$code,$pass="")
	{ 	

		$subject  ="";
		$msg= "";
		//require   '/../../phpmailer/class.phpmailer.php';
		include(APPPATH.'third_party/phpmailer/class.phpmailer.php');
		$account="chandni@ctinfotech.com";
		$password="chand@123";
		$to= $email;//$email;
	
		$subject = "Forget Password";
		if(empty($pass)){
		 $msg = "<h2>Hi Welcome to Stay to Enjoy</h2><b>";
		 $msg .= "<b>Your Code</b> : ".$code;
		}else{
		  $msg = "<h2>Hi Welcome to Stay to Enjoy</h2><b>";
		  $msg .= "<b>Your password</b> : ".base64_decode($pass);
		}

		$from = "info@ctinfotech.com"; 
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->Host = "mail.ctinfotech.com";
		$mail->SMTPAuth= true;
		$mail->Port = 465; // Or 587
		$mail->Username= $account;
		$mail->Password= $password;
		$mail->SMTPSecure = 'ssl';
		$mail->From = $from;
		$mail->Body = $msg;
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->addAddress($to);
		$send = $mail->send();

		// if($send == true){
		// 	echo true;
		// }else{
		// 	echo false;
		// }

	}
	
	//--------------   forget-password-popup ------------//
	 public function forget_password_popup()
	{
		$this->load->view('forget-password-popup');
	}
    
	public function ajax_mail_send(){
		$mail = "";
		$unique_id = $this->input->post('unique_id');
		$type = $this->input->post('type');
		$code = $this->input->post('code');
		if(!empty($unique_id) && !empty($type) && $type = "Email"){
			$mail = $this->mail_detail($unique_id,$code,"");
			echo "true";
		}
		else if(!empty($unique_id) && !empty($type) && $type = "Mobile"){
			$mail = $this->message_sms($unique_id,$code);
			echo "true";
		}
		
	}
	
	public function ajax_mail_send_two(){
		$mail = "";
		$unique_id = $this->input->post('unique_id');
		$type = $this->input->post('type');
		$password = $this->input->post('pass');
		$code = $this->input->post('code');
		$codes = $this->input->post('codes');
		if(	$code == $codes){
			if(!empty($unique_id) && !empty($type) && $type = "Email"){
				$mail = $this->mail_detail($unique_id,"",$password);
				echo "true";
			}else if(!empty($unique_id) && !empty($type) && $type = "Mobile"){
				$mail = $this->message_sms($unique_id,$code);
				echo "true";
			}
			    
		}else{
			echo "false";
		}
		
	}
	
	public function ajax_resend_code(){
	
		$user_id = $this->input->post('user_id');
		$code = rand(00000,999999);
		$verify_code = array('verify_code'=>$code);
			if(!empty(user_id)){
				$resend = $this->Curd_model->resend_code($user_id,$verify_code);
			
				echo $resend;
			}
			    
		
		
	}
	
	public function ajax_get_profile($uniqueid){
		 
	 
	 $data  = $this->Curd_model->ajax_getusers_by_userid($uniqueid);
	 echo json_encode($data);

			    
		
		
	}
	
	public function message_sms($mobile,$code){
	require  APPPATH.'third_party/messagebird/autoload.php';
			
		$MessageBird = new \MessageBird\Client('FeMg20lEDLePJtKlEHa4IrxAJ');
		$Message = new \MessageBird\Objects\Message();
		$Message->originator = 'STEPIN';
		$Message->recipients = array($mobile);//+919359754294 //"+491628085964"
		$Message->body = "Your Code : ".$code;
		$Message->reference = "the-client-reference";
		$Message->reportUrl = "https://test.staytoenjoy.com";
		$MessageBird->messages->create($Message);
		
		$mess = $MessageBird->messages->read();
		//$Balance = $MessageBird->balance->read();
		
		//$MessageBird = new \MessageBird\Client('ACCESS_KEY');
		// $Hlr = new \MessageBird\Objects\Hlr();
		// $Hlr->msisdn = 919359754294;
		// $Hlr->reference = "Reference";
		// $MessageBird->hlr->create($Hlr);

		//$mess = $MessageBird->messages->read();
		//$Balance = $MessageBird->balance->read();			
		// echo "<pre>";
		// print_r($mess);
			
		if(!empty($mess)){
			echo "true";
		}
		else{
			echo "false";
		}
		
	}
	
	//add_setting
	 public function profile_setting()
	 
	{	$upload1 = $upload2 = $upload3 = $upload4 = $upload5 = "";
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$data['countries'] = $this->Curd_model->get_countries();
		$data['info'] = $this->Curd_model->getusers_by_userid($user_id);
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
		$data['states'] = $this->Curd_model->get_states($data['info']->country);
		$data['user_lang'] = $this->Curd_model->get_languages();
	
		if($this->input->post()){
		
			$first_name =  $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email'); 
			$day = $this->input->post('day'); 
			$month = $this->input->post('month'); 
			$year = $this->input->post('year'); 			
			$gender = $this->input->post('gender'); 
			$address1 = $this->input->post('address1'); 
			$street1 = $this->input->post('street1');
			$address2 = $this->input->post('address2');
			$street2 = $this->input->post('street2');
			$state = $this->input->post('state');
			$zipcode = $this->input->post('zipcode');
			$country = $this->input->post('country');
			$email = $this->input->post('email');
			$landline = $this->input->post('landline');
			$mobile = $this->input->post('mobile');
			$user_lang = $this->input->post('user_lang');
			$lang = $this->input->post('lang');
			$dateofbirth = $day." ".$month." ".$year;
			$user_currency = $this->input->post('user_currency');
			$user_tax_rate = $this->input->post('user_tax_rate');
			$user_tax_id = $this->input->post('user_tax_id'); 
			$user_residence = $this->input->post('user_residence');
			$added_lang = $this->input->post('languages');
		
		
			
			$data = array(
			'lang' => $lang,	
			'first_name' => $first_name,
			'last_name' => $last_name, 				
			'dateofbirth' => $dateofbirth,
			'gender' => $gender,
			'address1'=>$address1,
			'street1' =>$street1,
			'address2' =>$address2,
			'street2' =>$street2,
			'state' =>$state,
			'zipcode' =>$zipcode,
			'country' =>$country,
			'email' =>$email,
			'landline' =>$landline,
			'mobile' =>$mobile,
			'user_lang' =>$user_lang,
			'user_currency'=>$user_currency,
			'user_tax_rate'=>$user_tax_rate,
			'user_tax_id'=>$user_tax_id,
			'user_residence'=>$user_residence,
			'added_lang'=> $added_lang
			);
			if($this->input->post('user_data') == "Save"){
			$update_profile = $this->Curd_model->update_profile($data,$user_id);	 
			}	
			 redirect(base_url('home/profile_setting'),'refresh');		

          }
		
		$this->load->view('profile-settings',$data);
		
	}
	
	public function company_setting()
	{	
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
		$data['cinfo'] = $this->Curd_model->get_company_info($user_id);
		if(!empty($data['cinfo'])){
		$data['states'] = $this->Curd_model->get_states($data['cinfo']->comp_country); }
		$data['user_lang'] = $this->Curd_model->get_languages();
		if($this->input->post())
		{
             
            $fname = $this->input->post('first_name');
            $lname = $this->input->post('last_name');
            $comp_owner = $this->input->post('comp_owner1');
            $cgender = $this->input->post('cgender'); 
            $cemail  = $this->input->post('cemail');
            $cphone  = $this->input->post('cphone');
            $cmobile = $this->input->post('cmobile');
            $city = $this->input->post('city');
            $zip_code = $this->input->post('zip_code');
            $address1 = $this->input->post('address1');
            $street_no = $this->input->post('street_no');
            $addressline2 = $this->input->post('addressline2');
            $street_no2 = $this->input->post('street_no2');
            $tax_rate = $this->input->post('tax_rate');
            $tax_id = $this->input->post('tax_id');
            $state = $this->input->post('state');
            $country = $this->input->post('country');
            $user_lang = $this->input->post('user_lang');
			$lang = $this->input->post('lang');
			$day = $this->input->post('day'); 
			$month = $this->input->post('month'); 
			$year = $this->input->post('year');
			$dateofbirth = $day." ".$month." ".$year;
			$compcname = $this->input->post('compname');
			$legalform = $this->input->post('legalform');
			$compnemp = $this->input->post('compnemp');
			$cday = $this->input->post('cday'); 
			$cmonth = $this->input->post('cmonth'); 
			$cyear = $this->input->post('cyear');
			$cdateofbirth = $cday." ".$cmonth." ".$cyear;
			$company_tax = $this->input->post('company_tax');	
			$company_tax_rate = $this->input->post('company_tax_rate');
			$comp_city = $this->input->post('comp_city');
			$comp_zip = $this->input->post('comp_zip');
			$comp_address1 = $this->input->post('comp_address1');
			$comp_street1 = $this->input->post('comp_street1');
			$comp_address2 = $this->input->post('comp_address2');
			$comp_street2 = $this->input->post('comp_street2');
			$cemail = $this->input->post('cemail');
			$cphone = $this->input->post('cphone');
			$cmobile = $this->input->post('cmobile');
			$website = $this->input->post('cwebsite');
			$cstate = $this->input->post('cstate');
			$ccountry = $this->input->post('ccountry');

			$data = array(
				'user_id'=>$user_id,
				'first_name'=>$fname,
				'last_name'=>$lname,
				'comp_owner'=>$comp_owner,
				'comp_gender'=>$cgender,
				'email'=>$cemail,
				'phone_no'=>$cphone,
				'mobile'=>$cmobile,
				'comp_city'=>$city,
				'comp_zipcode'=>$zip_code,
				'comp_address1'=>$address1,
				'comp_street1'=>$street_no,
				'comp_address2'=>$addressline2,
				'comp_street2'=>$street_no2,
				'comp_tax_rate'=>$tax_rate,
				'comp_tax_id'=>$tax_id,				
				'comp_modified' => date('Y-m-d H:i:s'),
				'comp_state'=>$state,
				'comp_country' =>$country,
				'comp_lang'=>$lang,
				'comp_userlng'=>$user_lang,
				'comp_owner_dob'=>$dateofbirth
			);

			$tdata = array(
				'user_id'=>$user_id,
				'comp_cname'=>$compcname,
				'comp_legal_form'=>$legalform,
				'comp_noemp'=>$compnemp,
				'comp_dob'=>$cdateofbirth,
				'company_tax_id'=>$company_tax,
				'company_tax_rate'=>$company_tax_rate,
				'company_city'=> $comp_city,
			    'company_zip'=>$comp_zip,
			    'company_address1' =>$comp_address1,
			    'company_street1'=>$comp_street1,
			    'company_address2'=>$comp_address2,
			    'company_street2' =>$comp_street2,
			    'comp_email'=>$cemail,
			    'comp_phone_no'=>$cphone,
			    'comp_mobile'=> $cmobile,
			    'comp_website'=>$website,
			    'company_state' =>$cstate,
			    'company_country'=>$ccountry
			);
			if($this->input->post('cinfo') == "Save")
			{		
			  $company_info = $this->Curd_model->company_insert($data,$user_id);
			   redirect(base_url('home/company_setting'),'refresh');	
			}
			if($this->input->post('tcinfo') == "Save")
			{		
			  $company_info = $this->Curd_model->company_insert($tdata,$user_id);
			   redirect(base_url('home/company_setting'),'refresh');	
			}
         
		}		
		$this->load->view('company_settings',$data);
	}
	
	public function company_tax(){

		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
		$data['cinfo'] = $this->Curd_model->get_company_info($user_id);
		if($this->input->post())
		{

			$comp_tax_type = $this->input->post('comp_tax_type');
			$comp_tax_rate = $this->input->post('comp_tax_rate');
			$comp_tax_id = $this->input->post('comp_tax_id');
			
		    $add_tax = array(
				'user_id'=>$user_id,
				'comp_tax_type'=>$comp_tax_type,		
				'comp_tax_rate'=> $comp_tax_rate,
				'comp_tax_id'=>$comp_tax_id,
				'comp_modified' => date('Y-m-d H:i:s') 
				);
			if($this->input->post('add_tax') == "Save"){		
			$company_info = $this->Curd_model->company_insert($add_tax,$user_id);			
			}
			
 			redirect(base_url('home/company_tax'),'refresh');
 		}	
	    $this->load->view('company-tax-informations',$data);
	}
	public function verification_documents(){
		
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
	    $this->load->view('verification-documents' ,$data);
	}
	public function payout_details(){
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
	    $this->load->view('payout-details' ,$data);
	}

	 public function contact()
	{	if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('contact',$data);
	}
	
	 public function helpcenter()
	{		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('helpcenter',$data);
	}

	public function helpcenter1()
	{			if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('help_center1',$data);
	}
		public function helpcenter2()
	{		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('help_center2',$data);
	}
	public function helpcenter3()
	{		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('help_center3',$data);
	}
	 public function account_setting()
	{     if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('account-settings',$data);
	}
	
	 public function payment_detail()
	{    if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('payment-details',$data);
	}
	
	 public function verification_center()
	{     if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('verification-center',$data);
	}
	 public function trans_history()
	{      if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('trans-history',$data);
	}
	
	 public function account_overview()
	{     	if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
		$data['info'] = $this->Curd_model->getusers_by_userid($user_id);
	
			$this->load->view('account-overview' ,$data);
	}
	

	public function biography()
	{     
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }
 		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$data['bio'] = $this->Curd_model->get_user_bio($user_id);

    if($this->input->post())
		{
		$user_bio	=  $this->input->post('user_bio');
		$user_skill	=  $this->input->post('user_skill');
		$user_comp	=  $this->input->post('user_comp');
		$user_role	=  $this->input->post('user_role');
			 
		$user_comp_detail = $this->input->post('user_comp_detail');
		$user_start_date	= date('Y-m-d',strtotime($this->input->post('user_start_date')));	
		$user_end_date =  date('Y-m-d',strtotime($this->input->post('user_end_date')));	
		$datetime	=  date('Y-m-d H:i:s');
		$till_now = $this->input->post('till_now');
	if(!empty($bio["till_now"])){    	
      	$till_now = 1;
      }else{
      	$till_now = 0;
      }
      if(!empty($user_comp && $user_role)){
		$bio = array(
			'user_bio'=>$user_bio,
			'user_id'=>$user_id,
			'user_skill'=>$user_skill,
			'user_comp'=>$user_comp,
			'user_role'=>$user_role,
			'user_comp_detail'=>$user_comp_detail,
			'user_start_date'=>$user_start_date,
			'user_end_date'=>$user_end_date,
			'datetime'=>$datetime,
			'till_now'=>$till_now 
			);
	}else{
		$bio = array(
			'user_bio'=>$user_bio,
			'user_id'=>$user_id,
			'user_skill'=>$user_skill,			
			'datetime'=>$datetime,
			);
	}
		if($this->input->post('bio') == "Save"){	
			$biography =  $this->Curd_model->update_bio($bio,$user_id);  }
		 redirect(base_url('home/biography'),'refresh');	
	  }
		$this->load->view('biography',$data);
	}
	
	public function biography_ajax(){
		$array = "";
		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id;
		$unique_id = $data['session']['session']->unique_id;
		
		$bio = array();
		parse_str($this->input->post('form'), $bio);
		
		$array = array(
			'user_bio'=>$bio['user_bio'],
			'user_id'=>$user_id,
			'user_skill'=>$bio['user_skill'],
			'user_comp'=>$bio['user_comp'],
			'user_role'=>$bio['user_role'],
			'user_comp_detail'=>$bio['user_comp_detail'],
			'user_start_date'=>date('Y-m-d',strtotime($bio['user_start_date'])),
			'user_end_date'=>date('Y-m-d',strtotime($bio['user_end_date'])),
			'datetime'=> date('Y-m-d H:i:s')
			);
      if(isset($bio["till_now"])){
      	$array1 = array('till_now' => $bio["till_now"]);
      	$array = array_merge($array,$array1);
      	$till_now = "current";
      }else{
      	$till_now = date('M Y',strtotime($bio['user_end_date']));
      }
		
	    $biography =  $this->Curd_model->insert_bio($array);  
	    echo '<div class="form-group add_more_div row mt-4" div-id="'.$biography.'">
                  <div class="col-sm-7 col-form-label font-14 pb-0">
                    <h6 class="mb-1 user_role font-14">'.$bio["user_role"].'</h6>
                    <p class="mb-0 font-14 text-secondary">'.$bio["user_comp"].'</p>
                  </div>
                  <div class="col-sm-5 col-form-label font-14 pt-10px">
                    <span class="font-14 text-secondary">'.date("M Y",strtotime($bio["user_start_date"])).' to '.$till_now.' 
                    </span>
                    <div class="d-inline-block float-right">
                      
                      <label class="position-relative mb-0 tooltip-hover">
                        <a href="javascript:void(0)" class="btn btn-primary bg-theme py-1 font-14 text-white" data-toggle="modal" data-target="#bio-edit">
                          Public <i class="fa fa-globe pl-2"></i>
                        </a>
                        <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Who shall see this?</div>
                      </label>
                      
                      <div class="dropdown hide-caret d-inline-block">
                        <a href="javascript:void(0)" data-toggle="dropdown">
                          <img src="'.base_url("img/dots-icon.svg").'" class="pl-3 w-30px">
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item hover-theme focus-none active-none bio_edit" href="javascript:void(0)" data-edit="'.$biography.'">
                            <i class="fa fa-edit pr-1"></i> Edit</a>
                          <a class="dropdown-item hover-red focus-none active-none bio_delete" href="javascript:void(0)" data-toggle="modal" onclick="deleteBio(this,'.$biography.')"  data-target="#trash-popup">
                          <i class="fa fa-trash pr-1"></i> Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-form-label font-14 text-secondary">'.$bio["user_comp_detail"].'</div></div>';
               
	}
	public function biography_delete(){
		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id;
		$unique_id = $data['session']['session']->unique_id;
		$bio_id = $this->input->post('bio_id');
		$biodelete =  $this->Curd_model->delete_bio($bio_id,$user_id); 
		echo $biodelete;
	}

	 public function interests()
	{  if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('interests',$data);
	}
	
	 public function about_us()
	{    	 
		$upload1 = $upload2 = $upload3 = $upload4 = $upload5 = "";
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$data['about'] = $this->Curd_model->get_user_about($user_id);

	if($this->input->post()){
		if(!empty($_FILES['user_hobbies_upload']['name'])){

			move_uploaded_file($_FILES['user_hobbies_upload']['tmp_name'],'./img/'.$_FILES['user_hobbies_upload']['name']);
			$upload1 = $_FILES['user_hobbies_upload']['name'];

			}else{
			$upload1 = $data['about']->user_hobbies_upload;
			}

			if(!empty($_FILES['user_book_upload']['name'])){

			move_uploaded_file($_FILES['user_book_upload']['tmp_name'],'./img/'.$_FILES['user_book_upload']['name']);
			$upload2 = $_FILES['user_book_upload']['name'];

			}else{
			$upload2 = $data['about']->user_book_upload;
			}

			if(!empty($_FILES['user_writes_upload']['name'])){

			move_uploaded_file($_FILES['user_writes_upload']['tmp_name'],'./img/'.$_FILES['user_writes_upload']['name']);
			$upload3 = $_FILES['user_writes_upload']['name'];

			}else{
			$upload3 = $data['about']->user_writes_upload;
			}
 
			if(!empty($_FILES['user_club_upload']['name'])){

			move_uploaded_file($_FILES['user_club_upload']['tmp_name'],'./img/'.$_FILES['user_club_upload']['name']);
			$upload4 = $_FILES['user_club_upload']['name'];

			}else{
			$upload4 = $data['about']->user_club_upload;
			}

			if(!empty($_FILES['user_othert_upload']['name'])){

			move_uploaded_file($_FILES['user_othert_upload']['tmp_name'],'./img/'.$_FILES['user_othert_upload']['name']);
			$upload5 = $_FILES['user_othert_upload']['name'];

			}else{
			$upload5 = $data['about']->user_othert_upload;
			}


			$user_about = $this->input->post('user_about');
			$user_motto	=  $this->input->post('user_motto');
			$user_hobbies	=  $this->input->post('user_hobbies');
			$user_define_hobbies	=  $this->input->post('user_define_hobbies');
			$user_hobbies_upload =  $upload1;
			$user_fav_book	=  $this->input->post('user_fav_book');
			$user_book_upload = $upload2;
			$user_fav_writes	= $this->input->post('user_fav_writes');	
			$user_writes_upload = $upload3;
			$user_fav_club = $this->input->post('user_fav_club');
			$user_club_upload = $upload4;
			$user_other_interest = $this->input->post('user_other_interest');
			$user_othert_upload = $upload5;

			$about = array(
			'user_id'=>$user_id,
			'user_about'=>$user_about,
			'user_motto'=>$user_motto,			
			'user_hobbies'=>$user_hobbies,
			'user_define_hobbies'=>$user_define_hobbies,
			'user_hobbies_upload'=>$user_hobbies_upload,
			'user_fav_book'=>$user_fav_book,
			'user_book_upload'=>$user_book_upload,
			'user_fav_writes'=>$user_fav_writes,
			'user_writes_upload'=>$user_writes_upload,
			'user_fav_club'=>$user_fav_club,
			'user_club_upload'=>$user_club_upload,		
			'user_other_interest'=>$user_other_interest,	
			'user_othert_upload'=>$user_othert_upload,
			);
			if($this->input->post('about') == "Save"){
			$update_about = $this->Curd_model->update_about($about,$user_id); }
					 redirect(base_url('home/about_us'),'refresh');	
		
	     }
			$this->load->view('about-us',$data);
	}
	
	 public function family_friends()
	{     if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('family-friends' ,$data);
	}
	public function relationship()
	{    if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('relationship' ,$data);
	}
	public function ajax_for_state(){
  	
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$country_code = $this->input->post('country_code'); 
		$data['states'] = $this->Curd_model->get_states($country_code);
	
		if(!empty($data['states'])){

			foreach ($data['states'] as $key => $value) {
				
			 echo '<option value="'.$value['state_name'].'">'.$value['state_name'].'</option>';
			}
			
		}
	
	}

	public function newsfeed()
	{     if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        		}

		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
			$this->load->view('newsfeed' ,$data);
	}
	
	public function add_image_newsfeed(){
	  $rand = rand(0000000,111111);
   if($_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], './uplaods/posts/'.$rand.$_FILES['file']['name']);
     
     echo $rand.$_FILES['file']['name'];
    }
	    
	}
	public function home_newsfeed(){
		if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }
		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;
		$data['users'] = $this->Curd_model->ajax_getusers_by_userid($user_id);
		$data['newsfeeds'] = $this->Curd_model->get_newsfeeds();
		
		$this->load->view('home_newsfeed' ,$data);
	}
	
	public function add_post_newsfeed(){
		$insert_posts = "";
		$imagefile ="";
	$data['session']= $this->session->userdata('userdata');

	$post = array();
		parse_str($this->input->post('form'), $post);
        $imagefile = $post['imagefile'];
		$array = array(	
			'user_id'=>$post['user_id'],
			'post_detail'=>$post['post_detail'],
			'post_type'=>1,
			'publish'=>1,	
			'creation'=> date('Y-m-d H:i:s')
			);
        $data['user_id'] = $post['user_id'];
		if(!empty($post['post_detail'])){
	    $insert_posts =  $this->Curd_model->insert_posts($array);  
	    $data['insert_id'] = $insert_posts;
		    
		}
	    
	    if($insert_posts){
	   
           if(!empty($imagefile[0])){
                    $exp = explode(',', $imagefile[0]);
                    $len = sizeof($exp);

                   for($i=0;$i<$len;$i++){

                        $file_pointer = './uplaods/posts/'.$exp[$i]; 

                        if(file_exists($file_pointer))  
                        { 
                       $add = array(
                                        'post_id'=>$insert_posts,
                                            'user_id'=>$post['user_id'],
                                            'images'=> $exp[$i], //'.png',
                                           'image_type'=>$post['image_type'],
                                          	'creation'=> date('Y-m-d H:i:s')
                                        );
                         
                        $this->Curd_model->insert_newsfeed_images($add);
                        } 
                        
                     }
                }
                   

	    $data['newsfeeds'] = $this->Curd_model->get_newsfeeds($post['user_id']);
	     $data['photos'] = $this->Curd_model->get_newsfeed_images($post['user_id'],$insert_posts);
	      $this->load->view('home_newsfeed_post' ,$data);
	     }else{
	         return false;
	     }
	  
	
	}
	

	public function comment_box(){
       $comment_id = $this->input->post('comment_id');
       $post_id = $this->input->post('post_id');
       $data['session']= $this->session->userdata('userdata');

		$users = individualUserDetails($data['session']['session']->user_id);
              if(!empty($users->user_img)){
                 $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
              }else{
                $user_img =   base_url().'img/profile-img.jpg';
              }
		echo '<div class="d-flex clearfix replay_sec'.$comment_id.' border-lt-theme mt-2 ml-5 bg-lt-blue py-1 px-3 rounded-25 mb-3">
        <div class="notif-box-one rounded-t-l-10">
          <div class="profile-pic border w-h-22">
                <img src="'.$user_img.'" class="w-100 h-100 " style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
             
          <textarea onkeypress="reply_input(event,'.$comment_id.','.$post_id.')"  oninput="commnent_boxextend(event,'.$comment_id.')" placeholder="Write a reply, petor" id="reply_inputid'.$comment_id.'" rpost_id="'.$post_id.'" class="bg-lt-blue font-13 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none popuprtextarea2  reply_input  plchldr-text-theme overflow-moz-hide" reply_id="'.$comment_id.'"></textarea>

          <div class="d-flex align-items-end" style="margin-top: -4px;">
            <div class="ml-1 tooltip-hover position-relative">
              <img src="'.base_url().'img/home-icons/picture-img.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Add Picture</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="'.base_url().'img/gif-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Upload GIF</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="'.base_url().'img/emoji-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Emoji</div>
            </div>
            <div class="ml-2 tooltip-hover position-relative">
              <img src="'.base_url().'img/camera-comment.svg" class="w-h-21">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Video Reply</div>
            </div>
          </div>
        </div>
      </div>';
	}
	
	public function add_post_comment(){
		$commnets = "";
	    $data['session']= $this->session->userdata('userdata');
	    
	    $commnets_data = $this->input->post('commnets_data');
	    $user_id = $this->input->post('user_id'); 
	    $post_id = $this->input->post('post_id'); 
	    $add = array(
                        'user_id'=>$user_id,
                        'post_id'=>$post_id,
                        'comments'=>$commnets_data,
                      	'creation'=> date('Y-m-d H:i:s')
                    );
      
       $commnets =  $this->Curd_model->insert_commnets($add);

       $users = individualUserDetails($user_id);

              if(!empty($users->user_img)){
                 $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
              }else{
                $user_img =   base_url().'img/profile-img.jpg';
              } 
       if($commnets){
	echo ' <div class="d-flex justify-content-start hover-box-visible">
        <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
          <div class="notif-box-one pt-1 float-left">
            <div class="profile-pic border w-h-30">
             
            <img src="'.$user_img.'" class="w-100 h-100 <?php echo $profileImage;?>">
            </div>
          </div>

          <div class="notif-box-two px-2 pr-3 py-1 float-left">
            <div class="w-100">
              
              <span class="font-14 d-inline-block pt-8px line-h-15 commnet_detail wrd-brk-all"><span class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2 user_commnet">'.$users->first_name.' '.$users->last_name.'</span>'.$commnets_data.'</span>
            </div>
          </div>
        </div>

        <div class="bg-white ml-3 position-relative mt-2 hover-content-visible ml-auto">
          <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn1" iddot="drop-'.$commnets.'">
            <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
          </a>
          <div class="cstm-cmnt-drop-'.$commnets.' d-none position-absolute t-20 l-0 z-index-999 mn-w-120" iddrop="drop-'.$commnets.'">
            <ul class="border px-3 bg-white border-r-5 py-2">
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Edit</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Hide</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Report</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3 reply_click" reply="'.$commnets.'">Reply</a>
        <p class="pr-3">6h</p>
      </div>';

       }
                       	  
	}

	public function add_reply(){
	if ($this->session->userdata('userdata') == "") {
               redirect(base_url('home/login_register'),'refresh');
        }
        $commnets ="";
	 $data['session']= $this->session->userdata('userdata');
  	 $user_id = $data['session']['session']->user_id;
	 $parent_id =  $this->input->post('parent_id');
	 $reply_data =  $this->input->post('reply_data');
	 $post_id =  $this->input->post('post_id');

	   $add = array(
                        'user_id'=>$user_id,
                        'post_id'=>$post_id,
                        'comments'=>$reply_data,
                        'parent_comment_id'=>$parent_id,
                      	'creation'=> date('Y-m-d H:i:s')
                    );

       $commnets =  $this->Curd_model->insert_commnets($add);

       $users = individualUserDetails($user_id);
             
              if(!empty($users->user_img)){
                 $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
              }else{
                $user_img =   base_url().'img/profile-img.jpg';
              } 

               
       if($commnets){
      echo '<div class="ml-5 my-3">
        <div class="d-flex justify-content-start">
          <div class="border-r-25 bg-secondary clearfix" style="width:fit-content;">
            <div class="notif-box-one pt-1 float-left">
              <div class="profile-pic border w-h-30">
                   
                <img src="'.$user_img.'" class="w-100 h-100 <?php echo $profileImage;?>">
              </div>
            </div>
            <div class="notif-box-two px-2 pr-3 py-1 float-left">
              <div class="w-100">
               
                 <span class="font-14 d-inline-block pt-8px line-h-15 wrd-brk-all"> <span class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">'.$users->first_name.' '.$users->last_name.'</span> '.$reply_data.'</span>
              </div>
            </div>
          </div>
        </div>
        <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3 reply_click"  reply="'.$commnets.'">Reply</a>
        <p class="pr-3">6h</p>
   
        </div>
      </div>';
       }
}

 public function update_profile_img(){
    
	  $data['session']= $this->session->userdata('userdata');
  	  $user_id = $data['session']['session']->user_id	;
	  $rand = rand(0000000,111111);
   if($_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], './uplaods/profile/'.$rand.$_FILES['file']['name']);
	
	  $array = array('user_img' => $rand.$_FILES['file']['name']);
      $update_profile = $this->Curd_model->update_profile($array,$user_id);
      echo $update_profile;
    }
}

public function update_cover_img(){

	  $data['session']= $this->session->userdata('userdata');
  	  $user_id = $data['session']['session']->user_id	;
	  $rand = rand(0000000,111111);
   if($_FILES){
       
   if(move_uploaded_file($_FILES['file']['tmp_name'], './uplaods/cover_image/'.$rand.$_FILES['file']['name'])){
       $array = array('cover_image' => $rand.$_FILES['file']['name']);
       $update_profile = $this->Curd_model->update_profile($array,$user_id);
    
   }else{
       $image = "No";
       
   }
     echo $update_profile;

	 
    }
}
	   


	//update_profile
	 public function update_profile()
	 
	{	
		$data['session']= $this->session->userdata('userdata');
		$user_id = $data['session']['session']->user_id	;
		$unique_id = $data['session']['session']->unique_id	;

	
		if($this->input->post()){
		
			$name =  $this->input->post('name');
			$dob = $this->input->post('dob');
			$username = $this->input->post('username'); 
			$country = $this->input->post('country'); 
			$jobs = $this->input->post('jobs'); 
			$hobbies = $this->input->post('hobbies'); 			
			$user_lang = $this->input->post('user_lang'); 

			$data = array(
			'first_name' => $name,
			'username' => $username,
			'dateofbirth' => $dob,
			'country' =>$country,
			'user_lang' =>$user_lang,
			'jobs' =>$jobs
			);
	
		$update_profile = $this->Curd_model->update_profile($data,$user_id);
		if($update_profile){
			return true;
		}else{
			return false;
		}
      }
	}
		



}
