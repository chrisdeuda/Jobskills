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

        //$username = "admin";
        //$password = "admin";
        $password_md5 = md5($password);
        $user_id  = $this->models_login->getUserId( $username, $password_md5);

           if ( $user_id == -1) {
            $data = array(
                'status' => false,
                'message' => "Please Check your Username/Password",
            );
            echo json_encode($data);

        } else {

            
            $user_type = $this->models_login->get_user_type($user_id);
            $this->save_logged_in( $user_id, $user_type );

            
            if ( $user_type == 2) { //admin
                $data = ['status' => true,
                'message' => "ok",
                'forward_url' => base_url(). 'admin/manage_survey',
                ];
                echo json_encode($data);

            } else if ( $user_type == 1) { //hr
                $data = ['status' => true,
                'message' => "ok",
                'forward_url' => base_url(). 'site/default_company_profile',
                ];
                echo json_encode($data);

            }


        }
    }

// -----------------------------------------------------------------------------
     /**
     * Save the user_id into ci_session_variable
     * @param type $user_id - current user login
     * @return void
     */
    public function save_logged_in($user_id , $user_type ){
        $data = array(
                    "user_id"  => $user_id,
                    "is_logged_in" => 1,
                    "user_type" =>$user_type
		);
        $this->session->set_userdata( $data );

    }
// -----------------------------------------------------------------------------
    /**
     * Clear the session variable of user that is currently logged
     * @return void
     */
// -----------------------------------------------------------------------------
    public function logout_user(){
        $this->session->sess_destroy();
        header('location:'. base_url(). 'site/default_template');
    }
    /**
     * Check if the user is currently logged in the website
     * @return boolean
     */
 // -----------------------------------------------------------------------------
    public function is_user_logged_in(){
        if ( $this->session->userdata('is_logged_in') == true ) {
            return true;
        } else {
            return false;
        }
    }

 // -----------------------------------------------------------------------------

    public function test(){
        echo "hello from my_ser";

    }


}

?>