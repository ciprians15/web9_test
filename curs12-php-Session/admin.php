<?php
session_start();

if(!isset($_SESSION['isLogged']) && $_SESSION['isLogged'] !== TRUE ) {
    header("Location: login.php");    
}

// code for admin page
?>

Welcome <?php echo $_SESSION["email"];?>