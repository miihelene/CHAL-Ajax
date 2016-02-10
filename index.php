<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test Ajax</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- My Css -->
    <link rel="stylesheet" href="css/custom-style.css">

  </head>
  <body>
    <div class="container">
      <div class="col-md-12">
        <h1>Fichier Client</h1>
      </div>
      <div class="col-md-2 col-xs-12 select-part">
        <?php
          DEFINE(SERVER,"localhost");
          DEFINE(LOGIN,"adminsql");
          DEFINE(MDP,"mdpsql");
          DEFINE(BASE,"challengeAjax");

          $connect = mysqli_connect(SERVER, LOGIN, MDP, BASE) or die ("pb de connexion au serveur");

          $result = mysqli_query($connect,"SELECT * FROM ficheClient");
        ?>
        <form class="" action="index.html" method="post">
          <select class="" name="">
            <?php
              while($data=mysqli_fetch_assoc($result)){
                echo "<option value='0'>".$data['nom']." ".$data['prenom']."</option>";
              }
            ?>
          </select>
        </form>
      </div>
      <div class="col-md-10 col-xs-12 info-part">

        <script type="text/javascript">
          var xhrClient = new XMLHttpRequest();
        </script>
        
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>

  </body>
</html>
