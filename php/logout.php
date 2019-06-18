<?php
session_start();
session_destroy();
header("Location: ../LOGGED_Welcome.php");
?>
