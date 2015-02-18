<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('template');

	}


	public function index()
	{
		//$this->load->view('welcome_message');
		$this->initializePostVariables();	// initializes the post variables to be use as values of form input elements
		$this->form_init();
	}
	public function form_init(){

		$this->load->model("model_db");

		$data['nationality_list'] = $this->model_db->getNationalityList();
		$data['industry_type'] = $this->model_db->getIndustryType();
		$data['industry_list'] = $this->model_db->getIndustryList();

		// @DEFAULT ------------------------
		//$this->load->view("form_registration", $data);

		// @ADDEDD  DATA -------------------------------------
		//$this->output->enable_profiler(true);
		$template_data = $this->template->get_default_assets();
		$template_data['css']['home'] = base_url().'stylesheet/home_section/home1.css';
		$template_data['css']['registration'] = base_url().'public/css/company_registration_section/company_registration.css';
		$template_data['title'] = "Company Registration";



		$this->load->view('template_default/inc_header',$template_data);
		$this->load->view('company_registration_section/company_registration', $data);
		$this->load->view('template_default/inc_footer');

		//$this->load->view("form_registration", $data);
	}
	public function signUpValidation(){

		$this->load->library("form_validation");

		$this->form_validation->set_rules("company_name", "Company name", "required");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("telephone_no", "Telephone no", "required");
		$this->form_validation->set_rules("employee_no", "Employee no", "required|callback_convertToInt");
		$this->form_validation->set_rules("username", "Username", "required");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("confirm_password", "Confirm password", "required|matches[password]");
		$this->form_validation->set_rules("business_nature_result", "Business nature result", "required");
		$this->form_validation->set_rules("major_product_result", "Major product result", "required");

		if($this->form_validation->run()){

			echo "pass";
			$this->securePass();	// converts the password into md5
			$this->convertStringToInt($_POST["nationality"]);	// converts the string type select tag nationality from form_registration into integer
			$this->getIndustryID();

			$this->load->model("model_db");
			$this->model_db->register();

			header('location:'. base_url(). 'site/default_login');
		}
		else{

			//echo "failed <br />";
              //          print_r($this->form_validation->error_array());
             $this->form_init();
			//header('location:'. base_url(). 'welcome/index');
			//$this->load->view("form_registration");
		}
	}
	public function securePass(){

		$_POST["password"] = md5($this->input->post("password"));
	}
	public function getIndustryID(){

		$this->load->model("model_db");

		$data = $this->model_db->getIndustryTypeID($_POST["business_nature_result"]);

		$_POST["business_nature_result"] = intval($data[0]->INDUSTRY_TYPE_ID_PK);

	}
	public function convertStringToInt($num_string){

		return intval($num_string);
	}
	public function convertToInt(){	// this method converts the employee no. field from string to integer

		$_POST["employee_no"] = intval($this->input->post("employee_no"));
	}

	public function initializePostVariables(){

		$_POST["company_name"] = "";
		$_POST["address"] = "";
		$_POST["telephone_no"] = "";
		$_POST["fax_no"] = "";
		$_POST["employee_no"] = "";
		$_POST["nationality"] = "";
		$_POST["username"] = "";
		$_POST["password"] = "";
		$_POST["confirm_password"] = "";
		$_POST["business_nature_result"] = "";
		$_POST["major_product_result"] = "";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */