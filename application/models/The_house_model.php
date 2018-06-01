<?php  
class The_house_model extends CI_Model  
{
	function test_main()  
   	{  
       	echo "This is model function";  
   	}  
    function insert_data($data)  
   	{  
       	$this->db->insert("house", $data);  
   	}  
  	function fetch_data()  
 	{  
            
      	$this->db->select("*");  
      	$this->db->from("house");  
       	$query = $this->db->get();  
      	return $query;  
  	}  
  	function delete_data($id){  
       	$this->db->where("asset_id", $id);  
      	$this->db->delete("house");  
           //DELETE FROM tbl_user WHERE id = $id  
  	}  
  	function fetch_single_data($id)  
   	{  
      	$this->db->where("asset_id", $id);  
       	$query = $this->db->get("house");  
       	return $query;  
           //Select * FROM tbl_user where id = '$id'  
  	}  
   	function update_data($data, $id)  
   	{  
    	$this->db->where("asset_id", $id);  
       	$this->db->update("house", $data);  
        //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
  	}  
}  