<?php
class User
{
    public function getUsers()
    {
        return [
            ['name' => 'Rashid', 'email' => 'rashid@gmail.com'],
            ['name' => 'Ali', 'email' => 'ali@gmail.com'],
            ['name' => 'Mahek', 'email' => 'mahek@gmail.com'],
        ];
    }
    public function findUser($name){
        $users = $this->getUsers();
        foreach ($users as $user) {
            if ($user['name'] == $name) {
                return $user;
            }
        }
        return null;
    }
}
?>