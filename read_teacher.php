<?php
include('admin/dbcon.php');
include('session.php');
if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	mysqli_query($conn,"insert into notification_read_teacher (teacher_id,student_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysqli_error());	
}
?>
<script>
window.location = 'notification_teacher.php';
</script>
<?php
}
?>