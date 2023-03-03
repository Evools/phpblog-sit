<?php

$web_title = "Регистрация";

require_once "./include/config.php";
require_once "./include/function.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = $_POST;

if (isset($data['register'])) {

  $errMsg = [];

  $email = clear_field($data['email']);
  $password = clear_field($data['password']);
  $password_hash = password_hash($password, PASSWORD_DEFAULT);
  $confirm = clear_field($data['confirm']);

  $errMsg = [];
  if (empty($email)) {
    $errMsg[] = "Поле E-Mail не должен быть пустым";
  }
  if (empty($password)) {
    $errMsg[] = "Пароль не должен быть пустым";
  }
  if (empty($confirm)) {
    $errMsg[] = "Поле не должно быть пустым";
  }
  if ($password !== $confirm) {
    $errMsg[] = "Пароли не совпадают";
  }

  if (!$errMsg) {

    $requery = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password_hash')";
    $result = mysqli_query($connect, $requery);

    if (!$result) {
      echo "Error";
    } else {
      header('location: /login');
    }
  }
}

?>


<?php include "./layout/header.php"; ?>

<section class="bg-gray-50">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
      <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
      PHP Blog
    </a>
    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
          Создание аккаунта
        </h1>
        <form class="space-y-4 md:space-y-6" action="register" method="POST">
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Ваш E-Mail</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Пароль</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
          </div>
          <div>
            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Повторить пароль</label>
            <input type="password" name="confirm" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
          </div>
          <!-- <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
            </div>
            <div class="ml-3 text-sm">
              <label for="terms" class="font-light text-gray-500">Я принимаю <a class="font-medium text-primary-600 hover:underline" href="#">Условия и положения</a></label>
            </div>
          </div> -->
          <button type="submit" name="register" class="w-full text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Завести аккаунт
          </button>
          <p class="text-sm font-light text-gray-500">
            У вас уже есть аккаунт? <a href="login" class="font-medium text-primary-600 hover:underline">Войти</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>