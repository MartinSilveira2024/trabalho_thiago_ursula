<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD JS</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<?php include_once "header.php" ?>
    <main class="container">
    <h1> CRUD </h1>
    <form onsubmit="return salvarDocumento(event);">
        <label>ID: <input type="number" name="id_doc"></label><br>
        <label>Nome: <input type="text" name="nome"></label><br>
        <label>Data Emissão: <input type="text" name="data"></label><br>
        <label>Remetente: <input type="text" name="remet"></label><br>
        <input type="submit" value="Salvar Usuário">
    </form>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Remetente</th>
                <th colspan="2">Opções</th>
            </tr>
        </thead>
        <tbody id="usuarios"></tbody>
    </table>

    <script src="script.js"></script>
</body>

  </main>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>