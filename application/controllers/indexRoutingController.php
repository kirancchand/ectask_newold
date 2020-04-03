<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexRoutingController extends CI_Controller {
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
	 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
         $this->load->model('UserModel'); 
         $this->load->model('ConnectivityModel'); 
		 $this->load->library('session');
		 $this->load->model('TaskModel');
      } 
	public function index()
	{
        $this->load->view('index'); 
	}



public function home($data)
	{
		// $result['sidemenu']=$this->TaskModel->get_sidemenu();
        $this->load->view('home',$data); 
	}



	public function login()
	{
		$this->load->helper('url'); 
        $this->load->view('login'); ///degraded to only index page
	}
	public function register()
	{

		$result = array();
		$result['unit']=$this->UserModel->get_unit();
		//print_r($result);
		//echo json_encode($result);
        $result['designation']=$this->UserModel->get_designation();
		//echo json_encode($result);
        $this->load->view('register',$result);

         ///degraded to only index page
	}

	public function loginaction()
	{
		
       $device_id='';
	   $device_id=$this->input->post('device_id'); 
	   if($device_id=='')
	   {
	   $data=json_decode(file_get_contents('php://input'),true);
       $email = $data['email'];
       $password = $data['password'];
       $data = array( 
            'email_id' => $email, 
            'password' => $password
         ); 
       
       $result=$this->UserModel->login($data);
      
        if ($result['result'] == true) 
		{	 
			$ec_message=array(
						'message'=>"You are successfully Logged In",
						'status'=>1,
						'userdata'=>$result['userdata']
						);
			echo json_encode($ec_message);
		}
		else
		{
			$ec_message=array(
						'message'=>"You are Failed to Login",
						'status'=>0,
						'userdata'=>$result['userdata']
						);
			echo json_encode($ec_message);
		}
	   }
	   else
	   {
	   $email = $this->input->post('email');
       $password = $this->input->post('password');
       
       $data = array( 
            'email_id' => $email, 
            'password' => $password
         ); 
       // $this->load->view('home',$data);
       $result=$this->UserModel->login($data);
       // json_encode($result['userdata'][0]['id']);
        // print_r($result['userdata'][0]['id']); 
        if ($result['result'] == true) 
		{
	   	 // $role=$this->UserModel->get_userrole($result['userdata'][0]['role_id']);
	   	 // $role=json_encode($role[0]['role']);
	   	 // echo $role;

	   	 $this->session->set_userdata('role', $result['userdata'][0]['role_id']);
	   	 $this->session->set_userdata('username', $email);
		 $this->session->set_userdata('id', $result['userdata'][0]['id']);
		//  $data['sidemenu']=$this->TaskModel->get_sidemenu();
		 $this->home($data);
		//  $this->load->view('home',$data);
        //echo 
		
		 }
		 else
		 {
		 	$this->load->view('index');
		 }
           // print_r($data);
	  
	  
	   }

       
	}

	public function get_designation()
	{
		$result=$this->UserModel->get_designation();
		echo json_encode($result);
	}

	public function get_unit()
	{
		$result=$this->UserModel->get_unit();
		echo json_encode($result);
	}
	public function get_user()
	{
		$result=$this->UserModel->get_user ();
		echo json_encode($result);
	}


  
	public function registeraction()
	{
		
       
	   $device_id='';
	   $device_id=$this->input->post('device_id'); 
	   if($device_id=='')
	   {
	   $data=json_decode(file_get_contents('php://input'),true);
       $name = $data['name'];
       $designation = $data['designation'];
       $unit = $data['unit'];
       $pen = $data['pen'];
       $mobile = $data['mobile'];
       $email = $data['email'];
       $password = $data['password'];
       $data = array( 
            'name' => $name, 
            'designation_id' => $designation,
            'unit_id'=>$unit,
            'role_id'=>0,
            'pen'=>$pen,
            'mobile'=>$mobile,
            'email_id'=>$email,
            'password'=>$password,
         ); 
        /*print_r($data);*/

        $result=$this->UserModel->register($data);
      
		if ($result == true) 
		{	 
			$ec_message=array(
						'message'=>"You are successfully Registered"
						);
			echo json_encode($ec_message);
		}
		else
		{
			$ec_message=array(
						'message'=>"You are Failed to register"
						);
			echo json_encode($ec_message);
		}
	   }
	   else
	   {
	   $name = $this->input->post('name'); 
       $designation = $this->input->post('designation'); 
       $unit = $this->input->post('unit'); 
       $pen = $this->input->post('pen'); 
       $mobile = $this->input->post('mobile'); 
       $email = $this->input->post('email'); 
       $password = $this->input->post('password'); 
	        $data = array( 
            'name' => $name, 
            'designation_id' => $designation,
            'unit_id'=>$unit,
            'role_id'=>0,
            'pen'=>$pen,
            'mobile'=>$mobile,
            'email_id'=>$email,
            'password'=>$password,
         ); 
        /*print_r($data);*/

        $result=$this->UserModel->register($data);
      
		if ($result == true) 
		{	 
			$this->session->set_userdata('name', $name );
			$this->load->view('index',$data);

		}
		else
		{
			$this->load->view('register');
		}
	   }
	  
       
       
      


       
       

	}


	public function logout()
	{
		 $this->session->unset_userdata('username');
		 $this->session->sess_destroy();
   			 redirect('indexController');
       
	}

    public function datahome()
	{
        $this->load->view("datacontent", array());
	}


	
}
