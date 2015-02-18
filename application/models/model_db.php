<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DB extends CI_Model{

    public function getNationalityList(){

        $query = $this->db->query("SELECT * FROM nationality_list");

        return $query->result();
    }
    public function getIndustryType(){

        $query = $this->db->query("SELECT * FROM industry_type");

        return $query->result();
    }
    public function getIndustryList(){

        $query = $this->db->query("SELECT * FROM industry_list");

        return $query->result();
    }
    public function getIndustryTypeID($industry_type){

        $query = $this->db->query("SELECT * FROM industry_type WHERE INDUSTRY_NAME = \"" . $industry_type . "\"");

        return $query->result();
    }
    public function inCompanyList(){

        $new_row = array(

            "COMPANY_NAME" => $_POST["company_name"],
            "COMPANY_STATUS" => 1
        );
        $this->db->insert("company_list", $new_row);
    }
    public function getCompanyListID(){

        $query = $this->db->query("SELECT * FROM company_list WHERE COMPANY_NAME = \"" . $_POST["company_name"] . "\"");

        $row = $query->result();


        return intval($row[0]->COMPANY_ID_PK);
    }
    public function register(){

        $this->inCompanyList();

        $new_row = array(

            "COMPANY_ID_FK" => $this->getCompanyListID(),
            "COMPANY_NAME" => $_POST["company_name"],
            "COMPLETE_ADDRESS" => $_POST["address"],
            "TEL_NO" => $_POST["telephone_no"],
            "MOBILE_NO" => $_POST["telephone_no"],
            "FAX_NO" => $_POST["telephone_no"],
            "EMPLOYEES_NO" => $_POST["employee_no"],
            "INDUSTRY_TYPE_FK" => $_POST["business_nature_result"],
            "NATIONALITY_FK" => $_POST["nationality"]
        );
        $new_row_login = array(

            "USER_ID_FK" => $this->getCompanyListID(),
            "USERNAME" => $_POST["username"],
            "PASSWORD" => $_POST["password"],
            "USER_TYPE_ID_FK" => 1
        );
        $this->db->insert("company_profile", $new_row);
        $this->db->insert("login", $new_row_login);
    }
}