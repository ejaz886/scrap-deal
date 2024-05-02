<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
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

        $this->db->where("Customer_Status","Active");
        $data["customer"] = $this->db->get("customer")->result();
        $data["page"] = "customer_page";
        $this->load->view("main_page",$data);
    }

    public function add()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
            
            $this->db->insert("customer",$this->input->post());
            $response = array("response"=>true,"msg"=>'Successfully Inserted...');
            
        }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }

     public function edit()
    {
        $this->db->where("Customer_Id",$this->input->post("Customer_Id"));
        $result = $this->db->get("customer")->row( );
        echo json_encode($result);
    } 
    public function update()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Customer_Id",$this->input->post("Customer_Id"));
        $result = $this->db->update("customer",$this->input->post());
        $response = array("response"=>true,"msg"=>'Successfully Updated...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

     public function delete()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Customer_Id",$this->input->post("Customer_Id"));
        $result = $this->db->update("customer",array("Customer_Status","deleted"));
        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

}