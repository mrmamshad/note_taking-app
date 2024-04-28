<?php
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/users', 'controllers/users.php');

$router->get('/notes', 'controllers/notes.php');
$router->get('/note', 'controllers/showdata.php');
$router->delete('/note', 'controllers/distroyshowdata.php');

$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note', 'controllers/notes/update.php');


$router->get('/userdata', 'controllers/userdata.php')->only('auth');

$router->get('/createnote', 'controllers/notes/createnote.php');
$router->post('/createnote', 'controllers/notes/store.php');

$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php')->only('guest');


$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php')->only('guest');
$router->delete('/session', 'controllers/session/distroy.php')->only('auth');
