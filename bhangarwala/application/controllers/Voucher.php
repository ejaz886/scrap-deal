<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {
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
		$data["page"] = "voucher_view/voucher_page";
		$data["footer"] = "voucher_view/voucher_page_js";
		$this->load->view('main_page',$data);
	}
	 public function voucher_excel_upload() 
    {
      $this->load->helper("simplexlsx");

   
    

      $temp = array();
      if (isset($_FILES['file'])) {


        if ( $xlsx = SimpleXLSX::parse( $_FILES['file']['tmp_name'] ) ) {

            $header_values = $rows = [];

            foreach ( $xlsx->rows() as $k => $r ) {
                if ( $k === 0 ) {
                    $header_values = $r;
                    continue;
                }
                $rows[] = array_combine( $header_values, $r );
            }

            foreach ($rows as $t) {
  print_r($t);
               
                
                $this->db->insert("tbl_voucher",array(
                    "Voucher_Name"=>$t["Voucher_Name"],
                     "Voucher_Create_Date"=>$t["Voucher_Create_Date"],
                      "Voucher_Update_Date	"=>$t["Voucher_Update_Date	"]
                    ));
                
                
                
            }
        }
      }
    }


	public function add_voucher()
	{

		
		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			
			    

                $this->db->insert("tbl_voucher",array(
                //	"Voucher_No"=>$this->input->post("Voucher_No"),
                	"Voucher_Name"=>$this->input->post("Voucher_Name"),
                	"Voucher_Status"=>"Active"
                	
                	));

                $response = array("response"=>true,"msg"=>"Successfully Added");
		}

		echo json_encode($response);
	}


	public function edit()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Voucher_Id",$this->input->post("Voucher_Id"));
			$result = $this->db->get("tbl_voucher")->row();
			echo json_encode($result);
		}
	}



	public function update_voucher()
	{

		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			$this->db->where("Voucher_Id",$this->input->post("Voucher_Id"));
			$result = $this->db->get("tbl_voucher")->row();
			

                	$this->db->where("Voucher_Id",$this->input->post("Voucher_Id"));
                	$this->db->update("tbl_voucher",array(
                	"Voucher_Name"=>$this->input->post("Voucher_Name"),
                	
                	));

                $response = array("response"=>true,"msg"=>"Successfully Updated");
		}

		echo json_encode($response);
	}

public function deleted_voucher()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Voucher_Id",$this->input->post("Voucher_Id"));
			$result = $this->db->update("tbl_voucher",array("Voucher_Status"=>"deleted"));
			 $response = array("response"=>true,"msg"=>"Successfully Deleted");
			echo json_encode($response);
		}
	}
	

}
