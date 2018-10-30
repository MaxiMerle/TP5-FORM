<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">



<html>

<head>
    <title>Login Page</title>

</head>




<body>

<div class="body"></div>
<div class="grad"></div>
<div class="header">
    <div>CONNEXION</div>
</div>
<br>
<form action="login.php" method="POST">
    <div class="login">
        <input type="text" placeholder="Adresse Email" name="email"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <input type="submit" value="Connexion"><br>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
        <button class="btn btn-danger"><a style="color: white" href="inscription.php">ou inscrivez-vous</a></button>

    </div>
</form>



</body>
