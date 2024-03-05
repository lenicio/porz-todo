<?php
require './config.php';

$sql = "CREATE TABLE IF NOT EXISTS todo (
  id INTEGER PRIMARY KEY,
  atividade TEXT NOT NULL
)";
$sql = $pdo->prepare($sql);
$sql->execute();


$sql = "INSERT INTO todo (atividade) VALUES
('Estudar PHP'),
('Estudar HTML / CSS'),
('Praticar Banco de Dados'),
('Ler conteúdo sobre qualidade de software')";
$sql = $pdo->prepare($sql);
$sql->execute();
