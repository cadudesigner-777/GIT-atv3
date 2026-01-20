<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de avalição de Funcionarios</title>
</head>
<body>
    <form action="calcula.php" method="post" class="form-nome">
        <div class="container">
            
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder= "Didite seu nome" >
        <br>
        <label for="tarefas">Tarefas entregue:</label><br>
        <input type="number" id="tarefas" name="tarefas" placeholder= "Tarefas" >
        <br>
        <label for="atrasos">Atrasos:</label><br>
        <input type="number" id="atrasos" name="atrasos" placeholder= "Atrasos">
        <br>
        <label for="setor">Setor</label><br>
        <input type="text" id="setor" name="setor" placeholder= "Seu setor">
        <br>

        </div>

        <button type="submit">resultado</button>

    </form>
</body>
</html>
