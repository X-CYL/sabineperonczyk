<h2>le document a bien été envoyé</h2>
<?php

//récuperation des valeurs dans les variables 
$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$Email = $_POST['Email'];
$Sujet = $_POST['Sujet'];
$Commentaires = $_POST['Commentaires'];

// config de la connexion sur la base de données
$dsn = 'mysql:host=localhost;dbname=sabinePhotos;port=8889';
$user = 'ludovic';
$password = 'ludo62';
$dsnOptions = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

//essaye la connexion et insère les valeurs dans la table correspondante

try {
    $dbh = new PDO($dsn, $user, $password, $dsnOptions);
    echo 'connexion réussie';
//préparation à l'insertion des valeurs en base (contrôle les valeurs des champs)
    $myInsert = $dbh->prepare("INSERT INTO comments(com_Nom,com_Prenom,com_Sujet,com_Commentaires,com_Email)
                            VALUES(:Nom, :Prenom, :Sujet, :Commentaires, :Email);");
//si Valeurs OK les envoie dans la base de donnée
    $myInsert->bindParam(':Nom', $Nom);
    $myInsert->bindParam(':Prenom', $Prenom);
    $myInsert->bindParam(':Sujet', $Sujet);
    $myInsert->bindParam(':Commentaires', $Commentaires);
    $myInsert->bindParam(':Email', $Email);
// essaye l'insertion , si KO renvoie $error2
    try {
        $myInsert->execute();
    } catch (PDOException $error2) {
        echo $error2;
    }
} catch (PDOException $error) {
    echo 'echec de la connexion'; // erreur de connexion avec le serveur
    echo $error;
}