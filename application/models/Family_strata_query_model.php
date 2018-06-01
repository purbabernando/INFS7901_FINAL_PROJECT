<?php  
class Family_strata_query_model extends CI_Model  
{
   	function fetch_data($rType)
{
    if($rType == 'sum'){
        $query = $this->db->query("SELECT A.family_id, sum(A.area) as Total_Farm_Area, sum(A.production) as Total_Farm_Production, sum(B.amount) as Total_house_hold_spending
								FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
								INNER JOIN INFS7901_project.household_spending as B on A.family_id=B.family_id
								WHERE A.latitude NOT IN (SELECT OC.latitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								AND A.longitude NOT IN (SELECT OC.longitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								GROUP BY A.family_id");
    }
    elseif($rType == 'avg'){
        $query = $this->db->query("SELECT A.family_id, avg(A.area) as Total_Farm_Area, avg(A.production) as Total_Farm_Production, avg(B.amount) as Total_house_hold_spending
								FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
								INNER JOIN INFS7901_project.household_spending as B on A.family_id=B.family_id
								WHERE A.latitude NOT IN (SELECT OC.latitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								AND A.longitude NOT IN (SELECT OC.longitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								GROUP BY A.family_id");
    }elseif($rType == 'max'){
    	$query = $this->db->query("SELECT A.family_id, max(A.area) as Total_Farm_Area, max(A.production) as Total_Farm_Production, max(B.amount) as Total_house_hold_spending
								FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
								INNER JOIN INFS7901_project.household_spending as B on A.family_id=B.family_id
								WHERE A.latitude NOT IN (SELECT OC.latitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								AND A.longitude NOT IN (SELECT OC.longitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								GROUP BY A.family_id");
    }
	elseif($rType == 'min'){
    	$query = $this->db->query("SELECT A.family_id, min(A.area) as Total_Farm_Area, min(A.production) as Total_Farm_Production, min(B.amount) as Total_house_hold_spending
								FROM (SELECT* FROM INFS7901_project.farm as farm WHERE production>0) as A
								INNER JOIN INFS7901_project.household_spending as B on A.family_id=B.family_id
								WHERE A.latitude NOT IN (SELECT OC.latitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								AND A.longitude NOT IN (SELECT OC.longitude FROM INFS7901_project.operational_cost as OC WHERE OC.amount<200000)
								GROUP BY A.family_id");
    }

    return $query;
}
}  
