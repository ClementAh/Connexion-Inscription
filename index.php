<?php include "./form_login.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="form_login.php">
    <fieldset>
        <h3>Login</h3>
        <input type="text" name="login" placeholder="name">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="validation" value="login">
    </fieldset>
</form>

<br>
<br>

<form method="post" action="form_inscrption.php">
    <fieldset>
        <h3>Inscription</h3>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="lastname" placeholder="Lastname">
        <input type="email" name="mail" placeholder="Email">
        <input type="file" name="pictures">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="inscription" value="Send">
    </fieldset>
</form>
</body>
</html>