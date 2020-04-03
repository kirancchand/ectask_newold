<?php 
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('UserModel');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('register');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		
		$name=$this->input->post('name');
		$pen=$this->input->post('pen');
		$email=$this->input->post('email';
		$password=$this->input->post('password');
		
		$this->User_Model->saverecords($name,$pen,$email,$password);
		echo "Records Saved Successfully";
		}
	}
	
}
?>