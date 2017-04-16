<?php
	include ("lock.php");
?>





	

<?php
include("connect.php");

$member_delete=$_SERVER['QUERY_STRING'];

$query4="DELETE FROM member WHERE email='$member_delete'";
$result4=mysqli_query($con,$query4);

if (!$result4)
{
	die(mysqli_error());
} 
else
{
	echo "<div id='pos'>";
	echo "Selected Member details deleted.";
	echo "</div>";
}
mysqli_close($con);
?>

</body>
</html>

