<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
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

        $data["page"] = "stock_view/stock_page";
        $this->load->view("main_page",$data);
    }


}