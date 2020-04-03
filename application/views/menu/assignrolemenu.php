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
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Role Menu Assigned</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <form name="assignmenuform" id="assignmenuform">
          <div class="row">
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
    <button type="button" class="btn btn-info pull-left" id="_assignrolemenu">Assign</button>
  </div>
</div>
<div class="row">
  <br/><br/>
  </div>
          <div class="row">
            <div class="col-md-12">
               <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Menu</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody id="menulist">
                 <?php
                 $i=0;
                    foreach ($menu as $key => $value) 
                    {

                    ?>
                    <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $value['menu']; ?></td>
                    <td><input type="checkbox" name="menu_id" id="menu_id" value="<?php echo $value['id']; ?>"></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>

              </table>
            </div>
          </div>
        </form>
        </div>
</div>
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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  var table;
  $(document).ready(function() {
    $("#assignmenuform").validate({
      rules: {
       
        role:"required",
            
            
           
        },
        messages: {
          
          role:"This field cannot be empty" 
           
        }
        
    });
    $('#_assignrolemenu').click(function(){
      var menu_id = new Array();
      var role_id=$("#role").val();
      $("#menulist input[type=checkbox]:checked").each(function () {
                menu_id.push(this.value);

      });
      if($("#assignmenuform").valid())
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/menu/assign_rolemenu",
                    dataType : "json",
                    data:{"role_id":role_id,"menu_id":menu_id},
                    success: function(response){

                      if(response==1){
                        toastr.success('Updated Successfully..!!', 'Success Alert', { timeOut: 3000 });  
                             
                            setTimeout(function(){// wait for 5 secs(2)
                                 location.reload(); // then reload the page.(3)
                            }, 3000); 
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





$('#role').change(function(){
      var role_id=$("#role").val();
          $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/menu/get_rolemenu",
                    dataType : "json",
                    data:{"role_id":role_id},
                    success: function(response){

                       console.log(response);
                      if(response!="")
                      {

                          $.each(response,function (k,v) 
                            {
                              // console.log("resp");
                              var menu_id=response[k]['menu_id'];
                              // console.log(menu_id)
                                $("#menulist").find('input[name="menu_id"]').each(function () 
                                        {
                                         // console.log($(this).val());
                                         // console.log(response[0]['menu_id']);

                                              if($(this).val()==menu_id)
                                                {
                                                // console.log(response[0]['id']);

                                                  $(this).prop("checked", true);
                                                }

                                    });
                          });
                        // $(".menu_id").each(function(){

                           
                        //   if($(this).val()==response[0]['id'])
                        //   {
                        //   console.log(response[0]['id']);

                        //     $(this).prop("checked", true);
                        //   }
                         
                           
                        // });
                      }
                      else
                      {
                         $("#menulist").find('input[name="menu_id"]').each(function(){

                          // console.log(response[0]['id']);
                         
                            $(this).prop("checked", false);
        
                         
                           
                        });
                      }

                      
                   
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
