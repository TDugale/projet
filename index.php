<!DOCTYPE html>
<html>
<head>
	<title>Titre</title>
</head>
<body>

	<!-- Menu de navigation -->

	<?php include 'menunavigation.php'; ?>
	<form method="post">
		<input type="password" name="password" id="password" placeholder="Entre ton password" required>
		<input type="submit" name="formsend" id="formsend">
	</form>			

	<?php 

	if(isset($_POST['formsend'])){

		extract($_POST);

		if (!empty($password)){
		$options = ['cost' => 12,];
		$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
		
		include 'database.php';
		global $db;	

		$q = $db->prepare("INSERT INTO users(pseudo,email,password) VALUES(:pseudo, :email, :password");	
		$q->execute(['pseudo' => 'Playzolezozo', 'email' => 'implayzogaminxqg@aol.com', 'password' => $hashpass ]);
			}
		}

	?>

</body>
</html>