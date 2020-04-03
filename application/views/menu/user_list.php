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
          <h3 class="box-title">User List</h3>

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

                
            <!-- /.box-header -->
            <div class="box-body">
  <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL ID</th>
                  <th>MOBILE NO</th>
                  <th>PEN NO</th>
                  <th>DESIGNATION</th>
                  <th>UNIT</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
            </div>        
        </div>
      </div>











        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <form name="updateuserform" id="updateuserform">
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
         <label>Email Id</label>
        <input type="text" name="email" id="email" class="form-control"  required="required" autofocus="autofocus">
        </div>

        <div class="form-group has-feedback">
         <label>Mobile No</label>
        <input type="text" name="mobile" id="mobile" class="form-control"  required="required" autofocus="autofocus">
        </div>
       <div class="form-group has-feedback">
         <label>Pen No</label>
        <input type="text" name="pen" id="pen" class="form-control"  required="required" autofocus="autofocus">
        </div>
        <div class="form-group has-feedback">
        <label>Designation</label>
        <select class="form-control" id="designation" name="designation" autofocus="autofocus">
        <option value=''>Select Designation</option>
        <?php
        foreach ($designation as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['designation']; ?></option>
        <?php
        }
        ?>
        </select>
        <!-- <input type="text" name="role_id" id="role_id" class="form-control"> -->
        </div>
        <div class="form-group has-feedback">
        <label>Unit</label>
        <select class="form-control" id="unit" name="unit" autofocus="autofocus">
        <option value=''>Select Unit</option>
        <?php
        foreach ($unit as $key => $value) 
        {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['unit']; ?></option>
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
    $("#updateuserform").validate({
      rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true,
                minlength:10
            },
            pen:{
              required:true,
              number:true,
              minlength:6
            },
            designation:"required",
            unit:"required",
        
        },
        messages: {
            name: "Please enter your name",   
            email: "Please enter a valid email address",
            mobile: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value",
                minlength:"mobile number must be 10 numbers long"
            },
            pen:{
              required: "Please enter your pen number",
                number: "Please enter only numeric value",
                minlength:"mobile number must be 6 numbers long"
            },
            designation:"This field connot be empty",
            unit:"This field cannot be empty",
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


//datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url("user/datatablegetuserdata")?>",
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
                          var user_id=$(this).attr('id'); 
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/user/getuserdata",
                    dataType : "json",
                    data: {"user_id" : user_id},
                    success: function(response){

                          $('#name').val(response[0].name);
                           $('#email').val(response[0].email_id);
                            $('#pen').val(response[0].pen);
                             $('#mobile').val(response[0].mobile);
                            $("#designation option[value='"+response[0].designation_id+"']").attr("selected", true);
                             $("#unit option[value='"+response[0].unit_id+"']").attr("selected", true);
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
                          var user_id=$(this).attr('id'); 
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/user/user_delete",
                    dataType : "json",
                    data: {"user_id" : user_id},
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
          if($("#updateuserform").valid())
            {
            
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/user/user_update",
                    data: $('#updateuserform').serialize(),
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
                  }
          
          });//update action

        }//fnDrawCallback
 
    });

  });

 

</script>
</body>
</html>
