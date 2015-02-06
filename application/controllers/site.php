<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
	   parent::__construct();
       $this->load->model('models_survey');
       $this->load->library('template');
	}

	public function index()
	{
		$this->home_main();
	}
	// header
	public function header_main(){
		$this->load->view('header_section/header');

	}
	//homepage section
	public function home_main(){
		$this->load->view('home_section/home');

	}
	// login section
	public function login_main(){
		$this->load->view('login_section/login');
	}
	// post job section
	public function post_job_main(){
		$this->load->view('post_job_section/post_job');
	}

	// help section
	public function help_main(){
		$this->load->view('help_section/help');
	}
	// choices section
	public function choices_main(){
		$this->load->view('choices_section/choices');
	}

	public function view_more_main(){
		$this->load->view('home_section/view_more');
	}
	// banner section ng HELP
	public function terms_condition_main(){
		$this->load->view('terms_condition/terms_condition');
	}
	// banner section ng HELP
	public function search_banner_output(){
		$this->load->view('help_section/search_banner');
	}
	public function search_banner_in_help(){
		$this->load->view('help_section/search_banner_help');
	}
	public function forecast_banner_in_help(){
		$this->load->view('help_section/forecast_banner_help');
	}
	public function statistical_banner_in_help(){
		$this->load->view('help_section/statistical_banner_help');
	}
	public function post_banner_in_help(){
		$this->load->view('help_section/post_banner_help');
	}
	public function job_banner_in_help(){
		$this->load->view('help_section/job_banner_help');
	}
	// profile info
	public function profile_main(){
		$this->load->view('profile');
	}
	// register form
	public function register_main(){
		$this->load->view('register_section/register');
	}
	// statistic page
	public function statistic_main(){
		$this->load->view('statistic_section/statistic');
	}
	// profile of company employers side
	public function company_employers_side_main(){
		$this->load->view('company_employer_side_section/company_employer_side');
	}
	// profile of company viewers side
	public function company_viewer_side_main(){
		$this->load->view('company_viewer_side_section/company_viewer_side');
	}
	// team description page
	public function team_description_main(){
		$this->load->view('team_description_section/team_description');
	}
	// contact information page
	public function contact_information_main(){
		$this->load->view('contact_information_section/contact_information');
	}
	// edit contact information
	public function edit_contact_profile_main1(){
		$this->load->view('edit_contact_profile_section/edit_contact_profile1');
	}
	// hr register page
	public function hr_register_main(){
		$this->load->view('hr_register_section/hr_register');
	}
	// contact us page
	public function contact_us_main(){
		$this->load->view('contact_us_section/contact_us');
	}
	// experience page
	// contact us page
	public function experience_main(){
		$this->load->view('experience_section/experience');
	}

	// description page
	public function description_main(){
		$this->load->view('description_section/description');
	}




	 // testing section
	// new-header
	public function new_header_main(){
		$this->load->view('new_header_section/new_header');
	}
	// template testing
	public function template_main(){
		$this->load->view('template/template');
	}
	public function template1_main(){
		$this->load->view('includes_template/header');
		$this->load->view('includes_template/navbar');
		$this->load->view('home_page_test');
		$this->load->view('includes_template/footer');
	}
	public function template3_main(){
		$this->load->view('profile');
	}
	public function home_sample_main(){
		$this->load->view('home');
	}

	public function survey(){
		$this->load->view('survey_skills');

	}

    public function survey_result(){
    	$this->load->view('survey_result');

	}
	//copy this template to create new page
	public function default_template(){
		//$this->output->enable_profiler(true);
		$data = $this->template->get_default_assets();
		$data['css']['home'] = base_url().'stylesheet/home_section/home1.css';

		$this->load->view('template_default/inc_header',$data);
		$this->load->view('template_default/home');
		$this->load->view('template_default/inc_footer');
	}


	public function test_login(){
		//$this->output->enable_profiler(true);
		$data = $this->template->get_default_assets();
		$data['css']['home'] = base_url().'stylesheet/home_section/home1.css';
		$data['css']['login'] = base_url().'public/css/test_login.css';




		$this->load->view('template_default/inc_header',$data);
		$this->load->view('test_login');
		$this->load->view('template_default/inc_footer');
	}
	public function default_registration(){
		//$this->output->enable_profiler(true);
		$data = $this->template->get_default_assets();
		$data['css']['home'] = base_url().'stylesheet/home_section/home1.css';
		$data['css']['registration'] = base_url().'public/css/test_registration.css';

		$this->load->view('template_default/inc_header',$data);
		$this->load->view('test_registration');
		$this->load->view('template_default/inc_footer');
	}



}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */