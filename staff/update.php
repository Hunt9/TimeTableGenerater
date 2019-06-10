<?php
if(isset($_POST['updateStudentPass'])) {
	 
    $old=$_POST["oldPass"];
    $new=$_POST["newPass"];
	  $eml=$_POST["eml"];
if($old==$new)
{
    $sql = "UPDATE teacher set password = '$new' WHERE eid = '$eml'";
	echo $sql;
 $conn=mysqli_connect('localhost','root','','timetable');
    if (mysqli_query($conn, $sql)) {
    echo "<script type = 'text/javascript'>window.location.href = 'index.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Updation Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'index.php'; </script> ";
}
}
else
{
	  echo "<script type='text/javascript'>alert('Password Not Matched')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'index.php'; </script> ";
}

}
?>