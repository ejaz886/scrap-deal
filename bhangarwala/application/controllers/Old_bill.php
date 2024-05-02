<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Old_bill extends CI_Controller {
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
        $data["customer"] = $this->db->get("customer")->result();
        $data["item_category"] = $this->db->get("item_category")->result();
        $data["sale_head"] = $this->db->get("final_sale_head")->result();
        $data["page"] = "old_bill_page";
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
        $result = $this->db->get("customer")->row();
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
        $result = $this->db->delete("customer");
        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

    public function get_item()
    {
        $this->db->where("Item_Category_Id",$this->input->post("Item_Category_Id"));
        $result = $this->db->get("item")->result( );
        echo json_encode($result);
    } 

    public function set_bill_temp()
    {
        if(!empty($this->input->post("Customer_Id")))
        {
            $this->db->insert("final_sale_head",$this->input->post());
            redirect(base_url()."new_bill/add_new_item?Sale_Id=".$this->db->insert_id());
        }   
    }

       public function add_new_item()
    {
        $this->db->where("Sale_Id",$this->input->get("Sale_Id"));
        $data["sale_head"] = $this->db->get("final_sale_head")->row();


        $this->db->where("Sale_Id",$this->input->get("Sale_Id"));
        $data["sale_item"] = $this->db->get("final_sale")->result();


        $data["item_category"] = $this->db->get("item_category")->result();
        $data["page"] = "old_bill_item_page";
        $this->load->view("main_page",$data);
    } 

    public function add_new_item_qty()
    {
        if(!empty($this->input->post()))
        {
            $this->db->where("Item_Id",$this->input->post("Item_Id"));
            $this->db->join("item_category b","a.Item_Category_Id = b.Item_Category_Id");
            $item = $this->db->get("Item a")->row();
            $this->db->insert("final_sale",array(
                "Sale_Id"=>$this->input->post("Sale_Id"),
                "Item_Category_Id"=>$item->Item_Category_Id,
                "Item_Category_Name"=>$item->Item_Category_Name,
                "Item_Id"=>$item->Item_Id,
                "Item_Code"=>$item->Item_Code,
                "Item_Discription"=>$item->Item_Description,
                "Item_Rate"=>$this->input->post("Item_Rate"),
                "Item_Discount"=>$item->Item_Discount,
                "Item_Tax"=>$item->Item_Tax,
                "Item_Unit"=>$item->Item_Unit,
                "Item_Barcode"=>$item->Item_Barcode,
                "Item_Qty"=>$this->input->post("Item_Qty")
            ));
        }
        echo json_encode(array("response"=>true,"msg"=>"Added Successfully"));
    }

    public function add_by_barcode()
    {
        if(!empty($this->input->post()))
        {
            $this->db->where("Item_Id",$this->input->post("Item_Id"));
            $this->db->join("item_category b","a.Item_Category_Id = b.Item_Category_Id");
            $item = $this->db->get("Item a")->row();
            $this->db->insert("final_sale",array(
                "Sale_Id"=>$this->input->post("Sale_Id"),
                "Item_Category_Id"=>$item->Item_Category_Id,
                "Item_Category_Name"=>$item->Item_Category_Name,
                "Item_Id"=>$item->Item_Id,
                "Item_Code"=>$item->Item_Code,
                "Item_Discription"=>$item->Item_Description,
                "Item_Rate"=>$item->Item_Rate,
                "Item_Discount"=>$item->Item_Discount,
                "Item_Tax"=>$item->Item_Tax,
                "Item_Unit"=>$item->Item_Unit,
                "Item_Barcode"=>$item->Item_Barcode,
                "Item_Qty"=>$this->input->post("Item_Qty")
            ));
        }
        echo json_encode(array("response"=>true,"msg"=>"Added Successfully"));
    }
public function update_overall_discount()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->update("final_sale_head",$this->input->post());
        $response = array("response"=>true,"msg"=>'Successfully Updated...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 
public function delete_item_sale()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Sale_Item_Id",$this->input->post("Sale_Item_Id"));
        $result = $this->db->delete("final_sale");
        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 

    public function delete_sale_head()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->delete("final_sale_head");

        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->delete("final_sale");

        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }

     public function save_bill_final()
    {
        $response = array();
        if(!empty($this->input->post()))
        {

            
        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->get("final_sale_head")->row();
        $this->db->insert("final_sale_head",array(
            "Customer_Id"=>$result->Customer_Id,
            "Customer_Name"=>$result->Customer_Name,
            "Customer_Mobile"=>$result->Customer_Mobile,
            "Sale_Overall_Discount"=>$result->Sale_Overall_Discount,
            "Sale_Date"=>$result->Sale_Date
        ));
        $last_id = $this->db->insert_id();

        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->get("final_sale")->result();
        foreach($result as $tt)
        {
            $this->db->insert("final_sale",array(
            "Sale_Id"=>$last_id,
            "Item_Category_Id"=>$tt->Item_Category_Id,
            "Item_Category_Name"=>$tt->Item_Category_Name,
            "Item_Id"=>$tt->Item_Id,
            "Item_Code"=>$tt->Item_Code,
            "Item_Discription"=>$tt->Item_Discription,
            "Item_Rate"=>$tt->Item_Rate,
            "Item_Discount"=>$tt->Item_Discount,
            "Item_Tax"=>$tt->Item_Tax,
            "Item_Unit"=>$tt->Item_Unit,
            "Item_Barcode"=>$tt->Item_Barcode,
            "Item_Qty"=>$tt->Item_Qty
            ));
        }

        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->delete("final_sale_head");

        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->delete("final_sale");

        $response = array("response"=>true,"msg"=>'Successfully Created...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 


 public function print_old_bill()
    {
        $this->db->where("Sale_Id",$this->input->get("Sale_Id"));
        $data["sale_head"] = $this->db->get("final_sale_head")->row();


        $this->db->where("Sale_Id",$this->input->get("Sale_Id"));
        $data["sale_item"] = $this->db->get("final_sale")->result_array();


        $this->load->view("bill_print_page",$data);
    }

}