<?php
if(isset($_POST['updateStudentPass'])) {
	 
    $old=$_POST["oldPass"];
    $new=$_POST["newPass"];
	  $eml=$_POST["newPass"];

    $sql = "UPDATE student set password = '$new' WHERE eid = $eml";
 $conn=mysqli_connect('localhost','root','','timetable');
    if (mysqli_query($conn, $sql)) {
     echo "<script type = 'text/javascript'>window.location.href = 'Uni.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Updation Failed! (Server Error)')</script>";
     //echo "<script type = 'text/javascript'>window.location.href = 'Uni.php'; </script> ";
}

}
?>