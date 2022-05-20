 <?php
 include('dbcon.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query($conn,"update teacher set password = '$new_password' where teacher_id = '$session_id'")or die(mysqli_error());
 ?>