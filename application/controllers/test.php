<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
// -----------------------------------------------------------------------------
    public function __construct(){
        parent::__construct();
        $this->load->library('template');
        $this->load->model('models_console');

    }
// -----------------------------------------------------------------------------
    public function add_industry(){

       $string = "MANUFACTURING OF OFFICE, ACCOUNTING & COMPUTER EQUIPMENT";
       $search_data = preg_replace("/[^A-Za-z0-9\s]/", '', $string);
       $search_data   = preg_split('/\s+/', $search_data);
       
       $index = 0;
       
       $table_name = "MANUFACTURING OF OFFICE , ACCOUNTING & COMPUTER EQUIPMENT";
       
       $table_name_arr =  preg_replace("/[^A-Za-z0-9\s]/", '', $table_name);
       $table_name_arr = preg_split('/\s+/', $table_name);
       
       
       foreach($search_data as $input){
           $input =  strtoupper($input);
           foreach( $table_name_arr as $to_compare){
               $to_compare = strtoupper( $to_compare);
               if ( $input == $to_compare) {
                   $index++;
                   
                   echo "<br>" . $input; 
               }
           }
       }
       echo "Found " . $index;
    }
// ----------------------------------------------------------------------------
    
    // get the id of cutomuize industry type
    // assign it into as a new customize industry as theire relationship id
    
    // add the new data into the industry_list
    
    public function get_default_id(){
        $query = $this->db->query("SELECT INDUSTRY_TYPE_ID_PK FROM industry_type WHERE INDUSTRY_NAME = 'CUSTOMIZE' ");
        $result = $query->result_array();
        
        $name = $this->input->post('new_industry_list_name');
        $list_name = strtoupper($name);
        
        foreach( $result as $row){
              $industry_type_id = $row['INDUSTRY_TYPE_ID_PK'];
        }
        
        $data = array(
                'INDUSTRY_TYPE_ID_FK' => $industry_type_id,
                'INDUSTRY_LIST_NAME' => $list_name
             );
        $sql_check = "SELECT `INDUSTRY_LIST_ID` FROM `industry_list` WHERE `INDUSTRY_LIST_NAME` = '{$list_name}'";
         
        
        $query_check_exists = $this->db->query( $sql_check);
        $this->output->set_content_type('application_json');
         
         if ($query_check_exists->num_rows() >= 1) {        //checking when similar string already in the database
             $this->output->set_output(
                     json_encode([
                        'result' => 0  ,
                        'error' => "New Name Already Exists"
                    ]));
         } else {
             $insert_result =  $this->db->insert('industry_list', $data);

            if ($insert_result == true) {
                 $this->output->set_output(
                     json_encode([
                        'result' => 1 ,
                        'message' => "New Industry Name Save",
                         'ID' => $this->db->insert_id()
                    ]));
            } else {
                $this->output->set_output(
                json_encode([
                    'result' => 0 ,
                    'error' => "Error in Saving New Custom Title"
               ]));
            }
            //$this->models_console->debugToConsole("new item insertem");
         }
    }
    
    
    public function testId(){
        $this->load->model('model_db');
        
        echo $this->model_db->getIndustryListId( 'MANUFACTURING OF MACHINERY & EQUIPMENT INCLUDING OTHER DOMESTIC APPLIANCES');
    }
}


/* End of file test.php */
/* Location: ./application/controllers/welcome.php */