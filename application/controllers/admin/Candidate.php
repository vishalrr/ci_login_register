<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {	

	public function __construct(){
        parent::__construct();
        $this->load->model('Common');  
		$this->load->library('session');	
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
	  
	}
	
	public function seeker_profile()
	{
	    $this->data['title']= $this->nameset."- Admin-Seeker's Profile List";
	    $this->data['seekers'] = $this->Common->getData('candidates',"",array('id'=>'desc'),500);
	    $this->load->view('admin/seeker-profile',$this->data);
	}
	
	public function edituser_profile($id='')
	{
	    $this->data['title']= $this->nameset."- Admin-Edit User Details";
	    if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	        $this->data['seekers'] = $this->Common->getData('candidates',array('id'=>$id));
	        
            $this->data['location'] = $this->Common->getData('job_location',"",array('id'=>'desc'));
            $this->data['exp'] = $this->Common->getData('experience');
            $this->data['category'] = $this->Common->getData('categorys',"",array('id'=>'desc'));
            $this->data['edu'] = $this->Common->getData('qualification',"",array('id'=>'desc'));
           
          //  $this->data['applied']= $this->Common->getData('applied',array('user_id'=>$id,'status='=>1));
            $this->data['reponsedjob']= $this->Common->getData('interview_schedule',array('user_id'=>$id));
	       $this->load->view('admin/edituser-profile',$this->data); 
	    }
 
	}
	
	public function user_details($id='')
	{
	   if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	        $this->data['seekers'] = $this->Common->getData('users',array('id'=>$id));
	         $this->data['title']= $this->nameset.'- Admin-User Details';
	       $this->load->view('admin/user-details',$this->data);
	    }
	     
	}
	
	
	public function edit_seekers()
	{
	   if($this->input->post())
	   {
	       
	       if($this->input->post('skills'))
	           {
	               $skills= implode(',',$this->input->post('skills'));
	           }
	           else
	           {
	              $skills=''; 
	           }
	           if($this->input->post('education_level'))
	           {
	              $education_level= implode(',',$this->input->post('education_level')); 
	           }
	           else
	           {
	               $education_level='';
	           }
	           if($this->input->post('location'))
	           {
	              $location= implode(',',$this->input->post('location')); 
	           }
	           else
	           {
	               $location='';
	           }
	           
	      
	       
	      $id= $this->input->post('id');
	       unset($_POST['id']);
	       if($this->input->post('password') && !$this->input->post('confpassword'))
	       {
	           $this->session->set_flashdata('error', 'Cofirm Password is required');
	            redirect('admin/candidate/edituser-profile?id='.$id);
	       }
	       elseif(!$this->input->post('password') && $this->input->post('confpassword'))
	       {
	             $this->session->set_flashdata('error', 'Password is required');
	            redirect('admin/candidate/edituser-profile?id='.$id);
	       }
	       else
	       {
	           if($this->input->post('password') && $this->input->post('confpassword'))
	           {
    	           if($this->input->post('password') !=$this->input->post('confpassword'))
    	           {
    	                $this->session->set_flashdata("error", "Cofirm Password Doesn't Match");
    	                redirect('admin/candidate/edituser-profile?id='.$id);
    	           }else
    	           {
    	               $password = md5($this->input->post('password'));
    	               if(!$this->Common->getData('candidates',array('email'=>$this->input->post('email'),'id!='=>$id)))
                        {
                          
    	                   $this->Common->UpdateData('candidates',array('password'=>$password),array('id'=>$id));
                        }
    	           }
	           }
	           else
	           {
	               unset($_POST['password']);
	               unset($_POST['confpassword']);
	           }
	           
	            if(!empty($_FILES))
        {
        	
        	//	echo"<pre>"; print_r($_FILES); die;
        	if(!empty($_FILES['profile_pic']['name']))
        	{ $config = array(
        			'upload_path'   => 'assets/front/images/candidate',
        			'allowed_types' => 'gif|jpg|png',
        			'overwrite'     => 1,     
        			'encrypt_name' => true			
        		);
                    
        		    $_FILES['files']['name'] = $_FILES['profile_pic']['name'];
        			$_FILES['files']['type'] = $_FILES['profile_pic']['type'];
        			$_FILES['files']['tmp_name'] = $_FILES['profile_pic']['tmp_name'];
        			$_FILES['files']['error'] = $_FILES['profile_pic']['error'];
        			$_FILES['files']['size'] = $_FILES['profile_pic']['size'];
        				$this->load->library('upload', $config);
        	        $this->upload->initialize($config);
        		if ($this->upload->do_upload('files'))
                    {
                           $data = array('upload_data' => $this->upload->data());
                    }
        
        		if(!empty($data))
        		{
        		  	$dones=  $this->Common->UpdateData('candidates',array('profile_pic'=>'assets/front/images/candidate/'.$data['upload_data']['file_name']),array('id'=>$id));
        			
        		}
        	}
        		
        			if(!empty($_FILES['resume']['name']))
        	       { 
        	     $configs= array(
        			'upload_path'   => 'assets/front/resumes',
        			'allowed_types' => 'pdf|doc|docx|rft',
        			'overwrite'     => 1,     
        			'encrypt_name' => true			
        		);
                    
        		    $_FILES['filess']['name'] = $_FILES['resume']['name'];
        			$_FILES['filess']['type'] = $_FILES['resume']['type'];
        			$_FILES['filess']['tmp_name'] = $_FILES['resume']['tmp_name'];
        			$_FILES['filess']['error'] = $_FILES['resume']['error'];
        			$_FILES['filess']['size'] = $_FILES['resume']['size'];
        				$this->load->library('upload', $configs);
        	    $this->upload->initialize($configs);
        		if ($this->upload->do_upload('filess'))
                    {
                           $datas = array('upload_datas' => $this->upload->data());
                    }
        
        		if(!empty($datas))
        		{
        		    $donea=  $this->Common->UpdateData('candidates',array('resume'=>'assets/front/resumes/'.$datas['upload_datas']['file_name']),array('id'=>$id));
        			
        		}
                
        	}
	     
	        
	   
	   
	       
	    }
	           $information = array(
	               'first_name'=>$this->input->post('first_name'),
	               'last_name'=>$this->input->post('last_name'),
	               'email'=>$this->input->post('email'),
	               'phone'=>$this->input->post('phone'),
	               'skills'=>$skills,
	               'profile_for'=>$this->input->post('profile_for'),
	               'experience'=>$this->input->post('experience'),
	               'location'=>$location,
	               'education_level'=>$education_level,
	                'current_salary'=>$this->input->post('current_salary'),
	               );
	           
                        if(!$this->Common->getData('candidates',array('email'=>$this->input->post('email'),'id!='=>$id)))
                        {
                        
                         $this->Common->UpdateData('candidates',$information,array('id'=>$id));
                         $this->session->set_flashdata("success", "Seekers's Profile Upadted Successfully!!");
                          redirect('admin/candidate/seeker-profile');
                        }
                        else
                        {
                        $this->session->set_flashdata('error',' Email is Already Exists');
                        redirect('admin/candidate/edituser-profile?id='.$id);
                        }
	          
	       }
	      
	   }
	   redirect('admin/candidate/edituser-profile?id='.$id);
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
                                $data['skills']=implode(',',$this->input->post('skills'));
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
                              
        
	      $id=  $this->input->post('id');
	      
	       if(!empty($_FILES))
        {
        	
        	//	echo"<pre>"; print_r($_FILES); die;
        	if(!empty($_FILES['profile_pic']['name']))
        	{ $config = array(
        			'upload_path'   => 'assets/front/images/candidate',
        			'allowed_types' => 'gif|jpg|png',
        			'overwrite'     => 1,     
        			'encrypt_name' => true			
        		);
                    
        		    $_FILES['files']['name'] = $_FILES['profile_pic']['name'];
        			$_FILES['files']['type'] = $_FILES['profile_pic']['type'];
        			$_FILES['files']['tmp_name'] = $_FILES['profile_pic']['tmp_name'];
        			$_FILES['files']['error'] = $_FILES['profile_pic']['error'];
        			$_FILES['files']['size'] = $_FILES['profile_pic']['size'];
        				$this->load->library('upload', $config);
        	        $this->upload->initialize($config);
        		if ($this->upload->do_upload('files'))
                    {
                           $data = array('upload_data' => $this->upload->data());
                    }
        
        		if(!empty($data))
        		{
        		  	$dones=  $this->Common->UpdateData('candidates',array('profile_pic'=>'assets/front/images/candidate/'.$data['upload_data']['file_name']),array('id'=>$id));
        			
        		}
        	}
        		
        			if(!empty($_FILES['resume']['name']))
        	       { 
        	     $configs= array(
        			'upload_path'   => 'assets/front/resumes',
        			'allowed_types' => 'pdf|doc|docx|rft',
        			'overwrite'     => 1,     
        			'encrypt_name' => true			
        		);
                    
        		    $_FILES['filess']['name'] = $_FILES['resume']['name'];
        			$_FILES['filess']['type'] = $_FILES['resume']['type'];
        			$_FILES['filess']['tmp_name'] = $_FILES['resume']['tmp_name'];
        			$_FILES['filess']['error'] = $_FILES['resume']['error'];
        			$_FILES['filess']['size'] = $_FILES['resume']['size'];
        				$this->load->library('upload', $configs);
        	    $this->upload->initialize($configs);
        		if ($this->upload->do_upload('filess'))
                    {
                           $datas = array('upload_datas' => $this->upload->data());
                    }
        
        		if(!empty($datas))
        		{
        		    $donea=  $this->Common->UpdateData('candidates',array('resume'=>'assets/front/resumes/'.$datas['upload_datas']['file_name']),array('id'=>$id));
        			
        		}
                
        	}
	     
	        
	   
	   
	       
	    }
	              $datah = array();
                              unset($_POST['id']);
                              $v1; $v2;
                               foreach($this->input->post() as $key=>$value)
                                {
                                  $datah[$key]=$value;
            
                                    reset($datah);
                                    $first_key = key($datah);
                                     $v1= $first_key;
                                 
                                    $v2= "'".array_values($datah)[0]."'"; 
                                  
                               
                                }
                                
                                 $datah['skills']=implode(',',$this->input->post('skills'));
                                
                              if(!$this->Common->getData($tbl,$v1."=".$v2." And id!=".$id))
                              {
                                 
                                 $this->Common->UpdateData($tbl,$datah,array('id'=>$id));
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
	    
	    	redirect('admin/'.$redirect);
	}
	
	 public function profileimgopload($tbl='',$rediect='',$error='',$idd='')
	{
	     if($this->input->get('ids'))
	    {
	        $idd=$this->input->get('ids');
	    }
	    $error = $this->input->get('error');
	    $redirect = $this->input->get('redirect');
	     if($this->input->get('ids'))
	    {
	        $id=$this->input->get('ids');
	        $idd=$this->input->get('ids');
	        $redirect= $redirect.'?id='.$idd;
	        $error= $error.'?id='.$idd;
	    }
	   
	    $tbl=$this->input->get('tbl');
	    //echo ' error='.$error.' redirect= '.$redirect.' action='.$action.' tbl='.$tbl;
	    //die;
	    
	    if(!empty($_FILES))
	    {
	        if($this->input->get())
	        {
	            
	          	$config = array(
        			'upload_path'   => 'assets/front/images/candidate/',
        			'allowed_types' => 'gif|jpg|png',
        			'overwrite'     => 1,     
        			'encrypt_name' => true			
        		);
        		    $_FILES['files']['name'] = $_FILES['file']['name'];
        			$_FILES['files']['type'] = $_FILES['file']['type'];
        			$_FILES['files']['tmp_name'] = $_FILES['file']['tmp_name'];
        			$_FILES['files']['error'] = $_FILES['file']['error'];
        			$_FILES['files']['size'] = $_FILES['file']['size'];
        			
        			  $this->load->library('upload', $config);
        	
        		if (!$this->upload->do_upload('files'))
                    {
                            $this->session->set_flashdata('error', 'Opps error to Upload Image');
                           redirect('admin/'.$error.'?id='.$id);
                    }
                    else
                    {
                          $data = array('upload_data' => $this->upload->data());
                    }
                
        		if(!empty($data))
        		{
        			$done=  $this->Common->UpdateData($tbl,array('profile_pic'=>'assets/front/images/candidate/'.$data['upload_data']['file_name']),array('id'=>$id));
        		    if($done)
        		    {
        		        $this->session->set_flashdata('success', 'Image Upload Successfully');
        		        
        		    }
        		    else
        		    { $this->session->set_flashdata('error', 'Opps error to Upload Image');
        		        redirect('admin/'.$error.'?id='.$id);
        		    }
        		   redirect('admin/'.$redirect);
        		}
	   
	        }
	        redirect('admin/'.$redirect);
	    }
	}
	
	
	
}
