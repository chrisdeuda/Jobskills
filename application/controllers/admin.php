<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
// -----------------------------------------------------------------------------
    public function __construct(){
       parent::__construct();
       $this->load->model('models_survey');
       $this->load->library('template');
    }

// -----------------------------------------------------------------------------
    public function manage_survey(){
        //$this->output->enable_profiler(true);
        $data = $this->template->get_default_assets();
        $data['css']['home'] = base_url().'stylesheet/home_section/home1.css';
        $data['css']['admin_sidebar'] = base_url().'public/css/plugins/simple-sidebar.css';
        $data['js']['statistic_script'] = base_url().'public/js/admin_dashboard/admin_survey_statistics.js';
        $data['title'] = "Admin-Survey";

        $this->load->view('template_default/inc_header',$data);
        $this->load->view('admin_dashboard/admin_sidebar');
        $this->load->view('admin_dashboard/survey_statistics');
        $this->load->view('template_default/inc_footer');
    }
// -----------------------------------------------------------------------------



}

?>