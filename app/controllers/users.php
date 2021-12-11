<?php 
include "app/database/db.php";

$isSubmit = false;
$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $pass =  trim($_POST['pass-second']);

    if($login === '' || $email === '' || $pass === '') {
      $errMsg = "Не все поля заполнены!";
    } else {
      $post = [
        'admin' => $admin, 
        'username' => $login, 
        'email' => $email, 
        'password' => $pass
      ];

      // $id = insert('users', $post);
      $isSubmit = true;
      tt($post);
    }

    


    // $last_row = selectOne('users', ['id' => $id]);
} else {
  echo 'GET';
}

