<?php


use core\Validator;
use core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

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

$user = $db->query('select * from users where email = :email  and password = :password ', [
    'email' => $email,
    'password' => $password
])->find();

// dd($user);



if ($user)
{
    if (password_verify($password, $user['Password']))
    {
        login([
            'email' => $email,
            'password' => $password,
        ]);

        header('location: / ');
        exit();
    }

}



return view('session/create.view.php', [
    'errors' => [
        'email' => 'no account  found for the email and password .'
    ]
]);
