<?php

class Models_Company_Profile extends MY_Model{

    public function __construct(){
        parent::__construct();
        $this->_table = 'company_profile';
        $this->primary_key = 'ID';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';

    }
    
    
    public function get_profile( $company_id ){
        //using subqueries
        $sql = "SELECT COMPANY_ID_FK, COMPANY_NAME , COMPLETE_ADDRESS , TEL_NO , MOBILE_NO , FAX_NO , EMPLOYEES_NO"
                        . " , ( SELECT INDUSTRY_NAME FROM `industry_type` WHERE `INDUSTRY_TYPE_ID_PK` = INDUSTRY_TYPE_FK" 
                        . " )as INDUSTRY_TYPE"                
                         . ", (SELECT NATIONALITY_NAME FROM `nationality_list` WHERE `NATIONALITY_ID_PK` = NATIONALITY_FK ) as NATIONALITY"
               . " FROM `company_profile`"
               . " WHERE `COMPANY_ID_FK` = $company_id";
        
        
//        echo $sql;
        
        $query = $this->db->query( $sql);
        if( $query->num_rows >= 1){
            $result = $query->result();
            return $result;
        } else {
            return -1;
        }
    }









}

?>