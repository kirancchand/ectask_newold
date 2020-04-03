<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reportController extends CI_Controller {
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
         $this->load->model('TaskModel'); 
         $this->load->library('session');
      } 
	
      public function index()
      {
          $this->load->view('index'); 
      }

  

      public function viewimportdata()
	    { 
       
        if($this->input->post('upload')!=NULL)
        {
          
          $data =  array();
        
          if(!empty($_FILES['file']['name']))
          {
            $config['upload_path']='assets/files/';
            $config['allowed_types']='csv';
            $config['max_size']='1000';
            $config['file_name']=$_FILES['file']['name'];
            $this->load->library('upload',$config);
            
            if($this->upload->do_upload('file'))
            {
              $uploadData = $this->upload->data();
              $filename=$uploadData['file_name'];
              $file=fopen("assets/files/".$filename,"r");
              $i=0;
              $importData_arr=array();

              while(($filedata=fgetcsv($file, 1000,",")!==FALSE))
              {
                $num = count($filedata);
      
                for($c=0;$c<$num;$c++){
    
                  $importData_arr[$i][]=$filedata[$c];
            
                }

                $i++;

              }
              fclose($file);
              $skip = 0;
              echo json_encode($importData_arr);
              foreach($importData_arr as $reportdata){
                if($skip!=0)
                {

                  $re=$this->ReportModel->insertRecord($reportdata);
                  echo json_encode($re);
                }
                $skip++;
          
              }
              $data['response']='successfully upload'.$filename;
            }else{ 
              $data['response']=$this->upload->display_errors;
            }

          }
          else{
            $data['response']='failed';
          }
          
          $this->load->view('menu/viewrepots',$data);
        }else{
          echo "helo";
          $this->load->view('menu/viewrepots');
        }
      }
  

      public function get_reportdata()
      {
        $id = $this->input->post('id'); 
        // echo $data_id;
        $result=$this->ReportModel->get_reportdata($id);
    
        echo json_encode($result); 
             
      } 

      public function report_delete()
  {
    $id=$this->input->post('id');
    $result=$this->ReportModel->deletereportdata($id);

  echo json_encode($result);  
  }

  
      public function monthlyreporttabledata()
	{

		//header('Content-Type: application/json');
		// Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


         $user_data=$this->ReportModel->getall_reports();
         $data = array();
         $no = $start;


		foreach($user_data as $r) {
          	   		$no++;
            		$row = array();
                    $row[] = $no;
                    $row[] = $r->catagory;
                    $row[] = $r->place;
                    $row[] = $r->date;
                    $row[] = $r->particulars;
                    $row[] = $r->remarks;    
                    $row[] = '<button type="button" id="'.$r->id.'" data-toggle="modal" data-target="#myModal" class="btn btn-info updateview_btn">update</button>
                    <button type="button" id="'.$r->id.'"  class="btn btn-danger delete_btn">delete</button
                        ';

                    $data[] = $row;
                   
         
              //echo $data;

          }

            $output = array(
                        "draw" => $draw,
                        "recordsTotal" => $this->ReportModel->count_all(),
                        "recordsFiltered" => $this->ReportModel->count_filtered(),
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