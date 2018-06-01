<?php  
class Op_cost_query_model extends CI_Model  
{
  	function fetch_data()  
 	{   
      	$this->db->select("A.point_of_sales, COUNT(A.point_of_sales) AS number_of_sellers, SUM(B.amount) AS total_op_cost,
      						sum(B.amount)/sum(A.area) AS avg_op_cost, (sum(B.amount)/sum(A.area))/count(A.point_of_sales)
      						AS unit_op_cost");  
      	$this->db->from("farm AS A, operational_cost AS B");
		$this->db->where("A.longitude = B.longitude AND A.latitude = B.latitude"); 
		$this->db->group_by("A.point_of_sales");
       	$query = $this->db->get();  
      	return $query;  
  	}  
}  
