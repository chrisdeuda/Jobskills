<?php

class Models_Hr_Register extends MY_Model{

    public function __construct(){
        parent::__construct();
        $this->_table = 'contact_information';
        $this->primary_key = 'USER_ID_PK';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';

    }

  
  
    public function test(){
        
        echo "ok";
    }
    
    public function getIdFromList( $hr_name ){
        $sql = "SELECT * FROM `contact_information` WHERE `NAME` = '{$hr_name}' LIMIT 0,1";
        
        
        $query = $this->db->query( $sql);
        if( $query->num_rows >= 1){
            $result = $query->result_array();
            return $result[0]['USER_ID_PK'];
        } else {
            return -1;
        }
        
        
    }

   







}

?>