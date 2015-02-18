<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('template');

    }

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
}


/* End of file test.php */
/* Location: ./application/controllers/welcome.php */