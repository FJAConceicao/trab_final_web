<?php

include("conexao.php");

$sql = "SELECT * from candidatos";

$result = $mysqli->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["name"] . "<br>";
  }
}

echo "dasdas";

if(isset($_GET['show'])){
    if($_GET['show'] == 'all'){
          $content = file_get_contents("db.json",true);
          echo $content;
    }else{
          $content = file_get_contents("db.json",true);
          $aContent = json_decode($content);
          for ($i=0; $i < count($aContent); $i++) {
                 if($aContent[$i]->id == intval($_GET['show'])){
                        echo json_encode($aContent[$i]);
                 }
          }
          if(!array_key_exists(intval($_GET['show']), $aContent)){
                 echo '[]';
          }
    }
}
?>