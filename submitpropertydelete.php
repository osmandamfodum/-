<?php
include("config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM property WHERE pid = {$pid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>تم حذف العرض بنجاح</p>";
	header("Location:feature.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>لم يتم حذف العرض </p>";
	header("Location:feature.php?msg=$msg");
}
mysqli_close($con);
?>