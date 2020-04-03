<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>public/dist/img/userimg.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu sidemenu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <!-- <li>
            <a href="<?php echo site_url('task/createtask_page'); ?>"><i class="fa fa-circle-o"></i>Create Task</a>
            </li>
            <li>
            <a href="<?php echo site_url('task_list/task_list'); ?>"><i class="fa fa-circle-o"></i>Task List</a>
            </li>
           <li>
            <a href="<?php echo site_url('task_list/task_listbyme'); ?>"><i class="fa fa-circle-o"></i>Task Assigned By Me</a>
            </li>
            <li>
            <a href="<?php echo site_url('task_list/task_listtome'); ?>"><i class="fa fa-circle-o"></i>Task Assigned To Me</a>
            </li>
            <li>
            <a href="<?php echo site_url('user_list/user_list'); ?>"><i class="fa fa-circle-o"></i>User List</a>
            </li>


            <li>
            <a href="<?php echo site_url('designation_list/designation_list'); ?>"><i class="fa fa-circle-o"></i>Designation List</a>
            </li>

            <li>
            <a href="<?php echo site_url('status_list/status_list'); ?>"><i class="fa fa-circle-o"></i>Status List</a>
            </li>

            <li>
            <a href="<?php echo site_url('role/role'); ?>"><i class="fa fa-circle-o"></i>Role</a>
            </li>


            <li>
            <a href="<?php echo site_url('role_assigned/role_assigned'); ?>"><i class="fa fa-circle-o"></i>Role Assigned</a>
            </li>

            <li>
            <a href="<?php echo site_url('menu/menu'); ?>"><i class="fa fa-circle-o"></i>Add Menu</a>
            </li>
            <li>
            <a href="<?php echo site_url('menu/assignrolemenu'); ?>"><i class="fa fa-circle-o"></i>Assign Role Menu</a>
            </li> -->
           </ul>
</li>
    </section>
    <!-- /.sidebar -->

   
  </aside>
  
