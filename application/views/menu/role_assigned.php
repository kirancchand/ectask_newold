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
<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/datatables/dataTables.bootstrap.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
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
          <h3 class="box-title">Assign Role</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
<form name="roleform" id="roleform">
<div class="row">
  <div class="col-md-4">
    <div class="form-group has-feedback">
        <select class="form-control" id="user" name="user" autofocus="autofocus">
        <option value=''>Select User</option>
        <!--<option value='1'>scrb</option>-->
       <?php
        foreach ($user as $key => $value) {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['name']; ?></option>
        <?php
        }
        ?>
        </select>
    </div>
  </div>
  <div class="col-md-4">
    <select class="form-control" id="role" name="role" autofocus="autofocus">
        <option value=''>Select Role</option>
        <?php
        foreach ($role as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['role']; ?></option>
        <?php
        }
        ?>
    </select>
  </div>
  <div class="col-md-4">
  <button type="submit" class="btn btn-info pull-left">Assign</button>
  </div>
</div>
</form>
</div>
</div>

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Role Assigned</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
               <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>DESIGNATION</th>
                  <th>EMAIL ID</th>
                  <th>PEN NO</th>
                  <th>ROLE</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>

              </table>
            </div>
          </div>
        </div>
</div>
    </section>
    <!-- /.content -->

  </div>







  <form name="updateroleform" id="updateroleform">
  <!-- /.content-wrapper -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Assign Role</h4>
      </div>
      <div class="modal-body">
        <p>
          <div class="form-group has-feedback">
            <label>Name</label>
        <input type="text" name="name" id="name" class="form-control"  required="required" autofocus="autofocus">
        </div>

         <div class="form-group has-feedback">
          <label>Designation</label>
        <input type="text" name="designation" id="designation" class="form-control"  required="required" autofocus="autofocus">
        </div>

        <div class="form-group has-feedback">
         <label>Email Id</label>
        <input type="text" name="email" id="email" class="form-control"  required="required" autofocus="autofocus">
        </div>

        <div class="form-group has-feedback">
         <label>Pen No</label>
        <input type="text" name="pen" id="pen" class="form-control"  required="required" autofocus="autofocus">
        </div>

        <div class="form-group has-feedback">
        <label>Role</label>
        <select class="form-control" id="role" name="role" autofocus="autofocus">
        <option value=''>Select Role</option>
        <?php
        foreach ($role as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['role']; ?></option>
        <?php
        }
        ?>
        </select>
        <!-- <input type="text" name="role_id" id="role_id" class="form-control"> -->
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  var table;
  $(document).ready(function() {
    $("#roleform").validate({
      rules: {
        user: "required",
        role:"required",
            
            
           
        },
        messages: {
          user: "This field conot be empty",   
          role:"This field cannot be empty" 
           
        }
        
    });
    $("#updateroleform").validate({
      rules: {
        role: "required",
          
            
            
           
        },
        messages: {
          role: "This field conot be empty",   
            
           
        }
        
    })
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



$('#_assignrole').click(function(){
     // alert("hello");
          $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/user/assign_role",
                    dataType : "json",
                    data: $('#roleform').serialize(),
                    success: function(response){
                      if(response==true)
                         alert("Assigned Successfully");
                      else
                        alert("Assign failed");
                   
                        },
                        error: function(xhr, textStatus, error) {
                          console.log(xhr.statusText);
                          console.log(textStatus);
                          console.log(error);
                        }
                    })
});

//validater
$("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

//datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url("user/datatablegetuserroledata")?>",
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
                          $('#name').attr("disabled", true);
                          $('#designation').attr("disabled", true);
                          $('#email').attr("disabled", true);
                          $('#pen').attr("disabled", true);
                          var user_id=$(this).attr('id'); 
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/user/getuserroledata",
                    dataType : "json",
                    data: {"user_id" : user_id},
                    success: function(response){

                         $('#name').val(response[0].name);
                          $('#designation').val(response[0].designation);
                           $('#email').val(response[0].email_id);
                            $('#pen').val(response[0].pen);
                            $("#role option[value='"+response[0].role_id+"']").attr("selected", true);
                             // $('#role').val(response[0].role);
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


        $('.update_btn').click(function(){
             // var id=$('#id').val(); 

            // alert(id);
            if($("#updateroleform").valid())
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/user/role_update",
                    data: $('#updateroleform').serialize(),
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
                        else
                        {//console.log(response.status);

                          toastr.error('Something Went Wrong..!!', 'Danger Alert', { timeOut: 3000 });  
                          // for (var i = 0; i < response.inputerror.length; i++) 
                          // {
                          //     $('[name="'+response.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                          //     $('[name="'+response.inputerror[i]+'"]').next().text(response.error_string[i]); //select span help-block class set text error string
                          // }
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

        }//fnDrawCallback
 
    });

  });

</script>
</body>
</html>
