<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userpermission extends CI_Controller {
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
		$data["page"] = "permission_view/permission_page";
		$data["footer"] = "permission_view/permission_page_js";
		$this->load->view('main_page',$data);
	}
	
	 public function designation_excel_upload() 
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
                  
                $this->db->insert("tbl_user_permission",array(
                    "User_Id"=>$t["User_Id"],
                    "User_Id"=>$t["User_Id"],
                    
                    ));
                
                
            }
        }
      }
    }


	public function add_designation()
	{
	    
	   // print_r($this->input->post()); die();
	    
	    ($this->input->post());
		if(!empty($this->input->post()))
		{
		    $temp_module=$this->input->post("module");
		    for($i=0; count($temp_module)>$i; $i++ ){
		        $read_per = "No";
		        $write_per = "No";
		       if(!empty($this->input->post("module_read_".$temp_module[$i])))
		       {
		            $read_per = "Yes";
		       }
		       
		       if(!empty($this->input->post("module_write_".$temp_module[$i])))
		       {
		            $write_per = "Yes";
		       }
		       
		       $this->db->where("User_Id",$this->input->post("User_Id"));
		       $this->db->where("Module_Id",$temp_module[$i]);
		       $check_module = $this->db->get("tbl_user_permission")->row();
		       if(!empty($check_module)){
		            $this->db->where("User_Id",$this->input->post("User_Id"));
		            $this->db->where("Module_Id",$temp_module[$i]);
		            $this->db->update("tbl_user_permission",array(
		                "Permission_Read"=> $read_per,
			            "Permission_Write"=> $write_per,
			     
			     ));
		       }else{
		           $this->db->insert("tbl_user_permission",array(
		       	    "User_Id"=>$this->input->post("User_Id"),
			     "Module_Id"=>$temp_module[$i],
			     "Permission_Read"=> $read_per,
			     "Permission_Write"=> $write_per,
			     ));
		       }
		       	
		    }
		    
// 			$this->db->insert("tbl_user_permission",$this->input->post());
		}

		echo json_encode(array("response"=>true,"msg"=>"Successfully added"));
	}

	public function edit()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Permission_Id",$this->input->post("Permission_Id"));
			$result = $this->db->get("tbl_user_permission")->row();
			echo json_encode($result);
		}
	}

	public function update_designation()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Permission_Id",$this->input->post("Permission_Id"));
			$result = $this->db->update("tbl_user_permission",array(
			   
			     "Permission_Read"=>$this->input->post("Permission_Read"),
			     "Permission_Write"=>$this->input->post("Permission_Write")
			    ));
			 $response = array("response"=>true,"msg"=>"Successfully Updated");
			echo json_encode($response);
		}
	}

	public function deleted_designation()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("Permission_Id",$this->input->post("Permission_Id"));
			$result = $this->db->update("tbl_user_permission",array("User_Status"=>"deleted"));
			 $response = array("response"=>true,"msg"=>"Successfully Deleted");
			echo json_encode($response);
		}
	}

} 