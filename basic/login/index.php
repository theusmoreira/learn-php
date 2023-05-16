<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Teste com PHP</h1>
  <h2>
    <a href="protect.php">
      <img src="https://img.shields.io/badge/protect.php-protect.php-blue" alt="protect.php">
    </a>
  </h2>
  <?php
    session_start();
    if(isset($_SESSION["usuario"])) {
      ?>
      <a href="logout.php">Logout</a>
      <?php
      }
    ?>
</body>
</html>