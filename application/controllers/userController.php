<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
	  { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
         $this->load->model('UserModel'); 
         $this->load->model('TaskModel'); 
         $this->load->library('session');


	}


	public function add_designation()
	{
		$result = array();
		 $designation = $this->input->post('designation'); 
       	 $data = array( 
            'designation' => $designation
         );

       	 $get_result=$this->UserModel->add_designation($data); 
		 $result['designation']=$this->UserModel->get_designation();
         $this->load->view('menu/designation_list',$result); 
	}

public function add_status()
	{
		$result = array();
		 $status = $this->input->post('status'); 
       	 $data = array( 
            'status' => $status
         );
       	
        

       	 $get_result=$this->UserModel->add_status($data); 
		 $result['status']=$this->TaskModel->get_status();
        $this->load->view('menu/status_list',$result); 
         
	}

	public function add_role()
	{
		 
 		 $result = array();
		 $role = $this->input->post('role'); 
       	 $data = array('role' => $role);
       	 $get_result=$this->UserModel->add_role($data); 
		$result['role']=$this->TaskModel->get_role();
        $this->load->view('menu/role',$result); 
		
         
	}

	public function tasklistupdatadata()
	{
		$user_id = $this->input->post('user_id'); 
		// echo $data_id;
		 $result=$this->UserModel->tasklistupdatadata($user_id);

		 echo json_encode($result); 
         
	}

    public function getuserroledata()
	{
		$user_id = $this->input->post('user_id'); 
		// echo $data_id;
		$result=$this->UserModel->getuserroledata($user_id);

		 echo json_encode($result); 
         
	}

	public function getuserdata()
	{
		$user_id = $this->input->post('user_id'); 
		// echo $data_id;
		$result=$this->UserModel->getuserdata($user_id);

		 echo json_encode($result); 
         
	}

		public function user_update()
	{

		$name=$this->input->post('name');
		$email_id=$this->input->post('email');
		$mobile=$this->input->post('mobile');
		$pen=$this->input->post('pen');
		$designation_id=$this->input->post('designation');
		$unit_id=$this->input->post('unit');
		$id=$this->input->post('id');
		$data = array( 
			'name' => $name,
			'email_id' => $email_id,
			'mobile' => $mobile,
			'pen' => $pen,
			'designation_id' => $designation_id,
            'unit_id' => $unit_id
         );
		 $result=$this->UserModel->updateuserdata($data,$id);

		 echo json_encode($result);	
	}

	public function user_delete()
	{
		$id=$this->input->post('user_id');
		$result=$this->UserModel->deleteuserdata($id);

	echo json_encode($result);	
	}

	public function role_update()
	{
		$role_id=$this->input->post('role');
		$id=$this->input->post('id');

		 $result=$this->UserModel->updateroledata($role_id,$id);

		 echo json_encode($result);	
	}

public function tasklist_update()
	{
		$role_id=$this->input->post('role_id');
		$id=$this->input->post('id');

		$result=$this->UserModel->updatetaskdata($role_id,$id);

	echo json_encode($result);	
	}

public function role_delete()
	{
		$role_id=$this->input->post('role_id');
		$id=$this->input->post('id');

		$result=$this->UserModel->deleteteroledata($role_id,$id);

	echo json_encode($result);	
	}

public function assign_role()
	{
		$role=$this->input->post('role');
		$user=$this->input->post('user');

		$result=$this->UserModel->assign_role($role,$user);

		echo json_encode($result);	
	}


	

  public function datatablegetuserroledata()
  {

    //header('Content-Type: application/json');
		 //echo $this->ConnectivityModel->connectivity_datatabledata();
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $user_data=$this->UserModel->get_datatables();
         $data = array();
         $no = $start;


		foreach($user_data as $r) {
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->name;

                    // $row[] = $r->designation_id;

                    $designation = $this->UserModel->get_userdesignation($r->designation_id);
                    $row[] = $designation[0]['designation'];
                    // $row[] = count($designation);
                    
                    $row[] = $r->email_id;
                    $row[] = $r->pen;
                    $role = $this->UserModel->get_userrole($r->role_id);
                    $row[] = $role[0]['role'];
                    // $row[] = $r->role_id;
                    
 
               		/*$row[] = '
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  		<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                  		';*/
                    
                    $row[] = '<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">Update Role</button>
                  		';

         
                    $data[] = $row;
                   
         
              //echo $data;

          }

            $output = array(


                        "draw" => $draw,
                        "recordsTotal" => $this->UserModel->count_all(),
                        "recordsFiltered" => $this->UserModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);

  }


public function datatablegetuserdata()
	{

		//header('Content-Type: application/json');
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $user_data=$this->UserModel->get_datatables();
         $data = array();
         $no = $start;


		foreach($user_data as $r) {
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->name;
                    $row[] = $r->email_id;
                    $row[] = $r->mobile;
                    $row[] = $r->pen;
                    $designation = $this->UserModel->get_userdesignation($r->designation_id);
                    $row[] = $designation[0]['designation'];
                    $unit = $this->UserModel->get_userunit($r->unit_id);
                    $row[] = $unit[0]['unit'];
 
               		/*$row[] = '
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  		<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                  		';*/
                    
                    $row[] = '<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                  	<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                  		';

         
                    $data[] = $row;
                   
         
              //echo $data;

          }

            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->UserModel->count_all(),
                        "recordsFiltered" => $this->UserModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);

	}


}






    
