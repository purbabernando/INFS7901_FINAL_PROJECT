<?php  
class Hh_spending_model extends CI_Model  
{
	function test_main()  
   	{  
       	echo "This is model function";  
   	}  
    function insert_data($data)  
   	{  
       	$this->db->insert("household_spending", $data);  
   	}  
  	function fetch_data()  
 	{  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
      	$this->db->select("*");  
      	$this->db->from("household_spending");  
       	$query = $this->db->get();  
      	return $query;  
  	}  
  	function delete_data($id)
	{ 
       	$this->db->where('family_id',$id);
      	$this->db->delete("household_spending");  
           //DELETE FROM tbl_user WHERE id = $id  
  	}  
  	function fetch_single_data($id)  
   	{  
      	$this->db->where("family_id", $id);  
       	$query = $this->db->get("household_spending");  
       	return $query;  
           //Select * FROM tbl_user where id = '$id'  
  	}  
   	function update_data($data, $id)  
   	{  
    	$this->db->where("family_id", $id);  
       	$this->db->update("household_spending", $data);  
        //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
  	}  
}  