<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./style.css">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="" method="post">
		<h2>Register</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" name="user_name" placeholder="User Name"><br>

		<label>E-mail</label>
		<input type="email" name="email" placeholder="E-mail"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit" class="submit" onclick="submit()">register</button>
</body>

</html>







<?php
include "db_conn.php";

$queryUserName = isset($_POST['user_name']) ? $_POST['user_name'] : null;
$queryUserEmail = isset($_POST['email']) ? $_POST['email'] : null;
$queryUserPassword = isset($_POST['password']) ? $_POST['password'] : null;

// Formuleer query
if (isset($_POST)) {
	$sql = "INSERT INTO `users` (user_name, email, password) VALUES ('{$queryUserName}', '{$queryUserEmail}','{$queryUserPassword}')";


	// Poging uitvoeren query
	if ($conn->query($sql) === TRUE) {
		// Uitvoeren query gelukt
		echo "<script>alert(`account toegevoegd 'users'.`)</script>";
		header("Location:index.php");
	} else {
		// Uitvoeren query mislukt
		echo "<script>alert(`Error: " . $sql . "<br>" . $conn->error . "`)</script>";
	}
  }


// Afsluiten verbinding
$conn->close();
// exit();

?>