<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {
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

        $data["vendor"] = $this->db->get("vendor")->result();
        $data["page"] = "vendor_page";
        $this->load->view("main_page",$data);
    }

    public function add()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
            
            $this->db->insert("vendor",$this->input->post());
            $response = array("response"=>true,"msg"=>'Successfully Inserted...');
            
        }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }

     public function edit()
    {
        $this->db->where("Vendor_Id",$this->input->post("Vendor_Id"));
        $result = $this->db->get("vendor")->row( );
        echo json_encode($result);
    } 
    public function update()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Vendor_Id",$this->input->post("Vendor_Id"));
        $result = $this->db->update("vendor",$this->input->post());
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
        $this->db->where("Vendor_Id",$this->input->post("Vendor_Id"));
        $result = $this->db->delete("vendor");
        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

}