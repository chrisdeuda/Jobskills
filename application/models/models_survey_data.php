<?php

class Models_Survey_Data extends MY_Model{
    
    public function __construct(){
        parent::__construct();
        $this->_table = 'basic_skills_data';
        $this->primary_key = 'ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';      
            
    }
    /**
     * Get User Id
     * @param string $user - username
     * @param string(md5) $pass - password
     * @return string user_id/ -1 no match found
     */
    
    
 
   
}

?>