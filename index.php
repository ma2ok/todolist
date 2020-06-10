<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Todos</title>
</head>
<body>
  <div id="container">
    <h1>Todos</h1>
    <form action="">
      <input type="text" placeholder="What needs to be done?">
    </form>
    <ul>
      <li>
        <input type="checkbox">
        <span>Do something</span>
        <div>x</div>
      </li>
      <li>
        <input type="checkbox" checked>
        <span>Do something again!</span>
        <div>x</div>
      </li>
    </ul>
  </div>
</body>
</html>