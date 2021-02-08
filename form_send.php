<!DOCTYPE HTML>
<html lang="sv">
<head>
	<title>Bio biljetter</title>
    <meta charset="utf-8" />
</head>

<body>
<?php 
// Hämtar värden från formuläret
$malsman = $_POST['malsman'];
$film = $_POST['film'];
$age = $_POST['age'];
$antalb = $_POST['antalb'];
$comment = $_POST['comment'];
$mail = $_POST['mail'];


echo $malsman . "<br><br>";
echo $film . "<br><br>";
echo $age . "<br><br>";
echo $antalb . "<br><br>";
echo $mail . "<br><br>";
echo $comment . "<br><br>";


if ( $age > 6 && $age < 11  && $malsman == "Ja" && ($film == "Frozen" || $film == "Godzilla"))  {
    echo "Ok";

} elseif  ($age > 10  && $age < 15 && $malsman == "Ja"  && ($film == "Inlove" || $film == "Godzilla" || $film == "Frozen"))  {
    echo "Ok";
} 
elseif  ($age > 15)  {
    echo "Ok";
}

else {
    echo "Fel";
}

?>
</body>
</html>
