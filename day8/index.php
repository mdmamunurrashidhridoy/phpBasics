<?php
require "controller/UserController.php";

$controller = new UserController();
$controller->index();
$controller->filterUser('Ali');
?>