<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    public function get_default_assets()    {
          $data['css'] = array(
            "home" => base_url(). 'public/css/default_template.css',
            'header' => base_url(). 'stylesheet/header_section/header.css',
            'footer' => base_url(). 'stylesheet/footer_section/footer3.css',
            'bootstrap' => base_url(). 'stylesheet/bootstrap.min.css'
         );
        $data['js'] = array(
            "jquery" => base_url(). 'public/js/jquery-2.1.3.min.js',
            "bootstrap_jquery" => base_url(). 'js/bootstrap.min.js',
         );

        $data['title'] = "Default Template";
        return $data;

    }
}

/* End of file Someclass.php */