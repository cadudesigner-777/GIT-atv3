<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$nome = $_POST['nome'];
$tarefas = $_POST['tarefas'];
$atrasos = $_POST['atrasos'];

if($tarefas >= 20 && $atrasos <= 1){
    $situacao = "Desempenho exelente";
} elseif($tarefas >= 10 && $tarefas <= 19 && $atrasos <= 3){
    $situacao = "Desempenho regular";
} else{
    $situacao = "Desempenho insatisfatório";
}


echo "<h3>Resultado da avaliação</h3> <br>";

echo "Nome: $nome <br>";
echo "Suas tarefas: $tarefas <br>";
echo "Seus atrasos: $atrasos <br>";
echo "Sua situação: $situacao <br>";
}
?>