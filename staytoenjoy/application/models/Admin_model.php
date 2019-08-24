<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_model  extends CI_Model { 
    public function __construct() {
        parent::__construct();
        
    } 
 
    public function get_admin($email="",$password=""){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        if(!empty($email && $password)){
            $this->db->where('email',$email);
            $pass = base64_encode($password);
            $this->db->where('password',$pass);  
        }else{
               $this->db->where('email',$email);
             }       
        $this->db->where('status = 0');             
        $query = $this->db->get();
      
        if($query->num_rows()==1)
        {
            $row = $query->row();         
            return $row;
        }
        else
        {
            return false;
        }
    }
	//////////////////////users /////////////
	public function get_users($id=""){
        $this->db->select('*');
        $this->db->from('tbl_users');      
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->result_array();       
            return $row;
        }
        else
        {
            return false;
        }
    }
    
    public function update_status($id="",$data=""){
        $this->db->where('user_id',$id);       
        $this->db->update('tbl_users',$data);
        return true;
    }

	public function delete_user($id){
		 $this->db->where('user_id',$id);  
		 $this->db->delete('tbl_users');  
        return true;
	}
	
	public function get_users_id($id){
         $this->db->select('*');
		 $this->db->where('user_id',$id);  
        $this->db->from('tbl_users');      
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->row();       
            return $row;
        }
        else
        {
            return false;
        }
    }
	
	public function update_profile($data,$user_id){
		$this->db->where('user_id',$user_id);
		$this->db->where('status = 0');
        $res = $this->db->update('tbl_users', $data);
		return $res;
	}
	public function get_user_role(){
        $this->db->select('*');
        $this->db->from('tbl_user_roles');      
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->result_array();       
            return $row;
        }
        else
        {
            return false;
        }
    }
	public function get_country(){
        $this->db->select('*');
        $this->db->from('country');      
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->result_array();       
            return $row;
        }
        else
        {
            return false;
        }
    }
	//////////////////////////////Rides Sharing /////////////////////

    public function rides_listing(){
        $this->db->select('*');
        $this->db->from('tbl_ride_sharing');      
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->result_array();       
            return $row;
        }
        else
        {
            return false;
        }
    }

     public function rides_listing_id($user_id,$ride_vehicle){
         $this->db->select('*');
         $this->db->where('user_id',$user_id); 
         $this->db->where('ride_vehicle_id',$ride_vehicle); 
        $this->db->from('tbl_ride_sharing');      
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->result_array();       
            return $row;
        }
        else
        {
            return false;
        }
    }

    public function ride_vehicle($user_id,$ride_vehicle){
        $this->db->select('*');
          
        $this->db->where('user_id',$user_id); 
        $this->db->where('ride_vehicle_id',$ride_vehicle); 
        $this->db->from('tbl_ride_vehicle'); 
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->result_array();       
            return $row;
        }
        else
        {
            return false;
        }
    }
	
	public function ride_driver($driver_id,$ride_vehicle_id){
        $this->db->select('*');
          
        $this->db->where('driver_id',$driver_id); 
        $this->db->where('ride_vehicle_id',$ride_vehicle_id); 
        $this->db->from('tbl_drivers_list'); 
        $query = $this->db->get();     
        if($query->num_rows()>0)
        {
            $row = $query->result_array();       
            return $row;
        }
        else
        {
            return false;
        }
    }
	
	//driver_id
	
 }