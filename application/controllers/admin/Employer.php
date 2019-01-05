<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends CI_Controller {	

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
			$this->data['title']= $this->nameset."- Admin-Employer's Profile";
			//$this->data['employer'] = $this->Common->getData('employers',['status!='=>'3'],array('id'=>'desc'));

			$joins = array(array(
				'table' => "corporations as c",
				'onCondition' => 'c.corpid = e.corpid' ,
				'jointype' => 'LEFT'
			));   
			$this->data['employer']	= $this->Common->get_joins('employers as e',"e.*, c.name",array('e.status!='=>'3'),$joins,1);

			//echo '<pre>'; print_r($this->data['employer']); die;
			$this->load->view('admin/employers-profile',$this->data);
	}
	
    public function employers_posted_jobs()
	{ 
	    $this->data['title']= $this->nameset."- Admin-Employers Posted Jobs List";
	    //$this->data['jobs'] = $this->Common->getData('jobs','',array('id'=>'desc'));
	     $this->data['jobs'] = $this->db->select('t1.*')
     ->from('jobs as t1')
     ->join('employers as t2', 't1.employer_id = t2.id','LEFT')
    // ->where('where('name !=', '3')
     ->where('t2.status !=', '3')
     ->where('t1.status !=', '3')
      ->order_by("t1.id",'DESC')
     ->get()->result();
    $this->data['jobs'] = $this->Common->getData('jobs','',array('id'=>'desc'));
	    $this->load->view('admin/employers-posted-jobs',$this->data);
	}
	
	public function downloaded_resumes($id='')
	{
	    if($this->input->get('id'))
	    {
	        $id= $this->input->get('id');
	    }
	    else
	    {
	        $id='';
	    }
	    
	   	    $this->data['resumes'] = $this->db->query("SELECT downloaded_resume.id,downloaded_resume.user_id,downloaded_resume.employer_id,downloaded_resume.created_at, candidates.first_name, candidates.last_name,candidates.email,candidates.phone,candidates.status, candidates.resume FROM downloaded_resume LEFT JOIN candidates ON candidates.id = downloaded_resume.user_id WHERE downloaded_resume.employer_id=$id AND candidates.status!='0'")->result();
	   	    
	   	    $this->data['title']= $this->nameset."- Employer's Profile -
Downloaded Resumes Detail";
	    $this->load->view('admin/employer-downloaded-resumes',$this->data);
	}
	
	public function response($id='')
	{
	    if($this->input->get('id'))
	    {
	        $id= $this->input->get('id');
	    }
	    else
	    {
	       $id=''; 
	    }
	    //echo $id; 
	 
	  // $this->data["appliedjobs"] = $this->db->query("SELECT applied.id,applied.user_id,applied.job_id,applied.status, jobs.title,jobs.industry,jobs.created_at, job_location.location_name, candidates.first_name, candidates.last_name,candidates.skills,candidates.email,candidates.phone,candidates.experience,candidates.experience, candidates.education_level, employers.company_name FROM applied LEFT JOIN jobs INNER JOIN job_location ON job_location.id = jobs.job_location left outer join employers ON employers.empid=jobs.employer_id ON applied.job_id=jobs.jobid left outer join candidates ON candidates.bullid=applied.user_id WHERE jobs.jobid=$id AND jobs.status!='3' AND  applied.status!='3' AND candidates.id!='' ")->result();
	  
	  
	  $this->data["appliedjobs"] = $this->db->query("SELECT applied.job_id,candidates.first_name, candidates.last_name,jobs.created_at,applied.status,candidates.email,candidates.phone,candidates.experience,candidates.skills,candidates.education_level,applied.id,jobs.employer_id,jobs.corpid,jobs.title FROM applied INNER JOIN candidates ON candidates.bullid=applied.user_id    INNER JOIN jobs ON jobs.jobid=applied.job_id    WHERE applied.job_id=$id  AND  applied.status!='3' ")->result();
	  
	  
	  
  
      $this->data['title']= $this->nameset."- Response List";
	    $this->load->view('admin/response',$this->data); 
	}
	
	
	
	public function jobapproved($id='')
	{
	   
	    if($this->input->get('id'))
	    {
	        $id=$this->input->get('id');
	    }
	    else
	    {
	        $id='';
	    }
	    if($this->input->post())
	    {
	      $done = $this->Common->UpdateData('applied',array('status'=>$this->input->post('status')),array('job_id'=>$this->input->post('job_id'),'id'=>$this->input->post('ids')));
	      
	      $names = $this->Common->getData("applied",array('job_id'=>$this->input->post('job_id'),'id'=>$this->input->post('ids')));
	      
	  
	      
	         if(!empty($names)){ $candiadte =  $this->Common->getData("candidates",array('bullid'=>$names[0]->user_id)); }
	           $job =  $this->Common->getData("jobs",array('jobid'=>$this->input->post('job_id')));
	          if(!empty($job)){ $employer =  $this->Common->getData("employers",array('empid'=>$job[0]->employer_id)); }
	           if(!empty($job)){ $corp =  $this->Common->getData("corporations",array('corpid'=>$job[0]->corpid)); }
	          
	     
	       if($this->input->post('status')=='2')
	       { 
	           $this->session->set_flashdata("success","Candidate Assigned Successfuly");
	           if($done)
	           {
	           
	            $data1 = [
                    'from_for' =>  'Admin',
                    'from_id' => $this->session->userdata('is_admin'),
                    'to_for' => 'User',
                    'to_id' => $names[0]->user_id,
                    'about_id' => $this->input->post('job_id'),
                    'field'=>'user_id',
                    'about'=>'applied',
                    'message' => 'Admin forwarded your resume to Company '.Ucfirst($corp[0]->name).' for the job <b>'.Ucfirst($job[0]->title).'</b>',
                    'status' => 1,  
                ];
                
                $data2 = [
                    'from_for' =>  'Admin',
                    'from_id' => $this->session->userdata('is_admin'),
                    'to_for' => 'Employe',
                    'to_id' => $employer[0]->empid,
                    'field'=>'job_id',
                    'about_id' => $this->input->post('job_id'),
                    'about'=>'applied',
                    'message' => 'Admin assigned you a candiadte for a job <b>'.Ucfirst($job[0]->title).'</b>',
                    'status' => 1,  
                ];
	            $this->Common->InsertData('notifications', $data1);
	            $this->Common->InsertData('notifications', $data2);
	           }
	       }
	       if($this->input->post('status')=='3')
	       {
	            $this->session->set_flashdata("success","Applied Job Deleted Successfuly");
	            $data1 = [
                    'from_for' =>  'Admin',
                    'from_id' => $this->session->userdata('is_admin'),
                    'to_for' => 'User',
                    'to_id' => $names[0]->user_id,
                    'about_id' =>  $this->input->post('job_id'),
                    'field'=>'user_id',
                    'about'=>'applied',
                    'message' => 'Admin rejected your resume applied to '.Ucfirst($corp[0]->name).' for the job <b>'.Ucfirst($job[0]->title).'</b>',
                    'status' => 1,  
                ];
                
	           $this->Common->InsertData('notifications', $data1);
	       }
	       
	       
	      
	    }
	    
	    if($this->input->post('redirect'))
	    {
	        redirect($this->input->post('redirect'));
	    }
	    else
	    {
	      redirect('admin/Employer/response?id='.$id);
	    }
	}
	
	public function edit_posted_jobs($id='')
	{
	    if($this->input->get('id'))
	    {
	        $id= $this->input->get('id');
	        
	    }
	     $this->data['postedjobs'] = $this->Common->getData('jobs',array('id'=>$id,'status !='=>'3'));
	      $this->data['exp'] = $this->Common->getData('experience');
	      $this->data['category'] = $this->Common->getData("categorys", ['status'=>1]);
	   $this->data['location'] = $this->Common->getData("job_location", ['status'=>1]);
	      $this->data['title']= $this->nameset.'- Admin-Employers Jobs List-
Job Details';
     
          if(count($this->data['postedjobs']) >0 )
          {
    	      $this->load->view('admin/edit-posted-jobs',$this->data);
          }else
          {
              $this->session->set_flashdata('error', 'This Job is Deleted');
                redirect('admin/employer/employers-posted-jobs');
              
          }
	}
	
	public function employer_details($id='')
	{
	    if($this->input->get('id'))
	    {
	        $id= $this->input->get('id');	        
	    }
	     $this->data['employer'] = $this->Common->getData('employers',array('id'=>$id));
		// print_r($this->data['employer']);
		 //echo $this->data['employer']->empid; die;
	     $this->data['postedjobs'] = $this->Common->getData('jobs',array('employer_id'=>$this->data['employer'][0]->empid,'status !='=>'3'));
	     $this->data['title']= $this->nameset.'- Admin-Employer Details';
	    $this->load->view('admin/employer-details',$this->data);
	}
	
	public function posted_jobs($id='')
	{
	    if($this->input->get('id'))
	    {
	        $id= $this->input->get('id');
	        
	    }
         $this->data['title']= $this->nameset."- Admin-Employer's Profile
Company Jobs List";
	     $this->data['postedjobs'] = $this->Common->getData('jobs',array('employer_id'=>$id,'status !='=>'3'));
	    $this->load->view('admin/posted-jobs',$this->data); 
	}
	public function updatefeature()
	{
	     $id = $this->input->Post('id');
	    $feature = $this->input->post('feature');
	    if($feature==1){
	        $f = '0';
	        
	    }
	    if($feature==0){
	        $f = '1';
	    }
	    if(!empty($id))
	       {
	        $this->Common->UpdateData($this->input->post('tbl'),array('featured'=>$f),array('id'=>$id));
	          echo 'done';
	          die;
	       }
	       else
	       {
	           echo 'not done';
	       }
	   die;
	    
	}
	
	public function statusupdate()
	{

	    if(!empty($this->input->post('id')))
	       {
	        $this->Common->UpdateData($this->input->post('tbl'),array('status'=>$this->input->post('status')),array('id'=>$this->input->post('id')));
	        if($this->input->post('tbl')=='jobs')
	        {
	          $job=  $this->Common->getData("jobs", array('id'=>$this->input->post('id')));
	            $data2 = [
                    'from_for' =>  'Admin',
                    'from_id' => $_SESSION['userId'],
                    'to_for' => 'Employe',
                    'to_id' => $job[0]->employer_id,
                    'about_id' => $this->input->post('id'),
                    'about'=>$this->input->post('tbl'),
                    'message' => 'Admin edited Job <b>'.$job[0]->title.'</b>',
                    'status' => 1,  
                ];
	            $this->Common->InsertData('notifications', $data2);
	        }
	         //$this->session->set_flashdata("success","Status Update Successfuly");
	          echo 'done';
	          die;
	       }
	       else
	       {
	          // $this->session->set_flashdata("error","Enable to Update the status"); 
	           echo 'notdone';
	       }
	   die;
	    
	}
	
	public function approvedjobupdate()
	{
	    
	    if(!empty($this->input->post('id')))
	       {
	        $this->Common->UpdateData($this->input->post('tbl'),array('approved'=>$this->input->post('status')),array('id'=>$this->input->post('id')));
	        if($this->input->post('tbl')=='jobs')
	        {
	            if($this->input->post('status')=='0')
	            {
	                $st = 'has unpproved your';
	                
	            }else
	            {
	                 $st = 'has approved your';
	            }
	          $job=  $this->Common->getData("jobs", array('id'=>$this->input->post('id')));
	            $data2 = [
                    'from_for' =>  'Admin',
                    'from_id' => $_SESSION['userId'],
                    'to_for' => 'Employe',
                    'to_id' => $job[0]->employer_id,
                    'field'=>'approve',
                    'about_id' => $this->input->post('id'),
                    'about'=>$this->input->post('tbl'),
                    'message' => 'Admin '.$st.' Job  <b>'.$job[0]->title.'</b>',
                    'status' => 1,  
                ];
	            $this->Common->InsertData('notifications', $data2);
	        }
	         //$this->session->set_flashdata("success","Status Update Successfuly");
	          echo 'done';
	          die;
	       }
	       else
	       {
	          // $this->session->set_flashdata("error","Enable to Update the status"); 
	           echo 'notdone';
	       }
	   die;
	}
	
	public function notificationstatusupdates()
	{
     
	    if(!empty($this->input->post('notifyid')))
	       {
	        $this->Common->UpdateData($this->input->post('status_tbl'),array('status'=>$this->input->post('status')),array('notify_id'=>$this->input->post('notifyid')));
	          echo 'done';
	          die;
	       }
	       else
	       {
	           echo 'notdone';
	       }
	   die;
	    
	}
	
	public function notificationall()
	{
	    
	    $this->db->order_by("status ASC,notify_id desc");
	    $this->db->select('*');
$this->db->where('to_id',$this->session->userdata('userId'));
$this->db->where('to_for','Admin');
$this->db->from('notifications');
$query=$this->db->get();
$this->data['notifications']= $query->result();


     $this->load->view('admin/notification',$this->data);
	}
	
	public function edit_employer_profile($id='')
	{
	    
	    
	    if($this->input->get('id'))
	    {
	        $id= $this->input->get('id');
	    }
	     $this->data['employer'] = $this->Common->getData('employers',array('id'=>$id));
	     $this->data['countries'] = $this->Common->getData("countries");
         $this->data['categoryss'] = $this->Common->getData("categorys"); 
	     $this->data['title']= $this->nameset.'- Admin-Edit Employer Profile';
	    $this->load->view('admin/edit-employer-profile',$this->data);
	}
	
	public function get_states(){
	 
        
        $whr = array("country_id" => $_POST['country']);
        $states = $this->Common->getData("states", $whr, "", "", "");
       
        echo '<option value="">Select</option>'; 
        foreach($states as $s){
            $selected = '';
            if($s->id == $_POST['state']){   $selected = 'selected'; }
        echo '<option value="'.$s->id.'" '. $selected.'>'.$s->name.'</option>';
         } 
    exit;
	  
	}
	
	
	public function job_details($id='')
	{
		
	  if($this->input->get('id'))
	        $id= $this->input->get('id');
	    else
	       $id=''; 
	 
	    //$this->data["appliedjobs"] = $this->db->query("SELECT applied.id,applied.user_id,applied.job_id,applied.status, jobs.title,jobs.industry,jobs.created_at, job_location.location_name, candidates.first_name, candidates.last_name,candidates.skills,candidates.email,candidates.phone,candidates.experience,candidates.experience, candidates.education_level, employers.company_name FROM applied LEFT JOIN jobs  left outer join employers ON employers.empid=jobs.employer_id ON applied.job_id=jobs.id left outer join candidates ON candidates.bullid=applied.user_id WHERE jobs.id=$id AND applied.status!='3'")->result();
	   //INNER JOIN job_location ON job_location.id = jobs.job_location
	   
	   $this->data["appliedjobs"] = $this->db->query("SELECT applied.id,applied.user_id,applied.job_id,applied.status, jobs.title,jobs.industry,jobs.created_at, candidates.first_name, candidates.last_name,candidates.skills,candidates.email,candidates.phone,candidates.experience,candidates.experience, candidates.education_level, employers.company_name FROM applied LEFT JOIN jobs  left outer join employers ON employers.empid=jobs.employer_id ON applied.job_id=jobs.jobid left outer join candidates ON candidates.bullid=applied.user_id WHERE jobs.jobid='$id' AND applied.status!='3'")->result();
	   
	    $this->data['postedjobs'] = $this->Common->getData('jobs',array('jobid'=>$id));
		
		//echo '<pre>'; print_r($this->data['appliedjobs']); die;
	     $this->data['title']= $this->nameset."- Admin-Employer's Profile-
 Job Details";
	    $this->load->view('admin/job-details',$this->data);  
	}
	
	public function custom($action='',$tbl='',$rediect='',$error='',$name='',$idd='')
	{
	  
	    if($this->input->get('ids'))
	    {
	        $idd=$this->input->get('ids');
	    }
	    $name = $this->input->get('name');
	    $error = $this->input->get('error');
	    $redirect = $this->input->get('redirect');
	     if($this->input->get('ids'))
	    {
	        $idd=$this->input->get('ids');
	        $redirect= $redirect.'?id='.$idd;
	        $error= $error.'?id='.$idd;
	    }
	    $action= $this->input->get('do');
	    $tbl=$this->input->get('tbl');
	    //echo 'name='.$name.' error='.$error.' redirect= '.$redirect.' action='.$action.' tbl='.$tbl;
	    //die;
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
                              //echo 'here'; die;
                              if(!empty($this->input->post('id')))
                                {
                                    $id= $this->input->post('id');
                                }
                                else
                                {
                                   $id=''; 
                                }
                                     
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
                                //echo $v1.'  '.$v2; die;
                                
                              if(!$this->Common->getData($tbl,$v1."=".$v2." And id!=".$id))
                              {
                                 
                                 $this->Common->UpdateData($tbl,$data,array('id'=>$id));
                                 if($tbl=='jobs')
                                 {
                                    $job=  $this->Common->getData("jobs", array('id'=>$id));
                                    $data2 = [
                                    'from_for' =>  'Admin',
                                    'from_id' => $_SESSION['userId'],
                                    'to_for' => 'Employe',
                                    'to_id' => $job[0]->employer_id,
                                    'about_id' => $id,
                                    'about'=>$tbl,
                                    'message' => 'Admin edited Job <b>'.$job[0]->title.'</b>',
                                    'status' => 1,  
                                    ];
                                    
                                    $this->Common->InsertData('notifications', $data2);
                                 }
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
	
	public function editjobs()
	{
	    if($this->input->post())
	    {
	        $id= $this->input->post('id');
	         $table = "jobs";
            if($this->input->post('gender'))
            {
               $gender= $this->input->post('gender');
            }
            else
            {
                $gender='both';
            }
            if($this->input->post('qualification')){
                
               $qualification= implode(',',$this->input->post('qualification'));
                
            }
            else
            {
                $qualification='';
            }
            if($this->input->post('skills'))
            {
                $skill= implode(',',$this->input->post('skills') );
            }
            else
            {
              $skill= ''; 
            }
            /*$data = [
                    'title' =>  $this->input->post('title'),
                    'apply' => date( 'Y-m-d H:i:s', strtotime($this->input->post('apply')) ),
                    'salary' => $this->input->post('salary'),
                    'level' => $this->input->post('level'),
                    'experience' => $this->input->post('experience'),
                    'gender' => $gender,
                    'industry' => $this->input->post('industry'),
                    'qualification' => $qualification,  
                    'description' => $this->input->post('description'),
                    'skills' => $skill,
                    'status' => $this->input->post('status'),
                    
                ];*/
                
                
                $data = [
                    'title' =>  $this->input->post('title'),
                    'apply' => date( 'Y-m-d H:i:s', strtotime($this->input->post('apply')) ),
                    'salary' => $this->input->post('salary'),
                    'level' => $this->input->post('level'),
                    'experience' => $this->input->post('experience'),
                    'gender' => $gender,
                    'industry' => $this->input->post('industry'),
                    'qualification' => $qualification,  
                    'description' => $this->input->post('description'),
                    'skills' => $skill,
                    'status' => $this->input->post('status'),
                    'job_location' => $this->input->post('job_location'),
                      'job_category' => $this->input->post('job_category'),
                      'what_do' => $this->input->post('what_do'),
                      'what_offer' => $this->input->post('what_do')
                ];
	       
     
	        
	        $success = $this->Common->UpdateData($table, $data, array('id'=>$id));
	        if($success)
	        {
	             $this->session->set_flashdata('success', 'Job Update Successfully');
	                  if($table=='jobs')
                         {
                            $job=  $this->Common->getData("jobs", array('id'=>$id));
                            $data2 = [
                            'from_for' =>  'Admin',
                            'from_id' => $_SESSION['userId'],
                            'to_for' => 'Employe',
                            'to_id' => $job[0]->employer_id,
                            'about_id' => $id,
                            'about'=>$table,
                            'message' => 'Admin edited Job <b>'.$job[0]->title.'</b>',
                            'status' => 1,  
                            ];
                            
                            $this->Common->InsertData('notifications', $data2);
                        }
	            
	        }
	        else
	        {
	            $this->session->set_flashdata('error', 'To Update The Job');
	        }
	        
	        redirect('admin/employer/employers-posted-jobs');
	        
	    }
	}
	
		public function customs($action='',$tbl='',$rediect='',$error='',$name='',$idd='')
	{
	 
	    if($this->input->get('ids'))
	    {
	        $idd=$this->input->get('ids');
	    }
	    $name = $this->input->get('name');
	    $error = $this->input->get('error');
	    $redirect = $this->input->get('redirect');
	     if($this->input->get('ids'))
	    {
	        $idd=$this->input->get('ids');
	        $redirect= $redirect.'?id='.$idd;
	        $error= $error.'?id='.$idd;
	    }
	    $action= $this->input->get('do');
	    $tbl=$this->input->get('tbl');
	    //echo 'name='.$name.' error='.$error.' redirect= '.$redirect.' action='.$action.' tbl='.$tbl;
	    //die;
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
                              //echo 'here'; die;
                              if(!empty($this->input->post('id')))
                                {
                                    $id= $this->input->post('id');
                                }
                                else
                                {
                                   $id=''; 
                                }
                                     
                                      unset($_POST['id']);
                              $v1; $v2;
                               foreach($this->input->post() as $key=>$value)
                                {
                                  $data[$key]=$value;
            
                                    reset($data);
                                    $first_key = key($data);
                                   //  $v1= $first_key;
                                 
                                   // $v2= "'".array_values($data)[0]."'"; 
                                  
                               
                                }
                               $v2= "'".$this->input->post('email')."'"; 
$v1 = 'email';
$v3= "'".$this->input->post('company_name')."'"; 
$v4= 'company_name';
                                
    if(!$this->Common->getData($tbl,$v1."=".$v2." And id!=".$id))
                              {
                                        if(!$this->Common->getData($tbl,$v4."=".$v3." And id!=".$id))
                                        {
                                        
                                        $this->Common->UpdateData($tbl,$data,array('id'=>$id));
                                        if($tbl=='jobs')
                                        {
                                        $job=  $this->Common->getData("jobs", array('id'=>$id));
                                        $data2 = [
                                        'from_for' =>  'Admin',
                                        'from_id' => $_SESSION['userId'],
                                        'to_for' => 'Employe',
                                        'to_id' => $job[0]->employer_id,
                                        'about_id' => $id,
                                        'about'=>$tbl,
                                        'message' => 'Admin edited Job <b>'.$job[0]->title.'</b>',
                                        'status' => 1,  
                                        ];
                                        
                                        $this->Common->InsertData('notifications', $data2);
                                        }
                                        $this->session->set_flashdata('success', 'Updated Successfully!!');
                                        }
                                        else
                                        {
                                        
                                        $this->session->set_flashdata('error', $name.' is Already Exists');
                                        redirect('admin/'.$error.'?id='.$id);
                                        } 
                                 
                              }
                              else
                              {
                                  $name='Email';
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
	
	public function companylogopload($id='')
	{
	    if(!empty($_FILES))
	    {
	        if($this->input->get())
	        {
	            $id = $this->input->get('id');
	          	$config = array(
        			'upload_path'   => 'assets/employer/images',
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
                            //$this->session->set_flashdata('error', 'Opps error to Upload Image');
                            echo 'notdone'; 
                            die;
                    }
                    else
                    {
                          $data = array('upload_data' => $this->upload->data());
                    }
                     
        		
        		if(!empty($data))
        		{
        			$done=  $this->Common->UpdateData('employers',array('company_logo'=>$data['upload_data']['file_name']),array('id'=>$id));
        		    if($done)
        		    {
        		       // $this->session->set_flashdata('success', 'Image Upload Successfully');
        		        echo base_url().'assets/employer/images/'.$data['upload_data']['file_name'];
        		    }
        		    else
        		    { //$this->session->set_flashdata('error', 'Opps error to Upload Image');
        		        echo 'notdone';
        		    }
        		    die;
        		}
	   
	        }
	    }
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
        			'upload_path'   => 'assets/employer/images',
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
        				$done=  $this->Common->UpdateData('employers',array('company_logo'=>$data['upload_data']['file_name']),array('id'=>$id));
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
	
	public function emp_image()
	{
		
	$config['upload_path']   =   "./assets/employer/images";
	$config['allowed_types'] = '*';
	$this->load->library('upload',$config);
	if($this->upload->do_upload("file")){
	  $file1=$this->upload->data();
	  $data['profile_image']   =  $file1['file_name'];
	}
	 echo json_encode($data);
     exit;
 
	}
	
	
	
	public function removeimg()
	{
	    if(!empty($this->input->post('del_id')))
	       {
	        if($this->input->post('del_tbl')!='candidates')
	        {
	          $this->Common->UpdateData($this->input->post('del_tbl'),array('company_logo'=>''),array('id'=>$this->input->post('del_id')));
	        }
	        else
	        {
	          $this->Common->UpdateData($this->input->post('del_tbl'),array('profile_pic'=>''),array('id'=>$this->input->post('del_id')));  
	        }
	          echo 'done';
	          die;
	       }
	       else
	       {
	           echo 'not done';
	       }
	   die;
	}
	
	public function deletenotifications()
	{
	      
	       
            if(isset($_POST['ids']))
            {
              $pp = explode(',',$_POST['ids']);
               foreach($pp as $p)
               {
                    $done=  $this->Common->DeleteData('notifications',array('notify_id'=>$p));
                     if($done)
                     {
                         echo 'sucess';
                         $this->session->set_flashdata('success', 'Notification Deleted Successfully!!');
                     }
                     else
                     {
                         echo 'notdone';
                         $this->session->set_flashdata('error', 'To Delete a Notification');
                     }
               }
            }
            
       die;
	}
	    
	
}