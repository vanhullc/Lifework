<?php
  $idProfile;
  $idLink;
  $result;

  $profile = $_POST["Profile"];

  require_once('connect.php');

  $query = "SELECT * FROM profile WHERE Name = '". $profile['Name'] . "'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) == 0) {
      $query = "INSERT INTO profile (Name, Pic) VALUES ('". $profile['Name'] . "', '" . $profile['Pic'] . "')";
      if(mysqli_query($conn, $query)) {
        $idProfile = $conn->insert_id;
        echo "idProfile";
        echo $idProfile;
      }
      else {
        echo("errorProfile");
        echo(mysqli_error($conn));
      }
  }
  else {
    echo("profile already exist");
    $profiles = array();
    while($row = mysqli_fetch_assoc($result)) {
      $profiles[] = $row;
    };
    $idProfile = $profiles[0]['iD'];
    echo $idProfile;
  }

  $query = "SELECT * FROM links WHERE Uri = '". $profile['Uri'] . "'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) == 0) {

      $query = "INSERT INTO links (Name, Uri, Date) VALUES ('". $profile['Title'] . "', '" . $profile['Uri'] . "', '" . $profile['Date'] . "')";
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
