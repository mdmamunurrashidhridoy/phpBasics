<?php
session_start();

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === "admin@gmail.com" && $password === "1234") {
        $_SESSION["user"] = $email;
        file_put_contents("data.txt", $email . "\n" , FILE_APPEND);
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials";
    }
}
?>