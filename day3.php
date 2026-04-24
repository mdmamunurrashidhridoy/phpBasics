<?php

$user = [
    'name' => 'Rashid Hridoy',
    'age' => '24',
    'city' => 'Dhaka',
    'University' => 'Daffodil International University'
];

echo $user['University'];

echo "<br><br>";

foreach ($user as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

$users = [
    [
        'name' => 'Rashid Hridoy',
        'age' => '24',
        'city' => 'Dhaka',
        'University' => 'Daffodil International University'
    ],
    [
        'name' => 'pure',
        'topic' => 'haha',
        'dude' => 'telel'
    ]
];

foreach ($users as $user) {
    echo $user['name'] . "<br>";
}

$numbers = [1, 2, 3];
array_push($numbers, 4);
echo count($numbers) . "<br>";

print_r($numbers);

//Task 1
$users_1 = [
    'name' => 'Rashid',
    'age' => 19,
    'city' => 'Dhaka'
];

echo 'My name is ' . $users_1['name'] . ", I live in " . $users_1['city'] . '<br>';

//Task 2
foreach($users_1 as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
}

//Task 3
$user_mul = [
    ['name' => 'user1', 'email' => 'user1@email.com'],
    ['name' => 'user2', 'email' => 'user2@email.com'],
    ['name' => 'Ali', 'email' => 'user3@email.com'],

];

foreach( $user_mul as $user) {
    echo $user['name'] . ' ' . $user['email']. '<br>';
}

//Task 4
foreach($user_mul as $user) {
    if ($user['name'] == 'Ali') {
        echo "Ali is Found, his email is " . $user['email'] . '<br>';
    }
}

//Task 5
echo 'total user is ' . count($user_mul);
?>