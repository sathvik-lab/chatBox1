<?php


// getting the values of post parameters 
$room = $_POST['room'];

if (strlen($room)>20 or strlen($room)<2) {
	// more than 2 and less than 20
	$message = "Please choose a name between 2 to 20 charecters";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location ="http://localhost/chatbox1";';
	echo '</script>';
}

else if (!ctype_alnum($room))
{
	// all should be alph or num
	$message = "Please choose an alphanumeric room name";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location ="http://localhost/chatbox1";';
	echo '</script>';

}

else
{
	//create a data base
	include 'db_connect.php';
}

//check if room already exists

$sql = "SELECT * FROM `chatrooms` WHERE roomName = '$room'";
$result = mysqli_query($conn, $sql);
if($result)
{
	if(mysqli_num_rows($result)>0)
	{
	$message = "Please choose a different room name . This room is already claimed";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location ="http://localhost/chatbox1";';
	echo '</script>';	
	}

	else
	{
		
		
		echo '<script language="javascript">';
		echo 'window.location ="http://localhost/chatbox1/buffer.php?roomname=' . $room . '";';
		echo '</script>';
		

	}
}
else
{
	echo "Error: " . mysqli_error($conn);
}

?>