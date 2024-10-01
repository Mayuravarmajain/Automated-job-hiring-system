
<?php
include '../config.php';
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
  <title> Services </title>
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


<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
<div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title"> Services Form</div>
           <hr>
            <form action="controller/services.php" method="POST"  enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-6"> Work Category</label>
            <select  name="category" required id="exampleInputTypeofServices"  require class="form-control form-control-rounded"  >
					<option  value="" > Select Category </option>

					<?php $stmt = $admin->ret("SELECT * FROM `category`");
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					?>

					<option value="<?php echo $row['c_id'] ; ?> " ><?php echo $row['c_name'] ; ?>  </option>
<?php } ?>
</select>
           </div>
          
           <div class="form-group">
            <label for="input-6">Price</label>
            <input type="text" name="price" class="form-control form-control-rounded" id="input-6" placeholder="Enter work price">
           </div>


           <div class="form-group">
            <label for="input-6">Description</label>
            <input type="text" name="description" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Designation">
           </div>

           <div class="form-group">
            <label for="input-6">Image</label>
            <input type="file" name="image" class="form-control form-control-rounded" id="input-6" placeholder="add you image">
           </div>
           </div>

           
          
          
          
           </div>
           <div class="form-group">
            <button type="submit" name="submit" class="btn btn-light btn-round px-5"> Add</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->
    </div>
         </div>
      </div>
    </div>





    <div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     

<div class="row" style="margin-top:-80px;">
        
        <div class="">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">category_details</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                  <tr>
                      <th scope="col">Si_No</th>
                      <th scope="col">Work Type</th>
                      <th scope="col">Image</th>
                      <th scope="col">Price</th>
                     
                     
                     
                      <th scope="col">Description</th>
                      <th scope="col">Date</th>
                      <th scope="col">Update</th>
                      <th scope="col" rowspan="2">Action</th>
                      <th scope="col">Delete</th>

                  
                    
                    </tr>
                  </thead>
                  <tbody>

                  <?php


$sid = $_SESSION['S_id'];

$i =1;
$stmt = $admin->ret("SELECT * FROM `services` INNER JOIN `category` ON category.c_id = services.c_id WHERE services.s_id = '$sid' ") ;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){


?>

                    <tr>
                      <th scope="row"><?php echo $i++ ; ?></th>
                      <td><?php echo $row['c_name'] ; ?></td>
                      <td><img src="../service_provider/controller/<?php echo $row['se_image'] ; ?>" width="100px" height="100px" ></td>
                      <td><?php echo $row['se_price'] ; ?></td>
                      
                      
                     
                      <td><?php echo $row['se_description'] ; ?></td>
                      <td><?php echo $row['se_date'] ; ?></td>
                      <td><a href="service_update.php?id=<?php echo $row['se_id'] ; ?>"> <button type="submit" class="btn btn-success btn-rounded">update</button> </a></td>
                      <td> <a href="controller/service_delete.php?id=<?php echo $row['se_id'] ; ?>"><button type="submit" class="btn btn-danger btn-rounded">Delete</button> </a></td>
                      <td></td>
                      
                      
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
	



<!--End footer-->

<!--start color switcher-->
<div class="right-sidebar">
<div class="switcher-icon">
  <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
</div>
<div class="right-sidebar-content">

  <p class="mb-0">Gaussion Texture</p>
  <hr>
  
  <ul class="switcher">
    <li id="theme1"></li>
    <li id="theme2"></li>
    <li id="theme3"></li>
    <li id="theme4"></li>
    <li id="theme5"></li>
    <li id="theme6"></li>
  </ul>

  <p class="mb-0">Gradient Background</p>
  <hr>
  
  <ul class="switcher">
    <li id="theme7"></li>
    <li id="theme8"></li>
    <li id="theme9"></li>
    <li id="theme10"></li>
    <li id="theme11"></li>
    <li id="theme12"></li>
    <li id="theme13"></li>
    <li id="theme14"></li>
    <li id="theme15"></li>
  </ul>
  
 </div>
</div>
<!--end color switcher-->

</div><!--End wrapper-->

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
