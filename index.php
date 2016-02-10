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
          <select id="my_select" class="" name="nameClient" onchange="selUser(this.value);">
            <?php
              while($data=mysqli_fetch_assoc($result)){
                echo "<option value='".$data['id']."'>".$data['nom']." ".$data['prenom']."</option>";
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
          <tbody id="reponse">

          </tbody>
        </table>

      </div>
    </div>
    <script type="text/javascript">
    function selUser(selUser){

      xhr = new XMLHttpRequest();
      xhr.open('POST', 'traitement.php', true);
      var sendInfo="idUser="+selUser;      
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send(sendInfo);
      xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200){
          document.getElementById('reponse').innerHTML = xhr.responseText;
        }
      };
    }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
