<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

  	public function __construct(){
       parent::__construct();
        $this->load->model('Common');  
        $this->load->library('session');  
        $this->load->helper('form');	
		error_reporting(E_ALL & ~E_NOTICE);
		date_default_timezone_set('Asia/Kolkata');    

    }
    public function index(){
        if($this->session->userdata('userId2')) redirect('user/dashboard');
       else $this->load->view('index_brand_sigin');
    	
    }
    public function dashboard(){
        $this->checksession();
        $this->load->view('user/index');
        
    }
    public function setting(){
    	$this->load->view('user/setting');
    }
    
    public function checking()
	{  
	    $check_mail=$this->Common->get_few_record('users','email',array('email'=>$_POST['email']));

	   if(empty($check_mail))
	   {
	    echo 'true';
	   }
	   else{
	    echo 'false';
	   }
  
 	}
    public function checking_user()
    {  
        $check_mail=$this->Common->get_few_record('users','email',array('email'=>$_POST['email']));

       if(empty($check_mail))
       {
        echo 'false';
       }
       else{
        echo 'true';
       }
  
    }
    public function user_register(){
        $data=$this->Common->InsertData('users',array(
                            'name'=>$_POST['name'],
                            'username'=>$_POST['username'],
                            'email'=>$_POST['email'],    
                            'password'=>md5($_POST['password']),
                            'status'=>1,
                            'phone'=>$_POST['phone'],
                            'type'=>$_POST['type'],
                            'date'=>date("Y-m-d H:i:s")
                        ));

        echo $data;
    }
    public function login()
    { 
           $data = $this->Common->getData('users',array('email'=>$_POST['email'],'status'=>1,'password'=>md5($_POST['password'])),"","",1); 

            if(empty($data))
            {
              $message=' <div class="alert alert-danger role="alert">
                        <strong>Opps!</strong>Sorry Wrong password .
                      </div>';
           echo json_encode(['message'=>$message,'status'=>102]);
            }
            else{

                

               $newdata = array(
                                'userId2'  => $data->id,
                                 'email'     => $data->email,
                                  'logged_in' => TRUE
                                 );

                 $this->session->set_userdata($newdata);

                 $message=' <div class="alert alert-success" role="alert">
                            <strong>Well done!</strong> Login successful
                          </div>';
                
              echo json_encode(['message'=>$message,'status'=>103]);
                 
            }
    
    }
    public function logout(){
          $this->checksession();
        $this->session->sess_destroy();

          redirect();    

    }
    public function checksession()
    {
      if(!$this->session->userdata('userId2')) redirect('front');
    }
    public function update_user_profile_page_one(){
      $image='';
        if($_FILES["profile_pic"]['name']!='')
        {        
          $config['upload_path']          = './uploads/user_profile/';
          $config['allowed_types']        = '*';  
          $new_name = date('Y-m-d').time().$_FILES["user_second_img"]['name'];
          $config['file_name'] = $new_name;

          $this->load->library('upload', $config);

              if (!$this->upload->do_upload('profile_pic')){ 
                  print_r($error); die();
              }
              else{
              $data = array('upload_data' => $this->upload->data());
              $image=$data['upload_data']['file_name']; 
              } 
        }else{

           $image=$_POST['old_image'];
         }

      $data=$this->Common->UpdateData('users',array('username'=>$_POST['username'],'dob'=>$_POST['dob'],'location'=>$_POST['location'],'speak_languages'=>$_POST['speak_languages'],'write_languages'=>$_POST['write_languages'],'bio'=>$_POST['bio'],'past_colleborations'=>$_POST['past_colleborations'],'profile_pic'=>$image),array('id'=>$this->session->userId2));
     if($data)
      {echo 101;}
     else{echo 102;} 

    }
    public function update_user_profile_page_third(){      

      $data=$this->Common->UpdateData('users',array('influential_in'=>json_encode($_POST['influentialin']),'influential_out'=>json_encode($_POST['influentialnotin']),'uncomfortable_representing'=>$_POST['uncon_represen']),array('id'=>$this->session->userId2));
     if($data)
      {echo 101;}
     else{echo 102;} 

    }
    


    
}
  