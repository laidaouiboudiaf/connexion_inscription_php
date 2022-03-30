<?php
//connexion à la bdd
require_once '../config.php';
// Si les variables existent et qu'elles ne sont pas vides
if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // cross-site scripting
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    //transformer toutes les lettres d'email majuscule en minuscule
    $email = strtolower($email);
    // vérifier si l'utilisateur existe
    require_once 'fonctions_model.php';
    $line = checkUser($email);
    // Si la fonction renvoie un 0 alors l'utilisateur n'existe pas
    if ($line == 0) {
        if (strip_tags($pseudo)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si l'email est de la bonne forme
                //  hash le mot de passe avec ARGON2I
                $password = password_hash($password, PASSWORD_ARGON2I);
                require_once 'fonctions_model.php';
                //insérer dans la base de données
                $save = createUser($pseudo, $email, $password);
                //redirige avec le message de succès
                header('Location: ../inscription_form.php?inscription_erreur=reussi');
            } else {
                header('Location: ../inscription_form.php?inscription_erreur=email', false);
                exit;
            }
        } else {
            header('Location: ../inscription_form.php?inscription_erreur=pseudo');
            exit;
        }
    } else {
        header('Location: ../inscription_form.php?inscription_erreur=existe');
        exit;
    }
}
