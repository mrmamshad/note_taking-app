<?php

use core\Validator;
use core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);
// dd($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email))
{
    $errors['email'] = 'please provide a valid email address';
}

if (!Validator::string($password, 7, 255))
{
    $errors['password'] = 'please provide  a valid password';
}

if (!empty($errors))
{
    return view('registration/create.view.php', [
        'errors' => $errors

    ]);
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user)
{
    header('location: /login');
    exit();
}
else
{
    $db->query('INSERT INTO users(user_name , email, password) VALUES(:user_name , :email, :password)', [
        'user_name' => $name,
        'email' => $email,
        'password' => $password
    ]);

    $_SESSION['user'] = [
        'email' => $email,
    ];
    header('location: /');
    exit();
}
