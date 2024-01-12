<?php
if (isset($_POST['login'])) {
	
	$servername = "localhost";
	$dbname = "esiteweb";
	$username = "root";
	$password = "";
	$erreur1 = "";

	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		try {
			$pdo = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
		} catch (PDOException $exc) {
			echo $exc->getMessage();
			echo "bienn1";
			exit();
		}
		$email = $_POST['username'];
		$password = $_POST['password'];
		$sql = $pdo->prepare("SELECT * FROM utilisateur WHERE email= ?  AND mdp= ? ");
		$sql->execute(array($email, $password));
		if ($sql->rowCount() > 0) {
			header("location:paiement.php");
		       

		} else {
			$erreur1 = " votre email ou  votre mot de passe est incorrect";

		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
	}

	body {
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		flex-direction: column;
		background: rgba(108, 18, 18, 0.982);
	}

	.box {
		position: relative;
		width: 380px;
		height: 420px;
		background: rgba(108, 18, 18, 0.982);
		border-radius: 8px;
		overflow: hidden;
	}

	.box::before {
		content: '';
		z-index: 1;
		position: absolute;
		top: -50%;
		left: -50%;
		width: 380px;
		height: 420px;
		transform-origin: bottom right;
		background: linear-gradient(0deg, transparent, #f6ff00, #f6ff00);
		animation: animate 6s linear infinite;
	}

	.box::after {
		content: '';
		z-index: 1;
		position: absolute;
		top: -50%;
		left: -50%;
		width: 380px;
		height: 420px;
		transform-origin: bottom right;
		background: linear-gradient(0deg, transparent, #f6ff00, #f6ff00);
		animation: animate 6s linear infinite;
		animation-delay: -3s;
	}

	@keyframes animate {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	form {
		position: absolute;
		inset: 2px;
		background: white;
		padding: 50px 40px;
		border-radius: 8px;
		z-index: 2;
		display: flex;
		flex-direction: column;
	}

	h2 {
		color: rgba(108, 18, 18, 0.982);
		font-weight: 500;
		text-align: center;
		letter-spacing: 0.1em;
	}

	.inputBox {
		position: relative;
		width: 300px;
		margin-top: 35px;
	}

	.inputBox input {
		position: relative;
		width: 100%;
		padding: 20px 10px 10px;
		background: transparent;
		outline: none;
		box-shadow: none;
		border: none;
		color: white;
		font-size: 1em;
		letter-spacing: 0.05em;
		transition: 0.5s;
		z-index: 10;
	}

	.inputBox span {
		position: absolute;
		left: 0;
		padding: 20px 0px 10px;
		pointer-events: none;
		font-size: 1em;
		color: rgba(108, 18, 18, 0.982);
		letter-spacing: 0.05em;
		transition: 0.5s;
	}

	.inputBox input:valid~span,
	.inputBox input:focus~span {
		color: rgba(108, 18, 18, 0.982);
		transform: translateX(0px) translateY(-34px);
		font-size: 0.75em;
	}

	.inputBox i {
		position: absolute;
		left: 0;
		bottom: 0;
		width: 100%;
		height: 2px;
		background: rgba(108, 18, 18, 0.982);
		border-radius: 4px;
		overflow: hidden;
		transition: 0.5s;
		pointer-events: none;
		z-index: 9;
	}

	.inputBox input:valid~i,
	.inputBox input:focus~i {
		height: 44px;
	}

	.links {
		display: flex;
		justify-content: space-between;
	}

	.links a {
		margin: 10px 0;
		font-size: 0.75em;
		color: rgba(108, 18, 18, 0.982);
		text-decoration: beige;
	}

	.links a:hover,
	.links a:nth-child(2) {
		color: rgba(108, 18, 18, 0.982);
	}

	input[type="submit"] {
		border: none;
		outline: none;
		padding: 11px 25px;
		background: rgba(108, 18, 18, 0.982);
		cursor: pointer;
		border-radius: 4px;
		font-weight: 600;
		width: 100px;
		margin-top: 10px;
	}

	input[type="submit"]:active {
		opacity: 0.8;
	}

	.coul {
		color: red;
	}
</style>
<meta charset="UTF-8">
<title>Login</title>

</head>

<body>

	<div class="box">
		<form autocomplete="off" method="post">
			<h2>Login</h2>
			<div class="inputBox">
				<input type="email" required="required" name="username">
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Mot de passe</span>
				<i></i>
			</div>
			<div class="links">
				<a href="forget.html">Mot de passe oublié</a>
				<a href="inscription.html">S'inscire</a>
				
				</div>
				
			
			<a href="paiement.php"><input type="submit" value="Login" name="login"></a> 
		</form>
	</div>
</body>

</html>