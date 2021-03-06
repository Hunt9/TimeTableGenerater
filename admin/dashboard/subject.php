<?php 
session_start();
include('config.php');

if($_SESSION['admin']=="")
{
  echo "<script type = 'text/javascript'>window.location.href = '../index.php'; </script> ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Time Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

    
     <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Time Table</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="department.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Department</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="subject.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Subject</span></a>
      </li>


      <hr class="sidebar-divider d-none d-md-block">


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="teacher.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Teacher</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="br.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Building & Rooms</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">



      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="event.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Event</span></a>
      </li>
	  
       <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="meeting.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Meetings</span></a>
      </li>


      <hr class="sidebar-divider d-none d-md-block">


      <li class="nav-item">
        <a class="nav-link" href="Uni.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Institute Name</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="img/admin.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
		     <?php
   $con=mysqli_connect('localhost','root','','timetable');


$query = "Select uname from university order by uid DESC limit 1"; 

$result = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($result)) {

    ?>
          <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?php echo $row['uname']; }?></h1>
       <!--    <h1 class="h3 mb-2 text-gray-800">Time Tables</h1> -->
          <p class="mb-4">Below are the  Subjects Click <a href="#" data-toggle="modal" data-target="#insertModal">
                  Here
                </a> to Add New, to Update Click 

                <a href="#" data-toggle="modal" data-target="#updateModal">
                  Here
                </a>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Subjects</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Subject</th>
                      <th>Semester</th>
                      <th>Department</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                      <th>Subject</th>
                      <th>Semester</th>
                      <th>Department</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     <?php
					$con=mysqli_connect('localhost','root','','timetable');

function getData()
{
    
$con=mysqli_connect('localhost','root','','timetable');


$query = "Select subject.subject_id,subject.subject_name,
department.department_name,semester.semester_name
FROM subject
INNER join department ON
subject.department_id=department.department_id
inner join semester
on subject.sem_id=semester.sem_id"; 

$result = mysqli_query($con,$query);

 // start a table tag in the HTML

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

//$rpid = $row["rp_id"];
//$pid = $row["p_id"];

    echo "<tr>
    <td>". $row["subject_id"]. "</td>
	 <td>". $row["subject_name"]. " </td>
	 <td>". $row["semester_name"]. " </td>
	 	 <td>". $row["department_name"]. " </td>
	 

   
   
    </tr>";
 //$row['index'] the index here is a field name
}

 //Close the table in HTML


mysqli_close($con);
}

    getData();


 
mysqli_close($con);

 
?>
                    
                   

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



 <!-- Insertion Modal-->
  <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Insert New Subject</h5>
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
              <form class="user" method="POST" action="insert.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
				   <select name="sem" >
				   <?php
   $con=mysqli_connect('localhost','root','','timetable');


$query = "Select * from semester"; 

$result = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($result)) {

    ?>
                    
					  <option value="<?php echo $row['sem_id'];  ?>"><?php echo $row['semester_name'];  ?></option>
  <?php } ?>
					 </select>
                  </div>
                  <div class="col-sm-6">
                    <select name="dep">
					 <?php
   $con=mysqli_connect('localhost','root','','timetable');


$query = "Select * from department"; 

$result = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($result)) {

    ?>
	  <option value="<?php echo $row['department_id'];  ?>"><?php echo $row['department_name'];  ?></option>
  <?php } ?>
					</select>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="sub" name="sub" placeholder="Enter Subject">
                </div>
                <div class="form-group row">
                  
                </div>
               
      
          
             
          
            </div>
       


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Reset</button>
         <input class="btn btn-secondary"  type="submit" id="insertSub" name="insertSub" value="Insert" >
		   </form>

        </div>
      </div>
    </div>
  </div>
    </div>





<!-- Insertion Modal-->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Subject</h5>
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
              <form class="user" method="POST" action="update.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">

           <select name="usem" >
           <?php
   $con=mysqli_connect('localhost','root','','timetable');


$query = "Select * from semester"; 

$result = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($result)) {

    ?>
                    
            <option value="<?php echo $row['sem_id'];  ?>"><?php echo $row['semester_name'];  ?></option>
  <?php } ?>
           </select>
                  </div>
                  <div class="col-sm-6">
                    <select name="udep">
           <?php
   $con=mysqli_connect('localhost','root','','timetable');


$query = "Select * from department"; 

$result = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($result)) {

    ?>
    <option value="<?php echo $row['department_id'];  ?>"><?php echo $row['department_name'];  ?></option>
  <?php } ?>
          </select>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="sid" name="sid" placeholder="Enter Subject ID">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="usub" name="usub" placeholder="Enter Subject">
                </div>
                <div class="form-group row">
                  
                </div>
               
      
          
             
          
            </div>
       


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Reset</button>
         <input class="btn btn-secondary"  type="submit" id="updateSub" name="updateSub" value="Update" >
       </form>

        </div>
      </div>
    </div>
  </div>
    </div>




      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; FYP</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
