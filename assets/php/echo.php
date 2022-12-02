<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

<?php
try
{
    $db = new PDO('mysql:host=webinfo.iutmontp.univ-montp2.fr;dbname=hirchytsd;charset=utf8', 'hirchytsd', '07B6PU01YN7');
    $sql="SELECT * FROM admin WHERE nom='".$_POST['user']."';";
    $db->query($sql);
    // Récupération de la date et heure actuelles
    $date = date('Y-m-d H:i:s');

    // Définition de la query SQL à exécuter
    $sql2 = "SELECT * FROM table WHERE date_modif > '$date'";

    // Exécution de la query
    $result = $db->query($sql2);

    // Vérification du résultat
    if ($result->num_rows > 0) {
        // La table a été modifiée
        echo 'La table a été modifiée.';
    } else {
        // La table n'a pas été modifiée
        echo "La table n'a pas été modifiée.";
    }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

foreach ($tuples as $t) {
    echo '<p>'.$t['nom'];
    echo '    <a href="getUser.php?nom='.$t['nom'].'">Detail</a>   </p>' ;
}
?>
    </body>
</html>
