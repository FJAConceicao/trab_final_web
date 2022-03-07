<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
include("conexao.php");

$sql = "SELECT * from candidatos";

$result = $mysqli->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

  if($result->num_rows > 0) {
    $output = array();

    while($row = $result->fetch_assoc()) {

      $output[] = array( 'idcandidatos' => $row['idcandidatos'], 'quantidade_votos' => $row['quantidade_votos'], 'numero_candidato' => $row['numero_candidato'], 'nome' => $row['nome'], 'partido' => $row['partido'], 'foto' => $row['foto'], 'tipo' => $row['tipo'] );
    }

    echo json_encode($output, JSON_UNESCAPED_UNICODE);
  }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if(isset( $_GET['voto'])){
    $sql = "update candidatos set quantidade_votos = quantidade_votos + 1 where numero_candidato=".$_GET['voto'];

    $result = $mysqli->query($sql);
  }



}


?>
