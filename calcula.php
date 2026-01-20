<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$nome = $_POST['nome'];
$tarefas = $_POST['tarefas'];
$atrasos = $_POST['atrasos'];
$setor = $_POST['setor'];

if($tarefas >= 25 && $atrasos == 0){
    $situacao = "Funcionario elegivel para bônus";

} elseif($tarefas >= 10 && $tarefas <= 19 && $atrasos <= 3){

    $situacao = "Desempenho regular";

} else{

    $situacao = "Desempenho insatisfatório";

}


echo "<h3>Resultado da avaliação</h3> <br>";

echo "Nome: $nome <br>";
echo "Suas tarefas: $tarefas <br>";
echo "Seus atrasos: $atrasos <br>";
echo "Seus setor: $setor <br>";
echo "Sua situação: $situacao <br>";
}
?>