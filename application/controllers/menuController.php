<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menuController extends CI_Controller {
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
         $this->load->model('TaskModel'); 
         $this->load->library('session');
      } 
	public function index()
	{
        $this->load->view('index'); 
	}

	public function viewreports()
	{
		$this->load->helper('url'); 

       $this->load->view('menu/viewrepots'); 

	}

	public function inteli_report()
	{
		$this->load->helper('url'); 

       $this->load->view('menu/inteli_report'); 

	}
	public function prison_data()
	{
		$this->load->helper('url'); 

       $this->load->view('menu/prison_data'); 

	}
	public function attack_data()
	{
		$this->load->helper('url'); 

       $this->load->view('menu/attack_data'); 

	}
	
	public function incident_data()
	{
		$this->load->helper('url'); 

       $this->load->view('menu/incident_data'); 

	}



	public function task_list()
	{
		$this->load->helper('url'); 

		$result = array();
		$result['user']=$this->UserModel->get_user();
		$result['status']=$this->TaskModel->get_status();
		$result['taskcategory']=$this->TaskModel->get_taskcategory();
		$result['taskmode']=$this->TaskModel->get_taskmode();
		//echo json_encode($result);
		//$result['task']=json_encode($result['task']);
         ///degraded to only index page
       $this->load->view('menu/task_list',$result); 

	}
	public function task_listbyme()
	{
		$this->load->helper('url'); 

		$result = array();
		$result['user']=$this->UserModel->get_user();
		$result['status']=$this->TaskModel->get_status();
		$result['taskcategory']=$this->TaskModel->get_taskcategory();
		$result['taskmode']=$this->TaskModel->get_taskmode();
		$result['priority']=$this->TaskModel->get_priority();
		//echo json_encode($result);
		//$result['task']=json_encode($result['task']);
         ///degraded to only index page
       $this->load->view('menu/task_listbyme',$result); 

	}

	public function task_listtome()
	{
		$this->load->helper('url'); 

		$result = array();
		$result['user']=$this->UserModel->get_user();
		$result['status']=$this->TaskModel->get_status();
		$result['taskcategory']=$this->TaskModel->get_taskcategory();
		$result['taskmode']=$this->TaskModel->get_taskmode();
		$result['priority']=$this->TaskModel->get_priority();
		//echo json_encode($result);
		//$result['task']=json_encode($result['task']);
         ///degraded to only index page
       $this->load->view('menu/task_listtome',$result); 

	}


	public function createtask_page()
	{
		$this->load->helper('url'); 

		$result = array();
		$result['user']=$this->UserModel->get_user();
		$result['status']=$this->TaskModel->get_status();
		$result['priority']=$this->TaskModel->get_priority();
		$result['taskcategory']=$this->TaskModel->get_taskcategory();
		$result['taskmode']=$this->TaskModel->get_taskmode();
       $this->load->view('menu/createtask_page',$result); 

	}


	
	public function user_list()
	{
		$result = array();
        $result['unit']=$this->UserModel->get_unit();
		$result['designation']=$this->UserModel->get_designation();
		//print_r($result);
        $this->load->view('menu/user_list',$result); 
	}
	public function designation_list()
	{
		$result = array();
		$result['designation']=$this->UserModel->get_designation();
        $this->load->view('menu/designation_list',$result); 
	}

	
    public function get_designationname()
	{
		$designation_id=$this->input->post('designation_id'); 
	    $result=$this->UserModel->get_designationname($designation_id);
	    echo json_encode($result);	
	}
	
	public function update_designationname()
	{
		 $id=$this->input->post('id'); 
		 $designationname=$this->input->post('designationname'); 
		 $result=$this->UserModel->update_designationname($designationname,$id);
		 echo $result;
  //       $this->load->view('menu/role',$result); 
	}

		public function status_list()
	{
		$result['status']=$this->TaskModel->get_status();
        $this->load->view('menu/status_list',$result); 
	}
		public function get_statusname()
	{
		$status_id=$this->input->post('status_id'); 
	    $result=$this->UserModel->get_statusname($status_id);
	    echo json_encode($result);	
	}
		public function update_statusname()
	{
		 $id=$this->input->post('id'); 
		 $statusname=$this->input->post('statusname'); 
		 $result=$this->UserModel->update_statusname($statusname,$id);
		 echo $result;
  //       $this->load->view('menu/role',$result); 
	}

	public function menu()
	{

		$result['menu']=$this->TaskModel->get_menu();
        $this->load->view('menu/menu',$result); 
         
	}
		public function add_menu()
	{
		 
 		 $result = array();
		 $menu = $this->input->post('menu'); 
		 $route = $this->input->post('route'); 
       	 $data = array('menu' => $menu,'route'=>$route);
       	 $get_result=$this->UserModel->add_menu($data); 
		$result['menu']=$this->TaskModel->get_menu();
        $this->load->view('menu/menu',$result); 
		
         
	}
	public function get_menulist()
	{
		$result=$this->TaskModel->get_menu();
		echo json_encode($result);	
  //       $this->load->view('menu/role',$result); 
	}
	public function get_menu()
	{
		$menu_id=$this->input->post('menu_id'); 
		$result=$this->UserModel->get_menu($menu_id);
		echo json_encode($result);	
  //       $this->load->view('menu/role',$result); 
	}
	public function update_menu()
	{
		 $id=$this->input->post('id'); 
		 $menu=$this->input->post('menu'); 
		 $route=$this->input->post('route'); 
		 // echo json_encode($id);	
		 $result=$this->UserModel->update_menu($route,$menu,$id);
		 echo $result;
  //       $this->load->view('menu/role',$result); 
	}
		public function assignrolemenu()
	{
		$result['menu']=$this->TaskModel->get_menu();
		$result['role']=$this->TaskModel->get_role();
        $this->load->view('menu/assignrolemenu',$result); 
         
	}

	    public function assign_rolemenu()
	{
		 
 		 $result = array();
 		 // $menu_id =array();
		 $menu_id = $this->input->post('menu_id'); 
		 $role_id = $this->input->post('role_id'); 
		 $menu_count = count($menu_id);
		 // echo $menu_id[1];
		 $result=$this->UserModel->flush_rolemenu($role_id);
		 if($result)
		 {
		 	 for($i=0;$i<$menu_count;$i++)
		 	{
		 	$data = array('role_id' => $role_id,'menu_id'=>$menu_id[$i]);
		 	$get_result=$this->UserModel->assign_rolemenu($data); 
		 	}
		 }
		
		echo $get_result;
		
         
	}



		public function role()
	{
		$result['role']=$this->TaskModel->get_role();
        $this->load->view('menu/role',$result); 
	}
		public function get_rolemenu()
	{
		$role_id=$this->input->post('role_id'); 
		$result=$this->UserModel->get_rolemenu($role_id);
		echo json_encode($result);	
  //       $this->load->view('menu/role',$result); 
	}
		public function get_roletype()
	{
		$role_id=$this->input->post('role_id'); 
		$result=$this->UserModel->get_roletype($role_id);
		echo json_encode($result);	
  //       $this->load->view('menu/role',$result); 
	}
		public function update_roletype()
	{
		 $id=$this->input->post('id'); 
		 $roletype=$this->input->post('roletype'); 
		 // echo json_encode($id);	
		 $result=$this->UserModel->update_roletype($roletype,$id);
		 echo $result;
  //       $this->load->view('menu/role',$result); 
	}
		public function role_assigned()
	{
		//$result['role_assigned']=$this->TaskModel->get_designation();
        //$this->load->view('menu/role_assigned'); 

        $result = array();
        $result['user']=$this->UserModel->get_user();
		$result['role']=$this->UserModel->get_role();
		//print_r($result);
		//echo json_encode($result);

		//echo json_encode($result);
        $this->load->view('menu/role_assigned',$result);
	}


	
		public function Pagination_View()
	{
		//$result['role_assigned']=$this->TaskModel->get_designation();
		$this->load->view('menu/Pagination_View'); 
	}
	public function sidemenu()
	{

		 
		$result['sidemenu']=$this->TaskModel->get_sidemenu();
		echo json_encode($result);
	
         
	}
}


