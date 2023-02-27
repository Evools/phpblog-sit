<?php

$arr_link = [
  "/"  =>  "Главная",
  "/about"  =>  "О нас",
  "/news"  =>  "Новости",
  "/contact"  =>  "Контакты",
];

?>

<div class="bg-sla bg-slate-900 text-white py-4 px-2">
  <header class="m-auto max-w-7xl flex items-center justify-between w-full">
    <a href="/" class="text-lg font-bold">PHP-Blog</a>

    <nav class="flex items-center gap-2 ml-auto">
      <?php foreach ($arr_link as $links => $value) : ?>

        <a href="<?= $links ?>" class="px-4 py-2 bg-transparent rounded-lg transition-all hover:bg-slate-800"> <?= $value ?></a>

      <?php endforeach; ?>
      <a href="#" class="px-4 py-2 transition-all bg-indigo-500 hover:bg-indigo-400 rounded-lg">Войти</a>
      
    </nav>

  </header>
</div>