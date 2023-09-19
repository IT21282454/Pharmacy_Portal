<?php
	$pid = $_POST['pid'];
	$p_name = $_POST['p_name'];
    $qty = $_POST['qty'];
    $unit_price = $_POST['unit_price'];

	// Database connection
	new mysqli('localhost','root','',$conn = 'online_pharmacy');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into cart(pid, p_name, qty, unit_price) values(?, ?, ?, ?)");
		$stmt->bind_param("isii", $pid, $p_name, $qty, $unit_price);
		$execval = $stmt->execute();
		echo $execval;
		echo "Cart successful!";
		$stmt->close();
		$conn->close();
	}
?>
