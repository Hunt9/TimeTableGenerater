<?php 
session_start();
require('../config.php');
extract($_POST);
if(isset($save))
{
	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fields first</font>";
	}
	else
	{
	//check login crenditial
	$que=mysqli_query($con,"select * from teacher where eid='".$e."' and password='".$p."'");
	$r=mysqli_num_rows($que);
	$res=mysqli_fetch_array($que);	
	if($r)
		{
		$_SESSION['name']=$res['name'];
		$_SESSION['teacher_id']=$res['teacher_id'];
		echo "<script>window.location='dashboard'</script>";
		}
		else
		{
			$err="<font color='red'>Invalid login details</font>";
			
			}
	}
	
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Time Table Generator</title>
    
    <style>
	a{margin-left:15px;text-decoration:none; font-size:20px}
	a:hover{background:#FF0000;color:#FFFFFF;}
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > 
	img { margin:auto;}
</style>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <![endif]-->

</head>
    <body>
    
      <!-- /.navbar -->
    
   
      <!-- /.slider -->

<header>
        <div class="header-content">
            <div class="header-content-inner">
            <div class="row" align="center">
<div class="col-md-5" align="center">
               <form class="form-signin" method="POST">
	    <h1 class="form-signin-heading"><font color="#337ab7" size="+6">Staff Login</font></h2>
         <h3><?php echo $err; ?></h3>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus 
        name="e" value="<?php echo @$e;?>"/>
        
        <br/><br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required 
        name="p" value="<?php echo @$p;?>"/>
        <div class="checkbox">
         
        </div><br/>
        <input type="submit" value="Login " name="save" style="background-color:#09F"/>
		<p class="mb-4"> <a href="#" data-toggle="modal" data-target="#insertModal">
                 Forget Password? 
                </a>
       <h1 style="padding-top:20px"><a href="../index.php"><font color="#0066CC" size="+4">Home</font></a></h1> 
		
      </form>
            </div>
        </div>
    </header>

<!--container-->

 <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <div class="container">

    <div class="container">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
  
                <h1 class="h4 text-gray-900 mb-4"> </h1>
              </div>
              <!--<form class="user" method="POST" action="">-->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
			<form class="main" method="POST" action="update.php">
                    <input type="text" class="form-control form-control-user" id="eml"  name="eml" placeholder="Email Address">
					</br>
					  <input type="password" class="form-control form-control-user" id="oldPass"  name="oldPass" placeholder="New Password">
											</br>
<input type="password" class="form-control form-control-user" id="newPass"  name="newPass" placeholder="Re-type Password">	
	</br>
          <input class="btn btn-secondary"  type="submit" id="updateStudentPass" name="updateStudentPass" value="Change Password" >

											

					 

                  </div>
				  
                 
                </div>
                
               
               
      
          
       

          
            </div>



      
      </div>


	 
  </div>
    </div>





                            
               
      
          
           

      </div>


   
  </div>
    </div>
	</form>

  
<footer class="container-fluid">
  <p align="center">Developed By: FYP</p>
</footer>
    
      <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    
    <script src="js/owl.carousel.js"></script>
                         

    </body>
</html>