<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
Class Curd_model  extends CI_Model { 
    public function __construct() {
        parent::__construct();
        
    } 
////////////////////////// user start ////////////////////
     public function addusers($data){
        $this->db->insert('tbl_users',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }


    public function getusers($uniqid,$password){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('unique_id',$uniqid);
        $pass = base64_encode($password);
        $this->db->where('password',$pass);  
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
	
	 public function getusers_by_id($uniqid){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('unique_id',$uniqid); 
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
	
	 public function ajax_getusers_by_userid($id){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_id',$id); 
                 
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
    
    //checkEmailExistance
    
    
    public function checkEmailExistance($uniqid){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('unique_id',$uniqid);
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
    
	
	 public function resend_code($user_id,$verify_code){
        $this->db->where('user_id',$user_id);
		$this->db->where('status = 0');
        $res = $this->db->update('tbl_users', $verify_code);
       // echo $this->db->last_query();//die('QQQW');
        return $res;
    }
	
	public function update_profile($data,$user_id){
		$this->db->where('user_id',$user_id);
		$this->db->where('status = 0');
        $res = $this->db->update('tbl_users', $data);
		return $res;
	}
	
	public function update_bio($bio,$user_id){
		$this->db->select('*');
        $this->db->from('tbl_user_biography');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {          
		 $this->db->where('user_id',$user_id);		
        $res = $this->db->update('tbl_user_biography', $bio);
		return $res;
			
        }else{	
      		
		//$this->db->where('user_id',$user_id);	
        $res = $this->db->insert('tbl_user_biography', $bio);
		return $res;
		}
	}
	  
       public function insert_bio($bio){
          
            $res = $this->db->insert('tbl_user_biography', $bio);
            return $this->db->insert_id();
            
        }

		 public function delete_bio($bio_id,$user_id){
            $this->db->where('user_id',$user_id);
            $this->db->where('bio_id',$bio_id);
            $res = $this->db->delete('tbl_user_biography');
            return $res;
            
        }
		public function get_user_bio($user_id){
        $this->db->select('*');
        $this->db->from('tbl_user_biography');
        $this->db->where('user_id',$user_id);
        $this->db->order_by("bio_id", "desc");	               
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
		
		
		public function update_about($about,$user_id){
		$this->db->select('*');
        $this->db->from('tbl_user_about');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        if($query->num_rows()==1)
        {          
		$this->db->where('user_id',$user_id);		
        $res = $this->db->update('tbl_user_about', $about);
		
		return $res;
			
        }else{				
		$this->db->where('user_id',$user_id);	
        $res = $this->db->insert('tbl_user_about', $about);
		return $res;
		}
	}
	
		
  
		public function get_user_about($user_id){
        $this->db->select('*');
        $this->db->from('tbl_user_about');
        $this->db->where('user_id',$user_id);	               
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
	
	public function getusers_by_userid($userid){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_id',$userid); 
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
	
	
	 public function company_insert($data,$user_id)
    {
        $this->db->select('*');
        $this->db->from(' tbl_company');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        if($query->num_rows()==1)
        { 
        $this->db->where('user_id',$user_id);   
        $res = $this->db->update(' tbl_company', $data);

        return $res;

        }else{  
        $this->db->where('user_id',$user_id);   
        $res = $this->db->insert('tbl_company', $data);
        return $res;
        }
        }


        public function get_company_info($user_id)
        {
        $this->db->select('*');
        $this->db->from('tbl_company');
        $this->db->where('user_id',$user_id);   
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
    
	public function get_company_allinfo()
        {
        $this->db->select('*');
        $this->db->from('tbl_company');
      
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
		
		public function delete_company($id,$company_id){
		 $this->db->where('user_id',$id);  
		 $this->db->where('company_id',$company_id);		 
		 $this->db->delete('tbl_company');  
        return true;
	}
	

    public function get_countries(){

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

    /////// getcountry_name_by_code///////////
    public function getcountry_name_by_code($code){
        $this->db->select('nicename');
        $this->db->where('iso',$code);    
        $this->db->from('country');
      
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
 //////////////////getLang_name_by_code //////////
    public function getLang_name_by_code($code){
        $this->db->select('name');
         $this->db->where('code',$code); 
        $this->db->from('languages');
      
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
///////////////////////////////////////////////interests ////////////////////////////////
   public function interests($user_id){

        $this->db->select('*');
        $this->db->where('user_id',$user_id);
        $this->db->from('tbl_user_interests');
      
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
    public function family_fr($user_id){

        $this->db->select('*');
        $this->db->where('user_id',$user_id);
        $this->db->from('tbl_user_family_fr');
      
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
    /////////////////////////states ///////////////////
   public function get_states($country_code){

        $this->db->select('*');
        $this->db->where('country_code',$country_code);
        $this->db->from('tbl_states');
      
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

   //////////////languges ///////////////
    public function get_languages(){

        $this->db->select('*');
        $this->db->from('tbl_language');
      
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
//////////////////////////add post newsfeed /////////////
public function insert_posts($array) {
	      $res = $this->db->insert('tbl_newsfeeds', $array);
            return $this->db->insert_id();           
	
}
   
   public function get_newsfeeds($user_id=""){

        $this->db->select('*');
        if($user_id){
        $this->db->where('user_id',$user_id);}

        $this->db->from('tbl_newsfeeds');
		$this->db->order_by('id','desc');
      
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

//////////////////////////add commnets newsfeeds /////////////
public function insert_commnets($array) {
          $res = $this->db->insert('tbl_newsfeed_comments', $array);
            return $this->db->insert_id();           
    
}
   
   public function get_commnet_newsfeeds($user_id="",$post_id="",$parent_id=""){

        $this->db->select('*');
        if($user_id){
        $this->db->where('user_id',$user_id);}
        if($post_id){
       $this->db->where('post_id',$post_id);}
       if($parent_id == 0){
       $this->db->where('parent_comment_id',$parent_id);}
       if($parent_id != 0){
       $this->db->where('parent_comment_id',$parent_id);}
        $this->db->from('tbl_newsfeed_comments');
        $this->db->order_by('comment_id','desc');
      
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
 public function new_commnet_newsfeeds($post_id=""){
        $this->db->select('*'); 
        $this->db->where('post_id',$post_id);
        $this->db->where('parent_comment_id',0);
        $this->db->from('tbl_newsfeed_comments');
        $this->db->order_by('comment_id','desc');
      
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



   public function reply_newsfeeds($comments,$post_id=""){
 if(!empty($comments)){
           $data = "";
        $this->db->select('*'); 
        $this->db->where('post_id',$post_id);
      //  $this->db->where('parent_comment_id',$comments);
   
         if(!empty($comments[0])){

                    $where = '';$a=1;
                    foreach($comments as $comm){
                        if($a>1){
                            $where .= " OR ";
                        }
                        $where .= "FIND_IN_SET('".$comm."',parent_comment_id)"; 
                        $a++;
                    }
                    $this->db->where( '('.$where.')' );
                }   

        $this->db->from('tbl_newsfeed_comments');
        $this->db->order_by('comment_id','desc');
        $query = $this->db->get();
 
        if($query->num_rows()>0)
        {
            $row = $query->result_array();
            foreach($row as $value){ 

                $data[] = $value['comment_id'];
            }

            return $data;
        }
        else
        {
            return false;
        }
      }
    }


public function newfeed_comment_by_id($comment_id="",$post_id=""){

        $this->db->select('*'); 
        $this->db->where('post_id',$post_id);
        $this->db->where('comment_id',$comment_id);
        $this->db->from('tbl_newsfeed_comments');
         $this->db->order_by('comment_id','desc');
  
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



   //////////////////////////add  newsfeeds images /////////////

public function insert_newsfeed_images($array) {
          $res = $this->db->insert('tbl_newsfeed_images', $array);
            return $this->db->insert_id();           
    
}

public function get_newsfeed_images($user_id,$post_id = ""){

        $this->db->select('*');
        if($post_id){
        $this->db->where('post_id',$post_id);
            
        }
        $this->db->where('user_id',$user_id);
        $this->db->from('tbl_newsfeed_images');

      
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

   public function Comment_count($post_id,$limit){


       $this->db->select('*'); 
        $this->db->where('post_id',$post_id);
        $this->db->where('parent_comment_id',0);
        $this->db->from('tbl_newsfeed_comments');  
        if($limit != ""){
             $this->db->limit($limit);
        }
        $query = $this->db->get();
        if($query->num_rows()>=0)
        {
            $row = $query->num_rows();
            return $row;
        }
        else
            {
            return false;
            }

}
 }