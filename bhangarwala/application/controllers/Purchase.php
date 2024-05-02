<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {
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
        $data["vendor"] = $this->db->get("vendor")->result();
        $data["item_category"] = $this->db->get("item_category")->result();
        $data["purchase_head"] = $this->db->get("purchase_head")->result();
        $data["page"] = "new_purchase_page";
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
        if(!empty($this->input->post("Vendor_Id")))
        {
            $this->db->insert("purchase_head",$this->input->post());
            redirect(base_url()."purchase/add_new_item?Purchase_Head_Id=".$this->db->insert_id());
        }   
    }

       public function add_new_item()
    {
        $this->db->where("Purchase_Head_Id",$this->input->get("Purchase_Head_Id"));
        $data["purchase_head"] = $this->db->get("purchase_head")->row();


        $this->db->where("Purchase_Head_Id",$this->input->get("Purchase_Head_Id"));
        $data["purchase_item"] = $this->db->get("purchase_item")->result();


        $data["item_category"] = $this->db->get("item_category")->result();
        $data["page"] = "new_purchase_item_page";
        $this->load->view("main_page",$data);
    }

    public function add_new_item_qty()
    {
        if(!empty($this->input->post()))
        {
            $this->db->where("Item_Id",$this->input->post("Item_Id"));
            $this->db->join("item_category b","a.Item_Category_Id = b.Item_Category_Id");
            $item = $this->db->get("item a")->row();
            $this->db->insert("purchase_item",array(
                "Purchase_Head_Id"=>$this->input->post("Purchase_Head_Id"),
                "Item_Category_Id"=>$item->Item_Category_Id,
                "Item_Category_Name"=>$item->Item_Category_Name,
                "Item_Id"=>$item->Item_Id,
                "Item_Description"=>$item->Item_Description,
                "Item_Unit"=>$item->Item_Unit,
                "Purchase_Rate"=>$this->input->post("Purchase_Rate"),
                "Purchase_Discount"=>$this->input->post("Purchase_Discount"),
                "Purchase_Tax"=>$this->input->post("Purchase_Tax"),
                "Purchase_Qty"=>$this->input->post("Purchase_Qty")
            ));

            $this->db->where("Item_Id",$item->Item_Id);
            $this->db->set('Item_Stock', "Item_Stock + ".$this->input->post("Purchase_Qty"), FALSE);
            $this->db->update("item");
        }
        echo json_encode(array("response"=>true,"msg"=>"Added Successfully"));
    }
public function update_overall_discount()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
        $this->db->where("Sale_Id",$this->input->post("Sale_Id"));
        $result = $this->db->update("sale_head",$this->input->post());
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
        $this->db->where("Purchase_Item_Id",$this->input->post("Purchase_Item_Id"));
        $items = $this->db->get("purchase_item")->row();

        $this->db->where("Purchase_Item_Id",$this->input->post("Purchase_Item_Id"));
        $result = $this->db->delete("purchase_item");
        

        $this->db->where("Item_Id",$items->Item_Id);
        $this->db->set('Item_Stock', "Item_Stock - ".$items->Purchase_Qty, FALSE);
        $this->db->update("item");
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

           $this->db->where("Purchase_Head_Id",$this->input->post("Purchase_Head_Id"));
        $items = $this->db->get("purchase_item")->result();

        foreach($items as $t){
             $this->db->where("Item_Id",$t->Item_Id);
        $this->db->set('Item_Stock', "Item_Stock - ".$t->Purchase_Qty, FALSE);
        $this->db->update("item");
        }
        $this->db->where("Purchase_Head_Id",$this->input->post("Purchase_Head_Id"));
        $result = $this->db->delete("purchase_head");

        $this->db->where("Purchase_Head_Id",$this->input->post("Purchase_Head_Id"));
        $result = $this->db->delete("purchase_item");

        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }

    public function save_print_sale_head()
    {
        $response = array();
        if(!empty($this->input->post()))
        {

        
        $this->db->where("Purchase_Head_Id",$this->input->post("Purchase_Head_Id"));
        $result = $this->db->delete("purchase_head",array("Purchase_Head_Status"=>"Completed"));


        $this->db->select('sum(a.Purchase_Rate * a.Purchase_Qty) as total,b.Vendor_Id');
        $this->db->where("a.Purchase_Head_Id",$this->input->post("Purchase_Head_Id"));
        $this->db->group_by("b.Purchase_Head_Id");
        $this->db->join("purchase_head b","a.Purchase_Head_Id = b.Purchase_Head_Id");

        $items_amout = $this->db->get("purchase_item a")->row();
       
        
if(!empty($items_amout)){

        $this->db->insert("accounting",array(
            "Customer_Id"=>$items_amout->Vendor_Id,
            "Accounting_Type"=>"Sale",
            "Accounting_Particular"=>"Bill No - ".$this->input->post("Purchase_Head_Id"),
            "Credit"=>$items_amout->total,
            "Date"=>date("Y-m-d")

        ));
}
        $response = array("response"=>true,"msg"=>'Successfully Save...',"bill_id"=>$this->input->post("Purchase_Head_Id"));
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    }

    public function print_purchase_bill()
    {
            $this->load->view("purchase_bill_print_page");
    }


}