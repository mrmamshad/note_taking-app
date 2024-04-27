<!-- 
    <div class="bg-[#344955]  mx-auto rounded-full w-80 mt-6 py-2 px-4 flex items-center justify-center space-x-5 shadow-xl">
        <a href="/" class="text-slate-400  from-neutral-600  font-semibold hover:text-green-500 transition duration-300">Home</a>
        <a href="/users" class="text-slate-400 from-neutral-600  font-semibold hover:text-green-500 transition duration-300">Users</a>
        <a href="/notes" class="text-slate-400 from-neutral-600  font-semibold hover:text-green-500 transition duration-300">Notes</a>
        <a href="/about" class="text-slate-400 from-neutral-600  font-semibold   hover:text-green-500 transition duration-300">About Me</a>
    </div>

 -->

<div class=" relative">
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-5  mx-auto  w-80  bg-[#344955]  rounded-full  mt-6 py-2 px-4 shadow-xl  ">
            <a href="/" class="text-slate-400 from-neutral-600 font-semibold hover:text-green-500 transition duration-300">Home</a>
            <a href="/users" class="text-slate-400 from-neutral-600 font-semibold hover:text-green-500 transition duration-300">Users</a>
            <a href="/notes" class="text-slate-400 from-neutral-600 font-semibold hover:text-green-500 transition duration-300">Notes</a>
            <a href="/about" class="text-slate-400 from-neutral-600 font-semibold hover:text-green-500 transition duration-300">About Me</a>
        </div>
        <div class="absolute  top-10 right-10 transform translate-x-1/2 -translate-y-1/2">
            <?php if ($_SESSION['user']?? false) :?>
            <img src="https://i.ibb.co/7XY2njh/IMG-20240109-WA0017.jpg" alt="Profile Picture" class="h-12 w-12 rounded-full">
            <?php else:?>
                <a href="/register"  class="text-xs text-red-500">Register</a>
            <?php endif;?>    
        </div>
    </div>
</div>