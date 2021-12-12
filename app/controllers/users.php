<?php 
include "app/database/db.php";

$isSubmit = false;
$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === '') {
      $errMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($login, 'UTF8') <2){
      $errMsg = "Логин слишком короткий";
    } elseif ($passF !== $passS){
      $errMsg = "Пароли не совпадют";
    }
    else {
      $pass = password_hash($passF, PASSWORD_DEFAULT);
      $post = [
        'admin' => $admin, 
        'username' => $login, 
        'email' => $email, 
        'password' => $pass
      ];

      // $id = insert('users', $post);
      tt($post);
    }

  

    // $last_row = selectOne('users', ['id' => $id]);
} else {
  echo 'GET';
  $login = '';
  $email = '';
}

