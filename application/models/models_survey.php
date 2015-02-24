<?php

class Models_Survey extends MY_Model{
    
    public function __construct(){
        parent::__construct();
        
        $this->_table = 'basic_skills';
        $this->primary_key = 'SKILL_ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';      
            
    }
    

    

    
    
 
   
}

?>

