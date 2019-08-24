<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->database();   
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form','url','common')); 
        //$this->load->helper('url');
        $this->load->model('Admin_model');
		$this->load->model('Curd_model');
		    date_default_timezone_set('Asia/Calcutta');

    } 	  

	  public function index() {
         if ($this->session->userdata('admin_login') == true) {
             $this->dashboard();
        }else {
            $page_data['type'] = "login";
            $this->load->view('login',$page_data);
        }
          
    }

	public function login(){
		$email = $this->input->post('email');
		$password =  $this->input->post('password');
		$check_admin = $this->Admin_model->get_admin($email,$password);

		if(!empty($check_admin)){
	     $this->session->set_userdata('admin_login',$check_admin);	
       $this->session->set_flashdata('flash_message','login successfully');
       
	       redirect(base_url('admin/dashboard'),'refresh');
		}else{
        $this->session->set_flashdata('error_message','Invalid Entry');
	       redirect(base_url('admin'),'refresh');
		}

	}
	public function dashboard()
	{
		  if ($this->session->userdata('admin_login') == "") {
               redirect(base_url('admin'),'refresh');
        }
        $page_data['admin_login'] = $this->session->userdata('admin_login');		
        $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] =  get_phrase('dashboard');

        $this->load->view('layouts/default.php', $page_data);
	}

    public function forgot_password(){     
         
          $email = $this->input->post('email');
          $reset = $this->input->post('reset');
          $check_eamil = $this->Admin_model->get_admin($email,"");
          if(!empty($email) &&  !empty($check_eamil) && $reset == "reset"){
              require_once(APPPATH.'modules/home/controllers/Home.php'); 
              $home = new Home();
              $mail = $home->mail_detail($email,"",$check_eamil->password);
              $this->session->set_flashdata('flash_message','Password has been sent to you email');             
              redirect(base_url('admin'),'refresh');
            
          }elseif(!empty($email) && empty($check_eamil) && $reset == "reset"){               
                $page_data['type'] = "forgot";
                $this->session->set_flashdata('error_message','Invalid Entry');
                $this->load->view('login',$page_data);
           }else{
             $page_data['type'] = "forgot";
             $this->load->view('login',$page_data);
          }
 
    }
    
 
	 public function logout() {
       $this->session->unset_userdata('admin_login');
       $this->session->sess_destroy();

       redirect(base_url('admin'),'refresh');
    }


    public function admin_profile(){
        $admin_data =  $this->session->userdata('admin_login');
        $email = $admin_data->email;
        $page_data['admin_detail'] = $this->Admin_model->get_admin($email,"");     
        $page_data['page_name'] = 'admin_profile';
        $page_data['page_title'] =  get_phrase('admin_profile');
        $this->load->view('layouts/default.php', $page_data);
    }

