 <?php
    try
    {
        $bdd = new PDO('mysql:host=mysql-decuyrene.alwaysdata.net;dbmane=decuyrene_site; charset=utf8' , 'decuyrene', 'JordaN_121216');
    }catch(Exception $e)
    {
        die ('Erreur'.$e->getMessage());
    }