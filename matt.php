<html lang="en">
<head>
    <title>Materials</title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <head>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/winery.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text" > SCM </a>
            </div>
            <ul class="nav">
                <li>
                    <a href="sfor.php">
                        <p>Sales Forecast</p>
                    </a>
                </li>
                <li>
                    <a href="prod.php">
                        <p>Production</p>
                    </a>
                <li>
                    <a href="matt.php">
                        <p>Materials</p>
                    </a>
                </li>
                <li>
                    <a href="supp.php">
                        <p>Supply</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">D'Vinum</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Hello!
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="sett.php">Settings</a></li>
                                <li><a href="MnV.php">Department</a></li>

                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="content-wrapper">
    <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MATERIALS
        <small>data tables</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Stocks</h3>
            </div>
            <!-- /.box-header -->
            <div class="container-fluid">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>ITEM</th>
                  <th>SIZE</th>
                  <th>DATE AND TIME DELIVERED</th>
                  <th>STOCK COUNT</th>
                  <th>ACTION</th>
                </tr>
                </thead>

<?php
    $con = mysqli_connect("localhost","root","","scm");

// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


        $query=mysqli_query($con,"select * from stocks")or die(mysqli_error());
          
          while($row=mysqli_fetch_array($query)){
            $id=$row['id'];
            $item=$row['item'];
            $size=$row['size'];
            $datetime=$row['datetime'];
            $count=$row['count'];
        ?>
                <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $item; ?></td>
                <td><?php echo $size; ?></td>
                <td><?php echo $datetime; ?></td>
                <td><?php echo $count; ?></td>
                 
                <td><a id="click" href="pending_update.php?id=<?php echo $id;?>&name=<?php echo $name;?>">
                <i class="glyphicon glyphicon-edit text-blue"></i></a>
                <a id="removeme" href="pending_del.php?id=<?php echo $id;?>">
                <i class="glyphicon glyphicon-remove text-red"></i></a>
                </td>
        
                </tr>
                 <?php }?>   
              </table>
            </div>
        </div>
            <!-- /.box-body -->
          </div>
      </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
                            

    <div class="footer">

        <footer class="footer">
            <div class="container-fluid">
            <nav class="copyright pull-left">
                <p>D'Vinum Supply Chain Management. All Rights Reserved. 2018</p>
            </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> 
                </p>
            </div>
        </footer>
    </div>
</div>



</body>

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="assets/js/demo.js"></script>
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</html>