//////////////////////////// users ///////////////////

   public function user_list(){
        $page_data['page_name'] = 'users_list';
        $page_data['page_title'] =  get_phrase('users_list');
        $page_data['users'] = $this->Admin_model->get_users();
        $this->load->view('layouts/default.php', $page_data);

   }

   public function update_status(){
      $user_id = $this->input->post('user_id');
      $status = $this->input->post('status');
      $data = array('status'=>$status);
      $update_status = $this->Admin_model->update_status($user_id,$data);
      if($update_status){
        echo "true";
      }else{
        echo "false";
      }
   }

   public function delete_user(){
	 $user_id = $this->input->post('user_id');
        $data = $this->Admin_model->delete_user($user_id);
        //$this->session->set_flashdata('flash_message','Data Deleted successfully');
		
		if($data){
			echo "true";
		}else{
			echo "false";
		}
			        
       //redirect(base_url('admin/user_list'),'refresh');             


   }
  public function edit_user($user_id){
		//$page_data['info'] = $this->Admin_model->get_users_id($user_id);
        $data['page_name'] = 'edit_user';
        $data['page_title'] =  get_phrase('edit_user');
		
        $data['info'] = $this->Curd_model->getusers_by_userid($user_id);
		$data['bio'] = $this->Curd_model->get_user_bio($user_id);
		$data['about'] = $this->Curd_model->get_user_about($user_id);
	    $data['country'] = $this->Admin_model->get_country();
		$data['interests'] = $this->Curd_model->interests($user_id);
		$data['family_fr'] = $this->Curd_model->family_fr($user_id);

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
			
		
			$user_bio	=  $this->input->post('user_bio');
			$user_skill	=  $this->input->post('user_skill');
			$user_comp	=  $this->input->post('user_comp');
			$user_role	=  $this->input->post('user_role');
			$user_comp_detail = $this->input->post('user_comp_detail');
			$user_start_date = date('Y-m-d',strtotime($this->input->post('user_start_date')));	
			$user_end_date =  date('Y-m-d',strtotime($this->input->post('user_end_date')));	
			$datetime	=  date('Y-m-d H:i:s');
			$till_now = $this->input->post('till_now');
			
		
			if(!empty($_FILES['user_hobbies_upload']['name'])){

			move_uploaded_file($_FILES['user_hobbies_upload']['tmp_name'],'/home/creatavv/public_html/CTCC/staytoenjoy/img/'.$_FILES['user_hobbies_upload']['name']);
			$upload1 = $_FILES['user_hobbies_upload']['name'];

			}else{
			$upload1 = $data['about']->user_hobbies_upload;
			}

			if(!empty($_FILES['user_book_upload']['name'])){

			move_uploaded_file($_FILES['user_book_upload']['tmp_name'],'/home/creatavv/public_html/CTCC/staytoenjoy/img/'.$_FILES['user_book_upload']['name']);
			$upload2 = $_FILES['user_book_upload']['name'];

			}else{
			$upload2 = $data['about']->user_book_upload;
			}

			if(!empty($_FILES['user_writes_upload']['name'])){

			move_uploaded_file($_FILES['user_writes_upload']['tmp_name'],'/home/creatavv/public_html/CTCC/staytoenjoy/img/'.$_FILES['user_writes_upload']['name']);
			$upload3 = $_FILES['user_writes_upload']['name'];

			}else{
			$upload3 = $data['about']->user_writes_upload;
			}

			if(!empty($_FILES['user_club_upload']['name'])){

			move_uploaded_file($_FILES['user_club_upload']['tmp_name'],'/home/creatavv/public_html/CTCC/staytoenjoy/img/'.$_FILES['user_club_upload']['name']);
			$upload4 = $_FILES['user_club_upload']['name'];

			}else{
			$upload4 = $data['about']->user_club_upload;
			}

			if(!empty($_FILES['user_othert_upload']['name'])){

			move_uploaded_file($_FILES['user_othert_upload']['tmp_name'],'/home/creatavv/public_html/CTCC/staytoenjoy/img/'.$_FILES['user_othert_upload']['name']);
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
			'user_residence'=>$user_residence
			);
			if($this->input->post('user_data') == "Save"){
			$update_profile = $this->Curd_model->update_profile($data,$user_id);	 
			}		
			
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
			'till_now'=>$till_now,	
			);
			if($this->input->post('bio') == "Save"){
			$update_bio = $this->Curd_model->update_bio($bio,$user_id); }
				
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
			         $this->session->set_flashdata('flash_message','Updated successfully');
					 redirect(base_url('admin/user_list'),'refresh');  	 
                }
		
			// if($this->input->post('user_data') == "Save"){
			// $update_profile = $this->Admin_model->update_profile($data,$user_id);
			 // $this->session->set_flashdata('flash_message','Updated successfully');
			  // redirect(base_url('admin/user_list'),'refresh');      
			// }		
		
		
		
        $this->load->view('layouts/default.php', $data);
    }
	
	public function company_list(){
		$data['page_name'] = 'company_setting';
        $data['page_title'] =  get_phrase('company_setting');
		$data['users'] = $this->Curd_model->get_company_allinfo();
		  $this->load->view('layouts/default.php', $data);		
	}
	
	
	 public function company_setting($user_id)
	{	
	    $data['page_name'] = 'edit_company';
        $data['page_title'] =  get_phrase('edit_company');
		$data['cinfo'] = $this->Curd_model->get_company_info($user_id);
		 $data['country'] = $this->Admin_model->get_country();
		if($this->input->post())
		{

			$cname =  $this->input->post('cname');
			$clegal = $this->input->post('clegal');
			$cmonth = $this->input->post('cmonth');
			$cdate = $this->input->post('cdate'); 
			$cyear = $this->input->post('cyear'); 
			$creg_no = $this->input->post('creg_no'); 
			$cowner1 = $this->input->post('cowner1'); 
			$cowner2 = $this->input->post('cowner2'); 
			$cgender = $this->input->post('cgender'); 
			$birth_month = $this->input->post('birth_month');
			$birth_date = $this->input->post('birth_date'); 
			$birth_year = $this->input->post('birth_year');
			$address1 =  $this->input->post('address1');
			$street1 = $this->input->post('street1');
			$address2 = $this->input->post('address2');
			$street2 = $this->input->post('street2'); 
			$location = $this->input->post('location'); 
			$state = $this->input->post('state'); 
			$czip_code = $this->input->post('czip_code'); 
			$ccountry = $this->input->post('ccountry'); 
			$cphone = $this->input->post('cphone'); 
			$cemail = $this->input->post('cemail');
			$cnemail = $this->input->post('cnemail');
			$website = $this->input->post('website');
			$timezone = $this->input->post('timezone');

			$comp_tax_type = $this->input->post('comp_tax_type');
			$comp_tax_rate = $this->input->post('comp_tax_rate');
			$comp_tax_id = $this->input->post('comp_tax_id');
			
			$data = array(
				'user_id'=>$user_id,
				'comp_name'=>$cname,
				'comp_legal_form'=>$clegal,
				'comp_founded'=>$cdate.'-'.$cmonth.'-'.$cyear,
				'comp_reg_no'=>$creg_no,
				'comp_owner'=>$cowner1.'-'.$cowner2,
				'comp_gender'=>$cgender,
				'comp_dob' =>$birth_date.'-'.$birth_month.'-'.$birth_year,
				'comp_address1'=>$address1,
				'comp_street1'=>$street1,
				'comp_address2'=>$address2,
				'comp_street2'=>$street2,
				'comp_city'=>$location,
				'comp_state'=>$state,
				'comp_zipcode'=>$czip_code,
				'comp_country'=>$ccountry,
				'comp_phone_no'=>$cphone,
				'comp_email'=>$cemail,
				'comp_new_email'=>$cnemail,
				'comp_website'=>$website,
				'comp_timezone'=>$timezone,
				'comp_modified' => date('Y-m-d H:i:s')
			);
			if($this->input->post('cinfo') == "Save"){		
			$company_info = $this->Curd_model->company_insert($data,$user_id);			
			}
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
			
 			redirect(base_url('admin/company_list'),'refresh');
		}	
   $this->load->view('layouts/default.php', $data);		
		//$this->load->view('company_settings',$data);
	}
	
      public function delete_company(){
		
	     $user_id = $this->input->post('user_id');
		 $company_id = $this->input->post('company_id');
        $data = $this->Curd_model->delete_company($user_id,$company_id);
        
		if($data){
			echo "true";
		}else{
			echo "false";
		}
			        
   }	
   
    public function login_register()
	{
		$data['page_name'] = 'add_user';
        $data['page_title'] =  get_phrase('add_user');
        $data['user_role'] = $this->Admin_model->get_user_role();
	
		$this->load->view('layouts/default.php', $data);
	}
	
	public function register(){
		
	    $data = "";
		$lang = "en";
		$sigin_type = 0 ;
		$rand = rand(00000,999999);
		
        $this->form_validation->set_rules('first_name','First Name','required|max_length[20]|trim');            
        $this->form_validation->set_rules('last_name','Last Name', 'required|max_length[20]|trim');            
        $this->form_validation->set_rules('unique_id','This', 'required|trim|callback_validate_email');                        
       
        $this->form_validation->set_rules('password','Password', 'required|min_length[6]|trim');           
        $this->form_validation->set_rules('cpassword', 'Confirm Password','required|matches[password]|trim');  
              if ($this->form_validation->run() == FALSE) {
               
           $this->login_register();         
                }else{
   		if(!empty($_FILES['filefoto']['name'])){ 
			move_uploaded_file($_FILES['filefoto']['tmp_name'],'/home/creatavv/public_html/CTCC/staytoenjoy/uplaods/profile/'.$rand.$_FILES['filefoto']['name']);
			    $upload = $rand.$_FILES['filefoto']['name'];

			}else{
				$upload  = "";
			}

            $user_role = $this->input->post('user_role');    
			$first_name =  $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$unique_id = $this->input->post('unique_id'); 
			$day = $this->input->post('day'); 
			$month = $this->input->post('month'); 
			$year = $this->input->post('year'); 
			$gender = $this->input->post('gender'); 
			$password = $this->input->post('password'); 
			$token = rand(00000,999999);
			$verify_code = rand(00000,999999);
						
			$dateofbirth = $day." ".$month." ".$year;
				$data1 = array(
				'user_role'=>$user_role,
				'user_img'=> $upload,	
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
				'verify_code'=>$verify_code 
				);
		
			$add = $this->Curd_model->addusers($data1);
			if($add){
            $this->session->set_flashdata('flash_message','Register Successfully'); }
				redirect(base_url('admin/user_list'),'refresh');
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
    public function coming_soon(){
		$data['page_name'] = 'coming_soon';
        $data['page_title'] =  get_phrase('');
	
		  $this->load->view('layouts/default.php', $data);		
	}
    
    //     Ride sharing //////////////////////////////
 
	public function ride_vechile($user_id,$ride_vehicle){
 		$data['page_name'] = 'ride_vehicle';
        $data['page_title'] =  get_phrase('rides_detail');
        $data['info'] =  $this->Admin_model->get_users_id($user_id);
		$data['rides_listing'] = $this->Admin_model->rides_listing_id($user_id,$ride_vehicle);
		$data['ride_vehicle'] = $this->Admin_model->ride_vehicle($user_id,$ride_vehicle);
		
		$data['ride_driver'] = $this->Admin_model->ride_driver($data['ride_vehicle'][0]['driver_id'],$data['ride_vehicle'][0]['ride_vehicle_id']);
		  $this->load->view('layouts/default.php', $data);		


	}
    
     public function rides_listing()
	{	
	    $data['page_name'] = 'rides_listing';
        $data['page_title'] =  get_phrase('rides_listing');

		$data['rides_listing'] = $this->Admin_model->rides_listing();
	
		
		  $this->load->view('layouts/default.php', $data);		
	
  
	
	}
	
}
