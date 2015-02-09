<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
   // -------------------------------------------------------------------------- 
    public function __construct(){
       parent::__construct();
       $this->load->model('models_console');
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
   
   
   // --------------------------------------------------------------------------
   
   public function save_survey_form(){
       $this->load->library("form_validation");
       
       $this->form_validation->set_rules("job_title", "Job Title / Skill", "required");
       $this->form_validation->set_rules("skills_need_count", "Manpower Needed", "required");
       $this->form_validation->set_rules("description", "Requirement Description", "required");
       
       if( $this->form_validation->run() == FALSE) {
           $this->output->set_output(
                json_encode([
                    'result' => 0 ,
                    'error' => $this->form_validation->error_array()
               ]));
       } else {
           $data = array(
                'COMPANY_ID_FK' => 1,
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
   
   

    
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */