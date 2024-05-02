<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
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
		$data["page"] = "users_view/users_page";
		$data["footer"] = "users_view/users_page_js";
		$this->load->view('main_page',$data);
	}
 public function user_excel_upload() 
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
             
                $this->db->insert("tbl_users",array(
                    "User_Name"=>$t["User_Name"],
                     "User_Password"=>$t["User_Password"],
                      "User_Role"=>$t["User_Role"],
                       "User_Employee"=>$t["User_Employee"],
                     "User_Status"=>$t["User_Status"],
                      "User_Photo"=>$t["User_Photo"],
                       "User_Create_Date"=>$t["User_Create_Date"],
                    "User_Update_Date"=>$t["User_Update_Date"]
                    
                    ));
        }
      }
    }
}

	public function add_users()
	{

		
		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			$logo = "default.png";
			    if(!empty($_FILES['User_photo']['name']))
                {

                    $config['upload_path']          = './assets/images/';
                    $config['allowed_types']        = '*';
                    


                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ( ! $this->upload->do_upload('User_photo'))
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

                $this->db->insert("tbl_users",array(
                //	"User_No"=>$this->input->post("User_No"),
                	"User_Name"=>$this->input->post("User_Name"),
                	"User_Forget_Email"=>$this->input->post("User_Forget_Email"),
                	"User_Password"=>$this->input->post("User_Password"),
                	"User_Photo"=>$logo
                	));

                $response = array("response"=>true,"msg"=>"Successfully Added");
		}

		echo json_encode($response);
	}


	public function edit()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("User_Id",$this->input->post("User_Id"));
			$result = $this->db->get("tbl_users")->row();
			echo json_encode($result);
		}
	}



	public function update_users()
	{

		$response = array("response"=>false,"msg"=>"Failed");
		if(!empty($this->input->post()))
		{
			$this->db->where("User_Id",$this->input->post("User_Id"));
			$result = $this->db->get("tbl_users")->row();
			$logo = $result->User_Photo;
			    if(!empty($_FILES['User_photo']['name']))
                {

                    $config['upload_path']          = './assets/images/';
                    $config['allowed_types']        = '*';
                    


                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ( ! $this->upload->do_upload('User_photo'))
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

                	$this->db->where("User_Id",$this->input->post("User_Id"));
                	$this->db->update("tbl_users",array(
                	"User_Name"=>$this->input->post("User_Name"),
                		"User_Forget_Email"=>$this->input->post("User_Forget_Email"),
                	"User_Password"=>$this->input->post("User_Password"),
                	"User_Photo"=>$logo
                	));

                $response = array("response"=>true,"msg"=>"Successfully Updated");
		}

		echo json_encode($response);
	}

public function deleted_users()
	{
		if(!empty($this->input->post()))
		{
			$this->db->where("User_Id",$this->input->post("User_Id"));
			$result = $this->db->update("tbl_users",array("User_Status"=>"deleted"));
			 $response = array("response"=>true,"msg"=>"Successfully Deleted");
			echo json_encode($response);
		}
	}
	

}
