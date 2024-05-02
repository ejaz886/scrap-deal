<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher_expences extends CI_Controller {
  public function __construct()
    {
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
       
		$data["page"] = "voucher_expences_view/voucher_expences";
		$data["footer"] = "voucher_expences_view/voucher_expences_js";
		$this->load->view('main_page',$data);
	}
 

    public function add_table()
	{

		
		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			$logo = "default.png";
			    if(!empty($_FILES['Voucher_Expences_File']['name']))
                {

                    $config['upload_path']          = './assets/voucher/';
                    $config['allowed_types']        = '*';
                    $config['max_size']             = 1024*5;


                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ( ! $this->upload->do_upload('Voucher_Expences_File'))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        $response = array("response"=>false,"msg"=>$error);
                    }
                    else
                    {
                        $data =  $this->upload->data();     
                        if(!empty($this->input->post()))  
                        {
                            
                                $logo = $data["file_name"];
                                
                            
                        }       
                    }
                }

                $this->db->insert("tbl_voucher_expences",$this->input->post());
                $last_id = $this->db->insert_id();

                $this->db->where("Voucher_Expences_Sr_Id",$last_id);
                $this->db->update("tbl_voucher_expences",array("Voucher_Expences_File"=>$logo));

                $response = array("response"=>true,"msg"=>"Successfully Added");
		}

		echo json_encode($response);
	}


	public function edit_table()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Voucher_Expences_Sr_Id",$this->input->post("Voucher_Expences_Sr_Id"));
			$result = $this->db->get("tbl_voucher_expences")->row();
			echo json_encode($result);
		}
	}



	public function update_table()
	{

		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			$this->db->where("Voucher_Expences_Sr_Id",$this->input->post("Voucher_Expences_Sr_Id"));
			$result = $this->db->get("tbl_voucher_expences")->row();
			$logo = $result->Voucher_Expences_File;
			    if(!empty($_FILES['Voucher_Expences_File']['name']))
                {

                    $config['upload_path']          = './assets/voucher/';
                    $config['allowed_types']        = '*';
                    $config['max_size']             = 1024*5;


                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ( ! $this->upload->do_upload('Voucher_Expences_File'))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        $response = array("response"=>false,"msg"=>$error);
                    }
                    else
                    {
                        $data =  $this->upload->data();     
                        if(!empty($this->input->post()))  
                        {
                            $logo = $data["file_name"];
                        }       
                    }
                }

                	$this->db->where("Voucher_Expences_Sr_Id",$this->input->post("Voucher_Expences_Sr_Id"));
                	$this->db->update("tbl_voucher_expences",array(
                	"Voucher_Id"=>$this->input->post("Voucher_Id"),
                	"Voucher_Expences_File"=>$this->input->post("Voucher_Expences_File"),
                	"Voucher_Expences_Date"=>$this->input->post("Voucher_Expences_Date"),
                	"Voucher_Expences_Amount"=>$this->input->post("Voucher_Expences_Amount"),
                	"Voucher_Particular_or_details"=>$this->input->post("Voucher_Particular_or_details"),
                	"Voucher_Expences_Pay_To"=>$this->input->post("Voucher_Expences_Pay_To	"),
					"Voucher_Expences_Passed_User"=>$this->input->post("Voucher_Expences_Passed_User"),
                	"Voucher_Expences_Debit_Credit"=>$this->input->post("Voucher_Expences_Debit_Credit"),
                	"Voucher_Expences_Mode"=>$this->input->post("Voucher_Expences_Mode"),
                	"Voucher_Ac_No"=>$this->input->post("Voucher_Ac_No"),
                	"Voucher_Expences_Transaction_No"=>$this->input->post("Voucher_Expences_Transaction_No"),
                	"Voucher_From"=>$this->input->post("Voucher_From"),
					 "Voucher_Status"=>1,
                	"Voucher_Expences_File"=>$logo
                	));

                $response = array("response"=>true,"msg"=>"Successfully Updated");
		}

		echo json_encode($response);
	}

public function deleted_voucher()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Voucher_Expences_Sr_Id",$this->input->post("Voucher_Expences_Sr_Id"));
			$result = $this->db->update("tbl_voucher_expences",array("Voucher_Status"=>"deleted"));
			 $response = array("response"=>true,"msg"=>"Successfully Deleted");
			echo json_encode($response);
		}
	}
	

}
