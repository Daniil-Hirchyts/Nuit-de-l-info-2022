<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

<?php
//je récupère la valeur de login dans l'url site/getUser.php?login=bob
$nom = $_GET['nom'];

try
{
    //je crée une connection à la base
$db = new PDO('mysql:host=webinfo.iutmontp.univ-montp2.fr;dbname=hirchytsd;charset=utf8', 'hirchytsd', '07B6PU01YN7');
        //je prépare une requete
    $req = $db->prepare('SELECT * FROM admin WHERE nom = :nom ');
    //j'execute la requete en lui passant un paramètre
    $req->execute(['nom' => $nom]);
    $t = $req->fetch();
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
    echo '<p>'.$t['nom'] . ' ' . $t['prenom'] . ' ' . $t['password'] . ' </p>' ;
?>
    </body>
</html>


