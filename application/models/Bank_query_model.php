<?php  
class Bank_query_model extends CI_Model  
{
   	function fetch_data($rType)
{
    if($rType == 'sum'){
        $this->db->select("SUM(bank_balance) AS Bank_Balance");
        $this->db->from("bank_account");
        $query = $this->db->get();
    }
    elseif($rType == 'avg'){
        $this->db->select("ROUND(AVG(bank_balance)) AS Bank_Balance");
        $this->db->from("bank_account");
        $query = $this->db->get();
    }elseif($rType == 'max'){
    	$this->db->select("MAX(bank_balance) AS Bank_Balance");
        $this->db->from("bank_account");
        $query = $this->db->get();
    }
	elseif($rType == 'min'){
    	$this->db->select("MIN(bank_balance) AS Bank_Balance");
        $this->db->from("bank_account");
        $query = $this->db->get();
    }

    return $query;
}
}  
