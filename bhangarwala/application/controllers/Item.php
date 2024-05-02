<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
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

        $data["category"] = $this->db->get("item_category")->result();
        $data["unit_master"] = $this->db->get("unit_master")->result();
        $this->db->join("item_category b","a.Item_Category_Id = b.Item_Category_Id");
        $data["item"] = $this->db->get("item a")->result();
        $data["page"] = "item_page";
        $this->load->view("main_page",$data);
    }

    public function add()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
            $this->db->where("Item_Description",$this->input->post("Item_Description"));
            $t = $this->db->get("item")->num_rows();
            if($t == 0){
            $this->db->insert("item",$this->input->post());
            $lid = $this->db->insert_id();
            $last_id = $lid."-".$this->input->post("Item_Rate");
           // $temps = $this->set_barcode($last_id);
            // $this->db->where("Item_Id",$lid);
            // $this->db->update("item",array("Item_Barcode"=>$temps));
            $response = array("response"=>true,"msg"=>'Successfully Inserted...');
            }else{
            $response = array("response"=>false,"msg"=>'Already Present...');
            }
        }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }

     public function edit()
    {
        $this->db->where("Item_Id",$this->input->post("Item_Id"));
        $result = $this->db->get("item")->row( );
        echo json_encode($result);
    } 
    public function update()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Item_Id",$this->input->post("Item_Id"));
        $this->db->update("item",$this->input->post());

        $lid = $this->input->post("Item_Id");
            $last_id = $lid."-".$this->input->post("Item_Rate");
            $temps = $this->set_barcode($last_id);
            $this->db->where("Item_Id",$lid);
            $this->db->update("item",array("Item_Barcode"=>$temps));


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
        $this->db->where("Item_Id",$this->input->post("Item_Id"));
        $result = $this->db->update("item",array("Item_Status"=>'deleted'));
        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

    private function set_barcode($code)
    {
        //load library
        $this->load->library('zend');
        //load in folder Zend
        $this->zend->load('Zend/Barcode');
        //generate barcode
        $file = Zend_Barcode::draw('code128', 'image', array('text'=>$code), array());
            $code = time().$code;
            $barcodeRealPath = 'image/'.$code.'.png';
            $barcodePath = 'image/';

            header('Content-Type: image/png');
            $store_image = imagepng($file,$barcodeRealPath);
            return $barcodePath.$code.'.png';
    }

}