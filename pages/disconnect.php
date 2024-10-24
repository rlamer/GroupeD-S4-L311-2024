<?php
setDisconnectUser(); // Déconnecte l'utilisateur

header('Location:index.php'); // Redirige vers la page d'accueil

exit(); // Stoppe l'exécution du script après la redirection

?>