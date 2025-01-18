<?php

use Config\Database1;
use Api\TaskApi1\Task1;
use Api\TaskApi1\Router1;

require_once "./vendor/autoload.php";
header("Content-Type: application/json");

// Database Initialization
$db = new Database1();
$conn = $db->getConnection();
$task = new Task1($conn);
$router = new Router1($task); 


// Handle Request
$router->handleRequest();

$conn->close();
