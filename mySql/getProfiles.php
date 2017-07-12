<?php
    require_once('connect.php');

    if($result = mysqli_query($conn, "SELECT * FROM PROFILE")) {
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
    /*
    echo($result);
    $to_encode = array();
    while($row = mysqli_fetch_assoc($result)) {
      $to_encode[] = $row;
    }
    echo json_encode($to_encode);
    */
?>
