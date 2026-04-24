<?php
if (isset($users)) {
    foreach ($users as $user) {
        echo "Name: " . $user['name'] . " | Email: " . $user["email"] . "<br>";
    }
}

if (isset($foundUser)) {
    if ($foundUser) {
        echo "Name: " . $foundUser["name"] . " | Email: " . $foundUser["email"];
    } else {
        echo "User not found";
    }
}

?>