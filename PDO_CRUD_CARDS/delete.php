<?php

    require "connection.php";

    $delId = $_GET['id'];
    $deleteQuery = "DELETE FROM pdo_products WHERE prodId = :delId";
    $deleteprepare = $conn->prepare($deleteQuery);

  $deleteprepare ->bindParam(":delId",  $delId, PDO::PARAM_INT);
  if($deleteprepare->execute()){
    header("location:adminView.php");
  }
  else{
    echo "delection failed";
}


?>