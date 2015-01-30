<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {
    
    
    

   public function __construct(){
       parent::__construct();
       $this->load->model('models_survey');
       $this->load->model('models_survey_data');
       
       
   }
    
    
    public function index()
    {
        
       
    }
    
    public function get_question(){
        print_r($this->models_survey->get_all());
        
    }
    
    public function processSurvey(){
        $index = 1;
        $post_index = 0;
        $total_data = 0;
        $column_name = "";
        
        $data = array(
            "ID" => NULL,
            "USER_ID_FK" => 1
        );
        
        $form_data = $this->input->post();
        
        $data = $this->models_survey->get_all() ;
        
        for( $index = 1; $index < 20; $index++){
            $skill_rating = $data[ $index -1]->SKILL_RATING;
            $total_data = $data[ $index -1]->TOTAL_DATA;
            
            // upate each row
            $column_name =  $this->convertNumToName( $index );
            // perform addition base on user input and current value
            $result = $skill_rating + $this->input->post( $column_name );
            
            // update all total_data
            $total_data = $total_data + 1;
                       
            //update database
            $this->models_survey->update_by(array('SKILL_ID' => $index ),
                    array('SKILL_RATING'=> $result, 'TOTAL_DATA'=>$total_data)
                    );
        }
        
        //save the  value to other tables
        $temp = array_merge( $data, $form_data);
        $this->models_survey_data->insert( $temp );
        print_r( $temp);
        
    }
    
    public function test(){
        
        //echo $this->convertNumToName(2);
        
        
        
        
        
    }
    private function convertNameToNum( $the_string){
         switch( $the_string){
            case "READING" : return 1; 
            case "WRITING" :return 2;
            case "MATH" :return 3;
            case "LANGUAGE" :return 4;
            case "DEXTERITY" :return 5;
            case "TEAM_WORKING" :return 6; 
            case "LEARNING" :return 7; 
            case "ADAPTING" :return 8; 
            case "INSTRUCTING" :return 9; 
            case "TASK_DISCRETION" :return 10; 
            case "COMPUTING" :return 11; 
            case "MANAGERIAL_SKILLS" :return 12; 
            case "PROBLEM_SOLVING" :return 13; 
            case "PRESENTATIONS" :return 14; 
            case "PERSUADING" :return 15; 
            case "PLANNING" :return 16; 
            case "GREEN_SKILLS" :return 17; 
            case "RESOURCE_SAVING" :return 18; 
            case "POLLUTION_SAVING" :return 19; 
   
        }
    }
    
    private function convertNumToName( $the_num ){
        
        switch( $the_num){
            case 1: return "READING" ;
            case 2: return "WRITING" ;
            case 3: return "MATH" ;
            case 4: return "LANGUAGE" ;
            case 5: return "DEXTERITY" ;
            case 6: return "TEAM_WORKING" ;
            case 7: return "LEARNING" ;
            case 8: return "ADAPTING" ;
            case 9: return "INSTRUCTING" ;
            case 10: return "TASK_DISCRETION" ;
            case 11: return "COMPUTING" ;
            case 12: return "MANAGERIAL_SKILLS" ;
            case 13: return "PROBLEM_SOLVING" ;
            case 14: return "PRESENTATIONS" ;
            case 15: return "PERSUADING" ;
            case 16: return "PLANNING" ;
            case 17: return "GREEN_SKILLS" ;
            case 18: return "RESOURCE_SAVING" ;
            case 19: return "POLLUTION_SAVING" ;
            
        }
    }
    
    
    
    

  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */