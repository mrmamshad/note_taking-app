<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>

<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);
$user_data = $db->query('SELECT * FROM users')->get();
?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


        <p class="mb-6">
            <a href="/userdata?id=<?= $user_data['id'] = $_GET['id'] ?? null; ?>" class="text-blue-500 underline">go back...</a>
        </p>

        <p class="text-white font-semibold uppercase "><?= htmlspecialchars($note['title']) ?></p>

        <a href="/note/edit?id=<?= $note['id'] ?>"><button class="text-md  mt-5 text-green-500 hover:text-green-900 font-semibold ">Edit</button></a>
        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>