<?php
// verifier si email rentré par l'utilisateur existe dans la bdd
function checkUser($email)
{
    require '../config.php';
    $sql = "SELECT * FROM utilisateurs WHERE email = ?";
    $verify = $database->prepare($sql);
    $verify->execute(array($email));
    return $verify->fetch();
}
// Creér un utilisateur dans la base de donnée
function createUser($pseudo, $email, $password)
{
    require '../config.php';
    $states = $database->prepare('INSERT INTO utilisateurs(pseudo, email, password) VALUES(:pseudo, :email, :password)');
    $states->execute(array(
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => $password
    ));
    return $states;
}

