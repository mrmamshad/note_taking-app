<?php

use core\Validator;

require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<!-- <?php require base_path('views/partials/header.php') ?> -->

<form class="space-y-4 md:space-y-6" method="post">
    <div class="flex flex-col items-center -mt-5 justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <h2 class="flex items-center mb-6  text-2xl font-semibold text-gray-900 dark:text-white">

            Application Name
        </h2>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Register your identity
                </h1>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                    <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required="">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <p>
                    <?= (!empty($errors)) ? $errors['password'] : ''; ?>
                </p>

                <label for="countries" class="block mb-2  mt-5 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option>Bangladesh</option>
                    <option>India</option>
                    <option>Pakistan</option>
                    <option>Afganistan</option>

                </select>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                    </div>
                </div>
                <button type="submit" class="w-full text-white bg-blue-400 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                    Already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                </p>

            </div>
        </div>
    </div>
</form>

<!-- <?php 

// use core\Database;

// $config = require base_path('config.php');

// $db = new Database($config['database']);



// $name = $_POST['name'];
// $email =  $_POST['email'];
// $password = $_POST['password'];

// $errors = [];

// if (!Validator::email($email))
// {
    // $errors['email'] = 'please provide a valid email address';
    // echo $errors['email'];
// }


// if (!Validator::string($password, 7, 255))
// {
    // $errors['password'] = 'please provide a valid password';
    // echo $errors['password'];
// }

// if (!empty($errors))
// {
    // dd('submitted successfully');
// }

// $user_mail = $db->query('select * from users where email = :email', [
    // 'email' => $email
// ])->find();

// if ($user)
// {
    // header('location: /logind');
    // exit();
// }
// else
// {
    // $db->query('INSERT INTO users(email, password) VALUES(:name , :email, :password)', [
        // 'name' => $name,
        // 'email' => $email,
        // 'password' => $password
        // NEVER store database passwords in clear text. We'll fix this in the login form episode. :)
    // ]);
// } 

