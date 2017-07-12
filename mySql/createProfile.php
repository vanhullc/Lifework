<?php
  $idProfile;
  $idLink;

  $profile = $_POST["Profile"];
  require_once('connect.php');

  $query = "INSERT INTO profile (Name, Pic) VALUES ('". $profile['Name'] . "', '" . $profile['Pic'] . "')";

  if(mysqli_query($conn, $query)) {
    $idProfile = $conn->insert_id;
  }
  else {
    echo("errorProfile");
    echo(mysqli_error($conn));
  }

  $query = "INSERT INTO links (Name, Uri, Date) VALUES ('". $profile['Title'] . "', '" . $profile['Uri'] . "', '" . $profile['Date'] . "')";

  if(mysqli_query($conn, $query)) {
    $idLink = $conn->insert_id;
  }
  else {
    echo("errorLink");
    echo(mysqli_error($conn));
  }

  $query = "INSERT INTO linkstoprofile VALUES ('". $idLink . "', '" . $idProfile . "')";

  if(mysqli_query($conn, $query)) {
    
  }
  else {
    echo("errorLink2");
    echo(mysqli_error($conn));
  }


  /*if($result = mysqli_query($conn, $query)) {
    $query = "SELECT * INTO profile WHERE 'Name'='". $profile['Name'] . "' AND 'Pic=' '" . $profile['Pic'] . "'";
    if($result = mysqli_query($conn, $query)) {
      $to_encode = array();
      while($row = mysqli_fetch_assoc($result)) {
        $to_encode[] = $row;
      };
      $query = "INSERT INTO profile (Name, Pic) VALUES ('". $profile['Name'] . "', '" . $profile['Pic'] . "')"
    }
  }
  else {
    echo("error");
    echo(mysqli_error($conn));
  }*/
?>
