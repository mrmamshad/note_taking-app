<?php

use Core\App;
use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("showdata.view.php", [
    'heading' => 'Note',
    'note' => $note
]);

// dd($_SERVER);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('SELECT * FROM notes WHERE id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query('delete FROM notes WHERE id  = :id', [
        'id' => $_GET['id']
    ]);

    header('location:  /');
    exit();
}
