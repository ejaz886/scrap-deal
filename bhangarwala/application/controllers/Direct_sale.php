<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direct_sale extends CI_Controller {
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
    public function index()
    {
        $data["page"] = "direct_sale_view/direct_sale_page";
        $this->load->view("main_page",$data);
    }

  public function add()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
            
            $this->db->insert("tbl_direct_sale",$this->input->post());
            $response = array("response"=>true,"msg"=>'Successfully Inserted...');
            
        }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }
}