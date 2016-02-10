<?php
  DEFINE(SERVER,"localhost");
  DEFINE(LOGIN,"adminsql");
  DEFINE(MDP,"mdpsql");
  DEFINE(BASE,"challengeAjax");

  $connect = mysqli_connect(SERVER, LOGIN, MDP, BASE) or die ("pb de connexion au serveur");

  $result = mysqli_query($connect,"SELECT * FROM ficheClient");

  //affichage du résultat de la requête de sélection
  while($data=mysqli_fetch_assoc($result)){
    echo"<td>".$data['nom']."</td>";
    echo"<td>".$data['prenom']."</td>";
    echo"<td>".$data['age']."</td>";
    echo"<td>".$data['profession']."</td>";
    echo"<td>".$data['email']."</td>";
    echo"<td>".$data['telephone']."</td>";
  }

?>
