<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
// -----------------------------------------------------------------------------
    public function __construct(){
       parent::__construct();
       $this->load->library('template');
       $this->load->model('models_console');
       $this->load->model('models_company_profile');
   }
// -----------------------------------------------------------------------------
   
   public function get_skills(){
       $sql = "SELECT `SKILL_ID_PK` as ID, `SKILL_NAME` FROM `skills_type`";
       $query = $this->db->query( $sql);
       $this->output->set_content_type('application_json');
       
       if( $query->num_rows >= 1){
           $this->output->set_output(
               json_encode(
                    ['result'=>1,
                    'data' => $query->result()
               ]));
           
       } else {
           $this->output->set_output(
                json_encode([
                    'result' =>0 ,
                   'error' => 'Error Retrieving Data'
               ]));
       }
   }
   
// ----------------------------------------------------------------------------
   
   public function save_survey_form(){
       $this->load->library("form_validation");
       
       $this->form_validation->set_rules("job_title", "Job Title / Skill", "required");
       $this->form_validation->set_rules("skills_need_count", "Manpower Needed", "required");
       $this->form_validation->set_rules("description", "Requirement Description", "required");
       
       $this->output->set_content_type('application_json');
       if( $this->form_validation->run() == FALSE) {
           $this->output->set_output(
                json_encode([
                    'result' => 0 ,
                    'error' => $this->form_validation->error_array()
               ]));
       } else {
           $company_id = $this->session->userdata('user_id');
           $data = array(
                'COMPANY_ID_FK' => $company_id,
                'SKILL_ID_FK' => $this->input->post('job_title'),
                'MANPOWER_NO' => $this->input->post('skills_need_count'),
                'REQUIREMENT_DESCRIPTION' => $this->input->post('description')
             );
            $post_id =  $this->db->insert('company_vacancy_position', $data);
            $this->output->set_output(
                     json_encode([
                         'result' =>1 ,
                        'ID' => $post_id
                    ]));
           
       }       
    }
    
// -----------------------------------------------------------------------------
    public function update_survey_statistics(){
        $sql = "SELECT `SKILL_ID_FK` as ID  FROM  `survey_statistics`";
        $query = $this->db->query( $sql);
        
        $this->output->set_content_type('application_json');
        
        if ( $query->num_rows == 0) {
            $this->output->set_output(
                     json_encode([
                         'result' => 0 ,
                        'error' => "Unable To update"
                    ]));
        } else {
            $result = $query->result() ;
            
            foreach( $result as $rows ){    
                $sql_update = "UPDATE `survey_statistics` SET SURVEY_TOTAL = ( SELECT SUM( `MANPOWER_NO` ) AS total"
                                    . " FROM `company_vacancy_position`"
                                    . " WHERE `SKILL_ID_FK` = {$rows->ID} )" 
                    /**. " IN ("
                        . " SELECT `SKILL_ID_PK`"
                        . " FROM `skills_type`"
                        . " WHERE `SKILL_ID_PK` = {$rows->ID}"
                        . " ) )" **/
                            . " WHERE `SKILL_ID_FK` = {$rows->ID}";
                    
                 $update_query = $this->db->query( $sql_update );
            }
            
            $this->output->set_output(
                     json_encode([
                         'result' =>1 ,
                        'data' => "The Survey Statistics has been updated !"
                    ]));
            
            
//            $this->get_survey_statistic();
        }
    }
       
// -----------------------------------------------------------------------------
    public function get_survey_statistic(){
        //perform update first of survey data if there is changes
        //$this->update_survey_statistics();
        
        
        $sql = " SELECT (SELECT `SKILL_NAME` "
                        . "	FROM `skills_type` "
                        . "	WHERE `SKILL_ID_PK` = survey.`SKILL_ID_FK`) as NAME, "
                    . " `SURVEY_TOTAL` as TOTAL"
            
            . " FROM `survey_statistics` as survey"
            . " ORDER BY survey.`SURVEY_TOTAL` DESC";
        
        
        $query = $this->db->query( $sql);
        if ( $query->num_rows == 0) {
            
        } else {
            $result = $query->result() ;
            $this->output->set_content_type('application_json');
            //foreach( $result as $rows ){
                
                $this->output->set_output(
                    json_encode(
                    ['result'=>1,
                    'data' =>$result
               ]));
                
            //}
        }
        
        
    }
       
// -----------------------------------------------------------------------------

   public function add_hr(){
       
       $this->load->library("form_validation");
       
       $this->form_validation->set_rules("name_hr", "Name of Hr", "required");
       $this->form_validation->set_rules("email_address", "Email Address", "required");
       $this->form_validation->set_rules("contact_no", "Conctact Number", "required");
       $this->output->set_content_type('application_json');
       if( $this->form_validation->run() == FALSE) {
           $this->output->set_output(
                json_encode([
                    'result' => 0 ,
                    'error' => $this->form_validation->error_array()
               ]));
       } else {
           $company_id = $this->session->userdata('user_id');
           
           $data = array(
                'COMPANY_ID_FK' => $company_id,
                'NAME' => $this->input->post('name_hr'),
                'CONTACT_NO' => $this->input->post('contact_no'),
                'EMAIL' => $this->input->post('email_address')
             );
            $result =  $this->db->insert('contact_information', $data);
            
            if ($result == true) {
                 $this->output->set_output(
                     json_encode([
                         'result' =>1 ,
                        'ID' => $result
                    ]));
            } else {
                $this->output->set_output(
                json_encode([
                    'result' => 0 ,
                    'error' => "Error in Saving New Hr"
               ]));
                
            }
       }          
   }
       
   public function get_profile(){
       $user_id = $this->session->userdata('user_id');
       $profile = $this->models_company_profile->get_profile( $user_id );       
   }
       
   
       
   
   
   

    
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */