<?php 
   class UserModel extends CI_Model {
	  var $table = 'user';
    var $column_order = array('id','name','email_id','mobile','pen','designation_id','unit_id'); //set column field database for datatable orderable
    var $column_search = array('id','name','email_id','mobile','pen','designation_id','unit_id'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order 
      function __construct() { 
         parent::__construct(); 
      } 
   
      
      public function login($data) {
         $response = array();
         $condition = "email_id =" . "'" . $data['email_id'] . "' AND " . "password =" . "'" . $data['password'] . "'";
         $this->db->select('*');
         $this->db->from('user');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
            if ($query->num_rows() == 1) 
            {
             $response['result'] = true;
             $response['userdata']=$query->result_array();
             return $response;
            } 
            else
            {
            $response['result'] = false;
            $response['userdata']="";
            return $response;
            }

         }

      public function register($data) { 

       $ec_error = array();
       $name = $data['name'];
       $designation = $data['designation_id'];
       $unit = $data['unit_id'];
       $pen = $data['pen'];
       $mobile = $data['mobile'];
       $email = $data['email_id'];
       $password = $data['password'];
       if($name=='')
       {
         $ec_error['name']="name cant be null";
       }
       if($designation=='')
       {
         $ec_error['designation_id']="designation_id cant be null";
       }
       if($unit=='')
       {
         $ec_error['unit_id']="unit cant be null";
       }
       if($pen=='')
       {
         $ec_error['pen']="pen cant be null";
       }
       if($mobile=='')
       {
         $ec_error['mobile']="mobile cant be null";
       }
       if($email=='')
       {
         $ec_error['email']="email_id cant be null";
       }
       if($password=='')
       {
         $ec_error['password']="password cant be null";
       }
       
         if ($this->db->insert("user", $data)) { 
            return true; 
         } 
      } 

      public function get_designation() { 

         $response = array();
         $this->db->select('*');
         $this->db->from('designation');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
      }
      public function get_designationname($designation_id) { 

         $response = array();
         $this->db->select('*');
         $this->db->where('id',$designation_id);
         $this->db->from('designation');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
        
      }
      public function update_designationname($designationname,$id){
        $response = array();
        // return $role_id;
        $this->db->set('designation',$designationname);
        $this->db->where('id',$id);
        $result=$this->db->update('designation');
        return $result; 
      }

    public function get_userdesignation($id) { 

         $response = array();
         $this->db->select('designation');
         $this->db->where('id',$id);
         $this->db->from('designation');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
        
      }
      public function get_unit() { 
         $response = array();
         $this->db->select('*');
         $this->db->from('unit');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
        
      }
      public function get_userunit($id) { 

         $response = array();
         $this->db->select('unit');
         $this->db->where('id',$id);
         $this->db->from('unit');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
        
      }
      public function get_user() { 
         $response = array();
         $this->db->select('*');
         $this->db->from('user');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
      }

      public function get_username($id) { 
         $response = array();
         $this->db->select('*');
         $this->db->where('id',$id);
         $this->db->from('user');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
        
      }
      public function updateuserdata($data,$id){
        $response = array();
         // $this->db->set('role_id',$role_id);
        $this->db->where('id',$id);
          $result=$this->db->update('user',$data);
         return $result; 

      }
       public function deleteuserdata($id){
        $response = array();
          $this->db->where('id',$id);
           $result=$this->db->delete('user');
         return $result; 
      }

      public function get_userrole($id) { 
         $response = array();
         $this->db->select('role');
         $this->db->where('id',$id);
         $this->db->from('role');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
        
      }

      public function get_role() { 
         $response = array();
         $this->db->select('*');
         $this->db->from('role');
         $query = $this->db->get();
         $response = $query->result_array();
         return $response; 
      }
      public function updateroledata($role_id,$id){
        $response = array();
        // return $role_id;
        $this->db->set('role_id',$role_id);
        $this->db->where('id',$id);
        $result=$this->db->update('user');
        return $result; 
      }
      public function get_menu($menu_id){
         $response = array();
         $this->db->select('*');
         $this->db->from('menu');
         $this->db->where('id',$menu_id);
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
      }
      public function get_rolemenu($role_id){
         $response = array();
         $this->db->select('*');
         $this->db->from('rolemenu');
         $this->db->where('role_id',$role_id);
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
      }
      public function update_menu($route,$menu,$id){
        $response = array();
        // return $role_id;
        $this->db->set('route',$route);
        $this->db->set('menu',$menu);
        $this->db->where('id',$id);
        $result=$this->db->update('menu');
        return $result; 
      }
     public function get_roletype($role_id){
         $response = array();
         $this->db->select('*');
         $this->db->from('role');
         $this->db->where('id',$role_id);
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
      }
      public function update_roletype($roletype,$id){

        $response = array();
        // return $role_id;
        $this->db->set('role',$roletype);
        $this->db->where('id',$id);
        $result=$this->db->update('role');
        return $result; 

      }


       public function get_statusname($status_id)
      {
         $response = array();
         $this->db->select('*');
         $this->db->from('status');
         $this->db->where('id',$status_id);
         $query = $this->db->get();
         $response = $query->result_array();
         return $response;
      }
      public function update_statusname($statusname,$id){

        $response = array();
        // return $role_id;
        $this->db->set('status',$statusname);
        $this->db->where('id',$id);
        $result=$this->db->update('status');
        return $result; 

      }

      public function tasklist_update($role_id,$id)
      {
         $response = array();
         $this->db->set('role_id',$role_id);
         $this->db->where('id',$id);
         $result=$this->db->update('user');
         return $result; 
      }


public function updatetasklistdata($role_id,$id){
        $response = array();
         $this->db->set('role_id',$role_id);
          $this->db->where('id',$id);
           $result=$this->db->update('user');
         return $result; 
  

      }
      public function updateuserlistdata($role_id,$id){
        $response = array();
         $this->db->set('role_id',$role_id);
          $this->db->where('id',$id);
           $result=$this->db->update('user');
         return $result; 
  
      }

 public function deleteroledata($role_id,$id){
        $response = array();
         //$this->db->delete()('role_id',$role_id);
          $this->db->where('id',$id);
           $result=$this->db->delete('user');
         return $result; 
      }
 public function assign_role($role,$user){
        $response = array();
          $this->db->set('role_id',$role);
          $this->db->where('id',$user);
          $result=$this->db->update('user');
         return $result; 

      }
    public function flush_rolemenu($role_id){
        $response = array();
        $this->db->where('role_id',$role_id);
        $result=$this->db->delete('rolemenu');
        return $result; 
      }
      public function assign_rolemenu($data){
              
            if ($this->db->insert("rolemenu", $data)) 
                  { 
                     return true; 
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

      public function add_menu($data) { 

            
         if ($this->db->insert("menu", $data)) { 
            return true; 
         } 
      }
      public function add_designation($data) { 

            
         if ($this->db->insert("designation", $data)) { 
            return true; 
         } 
      }

      public function add_status($data) { 

            
         if ($this->db->insert("status", $data)) { 
            return true; 
         } 
      } 

      public function add_role($data) { 

            
         if ($this->db->insert("role", $data)) { 
            return true; 
         } 
      }
      public function getuserroledata($user_id){
        
    // SELECT a.*, b.*,c.* FROM user a INNER JOIN designation b ON a.designation_id=b.id INNER JOIN role c ON a.role_id=c.id WHERE a.id=90
        $response = array();
        $this->db->select('u.id,u.name,u.role_id,u.email_id,u.pen,d.designation,r.role');
        $this->db->from('user u');
        $this->db->join('designation d', 'd.id=u.designation_id', 'left');
        $this->db->join('role r', 'r.id=u.role_id', 'left');
        $this->db->where('u.id',$user_id);
        $query = $this->db->get();
        $response=$query->result_array();
        return $response;

      }

      public function getuserdata($user_id){
        
        $response = array();
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$user_id);
        // $this->db->select('u.id,u.name,u.unit_id,u.designation_id,u.email_id,u.pen,d.designation,r.unit');
        // $this->db->from('user u');
        // $this->db->join('designation d', 'd.id=u.designation_id', 'left');
        // $this->db->join('unit r', 'r.id=u.unit_id', 'left');
        // $this->db->where('u.id',$user_id);
        $query = $this->db->get();
        $response=$query->result_array();
        return $response;

      }

      public function tasklistupdatadata($user_id){
         $response = array();
         $condition = "id =" . "'" . $user_id. "'";
         $this->db->select('*');
         $this->db->from('user');
         $this->db->where($condition);
         $query = $this->db->get();
         $response=$query->result_array();
             
        return $response;
      }
}
?> 

