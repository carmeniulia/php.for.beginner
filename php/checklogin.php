<?php
// Startar upp sessionen
session_start();

// Användare och lösenord för sidan
$user = "kund@cinemacity.se";
$pass = "pass123";

// Hämtar användare och lösenord från formuläret
$checkUser = $_POST['txtUser'];
$checkPass = $_POST['txtPassword'];

// Kontrollerar sessionen
if($checkUser == $user && $checkPass == $pass){
	$_SESSION['status'] = "ok";
    header("Location: labb1.php");
	exit;
} else{
    header("Location: index.php?invalid_login");
	exit;
}
?>
