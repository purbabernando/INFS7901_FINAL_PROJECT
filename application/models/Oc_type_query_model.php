<?php  
class Oc_type_query_model extends CI_Model  
{
   	function fetch_data($rType)
{
    if($rType == 'sum'){
        $query = $this->db->query("SELECT B.type, sum(A.area) as Total_Farm_Area, sum(A.production) as Total_Farm_Production, sum(B.amount) as Total_Operational_Cost
									FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
									INNER JOIN INFS7901_project.operational_cost as B on (A.latitude=B.latitude and A.longitude=B.longitude)
									GROUP BY B.type");
    }
    elseif($rType == 'avg'){
        $query = $this->db->query("SELECT B.type, avg(A.area) as Total_Farm_Area, avg(A.production) as Total_Farm_Production, avg(B.amount) as Total_Operational_Cost
									FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
									INNER JOIN INFS7901_project.operational_cost as B on (A.latitude=B.latitude and A.longitude=B.longitude)
									GROUP BY B.type");
    }elseif($rType == 'max'){
    	$query = $this->db->query("SELECT B.type, max(A.area) as Total_Farm_Area, max(A.production) as Total_Farm_Production, max(B.amount) as Total_Operational_Cost
									FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
									INNER JOIN INFS7901_project.operational_cost as B on (A.latitude=B.latitude and A.longitude=B.longitude)
									GROUP BY B.type");
    }
	elseif($rType == 'min'){
    	$query = $this->db->query("SELECT B.type, min(A.area) as Total_Farm_Area, min(A.production) as Total_Farm_Production, min(B.amount) as Total_Operational_Cost
									FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
									INNER JOIN INFS7901_project.operational_cost as B on (A.latitude=B.latitude and A.longitude=B.longitude)
									GROUP BY B.type");
    }

    return $query;
}
}  
