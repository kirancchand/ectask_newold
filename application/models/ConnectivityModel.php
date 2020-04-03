<?php 
   class ConnectivityModel extends CI_Model {
	 var $table = 'connectivity_tbl';
    var $column_order = array('id','category','sub_category','unit','name','designation'); //set column field database for datatable orderable
    var $column_search = array('id','category','sub_category'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order 

      function __construct() { 
         parent::__construct(); 
        
      } 
   
      public function connectivity_data()
      {

         $query = $this->db->query('SELECT * FROM connectivity_tbl');
         return $query->result();
        
      }
      
      public function connectivity_selectdata($data)
      {
         $response = array();
         $condition = "id="."'".$data['id']. "'";
         $this->db->select('*');
         $this->db->where($condition);
         $query = $this->db->get('connectivity_tbl');
         $response = $query->result_array();
         return $response;
        
      }

      public function delete_connectivitydata($data)
      {
         $this->db->where('id', $data['id']);
         $query=$this->db->delete('connectivity_tbl');
         return  $query;
        
      }

      public function connectivity_updatedata($data)
      {
         $id=$data['_id'];
         $category=$data['category'];
         $sub_category=$data['subcategory'];
         $unit=$data['unit'];
         $name=$data['name'];
         $designation=$data['designation'];
         $vpn=$data['vpn'];
         $mobileno_I=$data['mobileno1'];
         $mobileno_II=$data['mobileno2'];
         $std=$data['stdcode'];
         $landline_I=$data['landno1'];
         $landline_II=$data['landno2'];
         $fax=$data['fax'];
         $email=$data['email'];
         $address=$data['address'];

         $this->db->set('category', $category);
         $this->db->set('sub_category', $sub_category);
         $this->db->set('unit', $unit);
         $this->db->set('name', $name);
         $this->db->set('designation', $designation);
         $this->db->set('vpn', $vpn);
         $this->db->set('mobileno_I', $mobileno_I);
         $this->db->set('mobileno_II', $mobileno_II);
         $this->db->set('std', $std);
         $this->db->set('landline_I', $landline_I);
         $this->db->set('landline_II', $landline_II);
         $this->db->set('fax', $fax);
         $this->db->set('email', $email);
         $this->db->set('address', $address);
         $this->db->where('id', $id);
         $result=$this->db->update('connectivity_tbl');
         return $result;   

        
      }

      public function connectivity_adddata($data)
      {
         $category=$data['category'];
         $sub_category=$data['subcategory'];
         $unit=$data['unit'];
         $name=$data['name'];
         $designation=$data['designation'];
         $vpn=$data['vpn'];
         $mobileno_I=$data['mobileno1'];
         $mobileno_II=$data['mobileno2'];
         $std=$data['stdcode'];
         $landline_I=$data['landno1'];
         $landline_II=$data['landno2'];
         $fax=$data['fax'];
         $email=$data['email'];
         $address=$data['address'];

         $data = array( 
            'category' => $category,
            'sub_category' => $sub_category, 
            'unit' => $unit,
            'name' => $name,
            'designation' => $designation, 
            'vpn' => $vpn,
            'mobileno_I' => $mobileno_I,
            'mobileno_II' => $mobileno_II, 
            'std' => $std,
            'landline_I' => $landline_I,
            'landline_II' => $landline_II, 
            'unit' => $unit,
            'email' => $email,
            'address' => $address
         ); 

         if ($this->db->insert("connectivity_tbl", $data)) { 
            return true; 
         }  

        
      }

      /*public function connectivity_datatabledata() {
      $this->datatables->select('id,category,sub_category,unit,name,designation');
      $this->datatables->from('connectivity_tbl');
      $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info">Edit</a>  <a href="javascript:void(0);" class="delete_record btn btn-danger">Delete</a>','id,category,sub_category,unit,name,designation');
      return $this->datatables->generate();
      }*/
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
   /*
   function updateEmp(){
      $id=$this->input->post('id');
      $name=$this->input->post('name');
      $age=$this->input->post('age');
      $designation=$this->input->post('designation');
      $skills=$this->input->post('skills');
      $address=$this->input->post('address');
      $this->db->set('name', $name);
      $this->db->set('age', $age);
      $this->db->set('designation', $designation);
      $this->db->set('skills', $skills);
      $this->db->set('address', $address);
      $this->db->where('id', $id);
      $result=$this->db->update('emp');
      return $result;   
   }*/
?> 

   
                 