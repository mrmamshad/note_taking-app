<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>


<?php require "partials/header.php" ?>


<!-- <section class=" m-10">
    <div class="relative">
        <div class="relative flex justify-start">
            <span class="pr-3 text-lg font-medium text-neutral-600 bg-white"> All Issues </span>
        </div>
    </div>
    <div class="space-y-8 lg:divide-y lg:divide-gray-100">
        <div class="pt-8 sm:flex lg:items-end group">
            <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                <img class="w-full rounded-md h-32 lg:w-32 object-cover" src="profile.jpg" alt="text">
            </div>
            <div>
                <span class="text-sm text-gray-500">August 20.20.21</span>
                <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./blog-post.html" class="text-xl text-gray-800 group-hover:text-gray-500 lg:text-2xl">12 Graphic Design Skills You Need To Get Hired (&amp; How to Develop Them) </a>
                </p>
                <p class="mt-2 text-lg text-gray-500">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
        </div>
        <div class="pt-8 sm:flex lg:items-end group">
            <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                <img class="w-full rounded-md h-32 lg:w-32 object-cover" src="/assets/images/placeholders/neon-3.jpg" alt="text">
            </div>
            <div>
                <span class="text-sm text-gray-500">August 20.20.21</span>
                <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./blog-post.html" class="text-xl text-gray-800 group-hover:text-gray-500 lg:text-2xl">Meet Now What? The essential new podcast for evolving designers </a>
                </p>
                <p class="mt-2 text-lg text-gray-500">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
        </div>
        <div class="pt-8 sm:flex lg:items-end group">
            <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                <img class="w-full rounded-md h-32 lg:w-32 object-cover" src="/assets/images/placeholders/neon-5.jpg" alt="text">
            </div>
            <div>
                <span class="text-sm text-gray-500">August 20.20.21</span>
                <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./blog-post.html" class="text-xl text-gray-800 group-hover:text-gray-500 lg:text-2xl">B2B Branding: 5 tips to go from boring to extraordinary </a>
                </p>
                <p class="mt-2 text-lg text-gray-500">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
        </div>
        <div class="pt-8 sm:flex lg:items-end group">
            <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                <img class="w-full rounded-md h-32 lg:w-32 object-cover" src="/assets/images/placeholders/neon-4.jpg" alt="text">
            </div>
            <div>
                <span class="text-sm text-gray-500">August 20.20.21</span>
                <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./blog-post.html" class="text-xl text-gray-800 group-hover:text-gray-500 lg:text-2xl">Building a Career in Character Design: A chat with Sarah Beth Morgan </a>
                </p>
                <p class="mt-2 text-lg text-gray-500">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
        </div>
    </div>
</section> -->

<?php

use core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);



$user_names = $db->query('SELECT * FROM users')->get();
//  dd($user_names);
?>
<!-- <ul>
    <?php foreach ($user_names as $name) : ?>
        <li>
            <?php if ($name['user_name'] === 'mamshad') : ?>
                <?= htmlspecialchars($name['user_name']); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul> -->





<div class="py-20">
    <div class="xl:container mx-auto px-6 md:px-12">
        <div class="mb-16 md:w-2/3 lg:w-1/2">
            <h2 class="mb-4 text-2xl font-bold text-gray-800 text-center dark:text-white md:text-4xl">
                All users
            </h2>
            <p class="text-gray-600 dark:text-gray-300">
                Our users are the heartbeat of this project. Each one brings a unique perspective, expertise, and passion to our platform. Together, we're not just a community; we're a catalyst for innovation, pushing boundaries and redefining what's possible. Join us and become part of this dynamic network driving change and shaping the future.
            </p>
        </div>
        <div class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <ul>
                <?php foreach ($user_names as $name) : ?>
                    <?php if ($name['user_name'] === 'mamshad') : ?>
                        <a href="/userdata?id=<?= $name['id'] ?>">
                            <div class="group relative rounded-3xl shadow-sm space-y-6 overflow-hidden">
                                <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0" src="https://i.ibb.co/7XY2njh/IMG-20240109-WA0017.jpg" alt="man" loading="lazy" width="640" height="805" />
                                <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                                    <div>
                                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white"><?= htmlspecialchars($name['user_name']); ?></h4>
                                        <span class="block text-sm text-gray-500">Programmer</span>
                                    </div>
                                    <p class="mt-8 text-gray-300 dark:text-gray-600">The magic you are looking for is in the work, you're avoiding.</p>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>

            <ul>
                <?php foreach ($user_names as $name) : ?>
                    <?php if ($name['user_name'] === 'sabbir') : ?>
                        <a href="/userdata?id=<?= $name['id'] ?>">
                            <div class="group relative rounded-3xl shadow-sm space-y-6 overflow-hidden">
                                <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0" src="https://i.ibb.co/jZ5psN4/431219782-122136589964102905-6104245445792020527-n.jpg" alt="man" loading="lazy" width="640" height="805" />
                                <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                                    <div>
                                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white"><?= htmlspecialchars($name['user_name']); ?></h4>
                                        <span class="block text-sm text-gray-500">Programmer</span>
                                    </div>
                                    <p class="mt-8 text-gray-300 dark:text-gray-600">The magic you are looking for is in the work, you're avoiding.</p>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>

            <ul>
                <?php foreach ($user_names as $name) : ?>
                    <?php if ($name['user_name'] === 'mahim') : ?>
                        <a href="/userdata?id=<?= $name['id'] ?>">
                            <div class="group relative rounded-3xl shadow-sm space-y-6 overflow-hidden">
                                <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0" src="https://i.ibb.co/B4yzBrh/436495100-484264197324747-7264235365872261239-n.jpg" alt="man" loading="lazy" width="640" height="805" />
                                <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                                    <div>
                                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white"><?= htmlspecialchars($name['user_name']); ?></h4>
                                        <span class="block text-sm text-gray-500">Programmer</span>
                                    </div>
                                    <p class="mt-8 text-gray-300 dark:text-gray-600">The magic you are looking for is in the work, you're avoiding.</p>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>

            <ul>
                <?php foreach ($user_names as $name) : ?>
                    <?php if ($name['user_name'] === 'utso') : ?>
                        <a href="/userdata?id=<?= $name['id'] ?>">
                            <div class="group relative rounded-3xl shadow-sm space-y-6 overflow-hidden">
                                <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0" src="https://i.ibb.co/8g7pVWt/439734873-1111516410068440-4865480665181784118-n.jpg" alt="man" loading="lazy" width="640" height="805" />
                                <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                                    <div>
                                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white"><?= htmlspecialchars($name['user_name']); ?></h4>
                                        <span class="block text-sm text-gray-500">Programmer</span>
                                    </div>
                                    <p class="mt-8 text-gray-300 dark:text-gray-600">The magic you are looking for is in the work, you're avoiding.</p>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>





<?php require "partials/footer.php" ?>