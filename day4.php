<?php

// Task 1
function print_name($name) {
    echo 'Hello '. $name;
}

print_name('hridoy');

// Task 2
function add($num1, $num2) {
    return $num1 + $num2;
}

//Task 3
function evenOrOdd($num1, $num2) {
    if($num1 % 2 == 0) {
        return 'Even';
    } else {
        return 'Odd';
    }
}

//Task 4
function printUserName($users) {
    foreach($users as $user) {
        echo "Username is " . $users['name'];
    }
}

//Task 5
function search($users, $name) {
    foreach($users as $user) {
        if ($user['name'] === $name ) {
            return $user['email'];
        }
    }
}
?>