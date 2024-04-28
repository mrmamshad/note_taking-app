<?php


use core\Validator;
use core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];
if (!Validator::email($email))
{
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password))
{
    $errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors))
{
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from users where email = :email  and password = :password  and user_name = :user_name ', [
    'user_name' => $name,  
    'email' => $email,
    'password' => $password
])->find();

// dd($user);



if ($user)
{
        login([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
         $_SESSION['user'] =  $name;

        header('location: / ');
        exit();
}



return view('session/create.view.php', [
    'errors' => [
        'email' => 'no account  found for the email and password .'
    ]
]);
