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
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>


 <style type="text/css">

label.error{
    width: 100%;
    color: red;
    font-style: italic;
    margin-left: 5px;
    margin-bottom: 5px;
}
input.error {
    border: 1px dotted red;
}
select.error {
    border: 1px dotted red;
}
  
 </style>

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
          <h3 class="box-title">Task List</h3>

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
  <!-- /.content-wrapper -->

  <div class="row">
    <div class="col-sm-6">
  <form name="createtaskform" id="createtaskform">
  <!-- /.content-wrapper -->
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
        <option value=''>Select Status</option>
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



        <!-- <div class="form-group has-feedback">
        <label>Created Time</label>
        <input type="datetime-local" id="meeting-time" name="meeting-time" value="date & time" required="required" autofocus="autofocus">
        </div> -->

       




        <div class="form-group has-feedback">
        <label>Expected Time</label>
        <!-- <input type="text" name="expected_time" id="expected_time" class="form-control"  required="required" autofocus="autofocus"> -->
        <!-- <input type="datetime-local" id="datetime" name="datetime" value="" required="required" autofocus="autofocus"> -->
        <input type="datetime-local" name="expected_time" id="expected_time" class="form-control" >
        <!-- <input type="date" id="start" name="trip-start"
       value=""
       min="2019-12-12" max="2028-12-31"> -->
        </div>



        <!-- <div class="form-group has-feedback">
        <label>Updated Time</label> -->
        <!-- <input type="text" name="updated_time" id="updated_time" class="form-control"  required="required" autofocus="autofocus"> -->
        <!-- -->


        
        <div>
          <button type="button" id="create_btn" class="btn btn-info create_btn">create</button>
        </div>
        </p>
</form>
</div>
</div>
          
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
 <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

 <script>
    $(function () {
        var today = new Date();
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var time = today.getHours() + ":" + today.getMinutes();
        var dateTime = date+' '+time;
        $("#expected_time").datetimepicker({
            format: 'yyyy-mm-dd hh:ii',
            autoclose: true,
            todayBtn: true,
            startDate: dateTime
        });
    });
</script>

<script>
  var table;
  $(document).ready(function() {
    
    $("#createtaskform").validate({
      rules: {
            taskname: "required",
            taskdesc:"required",
            created_by:"required",
            assigned_by:"required",
            priority:"required",
            status:"required",
            taskcategory:"required",
            taskmode:"required",
        },
        messages: {
            taskname: "Please enter your name",   
            taskdesc:"Please enter the discription",    
            created_by:"Please select a user" ,
            assigned_by:"Please select a user", 
            priority:"Please select priority",
            status:"Please select status",
            taskcategory:"Please select task category",
            taskmode:"Please select mode of task",
        }
        
    })
   $('.create_btn').click(function(){

   
            if($("#createtaskform").valid())
            {
              alert("hyyy");
              $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/task/create_task",
                    data: $('#createtaskform').serialize(),
                    dataType: "json",
                    success: function(response){
                    // alert(response);  

                             // console.log(response);
                        if(response==true) //if success close modal and reload ajax table
                          {
                          toastr.success('Created Successfully..!!', 'Success Alert', { timeOut: 3000 });
                          $('#createtaskform')[0].reset();    
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
            }
            
               
          
          });//update action


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
                    $(function () {
        var today = new Date();
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var time = today.getHours() + ":" + today.getMinutes();
        var dateTime = date+' '+time;
        $("#datetime").datetimepicker({
            format: 'yyyy-mm-dd hh:ii',
            autoclose: true,
            todayBtn: true,
            startDate: dateTime
        });
    });
  });

 

</script>
</body>
</html>
