<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class attackController extends CI_Controller {
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
         $this->load->model('ReportModel'); 
         $this->load->model('InteligenceModel'); 
         $this->load->model('PrisonModel'); 
         $this->load->model('AttackModel'); 
         $this->load->model('TaskModel'); 
         $this->load->library('session');
      } 
	
      public function index()
      {
          $this->load->view('index'); 
      }

   
  
      public function attackreporttabledata()
	{

		//header('Content-Type: application/json');
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $user_data=$this->AttackModel->getall_reports();
         $data = array();
         $no = $start;


		foreach($user_data as $r) {
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->date;
                    $row[] = $r->header;
                    $row[] = $r->data;
                    $row[] = $r->place;
                     

                    $data[] = $row;
                   
         
              //echo $data;

          }

            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->AttackModel->count_all(),
                        "recordsFiltered" => $this->AttackModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);

    }
    
    
	public function datatablegetconnectivitydata()
	{

		//header('Content-Type: application/json');
		 //echo $this->ConnectivityModel->connectivity_datatabledata();
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $connectivity_data=$this->TaskModel->get_datatables();
         $data = array();
         $no = $start;


		foreach($connectivity_data as $r) {
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->name;
                    $row[] = $r->description;
                    $row[] = $r->priority;

               		/*$row[] = '
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                  		<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  		<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                  		';*/
                    
                    $row[] = '<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                    <button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-default view_btn">view</button>
                  	<button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                  		';

         
                    $data[] = $row;
                   
         
              //echo $data;

          }

            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->ConnectivityModel->count_all(),
                        "recordsFiltered" => $this->ConnectivityModel->count_filtered(),
                        "data" => $data,
                );
 
        
        //output to json format
        echo json_encode($output);



	
}
}