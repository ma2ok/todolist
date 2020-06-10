<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title>Todo List</title>
</head>
<body>
  <div id="container">
    <h1>Todoリスト</h1>
    <form action="">
      <input type="text">
      <input type= "submit" value= "投稿">
    </form>
    <ul>
      <li>
        <input type="checkbox">
        <span>Do something</span>
        <div class="delete_todo">x</div>
      </li>
      <li>
        <input type="checkbox" checked>
        <span class="done">Do something again!</span>
        <div class="delete_todo">x</div>
      </li>
    </ul>
  </div>
</body>
</html>