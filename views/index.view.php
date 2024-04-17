<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>


<?php require "partials/header.php" ?>

<!-- <div class="shadow-md rounded-lg p-5 w-3/5  h-72 border border-black mt-10 mx-auto text-center">
    <h2 class="text-slate-400 font-bold text-xl from-neutral-600 p-5">About our application</h2>
    <p class="text-slate-200 mt-4">Assalamu Alaikum User, here you can join us and you can store
        your notes in the database. If you are new here, then you can register;
        if you are already registered, then log in.</p>
</div> -->

<div class="mx-auto mt-10  relative overflow-hidden rounded-xl bg-[#3d3c3d] w-4/5 h-64">
    <div class="absolute  items-start  pl-14 pt-8  justify-start text-white z-[1] opacity-90 rounded-xl inset-0.5 bg-[#323132]">
        <h2 class="text-xl font-bold "> About our application</h2>
        <p class="text-slate-200 mt-16">
            Assalamu Alaikum Users, here you can join us and you can store
            your notes in the database. If you are new here, then you can register;
            if you are already registered, then log in.
        </p>
    </div>


    <div class="absolute w-4/5 h-48 bg-white blur-[50px] -left-1/4 -top-1/2"></div>

</div>

<div class="absolute sm:bottom-40 sm:right-36  bottom-5 right-5 flex  gap-4">
    <a href="/register" class="button relative inline-flex items-center justify-center space-x-2 bg-transparent text-white w-40 h-10 border-2 border-blue-500 rounded-lg focus:outline-none transition duration-300 ease-in-out transform hover:bg-blue-500 hover:border-blue-600 hover:translate-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
        </svg>
        <span class="text">Registration</span>
    </a>

    <a href="/login" class="button relative inline-flex items-center justify-center space-x-2 bg-transparent text-white w-32 h-10 border-2 border-blue-500 rounded-lg focus:outline-none transition duration-300 ease-in-out transform hover:bg-blue-500 hover:border-blue-600 hover:translate-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
        </svg>
        <span class="text">Log in</span>
    </a>


</div>




<?php require "partials/footer.php" ?>