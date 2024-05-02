<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounting extends CI_Controller {
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
        $this->db->join("vendor b","a.Customer_Id = b.Vendor_Id");
        $data["accounting"] = $this->db->get("accounting a")->result();
        $data["page"] = "new_accounting_page";
        $this->load->view("main_page",$data);
    }

    public function add()
    {
        $response = array();
        if(!empty($this->input->post()))
        {
            
            $this->db->insert("accounting",$this->input->post());
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
        $this->db->where("Accouting_Id",$this->input->post("Accouting_Id"));
        $result = $this->db->delete("accounting");
        $response = array("response"=>true,"msg"=>'Successfully Deleted...');
    }
        else{
            $response = array("response"=>false,"msg"=>'Empty Value....');

        }
        echo json_encode($response);
    } 


    public function get_details()
    {
        if(!empty($this->input->post()))
        {
            $this->db->where("a.Customer_Id",$this->input->post("Customer_Id"));
            if(!empty($this->input->post("start_date")))
            {
                $this->db->where("(date(Date) between '".$this->input->post("start_date")."' and '".$this->input->post("end_date")."')");                
            }
            $this->db->join("vendor b","a.Customer_Id = b.Vendor_Id","left");
            $accounting = $this->db->get("accounting a")->result();
            $balance = 0;
            $t_debit = 0;
            $t_credit = 0;
            $i=1;
            foreach($accounting as $sh){
                $balance += $sh->Credit;
                $balance -= $sh->Debit;
                $t_debit += $sh->Debit;
                $t_credit += $sh->Credit;
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".date("d-m-Y",strtotime($sh->Date))."</td>";
                echo "<td>".$sh->Accounting_Type."</td>";
                echo "<td>".$sh->Vendor_Name."</td>";
                echo "<td>".$sh->Vendor_Mobile."</td>";
                echo "<td>".$sh->Accounting_Particular."</td>";
                echo "<td>".$sh->Debit."</td>";
                echo "<td>".$sh->Credit."</td>";
                echo "<td>".$balance."</td>";
                // echo "<td style='text-align:center'><button class='btn btn-xs btn-danger' onclick='delete_sale(".$sh->Accouting_Id.")''><i class='fa fa-trash'></i></button></td></tr>";
                $i++; 
            }
            echo "<tr> <th colspan='6'></th>
            <th align='center'>".$t_debit."</th>
            <th align='center'>".$t_credit."</th>
            <th align='center'>".($t_credit - $t_debit)."</th>";
            echo "</tr>";
        }
    }

}