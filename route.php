<?php
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/users', 'controllers/users.php');

$router->get('/notes', 'controllers/notes.php');
$router->get('/note', 'controllers/showdata.php');

$router->get('/userdata', 'controllers/userdata.php');
$router->delete('/note', 'controllers/userdata_distroy.php');
$router->get('/createnote', 'controllers/notes/createnote.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');
$router->get('/login', 'controllers/login.php');
