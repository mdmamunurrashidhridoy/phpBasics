<?php

class User
{
    public $name;
    public $email;
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function greet()
    {
        return "Hello, " . $this->name;
    }
    public function showInfo()
    {
        return "Name: " . $this->name . " | " . "Email: " . $this->email . "<br>";
    }
}
class Admin extends User
{
    public function role()
    {
        return "I am Admin.";
    }
}

$users = [
    new User("Rashid", "rashid@gmail.com"),
    new User("Ali", "ali@gmail.com"),
    new User("John", "john@gmail.com")
];

foreach ($users as $user) {
    echo $user->showInfo() . "<br>";
}

?>