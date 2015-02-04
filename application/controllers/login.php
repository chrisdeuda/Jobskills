<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
   public function __construct(){
       parent::__construct();
       $this->load->model('models_console');
       $this->load->model('models_login');
   }
   
   /**
     * Get the value of the form from POST method and check the database if user
     * exists.
     * @return void
     */
    public function login_user(){
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $password_md5 = md5($password);
        $user_id  = $this->models_login->getUserId( $username, $password);
        
           if ( $user_id == -1) {
            $data = array(
                'status' => false,
                'message' => "Please Check your Username/Password",
            );
            echo json_encode($data);
            
        } else {
            //$this->models_session->save_logged_in( $user_id );
            $data = ['status' => true,
                'message' => "ok",
                'forward_url' => base_url(). 'site/company_employers_side_main',
                ];
            echo json_encode($data);
        }
    }  
}

?>