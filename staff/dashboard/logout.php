<?php 
session_start();
unset($_SESSION['teacher_id']);
unset($_SESSION['name']);
session_destroy();
echo "<script type = 'text/javascript'>window.location.href = '../index.php'; </script> ";

?>