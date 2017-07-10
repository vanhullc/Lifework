<?php session_start(); ?>
<!DOCTYPE html>
  <html>
    <head>
      <meta  />
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <!--navbar -->

      <nav>
        <div class="nav-wrapper container" role="navigation">
          <a id="logo-container" href="" class="brand-logo left">Lifework</a>
          <ul id="nav-mobile" class="right">
            <form>
              <div class="input-field col-s2">
                <input id="search" type="search" required/>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </ul>
        </div>
      </nav>
      <?php
        include_once('view/header.php');
      ?>
    </body>
  </html>



  <?php
    include_once('view/footer.php');
  ?>
