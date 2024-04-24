<?php

use core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);



$currentUserId = 1;

dd($_POST);

$note = $db->query('select * from notes where id = :id', [
    "id" => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
    'id'=> $_POST['id']
]);

header('location: /userdata');
exit();
