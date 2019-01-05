<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {	

	public function __construct(){
        parent::__construct();
        $this->load->model('Common'); 
        $this->load->library('form_validation');
		$this->load->library('session');
		//$this->load->library('encrypt');
		$this->data = array();		
		
		if(empty($this->session->userdata('is_admin')) && ($this->uri->segment(2)!='index' && $this->uri->segment(2)!='login')) redirect('admin/index');			
		
		if(!empty($this->session->userdata('is_admin')) && ($this->uri->segment(2)=='index' || $this->uri->segment(2)=='login')) redirect('admin/dashboard');
		
        $global_data = array();
        $this->load->vars($global_data);
         $nameset=  $this->db->get_where('site_settings',array('option_name'=>'website_name'))->row()->option_value;
            if(empty($nameset))
            {
             $this->nameset='';
            }
            else
            {
             $this->nameset = Ucfirst($nameset);
            }
		
    }
	public function index()
	{ 
		if(!empty($this->session->userdata('is_admin')))
		{
           redirect('admin/dashboard');
		}else
		{
           $this->load->view('admin/login');
		}
		
	}

	public function influencer_users()
	{
		if(!empty($this->input->post()))
	       {
	       }else
	       {
	       	 $this->data['title']= $this->nameset."- Admin-Influencer List";
	         $this->data['seekers'] = $this->Common->getData('users',array('status != "2"  && `type` =' => "1"),array('id'=>'desc'),500);
	         $this->data['titles'] ='Influencer';
	          $this->load->view('admin/users',$this->data);
	     
	       }
	}

	public function brands_users()
	{
		if(!empty($this->input->post()))
	       {
	       }else
	       {
	       	 $this->data['title']= $this->nameset."- Admin-Brands List";
	         $this->data['seekers'] = $this->Common->getData('users',array('status != "2"  && `type` =' => "2"),array('id'=>'desc'),500);
	         $this->data['titles'] ='Brands';
	          $this->load->view('admin/users',$this->data);
	     
	       }
	}
	
	public function faq()
	{
	    $this->data['title']= $this->nameset.'- Admin-FAQ';
	    $this->data['faq'] = $this->Common->getData('faq');
		$this->load->view('admin/faq',$this->data);
	}
    public function add_faq()
    {
        $this->data['title']= $this->nameset.'- Admin-FAQ';
            if(!empty($this->input->get('id'))){  
             $this->data['faq'] = $this->Common->getData('faq',array('id'=>$this->input->get('id')));
            $this->load->view('admin/add-faq',$this->data);
            }
	  else{
	      $this->load->view('admin/add-faq');
	  }
	}
	
	public function add_endorsements()
    {
        $this->data['title']= $this->nameset.'- Admin-Endorsements';
            if(!empty($this->input->get('id'))){  
             $this->data['endorsements'] = $this->Common->getData('endorsements',array('id'=>$this->input->get('id')));
            $this->load->view('admin/add-endorsements',$this->data);
            }
	  else{
	      $this->load->view('admin/add-endorsements');
	  }
	}
		
	
	public function custom($action='',$tbl='',$rediect='',$error='',$name='')
	{
	    
	    $name = $this->input->get('name');
	    $error = $this->input->get('error');
	    $redirect = $this->input->get('redirect');
	    $action= $this->input->get('do');
	    $tbl=$this->input->get('tbl');
	    
	    if(!empty($tbl))
	    {
	       if(!empty($this->input->post()))
	       {
	           if($action=='add')
	           {
	               $data= array();
	              
                        if(!empty($this->input->post('id')))
                        {
                            $id= $this->input->post('id');
                        }
                        else
                        {
                           $id=''; 
                        }
                          if(empty($_POST['id']))
                          {
                              $v1; $v2;
                               unset($_POST['id']);
                               foreach($this->input->post() as $key=>$value)
                                {
                                  $data[$key]=$value;
                                  reset($data);
                                   $first_key = key($data);
                                    $v1= $first_key;
                                 
                                   $v2= array_values($data)[0];
                                 
                                }
                                 if(!$this->Common->getData($tbl,array($v1=>$v2)))
                                 {
                                    $this->session->set_flashdata('success', 'Added Successfully!!');
                                    $this->Common->InsertData($tbl,$data);  
                                 }
                                   else
                                  {
                                     $this->session->set_flashdata('error', $name.' is Already Exists');
                                     redirect('admin/'.$error);
                                  }
                               
                          }
                          else
                          {
                              unset($_POST['id']);
                              $v1; $v2;
                               foreach($this->input->post() as $key=>$value)
                                {
                                  $data[$key]=$value;
            
                                    reset($data);
                                    $first_key = key($data);
                                     $v1= $first_key;
                                 
                                    $v2= "'".array_values($data)[0]."'"; 
                                  
                               
                                }
                                
                              if(!$this->Common->getData($tbl,$v1."=".$v2." And id!=".$id))
                              {
                                 
                                 $this->Common->UpdateData($tbl,$data,array('id'=>$id));
                                $this->session->set_flashdata('success', 'Updated Successfully!!');
                              }
                              else
                              {
                                  
                                 $this->session->set_flashdata('error', $name.' is Already Exists');
                                 redirect('admin/'.$error.'?id='.$id);
                              }
                             
                             
                          }
                   
	           }
	       }
	    }else
	    {
	        $this->session->set_flashdata('success', 'Error Please try again');
	    }
	    
	    	redirect($redirect);
	}
	
	public function delete()
	{
	    if(!empty($this->input->post('del_id')))
	       {
	        $this->Common->DeleteData($this->input->post('del_tbl'),array('id'=>$this->input->post('del_id')));
	          echo 'done';
	          die;
	       }
	       else
	       {
	           echo 'not done';
	       }
	   die;
	}
	
	
	public function status()
	{
	    $status_id = $this->input->Post('status_id');
	    $status = $this->input->post('status');
	    if($status==1){
	        $s = '0';
	        
	    }
	    if($status==0){
	        $s = '1';
	    }
	    if(!empty($status_id))
	       {
	        $this->Common->UpdateData($this->input->post('status_tbl'),array('status'=>$s),array('id'=>$status_id));
	          echo 'done';
	          die;
	       }
	       else
	       {
	           echo 'not done';
	       }
	   die;
	    
	}
	
	public function login()
	{
		if($this->input->post('email')){
		$email = $this->input->post('email',true); 
		$password = $this->input->post('password',true); 
		$data = $this->Common->getData('tbl_admin',array('email'=>$email,'password'=>md5($password)),"","",1);
		if(count($data)>0){
			$newdata = array(
					'is_admin'  => $data->is_admin,
					'userId'  => $data->id,
					'email'     => $data->email,
					'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('admin/dashboard');
		}else{
			$this->session->set_flashdata('error', 'Wrong email or password!!');
			redirect('admin/index');
		}
		
		} else redirect('admin/index'); 
	}
	
	public function dashboard()
	{
	    $this->data['title']= $this->nameset.'- Admin-Dashboard';
    	$this->data['emp'] = $this->Common->getData('users',array('status'=>'1','type'=>'1'),"");
    	$this->data['job'] = $this->Common->getData('users',array('status'=>'1','type'=>'2'),"");
    	$this->data['remp'] = $this->Common->getData('employers',array('status'=>'1'),"");
    		$this->data['seekers'] = $this->Common->getData('categorys',array('status'=>'1'),array('id'=>'desc'));
    	$this->data['seeker'] = $this->Common->getData('users',array('status'=>'1','type'=>'2'),array('id'=>'desc'),5);
	   	$this->load->view('admin/index',$this->data);
	}	
	
	public function my_account()
	{
		$this->data['user'] = $this->Common->getData('tbl_admin',array('id'=>$this->session->userdata('userId')),"","",1);
	   	$this->load->view('admin/my-account',$this->data);
	}
	
	public function contact_us()
	{
	   $this->data['title']= $this->nameset.'- Admin-Contact Us';
		$this->data['contact'] = $this->Common->getData('site_settings');
	   	$this->load->view('admin/contact-us',$this->data);
	}	
	
	public function Updatecontactus()
	{
	    if(!empty($this->input->post())){
	      
            foreach($_POST as $key=>$value)
            {
                  if(!$this->Common->getData('site_settings',array('option_name'=>$key)))
                  {
                     $this->Common->InsertData('site_settings',array('option_name'=>$key)); 
                     $this->Common->UpdateData('site_settings',array('option_value'=>$value),array('option_name'=>$key));
                  }
                  else
                  {
                     $this->Common->UpdateData('site_settings',array('option_value'=>$value),array('option_name'=>$key));
                  }
            }
            
			$this->session->set_flashdata('success', 'Contact Page Updated Successfully!!');
		}
		redirect('admin/contact-us');
	}
	
	
	
	public function updateprofile()
	{
	    
        if(!empty($_FILES) && isset($_FILES['profile']['name']) && $_FILES['profile']['name']!='')
        {
        		$config = array(
        			'upload_path'   => 'assets/admin/app-assets/images/admin_profile',
        			'allowed_types' => 'gif|jpg|png|jpeg',
        			'overwrite'     => 1,     
        			'encrypt_name' => true			
        		);
        		    $_FILES['files']['name'] = $_FILES['profile']['name'];
        			$_FILES['files']['type'] = $_FILES['profile']['type'];
        			$_FILES['files']['tmp_name'] = $_FILES['profile']['tmp_name'];
        			$_FILES['files']['error'] = $_FILES['profile']['error'];
        			$_FILES['files']['size'] = $_FILES['profile']['size'];
        			
        			  $this->load->library('upload', $config);
        	
        		if (!$this->upload->do_upload('files'))
                    {
                            $this->session->set_flashdata('error', 'Opps error to Upload Image');
                    }
                    else
                    {
                          $data = array('upload_data' => $this->upload->data());
                    }
                     
        		
        		if(!empty($data))
        		{
        			 $this->Common->UpdateData('tbl_admin',array('avatar'=>'assets/admin/app-assets/images/admin_profile/'.$data['upload_data']['file_name']),array('id'=>$this->session->userdata('userId')));
        		}
        }
	
	
		if(!empty($this->input->post())){
		   
				$this->Common->UpdateData('tbl_admin',array('first_name'=>$this->input->post('first_name'),'last_name'=>$this->input->post('last_name'),'email'=>$this->input->post('email'),'phone'=>$this->input->post('phone')),array('id'=>$this->session->userdata('userId')));
				
			if(empty($this->input->post('opassword'))){	
			$this->session->set_flashdata('success', 'Profile Updated Successfully!!');
			}
			
			$user = $this->Common->getData('tbl_admin',array('id'=>$this->session->userdata('userId')),"","",1);
			
			if(!empty($this->input->post('opassword')) && !empty($this->input->post('npassword'))){
			   if(($this->input->post('npassword')) != ($this->input->post('cpassword'))){
			       	$this->session->set_flashdata('error', 'New Password do not match with Confirm Password');
				}
			elseif($user->password==md5($this->input->post('opassword')) && !empty($this->input->post('opassword'))){
				$this->Common->UpdateData('tbl_admin',array('password'=>md5($this->input->post('npassword'))),array('id'=>$this->session->userdata('userId')));
				$this->session->set_flashdata('success', 'Password changed Successfully!!');			
				}else {
				$this->session->set_flashdata('error', 'Old password doesn\'t match!!');
				}
            
			}
		
			
			
		}
		
		redirect('admin/my-account');
	}
	
	public function site_setting()
	{
	    $this->data['title']= $this->nameset.'- Admin-Site Settings';
	    $this->data['setting']= $this->Common->getData('site_settings'); 
	   $this->load->view('admin/site-setting',$this->data);
	}
	
	public function Updatesetting()
	{ 
	    if(!empty($_FILES['site_logo']['name']))
        {     
           // FCPATH
        		$config = array(
        			'upload_path'   => 'assets/admin/app-assets/images/photos',
        			'allowed_types' => 'gif|jpg|png',
        			'overwrite'     => 1,     
        			'encrypt_name' => true			
        		);

        		    $_FILES['files']['name'] = $_FILES['site_logo']['name'];
        			$_FILES['files']['type'] = $_FILES['site_logo']['type'];
        			$_FILES['files']['tmp_name'] = $_FILES['site_logo']['tmp_name'];
        			$_FILES['files']['error'] = $_FILES['site_logo']['error'];
        			$_FILES['files']['size'] = $_FILES['site_logo']['size'];
        			
        			  $this->load->library('upload', $config);
        	
        		if (!$this->upload->do_upload('files'))
                    {   //echo 'not';
                      $errors = $this->upload->display_errors();
                     // echo '<pre>'; print_r($errors); 
                    //flashMsg($errors);
                            $this->session->set_flashdata('error', $errors);
                    }
                    else
                    {     
                          $data = array('upload_data' => $this->upload->data());
                        
                    }
                     
        		
        		if(!empty($data))
        		{
        			  $this->Common->UpdateData('site_settings',array('option_value'=>'assets/admin/app-assets/images/photos/'.$data['upload_data']['file_name']),array('option_name'=>'site_logo'));
        		}
        			 	
        			
        }
	    if(!empty($this->input->post())){
	      
            foreach($_POST as $key=>$value)
            {
                  if(!$this->Common->getData('site_settings',array('option_name'=>$key)))
                  {
                     $this->Common->InsertData('site_settings',array('option_name'=>$key)); 
                     $this->Common->UpdateData('site_settings',array('option_value'=>$value),array('option_name'=>$key));
                  }
                  else
                  {
                     $this->Common->UpdateData('site_settings',array('option_value'=>$value),array('option_name'=>$key));
                  }
            }
            
			$this->session->set_flashdata('success', 'Updated Successfully!!');
		}
		
		redirect('admin/site-setting');
	}
	
	
	
	public function skills()
	{
	    $this->data['title']= $this->nameset.'- Admin-Skills';
	    $this->data['skills'] = $this->Common->getData('skills',"",array('id'=>'desc'));
	  $this->load->view('admin/skills',$this->data);  
	}
	
	
	
	public function content_pages()
	{
	    $this->data['title']= $this->nameset.'- Admin-Content Page';
	    $this->load->view('admin/content-pages',$this->data); 
	}
	
	public function content_upload_page()
	{
	    $this->load->view('admin/content-upload-page');
	}
	
	
	
	/*public function employers_profile()
	{
	    $this->load->view('admin/employers-profile');
	}
	
	public function employers_posted_jobs()
	{
	    $this->load->view('admin/employers-posted-jobs');
	}*/
	
	public function newsletters()
	{
	    $this->data['title']= $this->nameset.'- Admin-Newsletters';
	    $this->data['new'] = $this->Common->getData('contactus',"",array('id'=>'desc'));
	    $this->load->view('admin/newsletters',$this->data);
	}
	
	public function message()
	{
	    $this->data['title']= $this->nameset.'- Admin-Messages';
	    $this->load->view('admin/messages',$this->data);
	}
	public function inbox()
	{
	    $this->data['title']= $this->nameset.'- Admin-inbox';
	    $this->load->view('admin/inbox',$this->data);
	}
	public function sent()
	{
	    $this->data['title']= $this->nameset.'- Admin-sent';
	    $this->load->view('admin/sent',$this->data);
	}
	public function draft()
	{
	    $this->data['title']= $this->nameset.'- Admin-draft';
	    $this->load->view('admin/draft',$this->data);
	}
	public function trash()
	{
	    $this->data['title']= $this->nameset.'- Admin-trash';
	    $this->load->view('admin/trash',$this->data);
	}
	public function starred()
	{
	    $this->data['title']= $this->nameset.'- Admin-starred';
	    $this->load->view('admin/starred',$this->data);
	}
	
	public function group()
	{
	    $this->data['title']= $this->nameset.'- Admin-group';
	    $this->load->view('admin/create-group',$this->data);
	}
	public function viewmail()
	{
	    $this->data['title']= $this->nameset.'- Admin-viewmail';
	    $this->load->view('admin/viewmail',$this->data);
	}
	
	public function template()
	{
	    $this->data['title']= $this->nameset.'- Admin-Email template';
	    $this->load->view('admin/template',$this->data);
	}
	
	public function compose()
	{
	    $this->data['title']= $this->nameset.'- Admin-Compose';
	    $this->load->view('admin/compose',$this->data);
	}
	
	public function job_postings()
	{
	    $this->data['title']= $this->nameset.'- Admin-Subscriptions';
	    $this->data['packages'] = $this->Common->getData('packages',"",array('id'=>'desc'));
	    $this->load->view('admin/job-postings',$this->data);
	}
	
	public function transaction()
	{
	    $this->data['title']= $this->nameset.'- Admin-Transactions';
	    $this->data['transactions'] = $this->Common->getData('emp_packages',"",array('id'=>'desc'));
	    
	    $this->load->view('admin/transaction',$this->data);
	}
	
	public function transactionview()
	{
	    if($this->input->get('id'))
	    {
	        $id= $this->input->get('id');
	        
	    }
	    $this->data['transactions'] = $this->Common->getData('emp_packages',array('id'=>$id));
	    $this->data['packages'] = $this->Common->getData('packages',array('id'=>$this->data['transactions'][0]->package_id));
	    $this->data['users']= $this->Common->getData('employers',array('id'=>$this->data['transactions'][0]->user_id));
	    $this->load->view('admin/tarnsactionview',$this->data);
	}
	
	public function edit_content_page()
	{
	    $this->data['title']= $this->nameset.'- Admin-Home Content';
	     $this->data['home'] = $this->Common->getData('site_settings');
	    $this->load->view('admin/edit-content-page',$this->data);
	}
	
    public function Updatehome($fieldName='')
	{
	    //echo $_SERVER['DOCUMENT_ROOT']; die;
          if(isset($_POST['all_images']) && !empty($_POST['all_images']))
          {
            $all_images=$_POST['all_images'];
            unset($_POST['what_to_do']);
            unset($_POST['all_images']);
            $all_images[0];
            $dd = json_decode($all_images[0]);
            $img1='';
            if(!empty($dd))
            {
                
                $data = $this->Common->getData('site_settings',array('option_name'=>'all_images'));

	           if(!empty($data[0]->option_value) && !empty($data))
	           {
	               $explod = explode(',',$data[0]->option_value);
	               $ddk = '';
	               foreach($dd as $img)
                    {
                      $ddk = $img;
                    }
	               $dd2 = array_merge($explod,$ddk);
	               $img1 = implode(',',$dd2);
	                
	           }else
	           {
                    foreach($dd as $img)
                    {
                      $img1 = implode(',',$img);
                    }
	           }
                 
            }
          }
    		
	         
	      if(!empty($_FILES))
        {
        	//	echo"<pre>"; print_r($_FILES); die;
        	$files = $_FILES;
            foreach($files as $key=>$f){
    	            if($f['name']){
        	            $image = time().$f['name'];
        	            //$target_file = base_url("assets/employer/images/$image");
        	            
        	           // $my_site_root = $this->uri->segment(0);
        	           // echo $my_site_root; die;
        	            
        	            $target_file = $_SERVER['DOCUMENT_ROOT']."/".SITE."/assets/admin/app-assets/images/photos/$image";
        	            
                    	if (move_uploaded_file($f["tmp_name"], $target_file)) {
                    	    $d = "assets/admin/app-assets/images/photos/$image";
                        if(!$this->Common->getData('site_settings',array('option_name'=>$key)))
                        {
                         $this->Common->InsertData('site_settings',array('option_name'=>$key)); 
                         $this->Common->UpdateData('site_settings',array('option_value'=>$d),array('option_name'=>$key));

                        }else
                        {
                          $this->Common->UpdateData('site_settings',array('option_value'=>$d),array('option_name'=>$key));
                        }
                            
                        }
    	            }
    	        }
        }
	    
	    if(!empty($this->input->post())){
            foreach($_POST as $key=>$value)
            {
                  if(!$this->Common->getData('site_settings',array('option_name'=>$key)))
                  {
                     $this->Common->InsertData('site_settings',array('option_name'=>$key)); 
                     $this->Common->UpdateData('site_settings',array('option_value'=>$value),array('option_name'=>$key));
                     if(!$this->Common->getData('site_settings',array('option_name'=>'all_images')))
                     {
                      $this->Common->InsertData('site_settings',array('option_name'=>'all_images')); 
                       if(!empty($img1))
                         { 
                          $this->Common->UpdateData('site_settings',array('option_value'=>$img1),array('option_name'=>'all_images'));
                         }
                         $this->session->set_flashdata('success', 'Updated Successfully!!');
                    }
                  }
                  else
                  {
                      if(!empty($img1))
                         { 
                            $this->Common->UpdateData('site_settings',array('option_value'=>$img1),array('option_name'=>'all_images')); 
                         }
                     $this->Common->UpdateData('site_settings',array('option_value'=>$value),array('option_name'=>$key));
                     $this->session->set_flashdata('success', 'Updated Successfully!!');
                  }
            }
            
			
		}
		
		redirect('admin/content-pages');
	}
	
	public function customendorsements($action='',$tbl='',$rediect='',$error='',$name='')
	{
	    $name = $this->input->get('name');
	    $error = $this->input->get('error');
	    $redirect = $this->input->get('redirect');
	    $action= $this->input->get('do');
	    $tbl=$this->input->get('tbl');
	    
	    
	    if(!empty($tbl))
	    {
	       if(!empty($this->input->post()))
	       {
	           if($action=='add')
	           {
	               $data= array();
	              
                        if(!empty($this->input->post('id')))
                        {
                            $id= $this->input->post('id');
                        }
                        else
                        {
                           $id=''; 
                        }
                          if(empty($_POST['id']))
                          {
                               foreach($this->input->post() as $key=>$value)
                                {
                                  $data[$key]=$value;
                                }
                                 if($this->Common->InsertData($tbl,$data))
                                 {
                                     $insert_id = $this->db->insert_id();
                                    if(!empty($_FILES))
                                    {
                                    //	echo"<pre>"; print_r($_FILES); die;
                                    $files = $_FILES;
                                    foreach($files as $key=>$f){
                                    if($f['name']){
                                    $image = time().$f['name'];
                                    
                                    $target_file = $_SERVER['DOCUMENT_ROOT']."/".SITE."/assets/admin/app-assets/images/endorsements/$image";
                                    
                                    if (move_uploaded_file($f["tmp_name"], $target_file)) {
                                    $d = "assets/admin/app-assets/images/endorsements/$image";
                                    
                                    $this->Common->UpdateData($tbl,array('profile_img'=>$d),array('id'=>$insert_id));
                                    }
                                    }
                                    }
                                    }
                                     
                                     
                                    $this->session->set_flashdata('success', ucfirst($name).' Added Successfully!!');
                                 }
                                   else
                                  {
                                     $this->session->set_flashdata('error','Error To add '.ucfirst($name));
                                     redirect('admin/'.$error);
                                  }
                               
                          }
                          else
                          {
                              unset($_POST['id']);
                              
                               foreach($this->input->post() as $key=>$value)
                                {
                                  $data[$key]=$value;
                                }
                                
                              if($this->Common->UpdateData($tbl,$data,array('id'=>$id)))
                              {
                                    if(!empty($_FILES))
                                    {
                                    //echo"<pre>"; print_r($_FILES); die;
                                    $files = $_FILES;
                                    foreach($files as $key=>$f){
                                    if($f['name']){
                                    $image = time().$f['name'];
                                    
                                    $target_file = $_SERVER['DOCUMENT_ROOT']."/".SITE."/assets/admin/app-assets/images/endorsements/$image";
                                   
                                    if (move_uploaded_file($f["tmp_name"], $target_file)) {
                                    $d = "assets/admin/app-assets/images/endorsements/$image";
                                    
                                    $this->Common->UpdateData($tbl,array('profile_img'=>$d),array('id'=>$id));
                                    }
                                    }
                                    }
                                    }
                            
                                $this->session->set_flashdata('success', ucfirst($name).' Updated Successfully!!');
                              }
                              else
                              {
                                  
                                 $this->session->set_flashdata('error','Error to update '.ucfirst($name));
                                 redirect('admin/'.$error.'?id='.$id);
                              }
                             
                             
                          }
                            
                            
                   
	           }
	       }
	    }else
	    {
	        $this->session->set_flashdata('success', 'Error Please try again');
	    }
	    
	    	redirect($redirect);
	    
	}
	
	public function edit_terms()
	{
	    $this->data['title']= $this->nameset.'- Admin-Terms And Conditions';
	    $this->data['terms'] = $this->Common->getData('site_settings');
	    $this->load->view('admin/edit-terms',$this->data);
	}
	
	public function edit_policy()
	{
	    $this->data['title']= $this->nameset.'- Admin-Policy Content';
	    $this->data['policy'] = $this->Common->getData('site_settings');
	    $this->load->view('admin/edit-policy',$this->data);
	}
	
	public function edit_about()
	{
	    $this->data['title']= $this->nameset.'- Admin-About Us';
	    $this->data['about'] = $this->Common->getData('site_settings');
	    $this->load->view('admin/edit-about',$this->data);
	}
	
		public function edit_endorsements()
	{
	    $this->data['title']= $this->nameset.'- Admin-Endorsements';
	   // $datae = array();
	    //$datae['endorsements_heading']= $this->Common->getData('site_settings',array('option_name'=>'endorsements_heading'));
	    //$this->data['endorsements'] = $datae;
	    $this->data['endorsements'] = $this->Common->getData('site_settings');
	    $this->load->view('admin/edit-endorsements',$this->data);
	}
	
	public function endorsements()
	{
        $this->data['title']= $this->nameset.'- Admin-Endorsements';
        $this->data['endorsements'] = $this->Common->getData('endorsements');
    	$this->load->view('admin/endorsements_list',$this->data);
	}
	
		public function edit_recommendations()
	{
	    $this->data['title']= $this->nameset.'- Admin-Recommendations';
	    $this->data['recommendations'] = $this->Common->getData('site_settings');
	    $this->load->view('admin/edit-recommendations',$this->data);
	}
	
		public function edit_lucasgroup()
	{
	    $this->data['title']= $this->nameset.'- Admin-Lucas Group';
	    $this->data['groups'] = $this->Common->getData('site_settings');
	    $this->load->view('admin/edit-lucasgroup',$this->data);
	}
	
	public function edit_job_postings($id='')
	{
	    if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	    }
	    
	    if($id=='')
	    {
	      $this->load->view('admin/edit-job-postings');
	    }
	    else
	    {
	         $this->data['packages'] = $this->Common->getData('packages',array('id'=>$id));
	        $this->load->view('admin/edit-job-postings',$this->data);
	    }
	   // $this->load->view('admin/edit-job-postings');
	}
	
	public function edit_posted_jobs()
	{
	    $this->load->view('admin/edit-posted-jobs');
	}
	
	public function add_job_postings($id='')
	{
	     
	    if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	    }
	    
	    if($id=='')
	    {$this->data['title']= $this->nameset.'- Admin-Add Subscription';
	      $this->load->view('admin/add-job-postings',$this->data);
	    }
	    else
	    {$this->data['title']= $this->nameset.'- Admin-Edit Subscription';
	         $this->data['packages'] = $this->Common->getData('packages',array('id'=>$id));
	        $this->load->view('admin/add-job-postings',$this->data);
	    }
	}
	
	
	
	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Logout successfully!!');
		redirect('admin/index');		
	}

	public function mulifileuploading($value='')
	{
		  //print_r($_FILES);
		$sourcePath = $_FILES['files']['tmp_name']; 
            $file =time().$_FILES['files']['name'];
            $targetPath ="assets/admin/app-assets/images/photos/".$file; 
           move_uploaded_file($sourcePath, $targetPath);
           echo $file;
           //echo 'sdfsfd';
	}
	
	 public function removehomeimg()
	 {
	     
	     if($this->input->post('name') && !empty($this->input->post('name')))
	     {
	         $data = $this->Common->getData('site_settings',array('option_name'=>'all_images'));

	           if(!empty($data[0]->option_value) && !empty($data))
	           {
	               $explod = explode(',',$data[0]->option_value);
	               $new = array();
	               foreach($explod as $expo)
	               {
	                   if($expo!=$this->input->post('name'))
	                   {
	                     $new[]  = $expo;
	                   }
	               }
	                if(!empty($new))
	                {
	                  $update=  implode(',',$new);
	                  $this->Common->UpdateData('site_settings',array('option_value'=>$update),array('option_name'=>'all_images'));
	                }else
	                {
	                   $this->Common->UpdateData('site_settings',array('option_value'=>""),array('option_name'=>'all_images'));
	                }
	                echo 'done';
	                
	           }
	     }else
	     {
	         echo 'notdone';
	     }
	     die;
	     
	 }
}
