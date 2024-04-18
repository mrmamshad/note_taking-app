<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/header.php" ?>


<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);


// dd($_GET['id']);
$user_data = $db->query('select * from notes where user_id = :id', [
    'id' => $_GET['id']
])->get();

// dd($user_data);

$imagepath = [
    "image_ssrc" => [
        "mamshad" => "https://scontent.fdac34-1.fna.fbcdn.net/v/t39.30808-6/415729614_1516447619134486_5863456610900791453_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHcVvISWryLz8xmZC_uEy-LP7AKtO4zWAw_sAq07jNYDBLGDx0WCxRr9JEy3dR07JJ7kJgqCOCEw_NulOlN9Em3&_nc_ohc=SScK2PS2q9gAb4c9LCq&_nc_zt=23&_nc_ht=scontent.fdac34-1.fna&oh=00_AfDNw3b-EDWcpAccJGvg03VjPaN0Ae3VIneW-qLItFwnDA&oe=66253274",
        "sabbir" => "https://scontent.fdac34-1.fna.fbcdn.net/v/t39.30808-6/431219782_122136589964102905_6104245445792020527_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHvrjVGw1xBFSLH7nkFoHZueuHcmIfm_mJ64dyYh-b-YoUiAQMzpIz2f4A6tVN6pv2V2Yr-jJkf-VEdkwMyfl4m&_nc_ohc=pMfam9kMAlYAb5DfBEU&_nc_zt=23&_nc_ht=scontent.fdac34-1.fna&oh=00_AfDRdDBhXBmOrQ3z2OdOUkf0dVa5N9l2ZRvbI8Va4x6iLQ&oe=66257121",
        "mahim" => "https://scontent.fdac34-1.fna.fbcdn.net/v/t39.30808-1/436495100_484264197324747_7264235365872261239_n.jpg?stp=cp6_dst-jpg_p200x200&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFBGJP5H4H42Fod4uT_v6Uhf-K80C7ckeF_4rzQLtyR4cjtODvSTHu4sRmUrhr2tZcEsSe7nFPA_kx5qkaWWJeH&_nc_ohc=Gwqf8-yz4gEAb4k01cN&_nc_ht=scontent.fdac34-1.fna&oh=00_AfD51222X6K7LBcUSnTdTo2upbza2yfw4NRDWNoSoGzlTA&oe=66256F0A",
        "utso" => "https://scontent.fdac34-1.fna.fbcdn.net/v/t39.30808-1/434743704_1098330228053725_1960608626357459472_n.jpg?stp=dst-jpg_p200x200&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFU1a_hEfn-0BghAnpI-UWv-mm16VcjAPP6abXpVyMA8-UWs5AIt5yI3kf1RJTn8almUGs5im9nYAPhukYr3yMq&_nc_ohc=HKjVdt-z78kAb7bG1PZ&_nc_ht=scontent.fdac34-1.fna&oh=00_AfAVMxZrttzWXcZq_NQkxVz34C3v6D8xaJSayqP4o8NSWw&oe=662588CE",
    ]
];


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
    <?php if ($_GET['id'] === $data['id']) {
        if ($name['mamshad']) {
            $imagepath['image_ssrc']['mamshad'];
        } elseif ($name['sabbir']) {
            $imagepath['image_ssrc']['sabbir'];
        } elseif ($name['mahim']) {
            $imagepath['image_ssrc']['mahim'];
        } elseif ($name['utso']) {
            $imagepath['image_ssrc']['utso'];
        }
    }   ?>" 
</ul> -->




?>
<div>
    <ul>

        <?php foreach ($user_data as $data) : ?>
            <li class="text-green-500  text-xl ml-10 mt-10 ">

                <div class="flex items-start gap-2.5">
                    <img class="w-8 h-8 rounded-full" src="https://scontent.fdac34-1.fna.fbcdn.net/v/t39.30808-1/434743704_1098330228053725_1960608626357459472_n.jpg?stp=dst-jpg_p200x200&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFU1a_hEfn-0BghAnpI-UWv-mm16VcjAPP6abXpVyMA8-UWs5AIt5yI3kf1RJTn8almUGs5im9nYAPhukYr3yMq&_nc_ohc=HKjVdt-z78kAb7bG1PZ&_nc_ht=scontent.fdac34-1.fna&oh=00_AfAVMxZrttzWXcZq_NQkxVz34C3v6D8xaJSayqP4o8NSWw&oe=662588CE" alt=" Jese image">
                    <div class="flex flex-col gap-1 w-full max-w-[320px]">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">User Data</span>
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                        </div>
                        <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                            <p class="text-sm font-normal text-gray-900 dark:text-white"> <?= htmlspecialchars($data['title']); ?></p>
                        </div>

                    </div>

                </div>




            </li>
        <?php endforeach; ?>

    </ul>


    <form method="post">
        <p class="mt-7  ml-16">
            <a href="/createnote" class="text-blue-600 hover:underline">Create Note</a>
        </p>
    </form>
</div>