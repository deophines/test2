<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>enregistrer</title>
</head>
<body>

    <?php
        
        $serveur = "localhost";
        $login = "root";
        $pass = "";
 
        try{

        $connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion à la Base de Donnée reussie';
        }

        catch(PDOEXCEPTION $e){
            echo 'Echec de la Connexion :' .$e-> getMessage();
         }
    ?>
    </body>
</html>