<?php

if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if (empty($name)) {
        echo "Name is required<br>";
    } else {
        echo "Hello, " . $name . "<br>";
    }

    if ($age < 18) {
        echo "You are underage<br>";
    } else {
        echo "Welcome<br>";
    }
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === "admin@gmail.com" && $password === "1234") {
        echo "Login Successful";
    } else {
        echo "Invalid credentials";
    }
}


?>