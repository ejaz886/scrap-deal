<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
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
        $this->db->where("Item_Category_Status","Active");
        $this->db->order_by("Item_Category_Id","desc");
        $data["category"] = $this->db->get("item_category")->result();
        $data["page"] = "category_page";
        $this->load->view("main_page",$data);
    }

    public function add_new_category()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
            $this->db->where("Item_Category_Name",$this->input->post("Item_Category_Name"));
            $t = $this->db->get("item_category")->num_rows();
            if($t == 0){
            $this->db->insert("item_category",$this->input->post());
            $response = array("response"=>true,"msg"=>'Successfully Inserted...');
            }else{
            $response = array("response"=>false,"msg"=>'Category Already Present...');
            }
        }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }

     public function edit()
    {
        $this->db->where("Item_Category_Id",$this->input->post("Item_Category_Id"));
        $result = $this->db->get("item_category")->row( );
        echo json_encode($result);
    } 
    public function update()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Item_Category_Id",$this->input->post("Item_Category_Id"));
        $result = $this->db->update("item_category",$this->input->post());
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
        $this->db->where("Item_Category_Id",$this->input->post("Item_Category_Id"));
        $result = $this->db->update("item_category",array("Item_Category_Staus"=>"deleted"));
        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

}