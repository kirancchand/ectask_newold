<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/datatables/dataTables.bootstrap.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">



  <!-- =============================================== -->

<!-------------------------------------------------------------------->
<?php
$this->load->view('components/header');
$this->load->view('components/sidemenu');

?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Task List</h3><?php echo $this->session->userdata('id'); ?>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
            <!-- /.box-header -->
      
                <!-- /.box-header -->
                <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>TASK NAME</th>
                  <th>CREATED BY</th>
                  <th>ASSIGNED BY</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>

              </table>


                  <!-- <?php
                    //print_r($task);
                    
                    foreach ($task as $key => $value) {
                      ?>
                  <a href="<?php echo base_url('index.php/task_list/taskpage'); ?>">
                  <div class="alert alert-success alert-dismissible">
                    <h4><i class="icon fa fa-check"></i>Task Name:<?php echo $value['name']; ?></h4>
                    <?php echo $value['description'];  ?>
                  </div>
                   </a>
                      <?php
                    }
                  ?> -->
          
                </div> 
          
    

    
        <!-- /.box-body -->
            <div class="box-footer clearfix">
    
            </div>   
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <form name="updatetaskform" id="updatetaskform">
  <!-- /.content-wrapper -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Task</h4>
      </div>
      <div class="modal-body">
        <p>
          <div class="form-group has-feedback">
            <label>Task Name</label>
        <input type="text" name="taskname" id="taskname" class="form-control"  required="required" autofocus="autofocus">
        </div>
        <div class="form-group has-feedback">
         <label>Task Description</label>
        <input type="text" name="taskdesc" id="taskdesc" class="form-control"  required="required" autofocus="autofocus">
        </div>

        <!-- <div class="form-group has-feedback">
         <label>Created By</label>
        <select class="form-control" id="created_by" name="created_by" autofocus="autofocus">
        <option value=''>Select User</option>
        <?php
        foreach ($user as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['name']; ?></option>
        <?php
        }
        ?>
        </select>
        </div> -->
       <div class="form-group has-feedback">
         <label>Assigned By</label>
        <select class="form-control" id="assigned_by" name="assigned_by" autofocus="autofocus">
        <option value=''>Select User</option>
        <?php
        foreach ($user as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['name']; ?></option>
        <?php
        }
        ?>
        </select>
         </div>
        <div class="form-group has-feedback">
        <label>Priority</label>
        <!-- <input type="text" name="priority" id="priority" class="form-control"  required="required" autofocus="autofocus"> -->
        <select class="form-control" id="priority" name="priority" autofocus="autofocus">
        <option value=''>Select Priority</option>
        <?php
        foreach ($priority as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['Name']; ?></option>
        <?php
        }
        ?>
        </select>
        </div>
        <div class="form-group has-feedback">
        <label>Status</label>
        <select class="form-control" id="status" name="status" autofocus="autofocus">
        <option value=''>Select Designation</option>
        <?php
        foreach ($status as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['status']; ?></option>
        <?php
        }
        ?>
        </select>
        <!-- <input type="text" name="role_id" id="role_id" class="form-control"> -->
        </div>
        <div class="form-group has-feedback">
        <label>Task Category</label>
        <select class="form-control" id="taskcategory" name="taskcategory" autofocus="autofocus">
        <option value=''>Select Task Category</option>
        <?php
        foreach ($taskcategory as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['category']; ?></option>
        <?php
        }
        ?>
        </select>
        <!-- <input type="text" name="role_id" id="role_id" class="form-control"> -->
        </div>
                <div class="form-group has-feedback">
        <label>Mode of Task</label>
        <select class="form-control" id="taskmode" name="taskmode" autofocus="autofocus">
        <option value=''>Select Mode of Task</option>
        <?php
        foreach ($taskmode as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['mode_of_task']; ?></option>
        <?php
        }
        ?>
        </select>
        <!-- <input type="text" name="role_id" id="role_id" class="form-control"> -->
        </div>
        <div class="form-group has-feedback">
        <label>Created Time</label>
        <input type="text" name="created_time" id="created_time" class="form-control"  required="required" autofocus="autofocus" disabled>
        </div>
        <div class="form-group has-feedback">
        <label>Expected Time</label>
        <input type="text" name="expected_time" id="expected_time" class="form-control"  required="required" autofocus="autofocus" >
        </div>
        <div class="form-group has-feedback">
        <label>Updated Time</label>
        <input type="text" name="updated_time" id="updated_time" class="form-control"  required="required" autofocus="autofocus">
        </div>
        <div class="form-group has-feedback">
         <!-- <label>id</label> -->
        <input type="text" name="id" id="id" class="form-control">
        </div>

        </p>
      </div>


      <div class="modal-footer">
        <div class="btn-group">
          <button type="button" class="btn btn-info update_btn">Update</button></div>
          <div class="btn-group">  
          <button type="button" class="btn btn-info btn-danger delete_btn">Delete</button>
            </div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>



