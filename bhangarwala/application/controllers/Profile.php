<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!empty($this->session->userdata("is_login")))
        {
            if($this->session->userdata("is_login") != "yes")
            {
                redirect(base_url()."login");
            }
        }else{
            redirect(base_url()."login");

        }
       
    }
    // This Code Is defualt Page Code //
    public function index()
    {
        $data["page"] = "profile_page";
        $this->load->view("main_page",$data);
    }
    public function update()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("User_Id",$this->session->userdata("user")->User_Id);
        $result = $this->db->update("user",$this->input->post());
        $response = array("response"=>true,"msg"=>'Successfully Updated...');
        redirect(base_url()."login/logout");
        }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

}