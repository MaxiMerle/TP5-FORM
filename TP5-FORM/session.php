<?php
session_start();
include('config.php');

$user_check = $_SESSION['email'];
$nom_check = $_SESSION['nom'];



$ses_sql = mysqli_query($db,"SELECT email, nom FROM utilisateur WHERE email = '".$user_check."' AND nom = '".$nom_check."'" );

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['email'];

if(!isset($_SESSION['email'])){
    header("location: index.php");
}