<?php
$this->load->view('components/footer');
$this->load->view('components/sidebarcontroller');
?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/dist/js/demo.js"></script>
<!---Custom js--->
<script src="<?php echo base_url(); ?>public/custom/js/script.js"></script>


<script src="<?php echo base_url(); ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  var table;
  $(document).ready(function() {


    $.ajax({
                    type: "GET",
                    url: "<?php echo site_url(); ?>/menu/sidemenu",
                    dataType : "json",
                   
                    success: function(response){
                      console.log(response['sidemenu']);
                      $.each(response['sidemenu'],function (k,v) 
                            {
                              console.log(response['sidemenu'][k][0]);
                              $(".sidemenu").append('<li><a href="<?php echo site_url("' + response['sidemenu'][k][0]['route'] + '"); ?>">' + response['sidemenu'][k][0]['menu'] + '</a></li>');
                                          
                           });


                        },
                        error: function(xhr, textStatus, error) {
                          console.log(xhr.statusText);
                          console.log(textStatus);
                          console.log(error);
                        }
                    })


//datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url("task/datatablegettaskdata")?>",
            "type": "GET"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
        "fnDrawCallback": function(oSettings){


          $('.updateview_btn').click(function(){
                    
 //                       $(".update_btn").show();
                          var task_id=$(this).attr('id'); 
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/task/get_taskdata",
                    dataType : "json",
                    data: {"task_id" : task_id},
                    success: function(response){

                          console.log(response);
                          $('#taskname').val(response[0].name);
                          $('#taskdesc').val(response[0].description);
                          // $("#created_by option[value='"+response[0].created_by+"']").attr("selected", true);
                          $('#created_by').val(response[0].created_by);
                          // $("#assigned_by option[value='"+response[0].assigned_by+"']").attr("selected", true);
                          $('#assigned_by').val(response[0].assigned_by);
                          $('#priority').val(response[0].priority);
                          $('#status').val(response[0].status_id);
                          // $("#status option[value='"+response[0].status_id+"']").attr("selected", true);
                          // $("#taskcategory option[value='"+response[0].task_category_id+"']").attr("selected", true);
                          $('#taskcategory').val(response[0].task_category_id);
                          // $("#taskmode option[value='"+response[0].mode_of_task_id+"']").attr("selected", true);
                          $('#taskmode').val(response[0].mode_of_task_id);
                          $('#created_time').val(response[0].created_time);
                          $('#expected_time').val(response[0].expected_time);
                          $('#updated_time').val(response[0].updated_time);
                          $('#id').val(response[0].id);
                          $('#id').hide();
                   
                        },
                        error: function(xhr, textStatus, error) {
                          console.log(xhr.statusText);
                          console.log(textStatus);
                          console.log(error);
                        }
                    })
          
           });//update view in modal

 $('.delete_btn').click(function(){
                    
 //                       $(".update_btn").show();
                          var task_id=$(this).attr('id'); 
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/task/task_delete",
                    dataType : "json",
                    data: {"task_id" : task_id},
                    success: function(response){

                     if(response==true) //if success close modal and reload ajax table
                              {
                             
                              toastr.success('deleted Successfully..!!', 'Success Alert', { timeOut: 3000 });    
                              table.ajax.reload(null,false); //reload datatable ajax 
                        
                              }
                            else{
                            
                              toastr.error('Error..!!', 'Danger Alert', { timeOut: 3000 });    
                            }
                   
                        },
                        error: function(xhr, textStatus, error) {
                          console.log(xhr.statusText);
                          console.log(textStatus);
                          console.log(error);
                        }
                    })
          
           });//update view in modal
   $('.update_btn').click(function(){
            
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/task/task_update",
                    data: $('#updatetaskform').serialize(),
                    dataType: "json",
                    success: function(response){
                    // alert(response);  

                             //console.log(response.status);
                        if(response==true) //if success close modal and reload ajax table
                          {
                         $("#myModal").modal("hide");
                          toastr.success('Updated Successfully..!!', 'Success Alert', { timeOut: 3000 });    
                          table.ajax.reload(null,false); //reload datatable ajax 
                    
                          }
                        else{
                           $("#myModal").modal("hide");
                          toastr.error('Error..!!', 'Danger Alert', { timeOut: 3000 });    
                        }

                        },
                        error: function(xhr, textStatus, error) {
                          console.log(xhr.statusText);
                          console.log(textStatus);
                          console.log(error);
                        }
                    })
          
          });//update action

        }//fnDrawCallback
 
    });

  });

 

</script>
</body>
</html>
