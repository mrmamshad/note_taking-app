<?php

use core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);



$currentUserId = 1;

// dd($_POST);

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete FROM notes WHERE id  = :id', [
    'id' => $_GET['id']
]);

header('location:  /');
exit();