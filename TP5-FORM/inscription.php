<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">


<?php
include("config.php");





?>


<html>

<head>
    <title>Register Page</title>

</head>


<body>

<div class="body"></div>
<div class="grad"></div>
<div class="header">
    <div>INSCRIPTION</div>
</div>
<br>
<form action="register.php" method="POST">
    <div class="login">
        <input type="text" placeholder="Adresse Email" name="email"><br>
        <input type="text" placeholder="Nom" name="nom"><br>
        <input type="text" placeholder="Prenom" name="prenom"><br>
        <input type="password" placeholder="Mot de passe" name="pass"><br>
        <input type="submit" value="Inscription"><br>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
        <button class="btn btn-danger"><a style="color: white" href="index.php">ou connectez-vous</a></button>

    </div>
</form>



</body>
