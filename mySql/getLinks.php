<?php

  $iD = $_GET["iD"];

  require_once('connect.php');

  $query = "SELECT * FROM links JOIN linkstoprofile WHERE links.iD = linkstoprofile.idLink AND linkstoprofile.idProfile=" . $iD;
  $query .= " ORDER BY Date DESC";

  if($result = mysqli_query($conn, $query)) {
    $to_encode = array();
    while($row = mysqli_fetch_assoc($result)) {
      $to_encode[] = $row;
    };
    echo json_encode($to_encode);
  }
  else {
    echo("error");
    echo(mysqli_error($conn));
  }
?>
