<?php
    session_start();
    $_SESSION["email"] = null;
    session_destroy();
    header('location: index.php');
?>