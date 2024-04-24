<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>

<?php

use core\Validator;
use core\Database;

require base_path('core/Validator.php');
$config = require base_path('config.php');

$db = new Database($config['database']);



?>


<form method="post" action="">

    <section class=" py-8 lg:py-16 antialiased">
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">write Your Note</h2>
            </div>
            <form class="mb-6">
                <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <label for="body" class="sr-only">Your comment</label>
                    <textarea id="body" rows="6" name="body" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" placeholder="Write a Note..."></textarea>
                </div>
                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-[#1d4ed8] rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-[#1e40af] hover:bg-[#1d4ed8]">
                    Post Note
                </button>
            </form>

        </div>
    </section>
</form>





<?php require base_path('views/partials/footer.php') ?>