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
          <h3 class="box-title">Add designation</h3>
          <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form class="form-horizontal" id="desig_form" method="post" action="<?php echo site_url('user/add_designation'); ?>">  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Add New Designation</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Add Designation">
                  </div>


                  <div class="col-sm-2">
                  <button type="submit" class="btn btn-info pull-left">Add</button>
                </div>
                  </div>
            </form>
        </div>
 
        <!-- /.box-footer-->
      </div>

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Designation List</h3>

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
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Id</th>
                  <th>Designation</th>
                  
                  <th>info</th>
                </tr>
              <?php 
              $i=0;
              foreach ($designation as $key => $value)
                {
                ?>
                <tr>
                  <td><?php echo ++$i; ?></td>
                  <td><?php echo $value["designation"];?></td>
                     <td><div class="btn-group">
                       <button type="button" class="btn btn-info update_getbtn" id="<?php echo $value["id"];?>">Update</button>
                    </div></td>
                  </tr>
                  <?php
                  }
                  ?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>        
        </div>
      </div>











        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<form name="roletypeform" id="roletypeform">
  <!-- /.content-wrapper -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">designation</h4>
      </div>
      <div class="modal-body">
        <p>
          <div class="form-group has-feedback">
            <label>designation</label>
        <input type="text" id="designationname" name="designationname" class="form-control"  required="required">
        </div>

        <div class="form-group has-feedback">
        <input type="text" name="id" id="id" class="form-control">
        </div>

        </p>
      </div>


      <div class="modal-footer">
        <div class="btn-group">
          <button type="button" class="btn btn-info update_btn">Update</button></div>
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
  $(document).ready(function() {
    $("#desig_form").validate({
      rules: {
        designation: "required",
          
            
            
           
        },
        messages: {
          designation: "This field conot be empty",   
            
           
        }
        
    });
    $("#roletypeform").validate({
      rules: {
        designationname: "required",
          
            
            
           
        },
        messages: {
          designationname: "This field conot be empty",   
            
           
        }
        
    })
  

    $('.update_getbtn').click(function(){
       var designation_id=$(this).attr('id');
       $("#myModal").modal("show");
       $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/designation/get_designationname",
                    dataType : "json",
                    data: {"designation_id":designation_id},
                    success: function(response){
                          if(response)
                          {
                              $('#designationname').val(response[0].designation);
                              $('#id').val(response[0].id);
                              $('#id').hide();
                              
                          }
                          else
                          {
                            alert("Failed failed");
                          }

                        },
                        error: function(xhr, textStatus, error) {
                          console.log(xhr.statusText);
                          console.log(textStatus);
                          console.log(error);
                        }
                    })
    });

    $('.update_btn').click(function(){
         var designationname=$("#designationname").val();
         var id=$("#id").val();
         if($("#roletypeform").valid())
            {
       $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/designation/update_designationname",
                    data:{"designationname":designationname,"id":id},
                    dataType : "json",
                    success: function(response){
                       if(response==true) //if success close modal and reload ajax table
                          {
                         $("#myModal").modal("hide");
                           toastr.success('Updated Successfully..!!', 'Success Alert', { timeOut: 3000 });  
                             
                            setTimeout(function(){// wait for 5 secs(2)
                                 location.reload(); // then reload the page.(3)
                            }, 3000); 
                    
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
    });

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


  });
</script>
</body>
</html>
