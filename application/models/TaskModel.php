<?php 
   class TaskModel extends CI_Model {
	 var $table = 'task';
    var $column_order = array('id','name','created_by','assigned_by','status_id','created_time','expected_time'); //set column field database for datatable orderable
    var $column_search = array('id','name','created_by','assigned_by','status_id','created_time','expected_time'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order 
      function __construct() { 
         parent::__construct(); 
      } 

      public function get_sidemenu()
      {
        $role=$this->session->userdata('role');
        $response = array();
        $result=array();
         $this->db->select('menu_id');
         $this->db->from('rolemenu');
         $this->db->where('role_id',$role);
         $query = $this->db->get();
         $response = $query->result_array(); 

         foreach($response as $menu)
         {
             $this->db->select('*');
             $this->db->from('menu');
             $this->db->where('id',$menu['menu_id']);
             $query = $this->db->get();
             $result[] = $query->result_array();
         }
         return  $result;
         


      }
   
      public function get_taskcategory() { 

         $response = array();
         $this->db->select('*');
         $this->db->from('task_category');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
    
      }
       public function get_taskmode() { 

         $response = array();
         $this->db->select('*');
         $this->db->from('mode_of_receipt');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
    
      }
      public function get_task()
      {
        $response = array();
         $this->db->select('*');
         $this->db->from('task');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;

      }

       public function get_status()
      {
        $response = array();
         $this->db->select('*');
         $this->db->from('status');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;

      }

      public function get_priority()
      {
        $response = array();
         $this->db->select('*');
         $this->db->from('priority');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;

      }

       public function get_taskstatus($status_id)
      {
        $response = array();
         $this->db->select('*');
         $this->db->from('status');
         $this->db->where('id',$status_id);
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;

      }
       public function get_role()
      {
        $response = array();
         $this->db->select('*');
         $this->db->from('role');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;

      }
      public function get_menu()
      {
        $response = array();
         $this->db->select('*');
         $this->db->from('menu');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;

      }
       public function get_taskdata($task_id){
        
        $response = array();
        $this->db->select('*');
        $this->db->from('task');
        $this->db->where('id',$task_id);
        // $this->db->select('u.id,u.name,u.unit_id,u.designation_id,u.email_id,u.pen,d.designation,r.unit');
        // $this->db->from('user u');
        // $this->db->join('designation d', 'd.id=u.designation_id', 'left');
        // $this->db->join('unit r', 'r.id=u.unit_id', 'left');
        // $this->db->where('u.id',$user_id);
        $query = $this->db->get();
        $response=$query->result_array();
        return $response;

      }
     public function assignedtask_count($data)
      {


         $taskassigned_count = array();
         $condition = "assigned_by =" . "'" . $data . "'";
         $this->db->select('*');
         $this->db->from('task');
         $this->db->where($condition);
         $query = $this->db->get();
         $taskassigned_count=$query->num_rows();
         return $taskassigned_count;

      }

       public function assignedtask($user_id)
      {


         $taskassigned = array();
         $condition = "assigned_by =" . "'" . $user_id . "'";
         $this->db->select('*');
         $this->db->from('task');
         $this->db->where($condition);
         $query = $this->db->get();
         $taskassigned=$query->result_array();
         return $taskassigned;

      }

        public function assignedtask_data($user_id,$task_id)
      {


         $taskassigned = array();
         $condition = "assigned_by =" . "'" . $user_id . "' AND " . "id =" . "'" . $task_id . "'";
         $this->db->select('*');
         $this->db->from('task');
         $this->db->where($condition);
         $query = $this->db->get();
         $task_data=$query->result_array();
         return $task_data;

      }

      public function create_task($data)
        { 
          //return $data;
        // if ($this->db->insert("task", $data)) { 
        //     return $data; 
        //  }  
         $result=$this->db->insert("task", $data);
         return $result; 
    
      }
      public function updatetaskdata($data,$id){
        $response = array();
         // $this->db->set('role_id',$role_id);
        $this->db->where('id',$id);
          $result=$this->db->update('task',$data);
         return $result; 

      }

       public function deletetaskdata($id){
        $response = array();
          $this->db->where('id',$id);
           $result=$this->db->delete('task');
         return $result; 
      }



    public function getall_datatables()
       {
           $this->_getall_datatables_query();
           if(intval($this->input->get("length"))!= -1)
           $this->db->limit(intval($this->input->get("length")), intval($this->input->get("start")));
           $query = $this->db->get();
           return $query->result();
       }

      private function _getall_datatables_query()
      {
       
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {   $search=$this->input->get("search");
            if($search['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_GET['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_GET['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_GET['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_GET['order']['0']['column']], $_GET['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
      }
     public function get_datatables()
       {
           $this->_get_datatables_query();
           if(intval($this->input->get("length"))!= -1)
           $this->db->limit(intval($this->input->get("length")), intval($this->input->get("start")));
           $query = $this->db->get();
           return $query->result();
       }
      
       private function _get_datatables_query()
      {
        $id=$this->session->userdata('id');
           
        $this->db->from($this->table);
        $this->db->where('assigned_by',$id);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {   $search=$this->input->get("search");
            if($search['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_GET['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_GET['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_GET['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_GET['order']['0']['column']], $_GET['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
      }
      
     public  function count_filtered()
       {
           $this->_get_datatables_query();
           $query = $this->db->get();
           return $query->num_rows();
       }
 
    public function count_all()
       {
           $this->db->from($this->table);
           return $this->db->count_all_results();
       }


   
   } 
?> 