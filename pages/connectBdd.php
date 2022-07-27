<h2>Test de connexion sur BDD</h2>
<?php
//script d acces a la database de $user ludovic et creation de base de donnée ludovic_pics ,!!

$dsn = 'mysql:host=localhost;port=8889';
$user = 'ludovic';
$password = 'ludo62';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "testing to create";


    $current_database = $dbh->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'blabla_pics4';");
    $number_of_columns =  $current_database->fetchColumn();
    $database_exist = (bool) $$number_of_columns;


    if ($database_exist) {
        echo 'database exist';
    } else {
        echo "create";
        $dbh->exec("CREATE DATABASE blabla_pics4;");
    }

    // if ($dbh->exec("CREATE DATABASE blabla_pics2 ") !== false) {
    //     echo 'creating database OK';
    // } else {
    //     echo 'an error has occured, data base already exist';  // la base de donnée existe déjà
    // }
} catch (PDOException $error) {
    echo 'data base connexion failed'; // erreur de connexion avec le serveur
}
