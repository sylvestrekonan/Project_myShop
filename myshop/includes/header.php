<?php 
?>
<nav class="flex p-2 justify-between items-center border-b border-gray-300 flex-wrap">
    <div class="flex items-center">
        <h2 class="font-bold text-2xl">sky-shop</h2>
    </div>

    <div class="relative flex items-center hidden md:inline-flex gap-2">
        <form action="" method="get">
            <input type="text" name="q" placeholder="anything..." class="border border-gray-200 rounded-md py-1 px-2"/>
            <button type="submit" class="border px-2 py-1 rounded-md">search</button>
        </form>
    </div>

    <div class="flex items-center gap-2">
        <a href="signup.php" class="border px-2 py-1 rounded-md">Signup</a>
        <a href="signin.php" class="border px-2 py-1 rounded-md">Signin</a>
    </div>
</nav>
