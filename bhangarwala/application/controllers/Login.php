<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
       
    }
    // This Code Is defualt Page Code //
    public function index()
    {
         if(!empty($this->session->userdata("is_login")))
        {
            if($this->session->userdata("is_login") == "yes")
            {
                redirect(base_url()."dashboard?page_name=dashboard_page");
            }
        }
        $this->load->view("login_page");
    }

    public function check_login()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
            $this->db->where("User_Name",$this->input->post("username"));
            $this->db->where("User_Password",$this->input->post("password"));
            $r = $this->db->get("tbl_users");
            if($r->num_rows() == 1)
            {
                $this->session->set_userdata("is_login","yes");
                $this->session->set_userdata("user",$r->row());

                $response = array("response"=>true,"msg"=>'Welcome '.$r->row()->User_Name);
                    redirect(base_url()."dashboard");
            }else{
                $response = array("response"=>false,"msg"=>'Wrong Username and Password....');
            }
        }
        else{
                $response = array("response"=>false,"msg"=>'Empty fields...');
        }

        echo json_encode($response);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url()."login");
    }
}