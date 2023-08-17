<?php
include_once("conexao.php");

$questao1 = $_POST['questao1'];
$questao2 = $_POST['questao2'];
$questao3 = $_POST['questao3'];
$questao4 = $_POST['questao5'];
$questao5 = $_POST['questao5'];
$questao6 = $_POST['questao6'];
$questao7 = $_POST['questao7'];
$questao8 = $_POST['questao8'];
$sugestao = filter_input(INPUT_POST, 'sugestao', FILTER_SANITIZE_STRING);

//-------------------------verificação e criação do banco de dados--------------------------------------------//
$dbnome = "projetodebate"; //Nome do banco de dados

$queryverificadb = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbnome'"; //Verificação de existencia do banco de dados
$resultadoverificacao = $conn->query($queryverificadb); //

if ($resultadoverificacao && $resultadoverificacao->num_rows === 0) //Se é "falso" ou com base no número de colunas(se tem 0 É falso)
{
    $createDatabaseQuery = "CREATE DATABASE $dbnome";
    $conn->query($createDatabaseQuery);
}
//-------------------------------------------fim--------------------------------------------------------------//



//-------------------------verificação e criação da tabela das questões---------------------------------------//
$tabelanome = "questoes";

$queryverificartabela = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$dbnome' AND TABLE_NAME = '$tabelanome'";
$resultadoverificacaotabela = $conn->query($queryverificartabela);

if ($resultadoverificacaotabela->num_rows === 0)
{
mysqli_select_db($conn, $dbnome); //Selecionou o banco
$createTableQuery = 
"CREATE TABLE $tabelanome
(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
questao1 INT(2) NOT NULL, 
questao2 INT(2) NOT NULL,
questao3 CHAR(3) NOT NULL,
questao4 CHAR(3) NOT NULL,
questao5 CHAR(3) NOT NULL,
questao6 CHAR(3) NOT NULL,
questao7 CHAR(3) NOT NULL,
questao8 CHAR(3) NOT NULL,
sugestao VARCHAR(500))
";
$conn->query($createTableQuery);
}
//-------------------------------------------fim--------------------------------------------------------------//



//----------------------------------inserindo valores na tabela-----------------------------------------------//
mysqli_select_db($conn, $dbnome);

$queryinsert = "
INSERT INTO $tabelanome
(questao1, questao2, questao3, questao4, questao5, questao6, questao7, questao8, sugestao)
VALUES
($questao1, $questao2, '$questao3', '$questao4', '$questao5', '$questao6', '$questao7', '$questao8', '$sugestao')";

$conn->query($queryinsert);
$conn->close();
//-----------------------------------------fim---------------------------------------------------------------//

echo "tamo junto acaboukkkk"
?>