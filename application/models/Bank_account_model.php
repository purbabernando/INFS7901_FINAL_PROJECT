<?php  
class Bank_account_model extends CI_Model  
{
	function test_main()  
   	{  
       	echo "This is model function";  
   	}  
    function insert_data($data)  
   	{  
       	$this->db->insert("bank_account", $data);  
   	}  
  	function fetch_data()  
 	{  
            
      	$this->db->select("*");  
      	$this->db->from("bank_account");  
       	$query = $this->db->get();  
      	return $query;  
  	}  
  	function delete_data($id){  
       	$this->db->where("asset_id", $id);  
      	$this->db->delete("bank_account");  
           //DELETE FROM tbl_user WHERE id = $id  
  	}  
  	function fetch_single_data($id)  
   	{  
      	$this->db->where("asset_id", $id);  
       	$query = $this->db->get("bank_account");  
       	return $query;  
           //Select * FROM tbl_user where id = '$id'  
  	}  
   	function update_data($data, $id)  
   	{  
    	$this->db->where("asset_id", $id);  
       	$this->db->update("bank_account", $data);  
        //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
  	}  
}  
