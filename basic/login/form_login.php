<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    Login
  </h1>
  <?php
    if (isset($_GET["error"]))
      echo("<h2 style='color:red;'>{$_GET["error"]}</h2>");
  ?>
  <form action="login.php" method="post">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="Login">
</body>
</html>