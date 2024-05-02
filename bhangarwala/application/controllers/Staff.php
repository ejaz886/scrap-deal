<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
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
		$data["page"] = "staff_view/staff_page";
		$data["footer"] = "staff_view/staff_page_js";
		$this->load->view('main_page',$data);
	}

    
    public function staff_excel_upload() 
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
                $this->db->insert("tbl_staff",array(
                    "Staff_Name"=>$t["Staff_Name"],
                     "Staff_Department_Id"=>$t["Staff_Department_Id"],
                      "Staff_Designation_Id"=>$t["Staff_Designation_Id"],
                       "Staff_Mobile"=>$t["Staff_Mobile"],
                     "Staff_Email"=>$t["Staff_Email"],
                      "Staff_Salary"=>$t["Staff_Salary"],
                       "Staff_Id_Proof"=>$t["Staff_Id_Proof"],
                    "Staff_Photo"=>$t["Staff_Photo"],
                      "Staff_Joining_Date"=>$t["Staff_Joining_Date"],
                       "Staff_Leaving_Date"=>$t["Staff_Leaving_Date"],
                        "Staff_Address"=>$t["Staff_Address"],
                     "Staff_IQAMA"=>$t["Staff_IQAMA"],
                      "Staff_Create_Date"=>$t["Staff_Create_Date"],
                       "Staff_Update_Date"=>$t["Staff_Update_Date"]
                                ));
                
                
            }
        }
      }
    }

	public function add_staff()
	{
		
		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			$staff_photo = "default.png";
			$id_proof = "";
			   

                $this->db->insert("tbl_staff",array(
                	"Staff_Name"=>$this->input->post("Staff_Name"),
                	
                	"Staff_Mobile"=>$this->input->post("Staff_Mobile"),
                	"Staff_Email"=>$this->input->post("Staff_Email"),
                	"Staff_Salary"=>$this->input->post("Staff_Salary"),
                	"Staff_Joining_Date"=>$this->input->post("Staff_Joining_Date"),
                	"Staff_Address"=>$this->input->post("Staff_Address"),
                	"Staff_Photo"=>$staff_photo,
                	"Staff_Id_Proof"=>$id_proof
                	));

                $response = array("response"=>true,"msg"=>"Successfully Added");
		}

		echo json_encode($response);
	}


	public function edit()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Staff_Id",$this->input->post("Staff_Id"));
			$result = $this->db->get("tbl_staff")->row();
			echo json_encode($result);
		}
	}



	public function update_staff()
	{

		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			$this->db->where("Staff_Id",$this->input->post("Staff_Id"));
			$result = $this->db->get("tbl_staff")->row();
			$staff_photo = $result->Staff_Photo;
			$id_proof = $result->Staff_Id_Proof;
			   
                $this->db->where("Staff_Id",$this->input->post("Staff_Id"));
                $this->db->update("tbl_staff",array(
                	"Staff_Name"=>$this->input->post("Staff_Name"),
                	
                	"Staff_Mobile"=>$this->input->post("Staff_Mobile"),
                	"Staff_Email"=>$this->input->post("Staff_Email"),
                	"Staff_Salary"=>$this->input->post("Staff_Salary"),
                	"Staff_Joining_Date"=>$this->input->post("Staff_Joining_Date"),
                	"Staff_IQAMA"=>$this->input->post("Staff_IQAMA"),
                	"Staff_Address"=>$this->input->post("Staff_Address"),
                	"Staff_Photo"=>$staff_photo,
                	"Staff_Id_Proof"=>$id_proof
                	));

                $response = array("response"=>true,"msg"=>"Successfully Added");
		}
		echo json_encode($response);
	}


	
public function deleted_staff()
	{
		$result = array("response"=>true,"msg"=>"Successfully Deleted");
		if(!empty($this->input->post()))
		{
			$this->db->where("Staff_Id",$this->input->post("Staff_Id"));
			$this->db->update("tbl_staff",array("Staff_Status"=>"deleted"));
			echo json_encode($result);
		}
	}

}
