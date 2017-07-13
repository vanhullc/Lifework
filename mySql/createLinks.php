<?php
    $link = $_POST["Link"];

    $idProfile = $link['idProfile'];
    $idLink;

    require_once('connect.php');

    $query = "SELECT * FROM links WHERE Uri = '". $link['Uri'] . "'";
    $result = mysqli_query($conn, $query);
    echo mysqli_num_rows($result);
    if(mysqli_num_rows($result) == 0) {

        $query = "INSERT INTO links (Name, Uri, Date) VALUES ('". $link['Title'] . "', '" . $link['Uri'] . "', '" . $link['Date'] . "')";
        if(mysqli_query($conn, $query)) {
          $idLink = $conn->insert_id;
          echo "idLink";
          echo $idLink;
        }
        else {
          echo("errorProfile");
          echo(mysqli_error($conn));
        }
    }
    else {
      echo("Link already exist");
      $links = array();
      while($row = mysqli_fetch_assoc($result)) {
        $links[] = $row;
      };
      $idLink = $links[0]['iD'];
      echo "--------------";
      echo $links[0]['iD'];
    }

    $query = "SELECT * FROM linkstoprofile WHERE iDLink = ". $idLink . " AND idProfile = " . $idProfile;
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0) {
      echo "____________";
      $query = "INSERT INTO linkstoprofile VALUES ('". $idLink . "', '" . $idProfile . "')";
      $result = mysqli_query($conn, $query);
    }
    else {
      echo("links and profile already exists");
      echo(mysqli_error($conn));
    }

 ?>
