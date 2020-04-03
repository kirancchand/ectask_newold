<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class taskController extends CI_Controller {
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
	public function taskpage()
	{
		
        $this->load->view('menu/taskpage'); 
	}

  public function get_taskdata()
  {
    $task_id = $this->input->post('task_id'); 
    // echo $data_id;
    $result=$this->TaskModel->get_taskdata($task_id);

    echo json_encode($result); 
         
  } 
	public function get_taskcategory()
	{
		$result=$this->TaskModel->get_taskcategory();
		echo json_encode($result);
	}

	public function get_taskmode()
	{
		$result=$this->TaskModel->get_taskmode();
		echo json_encode($result);
	}
  public function assignedtask_count()
  {
    $data=json_decode(file_get_contents('php://input'),true);

     $user_id=$data['user_id'];
    //$user_id=;
    //echo $user_id;
    $result=$this->TaskModel->assignedtask_count($user_id);
     echo json_encode($result);
  }
  public function assignedtask()
  {
    $data=json_decode(file_get_contents('php://input'),true);

     $user_id=$data['user_id'];
    //$user_id=;
    //echo $user_id;
    $result=$this->TaskModel->assignedtask($user_id);
     echo json_encode($result);
  }
    public function assignedtask_data()
  {
    $data=json_decode(file_get_contents('php://input'),true);
    

       $user_id=$data['user_id'];
       $task_id=$data['task_id'];
      // echo $task_id;
    // //$user_id=;
    // //echo $user_id;
     $result=$this->TaskModel->assignedtask_data($user_id,$task_id);
      echo json_encode($result);
  }
	public function create_task()
	{
		/*$data=json_decode(file_get_contents('php://input'),true);

		$name=$data['name'];
		$description=$data['description'];
		$created_by=$data['created_by'];
		$assigned_by=$data['assigned_by'];
		$status_id=$data['status_id'];
		$task_category_id=$data['task_category_id'];
		$mode_of_task_id=$data['mode_of_task_id'];
		$data = array( 
            'name' => $name, 
            'description' => $description,
            'created_by'=>$created_by,
            'assigned_by'=>$assigned_by,
            'status_id'=>$status_id,
            'task_category_id'=>$task_category_id,
            'mode_of_task_id'=>$mode_of_task_id,
         ); 

		$result=$this->TaskModel->create_task($data);
    echo json_encode($result);*/
    $date = new DateTime();
   $date->setTimezone(new DateTimezone('Asia/Kolkata'));
   
    
		 $device_id='';
     $device_id=$this->input->post('device_id'); 
     if($device_id=='')
     {
        $taskname=$this->input->post('taskname');
        $taskdesc=$this->input->post('taskdesc');
        $created_by=$this->session->userdata('id');
        $assigned_by=$this->input->post('assigned_by');
        $priority=$this->input->post('priority');
        $status_id=$this->input->post('status');
        $taskcategory=$this->input->post('taskcategory');
        $taskmode=$this->input->post('taskmode');
        $created_time=$date->format('Y-m-d H:i:s');
        $expected_time=$this->input->post('expected_time');
        $updated_time=$this->input->post('updated_time');
        $id=$this->input->post('id');
        $data = array( 
          'name' => $taskname,
          'description' => $taskdesc,
          'created_by' => $created_by,
          'assigned_by' => $assigned_by,
          'priority' => $priority,
          'status_id' => $status_id,
          'task_category_id' => $taskcategory,
          'mode_of_task_id' => $taskmode,
          'created_time' => $created_time,
          'expected_time' => $expected_time,
          'updated_time' => $updated_time,
             );
          $result=$this->TaskModel->create_task($data);

         echo json_encode($result); 
     }
     else
     {
        $data=json_decode(file_get_contents('php://input'),true);

        $name=$data['name'];
        $description=$data['description'];
        $created_by=$data['created_by'];
        $assigned_by=$data['assigned_by'];
        $status_id=$data['status_id'];
        $task_category_id=$data['task_category_id'];
        $mode_of_task_id=$data['mode_of_task_id'];
        $created_time=$date->format('Y-m-d H:i:s');
        $expected_time=$data['expected_time'];
        //$created_time="2019-08-01 00:00:00";

        $data = array( 
                'name' => $name, 
                'description' => $description,
                'created_by'=>$created_by,
                'assigned_by'=>$assigned_by,
                'status_id'=>$status_id,
                'task_category_id'=>$task_category_id,
                'mode_of_task_id'=>$mode_of_task_id,
                'created_time'=>$created_time,
                'expected_time'=>$expected_time,
             ); 

        $result=$this->TaskModel->create_task($data);
        echo json_encode($result);
     }
    

	}

    public function task_update()
  {
    $date = new DateTime();
   $date->setTimezone(new DateTimezone('Asia/Kolkata'));

    $taskname=$this->input->post('taskname');
    $taskdesc=$this->input->post('taskdesc');
    $created_by=$this->session->userdata('id');
    $assigned_by=$this->input->post('assigned_by');
    $priority=$this->input->post('priority');
    $status_id=$this->input->post('status');
    $taskcategory=$this->input->post('taskcategory');
    $taskmode=$this->input->post('taskmode');
    $expected_time=$this->input->post('expected_time');
    $updated_time=$date->format('Y-m-d H:i:s');
    $id=$this->input->post('id');
    $data = array( 
      'name' => $taskname,
      'description' => $taskdesc,
      'created_by' => $created_by,
      'assigned_by' => $assigned_by,
      'priority' => $priority,
      'status_id' => $status_id,
      'task_category_id' => $taskcategory,
      'mode_of_task_id' => $taskmode,
      'expected_time' => $expected_time,
      'updated_time' => $updated_time,
         );
      
      $result=$this->TaskModel->updatetaskdata($data,$id);

     echo json_encode($result); 
  }

    public function task_delete()
  {
    $id=$this->input->post('task_id');
    $result=$this->TaskModel->deletetaskdata($id);

  echo json_encode($result);  
  }



  public function datatablegetalltaskdata()
  {

    //header('Content-Type: application/json');
     //echo $this->ConnectivityModel->connectivity_datatabledata();
    // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));

         // $id=$this->session->userdata('id');
         $task_data=$this->TaskModel->getall_datatables();
         $data = array();
         $no = $start;


    foreach($task_data as $r) {
                  $no++;
                $row = array();
                    $row[] = $no;
                    $row[] = $r->name;
                    $created_by = $this->UserModel->get_username($r->created_by);
                    $row[] = $created_by[0]['name'];
                    $assigned_by = $this->UserModel->get_username($r->assigned_by);
                    $row[] = $assigned_by[0]['name'];
                    $status = $this->TaskModel->get_taskstatus($r->status_id);
                    $row[] = $status[0]['status'];
      
                    $row[] = '<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update/view</button>
                    <button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button>';

         
                    $data[] = $row;
                   
         
              //echo $data;

          }

            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->TaskModel->count_all(),
                        "recordsFiltered" => $this->TaskModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);


  }


	public function datatablegettaskdata()
	{

		//header('Content-Type: application/json');
		 //echo $this->ConnectivityModel->connectivity_datatabledata();
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));

         // $id=$this->session->userdata('id');
         $task_data=$this->TaskModel->get_datatables();
         $data = array();
         $no = $start;


		foreach($task_data as $r) {
      
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->name;
                    $created_by = $this->UserModel->get_username($r->created_by);
                    $row[] = $created_by[0]['name'];
                    $assigned_by = $this->UserModel->get_username($r->assigned_by);
                    $row[] = $assigned_by[0]['name'];
                    $status = $this->TaskModel->get_taskstatus($r->status_id);
                    $row[] = $status[0]['status'];
                    $row[] = '<button type="button" id="'.$r->id.'" 
                    data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">
                    update
                    </button>
                  	<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button>
                    <button type="button" id="'.$r->id.'" class="btn btn-primary view_btn">view</button>
                      ';
         
                    $data[] = $row;
                   
        

          }

            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->TaskModel->count_all(),
                        "recordsFiltered" => $this->TaskModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);


	}



	


	
}
