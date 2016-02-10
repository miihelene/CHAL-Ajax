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
      <div class="col-md-12 title-part">
        <h1>Fichier Client</h1>
      </div>
      <div class="col-md-12 select-part">
        <?php
          DEFINE(SERVER,"localhost");
          DEFINE(LOGIN,"adminsql");
          DEFINE(MDP,"mdpsql");
          DEFINE(BASE,"challengeAjax");

          $connect = mysqli_connect(SERVER, LOGIN, MDP, BASE) or die ("pb de connexion au serveur");

          $result = mysqli_query($connect,"SELECT * FROM ficheClient");
        ?>
        <label>
          <select class="" name="nameClient">
            <?php
              while($data=mysqli_fetch_assoc($result)){
                echo "<option value='0'>".$data['nom']." ".$data['prenom']."</option>";
              }
            ?>
          </select>
        </label>
      </div>
      <div class="col-md-12 info-part">
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Age</th>
              <th>Ville</th>
              <th>Profession</th>
              <th>Email</th>
              <th>Telephone</th>
            </tr>
          </thead>
          <tbody>
              <?php
              DEFINE(SERVER,"localhost");
              DEFINE(LOGIN,"adminsql");
              DEFINE(MDP,"mdpsql");
              DEFINE(BASE,"challengeAjax");

              $connect = mysqli_connect(SERVER, LOGIN, MDP, BASE) or die ("pb de connexion au serveur");

              $result = mysqli_query($connect,"SELECT * FROM ficheClient");

              //affichage du résultat de la requête de sélection
              while($data=mysqli_fetch_assoc($result)){
                echo"<tr><td>".$data['nom']."</td>";
                echo"<td>".$data['prenom']."</td>";
                echo"<td>".$data['age']."</td>";
                echo"<td>".$data['ville']."</td>";
                echo"<td>".$data['profession']."</td>";
                echo"<td>".$data['email']."</td>";
                echo"<td>".$data['telephone']."</td></tr>";
              }

              ?>
          </tbody>
        </table>

      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
