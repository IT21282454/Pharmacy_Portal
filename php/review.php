<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
    $msg = $_POST['msg'];
    

	// Database connection
	$conn = new mysqli('localhost','root','','online_pharmacy_portal');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reviews(name, email, msg) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $msg);
		$execval = $stmt->execute();
		echo $execval;
		echo "Cart successful!...";
		$stmt->close();
		$conn->close();
	}
?>