<?php

class Models_Company_Register extends MY_Model{

    public function __construct(){
        parent::__construct();
        $this->_table = 'company_profile';
        $this->primary_key = 'ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';

    }

  
  
    public function test(){
        
        echo "ok";
    }
    
    public function getIdFromList( $the_company_name){
        $sql = "SELECT * FROM `company_list` WHERE `COMPANY_NAME` = '{$the_company_name}' LIMIT 0,1";
        
        echo $sql;
        $query = $this->db->query( $sql);
        if( $query->num_rows >= 1){
            $result = $query->result_array();
            return $result[0]['COMPANY_ID_PK'];
            
        } else {
            return -1;
        }
        
        
    }









}

?>