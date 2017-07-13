<?php
    require_once('connect.php');

    $search = $_GET["search"];

    if($result = mysqli_query($conn, "SELECT * FROM PROFILE WHERE Name LIKE '%" . $search . "%' LIMIT 25")) {
      $to_encode = array();
      while($row = mysqli_fetch_assoc($result)) {
        $to_encode[] = $row;
      };
      echo json_encode($to_encode);
    }
    else {
      echo("error");
      echo(mysqli_error($conn));
      alert('error');
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
