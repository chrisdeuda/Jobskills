<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
// -----------------------------------------------------------------------------
    public function __construct(){
       parent::__construct();
       $this->load->library('template');
       $this->load->model('models_console');
       $this->load->model('models_company_profile');
       $this->load->model('models_survey_statistics');
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
   /**
    * @Add 
    * - Check if user click the OTHER value in drop down
    * - if yes get the value of new title
    *       check if it is already in the database
    *       if yes use the current result id to save it to database
    *       else save it into the job_list and get the id
    *           to be save in the company_job_vacancy
    */
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
           $company_id          = $this->session->userdata('user_id');
           $job_title_id        = $this->input->post('job_title');
           $skill_needed_count  = $this->input->post('skills_need_count');
           $description = $this->input->post('description');
           $new_job_post_title_id = $this->input->post('new_job_post_title_id');
           
           $data = array(
                     'COMPANY_ID_FK' => $company_id,
                     'SKILL_ID_FK' => $job_title_id,
                     'MANPOWER_NO' => $skill_needed_count,
                     'REQUIREMENT_DESCRIPTION' => $description
                  );
           
           if ($job_title_id == 0 ) {
               $data['SKILL_ID_FK'] = $new_job_post_title_id; 
           } 
           
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
        $clear_list     =   $this->models_survey_statistics->clearSurveyList();
        $retrive_list   =   $this->models_survey_statistics->getSkillList();
        
        $survey_record_query = $this->models_survey_statistics->getSurveyRecord();
        
        $this->output->set_content_type('application_json');
        
        if ( $survey_record_query->num_rows == 0) {
            $this->output->set_output(
                     json_encode([
                        'result' => 0 ,
                        'error' => "Unable To update"
                    ]));
        } else {
            $result = $survey_record_query->result() ;
            
            foreach( $result as $rows ){    
                $update_records = $this->models_survey_statistics->updateSurveyRecord($rows->ID);
            }
            $this->output->set_output(
                     json_encode([
                        'result' =>1 ,
                        'data' => "The Survey Statistics has been updated !"
                    ]));
            
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
       
// -----------------------------------------------------------------------------
   public function get_profile(){
       $user_id = $this->session->userdata('user_id');
       $profile = $this->models_company_profile->get_profile( $user_id );       
   }

// -----------------------------------------------------------------------------
   public function get_job_post(){
       $user_id = $this->session->userdata('user_id');
       $this->models_company_profile->get_all_job_vacancy( $user_id );
       
       
       
   }
   
       
// -----------------------------------------------------------------------------
   public function insert_new_job_title(){
       
       $new_job_title = strtoupper( $this->input->post('new_job_title'));
       
       $SQL = "SELECT `SKILL_ID_PK` FROM `skills_type` WHERE `SKILL_NAME` = {'$new_job_title'}  ";
       
       $data = array ( "SKILL_NAME"=> $new_job_title );
       
       $this->db->select('SKILL_ID_PK');
       $query = $this->db->get_where('skills_type', $data );
       
       $this->output->set_content_type('application_json');
       
       if ( $query->num_rows() <= 0) {
           
           $insert_status = $this->db->insert('skills_type', $data);
           
           if ( $insert_status == FALSE ) {
               $this->output->set_output(
                     json_encode([
                        'result' => -1  ,
                        'error' => "Unable To insert new Title"
                    ]));
               
           } else {
               $skill_id = $this->db->insert_id();
               $this->output->set_output(
                     json_encode([
                         'result' => 1  ,
                        'ID' => $skill_id,
                         'message' => "New Job Title has been added "
                    ]));
           }
       } else {
           $result = $query->result();
           foreach( $result as $row){
              $this->output->set_output(
                  json_encode([
                  'result' => 0  ,
                  'ID' => $row->SKILL_ID_PK,
                  'error' => "'$new_job_title', Already Exists in the Records"
                      
              ]));
           }
       }
   }
       
// -----------------------------------------------------------------------------
   
   

    
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */