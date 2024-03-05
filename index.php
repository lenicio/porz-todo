<?php
require "./config.php";

$sql = "SELECT * FROM todo";
$sql = $pdo->prepare($sql);
$sql->execute();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="stylesheet" href="./styles/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Todo List</title>
</head>

<body>
  <main>
    <h1>Todo List</h1>
    <form method="get" action="./criar-todo.php">
      <input type="text" name="atividade" placeholder="Insira uma atividade...">
      <input type="submit" value="Adicionar">
    </form>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Atividades</th>
          <th>Opções</th>
        </tr>
      </thead>

      <tbody>

        <?php foreach ($dados as $item): ?>
          <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['atividade'] ?></td>
            <td>
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-trash"></i>
            </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </main>
</body>

</html>