
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
  <title>profile</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
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
  <style>
        /* Custom CSS styles for the image with the class "profile" */
        img.scanner {
            width: 50px;   /* Set the width of the image to 50 pixels */
            height: 50px;  
            margin-top: 20px; /* Adding 20 pixels margin on all sides of the image */
        }
    </style>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <?php include 'sidebar.php' ; ?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<?php include 'header.php' ; ?>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <?php 
    
    $sid = $_SESSION['A_id'];
    
    $stmth = $admin->ret("SELECT * FROM `admin` ");
    $rowh = $stmth->fetch(Pdo::FETCH_ASSOC);
    
    ?>

      <div class="row mt-3">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="assets/images/bg.jpg" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <img src="assets/images/dp.jpg" alt="profile-image"  class="profile"><br><br><br>
                <h5 class="card-title"><?php echo $rowh['a_name'] ; ?></h5>
                
                <p class="card-text"><?php echo $rowh['a_email'] ; ?>, <?php echo $rowh['a_phone'] ; ?></p>
                 
                <p class="card-text"> <?php echo $rowh['a_address'] ; ?></p><br><br>
                
                <h5> Admin Account Detail:</h5><br>
                
                <p class="card-text"> Account holder name : <?php echo $rowh['a_holdername'] ; ?></p>
                
                <p class="card-text"> Account Number : <?php echo $rowh['a_accountno'] ; ?></p>
                
                <p class="card-text"> Bank Name  : <?php echo $rowh['a_bank'] ; ?></p>
                
                <p class="card-text"> IFSC Code : <?php echo $rowh['a_ifsc'] ; ?></p>

                <p> Scanner : <img src="assets/images/scanner.jpg" alt="scanner-image"   class="scanner"><br><br><br></p>
                     
                  
             
            </div>

            <div class="card-body border-top border-light">
                
                  
            
                  
              </div>
              
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
               
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Messages</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li> -->
            </ul>
            <div class="tab-content p-2">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3"></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6></h6>
                            <p>
                              
                            </p>
                            <h6></h6>
                            <p>
                              
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6></h6>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill"></a>
                            <hr>
                            <span class="badge badge"> </span>
                            <span class="badge badge"></span>
                            <span class="badge badge"></span>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span></h5>
                             <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong></strong>  <strong></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong></strong>  <strong></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong></strong>  <strong></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong></strong>  <strong></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong></strong>  <strong></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>

                


                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
                    <?php 
                
                $stmtf = $admin->ret("SELECT * FROM `report` INNER JOIN `user` ON user.u_id = report.u_id INNER JOIN `sp` ON sp.s_id = report.s_id WHERE `r_status`='' ");
                while($rowf = $stmtf->fetch(PDO::FETCH_ASSOC)){
                
                ?>
				   <a href="controller/rupdate.php?id=<?php echo $rowf['r_id'] ; ?>" class="close" data-dismiss="">&times;</a>
          
				    <div class="alert-icon">
					 <i class="icon-info"></i>
				    </div>

           

				    <div class="alert-message">
				      <span><strong><?php echo $rowf['u_name'] ; ?>!</strong> <?php echo $rowf['r_sub'] ; ?>.</span>
				    </div>
            <?php } ?>


                  </div>
                 
                </div>

<!-- 
                <div class="tab-pane" id="edit">
                    <form action="controller/edit.php" method="POST" enctype="multipart/form-data"> -->

                        <!-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" value="<?php echo $rowaa['a_name'] ; ?>" name="name" type="text">
                            </div>
                        </div> -->

                      
                        <!-- <input type="hidden" value="<?php echo $sid ; ?>" name="sid" > -->
                      
                        <!-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="email" value="<?php echo $rowh['a_email'] ; ?>" type="email" >
                            </div>
                        </div> -->
                        
                        <!-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="email" value="<?php echo $rowh['a_email'] ; ?>" type="email" value="mark@example.com">
                            </div>
                        </div> -->
<!-- 
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">email</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="email" value="<?php echo $rowaa['a_email'] ; ?>" type="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Contect no</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="phone" value="<?php echo $rowaa['a_phone'] ; ?>" type="tel">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="address" type="text" value="<?php echo $rowaa['a_address'] ; ?>"placeholder="Street">
                            </div>
                        </div>  -->


                       
                        <!-- <div class="form-group row"> -->
                            <!-- <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9"> -->
                                <!-- <input type="reset" class="btn btn-secondary" value="Cancel"> -->
                                <!-- <input type="submit" name="submit" class="btn btn-primary" value="Save Changes"> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </form> -->
                <!-- </div> -->
            </div>
        </div>
      </div>
      </div>
        
    </div>

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
	
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<?php include 'footer.php'; ?>
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
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
