<?php
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/users', 'controllers/users.php');

$router->get('/notes', 'controllers/notes.php');

$router->get('/userdata', 'controllers/userdata.php');
$router->get('/createnote', 'controllers/notes/createnote.php');

$router->get('/register', 'controllers/registration/create.php');
$router->get('/login', 'controllers/login.php');
