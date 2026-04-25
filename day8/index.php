<?php
require "vendor/autoload.php";
use App\controller\UserController;
use App\Services\EmailService;

$controller = new UserController();
$controller->index();
$controller->filterUser('Ali');
$email = new EmailService();
echo "<br>";
echo $email->send();
?>