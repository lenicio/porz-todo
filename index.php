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
    <form>
      <input type="text" name="atividade" id="atividade" placeholder="Insira uma atividade...">
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
        <tr>
          <td>1</td>
          <td>Estudar PHP</td>
          <td>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Estudar HTML / CSS</td>
          <td>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Praticar Banco de Dados</td>
          <td>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </td>
        </tr>

        <tr>
          <td>4</td>
          <td>Ler conteúdo sobre qualidade</td>
          <td>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </td>
        </tr>
      </tbody>
    </table>
  </main>
</body>

</html>