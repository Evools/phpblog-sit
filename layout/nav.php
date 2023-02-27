<?php

  $arr_link =[
    "/"  =>  "Home",
    "/about"  =>  "About",
    "/blog"  =>  "Blog",
    "/contact"  =>  "Contact",
  ];

?>

<header class="header">

  <?php foreach($arr_link as $links => $value): ?>

    <a href="<?= $links ?>"> <?= $value ?></a>

  <?php endforeach; ?>

</header>