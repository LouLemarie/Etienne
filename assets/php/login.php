<?php
      session_start();
      $bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);

      $reponse = $bdd->query('SELECT * FROM t_users');







    while($donnees = $reponse->fetch()) {
        if( $_POST['email'] == $donnees['email']) {
            if ($_POST['MDP'] == $donnees['MDP'] ) {
                $_SESSION['pseudo'] = $donnees['pseudo'];
                $_SESSION['userId'] = $donnees['idT_USERS'];
                $_SESSION['login'] = true;

                echo("<script>redirection(\"main.php?page=admin\")</script>");
            }
        } else {
            echo("<script>redirection(\"main.php?page=accueil\")</script>");
        }
    }



header('Location: ./main.php');
?>

