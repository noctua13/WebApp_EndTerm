<?php
session_start();
session_destroy();
header("Location: ../TestWebProj.php");
?>