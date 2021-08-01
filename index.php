
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="style.css" />
    <title>Enregistrement des Eleves</title>
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
    
<FORM  METHOD="POST" ACTION="">
    <p> <h2>Formulaire d'Enregistrement </h2>

<fieldset> <legend>Identite de l'Eleve </legend>

<br> Nom : <input type="text" id="nom" name="Votre nom :" required value=" Ecrivez votre Nom"/></br>

<br> Postnom : <input type="text" name="postnom :" required value=" Ecrivez votre Postnom" /></br>

<br> Pr�nom : <input type="text" name="prenom :" required value=" Ecrivez votre Pr�nom" /></br>

<br> Sexe : <label>Homme <input type="radio" name="radio1" value="radio1"> </label> <label>Femme <input type="radio" name="radio1" value="radio2"> </label></br>

    <br>Lieu de Naissance : <select name="select">
        <option> Bas-Uele </option>
        <option> Equateur </option>
        <option> Haut - katanga </option>
        <option>  haut - Lomami </option>
        <option> haut- Uele </option>
        <option> Ituri </option>
        <option> Kasa� </option>
        <option> Kasa� - Central </option>
        <option> Kasa� - Oriental </option>
        <option>  Kinshasa </option>
        <option> Kongo - Central </option>
        <option> Kwango </option>
        <option> Kwilu </option>
        <option> Lomami </option>
        <option> Lualaba </option>
        <option>  Mayi - Ndomb� </option>
        <option> Maniema </option>
        <option> Mongala </option>
        <option> Nord - Kivu </option>
        <option> Nord - Ubangi </option>
        <option> Sud - Ubangi </option>
        <option>  Tanganyika </option>
        <option> Tshopo </option>
        <option> Tsuapa </option>
    </select></br>

<br><label for="VotreDatedeNaissance">Votre Date de Naissance : </label> <input type="date" id="VotreDatedeNaissance" name="VotreDatedeNaissance" /></br>
    <br> Adresse : <input type="text" name="prenom :" required value=" Quelle est votre Adresse " /></br>
    <br><strong> Cursus Scolaire </strong> </br>
<br>Ecole de Provenance : <input type="text" name="Ecole de Provenance" /></br>

<br>Classe : <select name="select">
<option> Septieme</option>
<option> Huitieme</option>
<option> Troisieme</option>
<option>  Quatrieme </option>
<option> Cinquieme</option>
<option> Sixieme</option>
</select></br>

<br>Option : <select name="select">
<option> Litteraire</option>
<option> Math-Physique</option>
<option> Chimie-Biologie</option>
<option>  P?dagogie</option>
<option> Mecanique</option>
<option> Electricit?</option>
</select></br>

    <br><strong> Information Titaire </strong> </br>

    <br> Nom : <input type="text" id="nom" name="Votre nom :" required value=" Ecrivez votre Nom"/></br>

    <br> Postnom : <input type="text" name="postnom :" required value=" Ecrivez votre Postnom" /></br>

    <br> Pr�nom : <input type="text" name="prenom :" required value=" Ecrivez votre Pr�nom" /></br>

    <br> Sexe : <label>Homme <input type="radio" name="radio1" value="radio1"> </label> <label>Femme <input type="radio" name="radio1" value="radio2"> </label></br>

    <br>Lieu de Naissance : <select name="select">
        <option> Bas-Uele </option>
        <option> Equateur </option>
        <option> Haut - katanga </option>
        <option>  haut - Lomami </option>
        <option> haut- Uele </option>
        <option> Ituri </option>
        <option> Kasa� </option>
        <option> Kasa� - Central </option>
        <option> Kasa� - Oriental </option>
        <option>  Kinshasa </option>
        <option> Kongo - Central </option>
        <option> Kwango </option>
        <option> Kwilu </option>
        <option> Lomami </option>
        <option> Lualaba </option>
        <option>  Mayi - Ndomb� </option>
        <option> Maniema </option>
        <option> Mongala </option>
        <option> Nord - Kivu </option>
        <option> Nord - Ubangi </option>
        <option> Sud - Ubangi </option>
        <option>  Tanganyika </option>
        <option> Tshopo </option>
        <option> Tsuapa </option>
    </select></br>

    <br><label for="VotreDatedeNaissance">Votre Date de Naissance : </label> <input type="date" id="VotreDatedeNaissance" name="VotreDatedeNaissance" /></br>
        <br> Etat Civil :<label> Mari? <input type="radio" name="radio1" value="radio1"> </label> <label> Celibataire <input type="radio" name="radio1" value="radio2"> </label> <label> Divorc? <input type="radio" name="radio1" value="radio2"> </label></br>

    <br> Profession : <input type="text" name="postnom :" required value=" Donner votre Profession " /></br>

    <br> Adresse : <input type="text" name="prenom :" required value=" Quelle est votre Adresse " /></br>

    <br> <label for="T?l?phone Responsable">T?l?phone Responsable:</label> <input type="text" id="T?l?phone Responsable" name="T?l?phone Responsable" placeholder="+243XXXXXXXXX" /> <br>

<input type="checkbox" id="acceptertermes" name="acceptertermes" value="1" /> <label for="acceptertermes">J'accepte les termes et conditions</label>

<p id="buttons">
  <input type="submit" value="Envoyer le formulaire" /> <input type="reset" value="Recommencer" />
</p>

</form></p>
</body>
</html>