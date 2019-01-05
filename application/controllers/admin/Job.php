<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {	

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
	
	public function industry_type()
	{
	    $this->data['title']= $this->nameset.'- Admin-Industry Type';
	    $this->data['industry'] = $this->Common->getData('industry_type','',array('id'=>'desc'));
	    $this->load->view('admin/industry-type',$this->data);
	}
	
	public function custom($action='',$tbl='',$rediect='',$error='',$name='',$message='')
	{
	    
	    $name = $this->input->get('name');
	    $error = $this->input->get('error');
	    $redirect = $this->input->get('redirect');
	    $action= $this->input->get('do');
	    $tbl=$this->input->get('tbl');
	    if($this->input->get('message'))
	    {
	      $message = $this->input->get('message').' ';
	    }
	    
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
                                    $this->session->set_flashdata('success', $message.'Added Successfully!!');
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
                                $this->session->set_flashdata('success', $message.'Updated Successfully!!');
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
	
	public function customfaq($action='',$tbl='',$rediect='',$error='',$name='',$message='')
	{
	    
	    $name = $this->input->get('name');
	    $error = $this->input->get('error');
	    $redirect = $this->input->get('redirect');
	    $action= $this->input->get('do');
	    $tbl=$this->input->get('tbl');
	    if($this->input->get('message'))
	    {
	      $message = $this->input->get('message').' ';
	    }
	    
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
                        
                            if($this->input->post('questionfor'))
                            {
                            $questionfor= implode(',',$this->input->post('questionfor'));
                            }
                            else
                            {
                            $questionfor=''; 
                            }
                          if(empty($_POST['id']))
                          {
                              $v1; $v2;
                               unset($_POST['id']);
                               $v1 = 'question';
                               $v2 = $this->input->post('question');
                                $data = array(
                                    'question_for'=>$questionfor,
                                    'question'=>$this->input->post('question'),
                                    'answer'=>$this->input->post('answer')
                                    );
                               
                                 if(!$this->Common->getData($tbl,array($v1=>$v2)))
                                 {
                                    $this->session->set_flashdata('success', $message.'Added Successfully!!');
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
                               
                               $data = array(
                                
                                );
                                $v1 = "question";
                               $v2 = $this->input->post('question');
                                $data = array(
                                    'question_for'=>$questionfor,
                                    'question'=>$this->input->post('question'),
                                    'answer'=>$this->input->post('answer')
                                    );
                              if(!$this->Common->getData($tbl,array($v1=>$v2,'id !='=>$id)))
                              {
                                 
                                 $this->Common->UpdateData($tbl,$data,array('id'=>$id));
                                $this->session->set_flashdata('success', $message.'Updated Successfully!!');
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
	
	public function add_industry_type($id='')
	{
	    if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	    }
	    
	    if($id=='')
	    {
	       $this->data['title']= $this->nameset.'- Admin-Add Industry Type';
	      $this->load->view('admin/add-industry-type',$this->data);
	    }
	    else
	    {   $this->data['title']= $this->nameset.'- Admin-Edit Industry Type';
	         $this->data['industry'] = $this->Common->getData('industry_type',array('id'=>$id));
	        $this->load->view('admin/add-industry-type',$this->data);
	    }
	}
	
	public function job_location()
	{    
	    $this->data['title']= $this->nameset.'- Admin-Job Locations';
      $this->data['location'] = $this->Common->getData('job_location','',array('id'=>'desc'));
      $this->load->view('admin/job_location',$this->data);   
	}
	
	public function add_job_location($id='')
	{
	   if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	    }
	    
	    if($id=='')
	    {
	       $this->data['title']= $this->nameset.'- Admin-Add Job Location';
	      $this->load->view('admin/add-job-location',$this->data);
	    }
	    else
	    {
	        $this->data['title']= $this->nameset.'- Admin-Edit Job Location';
	        $this->data['industry'] = $this->Common->getData('job_location',array('id'=>$id));
	        $this->load->view('admin/add-job-location',$this->data);
	    } 
	}
	
	public function Category_type()
	{  
	    $this->data['title']= $this->nameset.'- Admin-Categories';
	    $this->data['category'] = $this->Common->getData('categorys','',array('id'=>'desc'));
	    $this->load->view('admin/category-type',$this->data);
	}
	
	public function add_category_type($id='')
	{
	    if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	    }
	    
	    if($id=='')
	    {
	        $this->data['title']= $this->nameset.'- Admin-Add Category';
	      $this->load->view('admin/add-category-type',$this->data);
	    }
	    else
	    {
	        $this->data['title']= $this->nameset.'- Admin-Edit Category';
	        $this->data['industry'] = $this->Common->getData('categorys',array('id'=>$id));
	        $this->load->view('admin/add-category-type',$this->data);
	    } 
	}
	
	public function Qualification_type()
	{
	    $this->data['title']= $this->nameset.'- Admin-Job Qualification';
	    $this->data['category'] = $this->Common->getData('qualification','',array('id'=>'desc'));
	   $this->load->view('admin/Qualification-type',$this->data);
	}
	
	public function add_qualification_type($id='')
	{
	   if(!empty($this->input->get('id')))
	    {
	       $id =$this->input->get('id');
	    }
	    
	    if($id=='')
	    {
	        $this->data['title']= $this->nameset.'- Admin-Add Qualification';
	      $this->load->view('admin/add-qualification-type',$this->data);
	    }
	    else
	    {
	        $this->data['title']= $this->nameset.'- Admin-Edit Qualification';
	        $this->data['industry'] = $this->Common->getData('qualification',array('id'=>$id));
	        $this->load->view('admin/add-qualification-type',$this->data);
	    }  
	}
	
	public function delete()
	{
	    if(!empty($this->input->post('del_id')))
	       {
	           if($this->input->post('del_tbl')=='employers')
	           {
	              $this->Common->UpdateData($this->input->post('del_tbl'),array('status'=>'3'),array('id'=>$this->input->post('del_id'))); 
	              echo 'done';
	               die; 
	           }
	           elseif($this->input->post('del_tbl')=='jobs')
	           {
	             $this->Common->UpdateData($this->input->post('del_tbl'),array('status'=>'3'),array('id'=>$this->input->post('del_id'))); 

                   $job=  $this->Common->getData("jobs", array('id'=>$this->input->post('del_id')));
                                    $data2 = [
                                    'from_for' =>  'Admin',
                                    'from_id' => $_SESSION['userId'],
                                    'to_for' => 'Employe',
                                    'to_id' => $job[0]->employer_id,
                                    'about_id' => $this->input->post('del_id'),
                                    'about'=>'deletejob',
                                    'message' => 'Admin Deleted Job <b>'.$job[0]->title.'</b>',
                                    'status' => 1,  
                                    ];
                         $this->Common->InsertData('notifications', $data2);
                   echo 'done';
	               die;  
	           }elseif($this->input->post('del_tbl')=='users')
	           {
	           	$this->Common->UpdateData($this->input->post('del_tbl'),array('status'=>'2'),array('id'=>$this->input->post('del_id'))); 
	              echo 'done';
	               die; 
	           }else
	           {
	            $this->Common->DeleteData($this->input->post('del_tbl'),array('id'=>$this->input->post('del_id')));
	          echo 'done';
	          die; 
	           }
	       
	       }
	       else
	       {
	           echo 'not done';
	       }
	   die;
	    
	}
	
	
}
