<?php

class Models_Login extends MY_Model{

    public function __construct(){
        parent::__construct();
        $this->_table = 'login';
        $this->primary_key = 'USER_ID_PK';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';

    }
    
     public function saveNewUser( $user_id, $username, $password, $user_type ){
         $user_data = array( "USER_ID_FK" =>$user_id,
             "USERNAME" => $username,
             "PASSWORD" => $password,
             "USER_TYPE_ID_FK" => $user_type
             );
         $this->insert( $user_data);
    }
    
    /**
     * Get User Id using Username and Password of the user
     * @param string $user - username
     * @param string(md5) $pass - password
     * @return string user_id/ -1 no match found
     */
    public function getUserId( $user, $pass ) {
        $SQL = "SELECT USER_ID_FK FROM $this->_table WHERE USERNAME = '{$user}' AND PASSWORD = '{$pass}'" ;
        
        $query = $this->db->query( $SQL);
        
        if ( $query->num_rows() <= 0) {
                return -1;
        } else if ($query->num_rows() == 1 ) {
                $row = $query->row();
                return $row->USER_ID_FK;
        } else{
            return -1;
        }
        
    }

    public function get_user_type( $user_id ){
        $sql = " SELECT `USER_TYPE_ID_FK` FROM `login`"
                . " WHERE `USER_ID_FK` = {$user_id}";
                
        $query = $this->db->query( $sql);
        if ( $query->num_rows >= 1) {
            $result = $query->result();
            return $result[0]->USER_TYPE_ID_FK;
        } else {
            return -1;
        }
        
    }
  
    







}

?>