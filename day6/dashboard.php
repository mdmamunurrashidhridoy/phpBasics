<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "Access Denied";
    exit();
}

echo "Welcome " . $_SESSION["user"];
echo file_get_contents("data.txt");
?>
<br>
<a href="logout.php">Logout</a>