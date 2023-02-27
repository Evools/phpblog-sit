<?php

  $web_title = "Обратная связь";

?>


<?php include "./layout/header.php"; ?>
<?php include "./layout/nav.php"; ?>

<section class="max-w-6xl p-6 mx-auto bg-white rounded-md shadow-md mt-[100px]">
    <h2 class="text-lg font-semibold text-gray-700 capitalize">Account settings</h2>

    <form class="">
        <div class="grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div class="mb-5">
                <label class="text-gray-700" for="username">ФИО</label>
                <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
            </div>
            <div class="mb-5">
                <label class="text-gray-700" for="username">E-mail</label>
                <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700" for="username">Причина обращения</label>
                <textarea name="" id="" cols="30" rows="10" class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"></textarea>
            </div>
           

           
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-900 rounded-xl hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>


<?php include "./layout/footer.php"; ?>