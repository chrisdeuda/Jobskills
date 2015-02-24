<?php

class Models_Survey_Statistics extends MY_Model{
    
    public function __construct(){
        parent::__construct();
        $this->_table = 'survey_statistics';
        $this->primary_key = 'SURVEY_ID_PK';
        $this->primaryFilter = 'htmlentities';
        $this->order_by = '';      
            
    }
    
    public function clearSurveyList(){
        $sql = "TRUNCATE TABLE {$this->_table} ";
        $query = $this->db->query( $sql);
        
        if ( $query == TRUE) {
            return 1;
        } else {
            return 0;
        }
           
    }
    public function getSkillList(){
        $sql = "INSERT INTO {$this->_table} (`SKILL_ID_FK`, `SURVEY_TOTAL`)"
                . " SELECT `SKILL_ID_PK`, 0"
                    . " FROM `skills_type` ";
        $query = $this->db->query( $sql);
        
         if ( $query == TRUE) {
            return 1;
        } else {
            return 0;
        }
        
    }
    
    public function getSurveyRecord(){
        $sql = "SELECT `SKILL_ID_FK` as ID  FROM {$this->_table} ";
        $query = $this->db->query( $sql);
        return $query;
        
    }
    
    public function updateSurveyRecord( $skill_id ){
         $sql_update = "UPDATE {$this->_table} SET SURVEY_TOTAL = ( SELECT SUM( `MANPOWER_NO` ) AS total"
                                    . " FROM `company_vacancy_position`"
                                    . " WHERE `SKILL_ID_FK` = {$skill_id } )" 
                            . " WHERE `SKILL_ID_FK` = {$skill_id }";
        $query = $this->db->query( $sql_update );
        
        if ( $query == TRUE ) {
            return true;
        } else {
            return false;
        }
    }
    
}
/* End of file models_survey_statistics.php */
/* Location: ./application/models/models_survey_statistics.php */

?>

