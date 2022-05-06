<?php
include('admin/dbcon.php');
$id = $_POST['id'];
mysqli_query($conn,"delete from files where file_id = '$id' ")or die(mysqli_error());
?>
