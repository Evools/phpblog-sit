<?php


  $DB_HOST = "localhost";
  $DB_USER = "root";
  $DB_PASS = "root";
  $DB_NAME = "phpblogsit";

  $connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

  if(!$connect){
    die("Code error: " . mysqli_connect_errno() . " MYSQL Error! " . mysqli_connect_error());
    exit();
  }