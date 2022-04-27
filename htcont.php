<?php  
$room =$_POST['room'];  
include 'db_connect.php';

$sql = "SELECT msg ,stime , ip FROM inputs WHERE room = '$room'";

$res = "";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$res = $res . '<div class="container-class">';
		$res = $res . $row['ip'];
		$res = $res . "<br> says <br>" . $row['msg'];
		$res = $res . '<div class="time text-muted small text-nowrap mt-2"> <br><br>'. $row["stime"] . '</div></div></div></div>';
	}
}
echo $res;


?>