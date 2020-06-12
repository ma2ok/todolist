<?php

session_start();

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/Todo.php');

// get todos
$todoApp = new \MyApp\Todo();
$todos = $todoApp->getAll();

// var_dump($todos);
// exit;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Todoリスト</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <h1>Todoリスト</h1>
    <form action="" id="new_todo_form">
    <div id="form">
      <ul>
    <li><input type= "text" id="new_todo"></li>
    <li><input type= "submit" value= "投稿"></li>
  </ul>
    </div>
    </form>
    <ul id="todos">
    <?php foreach ($todos as $todo) : ?>
      <li id="todo_<?= h($todo->id); ?>" data-id="<?= h($todo->id); ?>">
        <span class="todo_title <?php if ($todo->state === '1') { echo 'done'; } ?>"><?= h($todo->title); ?></span>
        <input class="delete_todo" type= "submit" value= "削除">
      </li>
      <?php endforeach; ?>
      <li id="todo_template" data-id="">
        <span class="todo_title"></span>
        <div class="delete_todo">x</div>
      </li>
    </ul>
  </div>
  <input type="hidden" id="token" value="<?= h($_SESSION['token']); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="todo.js"></script>
</body>
</html>