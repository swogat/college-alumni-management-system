<?php
session_start()
?>

<?php
$full_name=$_POST['full_name'];
$branch=$_POST['branch'];
$registration_number=$_POST['registration_number'];
$mail_id=$_POST['mail_id'];
$mobile_number=$_POST['mobile_number'];
$gender=$_POST['gender'];
$current_address=$_POST['current_address'];
$permanent_address=$_POST['permanent_address'];
$blood_group=$_POST['blood_group'];
$job_description=$_POST['job_description'];
$con=mysqli_connect("localhost","root","gugudigu2") or die(mysqli_error($con));
$db=mysqli_select_db($con,"alumini")or die(mysqli_error($con));
$str="insert into register values('$full_name','$branch','$registration_number','$mail_id','$mobile_number','$gender','$current_address','$permanent_address','$blood_group','$job_description')";
$res=mysqli_query($con,$str)or die(mysqli_error($con));
if($res>=0)
{
echo'<br><br><b>Thank you for Registration<br>';
}

?>
<html>
<body>
<br>
<a href="index.html"><b>Click here to return to the home page</b></a>
</body></html>
