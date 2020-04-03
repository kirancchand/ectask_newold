<?php 
   class AttackModel extends CI_Model {
	 var $table = 'timeline_attack';
    var $column_order = array('id','date','header','data','place'); //set column field database for datatable orderable
    var $column_search =array('id','date','header','data','place');//set column field database for datatable searchable just firstname , lastname , address are searchable
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

      public function getall_reports()
      {
          $this->_get_datatables_query();
          if(intval($this->input->get("length"))!= -1)
          $this->db->limit(intval($this->input->get("length")), intval($this->input->get("start")));
          $query = $this->db->get();
          return $query->result();
      }

      private function _get_datatables_query()
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