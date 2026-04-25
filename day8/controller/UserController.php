<?php
namespace App\controller;
use App\Model\User;
class UserController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->getUsers();

        require "../day8/view/users.php";
    }
    public function filterUser($name)
    {
        $userModel = new User();
        $foundUser = $userModel->findUser($name);
        require "../day8/view/users.php";

    }
}
?>