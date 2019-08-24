<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_phrase'))
{
	function get_phrase($phrase = '') {
        $phrase = trim(strtolower($phrase));
	
	    return ucwords(str_replace('_',' ',$phrase));
	}
}
if(!function_exists('individualUserDetails')){
    function individualUserDetails($user_id){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');
        $user_existance = $CI->Curd_model->ajax_getusers_by_userid($user_id);
	
        if(!empty($user_existance)){
           return $user_existance;
        }
        
    }
}

if(!function_exists('postImages')){
    function postImages($user_id,$post_id){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');
        $postImages = $CI->Curd_model->get_newsfeed_images($user_id,$post_id);
	
        if(!empty($postImages)){
             return $postImages;
        }
       
    }
}

if(!function_exists('postImagescount')){
    function postImagescount($user_id,$post_id){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');
        $postImagescount = $CI->Curd_model->get_newsfeed_images($user_id,$post_id);
	
        if(!empty($postImagescount)){
             return count($postImagescount);
        }
       
    }
}

if(!function_exists('getCommnet_newsfeed')){
    function getCommnet_newsfeed($user_id="",$post_id="",$parent_id=""){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');
       
	    if($parent_id == 0){
	         $comments_data = $CI->Curd_model->get_commnet_newsfeeds("",$post_id,"");
	    }else{
	         $comments_data = $CI->Curd_model->get_commnet_newsfeeds("",$post_id,$parent_id);
	    }
        if(!empty($comments_data)){
             return $comments_data;
        }
        
        }
       
    }



if(!function_exists('Commnet_newsfeed')){
    function Commnet_newsfeed($post_id=""){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');
    
        $comments_data = $CI->Curd_model->new_commnet_newsfeeds($post_id);
         if(!empty($comments_data)){
             return $comments_data;
            }       
        }
       
    }


if(!function_exists('reply_newsfeed')){
    function reply_newsfeed($comment="",$post_id="",$replys=""){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');

         $reply = $CI->Curd_model->reply_newsfeeds($comment,$post_id);
         $replys[] = $reply;
          
         if(empty($reply)){

            return ($replys);
         }
         return reply_newsfeed($reply,$post_id,$replys); 
         // return
        }
 
    }

//newfeed_comment_by_id
  
  if(!function_exists('newfeed_comment_by_id')){
    function newfeed_comment_by_id($comment="",$post_id=""){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');

         $commentbyid = $CI->Curd_model->newfeed_comment_by_id($comment,$post_id);
       
         if(!empty($commentbyid)){

            return $commentbyid;
         }
     
        }
 
    }

 if(!function_exists('getcountry_name_by_code')){
    function getcountry_name_by_code($code=""){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');

         $country_name = $CI->Curd_model->getcountry_name_by_code($code);
       
         if(!empty($country_name)){

            return $country_name->nicename;
         }else{
            return false;
         }
     
        }
 
    }
    if(!function_exists('getLang_name_by_code')){
      function getLang_name_by_code($code=""){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');

         $Lang_name = $CI->Curd_model->getLang_name_by_code($code);
  
         if(!empty($Lang_name)){

            return $Lang_name->name;
         }else{
            return false;
         }
     
        }
 
    }

     if(!function_exists('get_user_about')){
      function get_user_about($user_id){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');

         $about = $CI->Curd_model->get_user_about($user_id);
  
         if(!empty($about)){

            return $about;
         }else{
            return false;
         }
     
        }
 
    }

if(!function_exists('Comment_count')){
    function Comment_count($post_id,$limit=""){
        $CI = &get_instance();
        $CI->load->database();
        $CI->load->model('Curd_model');
        $Commnet_count = $CI->Curd_model->Comment_count($post_id,$limit);
    
        if(!empty($Commnet_count)){
             return $Commnet_count;
        }else{
            return 0;
        }
       
    }
}
// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./system/helpers/language_helper.php */
