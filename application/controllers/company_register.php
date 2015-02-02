    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_Register extends CI_Controller {
    private $company_name = "";

   public function __construct(){
       parent::__construct();
       $this->load->model('models_company_register');
       $this->load->model('models_hr_register');
   }

    public function index()
    {


    }
    //company register
    public function processForm(){
        //INSERT INTO `project`.`company_registration` (`USER_ID`, `COMPANY_NAME`, `COMPANY_ADDRESS`, `TEL_NO`, `MOBILE_NO`, `EMAIL`, `INDUSTRY_TYPE`, `LOGO`, `FAX_NO`, `SERVICE_OFFER`) VALUES (NULL, 'test company', 'test address', '1234567890', '1234567890', 'testcompany@gmail.com', 'Manufacturing', '#', '1234567890', 'Many');
        $form_data = $this->input->post();
        $company_name = $this->input->post('COMPANY_NAME');
        //save to company_list
        $sql = "INSERT INTO `project`.`company_list` (`COMPANY_ID_PK`, `COMPANY_NAME`, `COMPANY_STATUS`) VALUES (NULL, '{$company_name}', '0');";
        
        $this->models_company_register->db->query( $sql );
        $company_id = $this->models_company_register->getIdFromList($company_name);
        
        $data = array( "COMPANY_ID_FK" => ((int) ($company_id)) );
        
        $this->saveCompanyId( $company_id );
        
         $temp = array_merge( $data, $form_data);
         $this->models_company_register->insert( $temp );
         
         echo json_encode( array("status"=>1));
         
    }
    
    
    public function processHRForm(){
        $default_data = array(
            "COMPANY_ID_FK" => $this->session->userdata('company_id')
            );
        
        $sql = "INSERT INTO `project`.`company_list` (`COMPANY_ID_PK`, `COMPANY_NAME`, `COMPANY_STATUS`) VALUES (NULL, '{$company_name}', '0');";
        $form_data = $this->input->post();
         $temp = array_merge( $default_data, $form_data);
         
         $this->models_hr_register->insert( $temp );
         
         $user_id = $this->models_company_register->getIdFromList($company_name);
        
        //$this->models_company_register->db->query( $sql );
        
        
        echo json_encode( array("status" => 1));
        
        
        
        
        
    }
    
    public function saveLogin(){

        echo json_encode( array( "user_id" => 1 ));
        
        
        $user_login =  $this->input->post();
        
        
        
    }
    
    public function saveLoginSession( $user_id ){
           $data = array(
                    "user_id" => $user_id,
                    "is_logged" => 1            
		);
        
        
        
    }
    
    
    
    public function test(){
        $company_name = "test2";
        
        echo $company_id;
    }
    
    public function display_profile(){
        
        
    }
    
    
    public function saveCompanyId( $company_id ){
        $data = array(
                    "company_id" => $company_id,
                    "is_registered" => 1,            
		);
	$this->session->set_userdata( $data);
    }
    
    public function clearCompanyId(){
        
        
    }
    
    public function saveUserSession($username = "", $user_id = ""){
        $data = array(
            "username" => $username,
            "user_id"  => $user_id,
            "is_logged_in" => 1
        );
        $this->session->set_userdata( $data);
    }

    public function logoutUser(){
		$this->session->sess_destroy();
		redirect( base_url(). "site/index" );

	}


    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */