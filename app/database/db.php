<?php

require('connect.php');

function tt($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}



//Проверка выполнения запросы к БД
function dbCheckError($query){
  $errInfo = $query->errorInfo();
  if ($errInfo[0] !== PDO::ERR_NONE) {
    echo $errInfo[2];
    exit();
  }
  return true;
}

// Запрос на получения данных с одньй таблице
function selectAll($table, $params = [])
{

  $sql = "SELECT * FROM $table";
  global $pdo;
  if(!empty($params)){
    $i = 0;
    foreach ($params as $key => $value){
      if (!is_numeric($value)){
        $value = "'".$value."'";
      }
      if ($i === 0){
        $sql = $sql . " WHERE $key = $value";
      }else {
        $sql = $sql . " AND $key = $value";
      }
      $i++;
    }
  }

  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);

  return $query->fetchAll();
}

// Запрос на получения одной строки c выбранной таблицы
function selectOne($table, $params = [])
{
  $sql = "SELECT * FROM $table";
  global $pdo;
  if(!empty($params)){
    $i = 0;
    foreach ($params as $key => $value){
      if (!is_numeric($value)){
        $value = "'".$value."'";
      }
      if ($i === 0){
        $sql = $sql . " WHERE $key = $value";
      }else {
        $sql = $sql . " AND $key = $value";
      }
      $i++;
    }
  }
  // $sql = $sql . " LIMIT 1";
  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);
  return $query->fetch();
}

$params = [
  'admin' => 1,
  'username' => 'some'
];

// tt(selectAll('users' , $params));
// tt(selectOne('users'));

function insert($table, $params) {
  global $pdo;

  $i = 0;
  $coll = '';
  $mask = '';
  foreach ($params as $key => $value){
    if ($i === 0) {
      $coll = $coll . "$key";
      $mask = $mask ."'" . "$value". "'";
    }else {
      $coll = $coll . ", $key";
      $mask = $mask .", '" . "$value". "'";
    }
    $i++;
  }

  $sql = "INSERT INTO $table ($coll) VALUES ($mask);";

  // tt($sql);
  // exit();

  $query = $pdo->prepare($sql);
  $query->execute($params);
  dbCheckError($query);
}

$arrData = [
  'admin' => '1',
  'username' => 'Maskimka',
  'email' => 'test22@re.ru',
  'password' => '1212122',
  'created' => '2021-01-01 00:00:01'
];

insert('users', $arrData);