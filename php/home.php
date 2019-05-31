
<?php
session_start();
if (!isset($_SESSION["name"])) 
{
    header("location: ../login.php");
}
echo "Hello " . $_SESSION['name'];
?>

<button class="logout" onClick="window.location = 'logout.php'">Logout</button>