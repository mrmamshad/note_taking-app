<?php

use core\Validator;

use core\Database;

require base_path('core/Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'You cant fulfill the requirenment';
}


if (!empty($errors)) {
    return view("notes/createnote.view.php", [
        'heading' => 'createNote',
    ]);
}

$db->query('INSERT INTO notes(title, user_id) VALUES(:title, :user_id)', [
    ':title' => $_POST['body'],
    'user_id' => 1
]);
header('location: /');
exit();
