<?php

if (!empty($_GET['id'])) {
  require "./config.php";

  $id = $_GET['id'];
  
  $sql = "DELETE FROM todo WHERE id = :id";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":id", $id);
  $sql->execute();
}

header("Location: index.php");