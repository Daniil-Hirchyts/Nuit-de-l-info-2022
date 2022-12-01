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
    $req = $db->prepare('SELECT * FROM admin');
    $req->execute();
    $tuples = $req->fetchAll();
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
