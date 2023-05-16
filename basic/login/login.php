<?php
  session_start();
  $erro="";
  if(!isset($_POST["login"]) or ($_POST["login"]=="")) {
    $erro = "Login não informado";
  } else if(!isset($_POST["senha"]) or ($_POST["senha"]=="")) {
    $erro = "Senha não informada";
  } else {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if(($login=="admin") and ($senha=="123")) {
      $_SESSION["usuario"] = "Administrador";
      header("location:protect.php", true, 301);
    } else {
      $erro = "Usuário ou senha inválidos";
    }
  }
?>