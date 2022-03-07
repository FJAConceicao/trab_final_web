<?php
header('Content-type: application/json');
include("conexao.php");

$sql = "SELECT * from candidatos";

$result = $mysqli->query($sql);

if($result->num_rows > 0) {
  $output = array();

  while($row = $result->fetch_assoc()) {
     
    $output[] = array( 'idcandidatos' => $row['idcandidatos'], 'quantidade_votos' => $row['quantidade_votos'], 'numero_candidato' => $row['numero_candidato'], 'nome' => $row['nome'], 'partido' => $row['partido'], 'foto' => $row['foto'], 'tipo' => $row['tipo'] );
  }

  echo json_encode($output, JSON_UNESCAPED_UNICODE);
}
?>