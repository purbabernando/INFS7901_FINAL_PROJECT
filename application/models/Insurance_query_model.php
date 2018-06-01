<?php  
class Insurance_query_model extends CI_Model  
{
	function test_main()  
   	{  
       	echo "This is model function";  
   	}  

  	function fetch_data()  
 	{  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
      	$this->db->select("*");  
      	$this->db->from("family_member");
		$this->db->where("insurance_status",'None'); 
       	$query = $this->db->get();  
      	return $query;  
  	}  
}  
