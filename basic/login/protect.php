<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location:form_login.php", true, 301);
} else {
?>
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
    Hello <?php echo($_SESSION["usuario"]); ?>
  </h1>
  <h2>
    <a href="index.php">
      <img src="https://img.shields.io/badge/index.php-index.php-blue" alt="index.php">
    </a>
  </h2>
</body>
</html>
<?php
}
?>