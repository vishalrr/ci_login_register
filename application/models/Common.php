<?php
class Common extends CI_Model {

public function getData($table="",$whr="",$ord="",$limit="",$first=0,$group_by="")
    {
		//print_r($ord); die;
	if(!empty($whr))
	$this->db->where($whr);
	if($group_by!='')
            { 
               $this->db->group_by($group_by);
            }
	// if(!empty($ord)){
   //      list($key, $value) = each($ord);					
 //        $this->db->order_by($key,$value);
	// }
	if(!empty($ord)){
		foreach ($ord as $key => $value) {
			$this->db->order_by($key,$value);
		}           
            
	}
        $query = $this->db->get($table,$limit);
         if($first==1)
                return $query->row();
	else
                return $query->result();
    }
    public function get_all_ids($table='',$select='')
    {
			$this->db->select($select); 
		    $this->db->from($table);   
		    //$this->db->where($where);
		    $query = $this->db->get();
            return $query->result();
    }

    //where in data
    public function where1in($table='',$where='')
    { 
    	 ////print_r($where); 
    	 
    	 $this->db->where_in('question_id',$where);
    	 $query=$this->db->get($table);  
    	// echo $this->db->last_query(); exit();  	
       return $query->result();

    }
      public function where1in2($table='',$where='')
    { 
    	 ////print_r($where); 
    	 
    	 $this->db->where_in('module_id',$where);
    	 $query=$this->db->get($table);  
    	// echo $this->db->last_query(); exit();  	
       return $query->result();

    }
    
    public function countData($table="",$whr="")
    {
		if(!empty($whr))
		$this->db->where($whr);
				
		$query = $this->db->get($table);
		return $query->num_rows();
    }

	public function InsertData($table="",$data="")
	{
		if(!empty($data))
		{ $this->db->insert($table, $data);  return $this->db->insert_id(); 
		}else return false;
	}

	public function UpdateData($table="",$data="",$whr="")
	{
		if(!empty($data) && !empty($whr))
		{ 
			$this->db->update($table, $data, $whr);
			return true; 
		}else return false;
	}
	
	public function DeleteData($table="",$data="")
	{
		if(!empty($data))
		{ 
			$this->db->delete($table, $data); 
			return true; 
		}else return false;
	}
	 

	 public function get_few_record($table='',$select='',$where='')
	 {
		 	$this->db->select($select); 
		    $this->db->from($table);   
		    $this->db->where($where);
		    return $this->db->get()->row();
	 }
  
}

?>