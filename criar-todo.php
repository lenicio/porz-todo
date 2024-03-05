<?php

if(!empty($_GET['atividade'])) {
  require './config.php';

  $atividade = $_GET['atividade'];

  $sql = "INSERT INTO todo (atividade) VALUES (:atividade)";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(':atividade', $atividade);
  $sql->execute();
}

header('Location: index.php');