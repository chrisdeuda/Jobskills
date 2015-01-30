<?php

class Models_Survey extends MY_Model{
    
    public function __construct(){
        parent::__construct();
        $this->_table = 'basic_skills';
        $this->primary_key = 'SKILL_ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';      
            
    }
    
    public function get_top_in_survey(){
        $sql = "SELECT *"
            . " FROM `basic_skills`"
            . " ORDER BY `basic_skills`.`SKILL_RATING` DESC"
            . " LIMIT 0 , 10";
        
       
           $query = $this->db->query($sql);
           $query_result = $query->result();
        
        if( $query->num_rows >0 ){
            return $query_result;
            
        }
        
        
        //return $this->order_by("SKILL_RATING", "desc")->limit(0, 10)->get_many();

        
        
    }
    
    
 
   
}

?>