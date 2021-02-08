<!DOCTYPE html>
<html lang="sv">
<head>
 <title>Sessioner Index</title>
<meta charset="utf-8" />
</head>
<body>
<?php
if (isset($_GET['invalid_login'])) {
echo 'Your username and password combination is invalid <br>';
}
?>
<form action="checklogin.php" method="post">
    <h1>Logga in</h1>

    <label>Användare (e-post):</label>
    <p><input type="email" name="txtUser"></p>

    <label>Lösenord:</label>
    <p><input type="password" name="txtPassword"></p>

    <p><input type="submit" name="submit" value="Logga in"></p>
</form>
</body>
</html>