<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataController extends CI_Controller {
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
         $this->load->model('TaskModel'); 
         $this->load->library('session');
         //$this->load->library('Datatables','session');
      } 
	public function index()
	{
        $this->load->view('index'); 
	}

	
	public function getconnectivitydata()
	{
		$data_id = $this->input->post('data_id');
		//$data_id=1;
		$data = array( 
            'id' => $data_id, 
         ); 
		
		$connectivity_data=$this->ConnectivityModel->connectivity_selectdata($data);
		$data = json_encode($connectivity_data);
		echo $data;
          
	}

	public function deleteselecteddata()
	{
		$data_id = $this->input->post('data_id');

		$data = array( 
            'id' => $data_id, 
         ); 
		
		$isdeleted=$this->ConnectivityModel->delete_connectivitydata($data);
		
		echo $isdeleted;
          
	}

	public function updateconnectivitydata()
	{
		$this->_validate();
		$formdata=$this->input->post();
		$connectivity_data=$this->ConnectivityModel->connectivity_updatedata($formdata);
		//echo $connectivity_data;
        /*$email = $this->input->post('email');  
        $pass = $this->input->post('password');  
		//$data_id=1;
		$data = array( 
            'id' => $data_id, 
         ); 
		
		$connectivity_data=$this->ConnectivityModel->connectivity_selectdata($data);
		$data = json_encode($connectivity_data);*/
		 echo json_encode(array("status" => TRUE));
          
	}

	public function addconnectivitydata()
	{
		$this->_validate();
		$formdata=$this->input->post();
		$connectivity_data=$this->ConnectivityModel->connectivity_adddata($formdata);
		//echo $connectivity_data;
		//echo json_encode($data);
		 echo json_encode(array("status" => TRUE));
		
          
	}

	private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
        if($this->input->post('category') == '')
        {
            $data['inputerror'][] = 'category';
            $data['error_string'][] = 'category is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('subcategory') == '')
        {
            $data['inputerror'][] = 'subcategory';
            $data['error_string'][] = 'subcategory is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('unit') == '')
        {
            $data['inputerror'][] = 'unit';
            $data['error_string'][] = 'unit is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('name') == '')
        {
            $data['inputerror'][] = 'name';
            $data['error_string'][] = 'name is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('designation') == '')
        {
            $data['inputerror'][] = 'designation';
            $data['error_string'][] = 'designation is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('vpn') == '')
        {
            $data['inputerror'][] = 'vpn';
            $data['error_string'][] = 'vpn is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('mobileno1') == '')
        {
            $data['inputerror'][] = 'mobileno1';
            $data['error_string'][] = 'mobileno1 is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('mobileno2') == '')
        {
            $data['inputerror'][] = 'mobileno2';
            $data['error_string'][] = 'mobileno2 is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('stdcode') == '')
        {
            $data['inputerror'][] = 'stdcode';
            $data['error_string'][] = 'stdcode is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('landno1') == '')
        {
            $data['inputerror'][] = 'landno1';
            $data['error_string'][] = 'landno1 is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('landno2') == '')
        {
            $data['inputerror'][] = 'landno2';
            $data['error_string'][] = 'landno2 is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('fax') == '')
        {
            $data['inputerror'][] = 'fax';
            $data['error_string'][] = 'fax is required';
            $data['status'] = FALSE;
        }
 		if($this->input->post('email') == '')
        {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'Email is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('address') == '')
        {
            $data['inputerror'][] = 'address';
            $data['error_string'][] = 'Addess is required';
            $data['status'] = FALSE;
        }
 
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
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


          
            /*

          $output = array(
                 "draw" => $draw,
                // "recordsTotal" => $connectivity_data->num_rows(),
                 //"recordsFiltered" => $connectivity_data->num_rows(),
                 "data" => $data
            );
         // print_r($output);
          echo json_encode($output);
          exit();*/
	}



	
}
