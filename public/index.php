<?php


session_start();

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'core/functions.php';

spl_autoload_register(function ($class) {
    // Core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

$router = new core\Router;

$route = require base_path('route.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);

// dd($_GET['id']);
