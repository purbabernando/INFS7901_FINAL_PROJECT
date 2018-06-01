<?php  
class Fh1_query_model extends CI_Model  
{
  	function fetch_data()  
 	{   
      	$query = $this->db->query("SELECT A.family_id FROM (SELECT A.family_id FROM INFS7901_project.asset as 
      	A LEFT JOIN INFS7901_project.house as B on A.asset_id=B.asset_id WHERE B.asset_id IS NOT NULL) as 
      	A WHERE A.family_id IN ( SELECT A.family_id FROM INFS7901_project.family as 
      	A LEFT JOIN INFS7901_project.farm as B on A.family_id=B.family_ID WHERE B.family_id IS NULL)");
      	return $query;  
  	}  
}  
