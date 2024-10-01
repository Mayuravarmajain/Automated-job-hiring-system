<?php include '../config.php';
$admin = new Admin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>admin</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
  
  <?php include 'sidebar.php'; ?>





   <!--End sidebar-wrapper-->

<!--Start topbar header-->

<?php include 'header.php'; ?>






<div class="clearfix"   style="margin-top:100px" ></div>
	

     

<div class="" style="margin-top:-80px;">
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Payment_details</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Si_No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Work Type</th>
                      <th scope="col">Location</th>
                      <th scope="col">Address</th>
                      <th scope="col">Date</th>
                      <th scope="col" rowspan="2">Action</th>
                      <th scope="col">Delete</th>

                    
                    </tr>
                  </thead>
                  <tbody>

<?php

$i =1;
$stmt = $admin->ret("SELECT * FROM `sp` INNER JOIN `category` ON category.c_id = sp.c_id INNER JOIN `location` ON location.l_id = sp.l_id   ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){


?>

                    <tr>
                      <th scope="row"><?php echo $i++ ; ?></th>
                      <td><?php echo $row['s_name'] ; ?></td>
                      <td><img src="../service_provider/controller/<?php echo $row['s_image'] ; ?>" width="100px" height="100px" ></td>
                      <td><?php echo $row['s_phone'] ; ?></td>
                      <td><?php echo $row['s_email'] ; ?></td>
                      <td><?php echo $row['c_name'] ; ?></td>
                      <td><?php echo $row['l_name'] ; ?></td>
                      <td><?php echo $row['s_address'] ; ?></td>
                      <td><?php echo $row['s_date'] ; ?></td>

                      <?php if($row['s_status']=='Accepted'){ ?>

                        <td><a href="" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">Accepted</a></td>

                        <?php }elseif($row['s_status']=='Rejected'){ ?>

                        <td>  <a href="" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">Rejected</a></td>
                        <?php }else{ ?>

                      <td><a href="controller/accept.php?id=<?php echo $row['s_id']; ?>" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">Accept</a>
<a href="controller/reject.php?id=<?php echo $row['s_id']; ?>" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">Reject</a></td>
                      
                   <?php } ?>


                      <td> <a href="controller/cat_delete.php?id=<?php echo $row['s_id'] ; ?>"><button type="submit" class="btn btn-danger btn-rounded">Delete</button> </a></td>



                   
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div><br><br><br><br>
        </div><br><br><br><br>
      </div><!--End Row--><br><br><br><br>
	  


<!--Start footer-->
	
<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="assets/js/sidebar-menu.js"></script>
<!-- loader scripts -->
<script src="assets/js/jquery.loading-indicator.js"></script>
<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script>
<!-- Chart js -->

<script src="assets/plugins/Chart.js/Chart.min.js"></script>

<!-- Index js -->
<script src="assets/js/index.js"></script>


</body>
</html>

