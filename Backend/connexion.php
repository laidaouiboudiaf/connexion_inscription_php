<?php
// Démarrage de la session
session_start();
// verifier si  les champs  existent et ils ne sont pas vide
if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // cross-site scripting
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $email = strtolower($email);
    require_once '../config.php';
    require 'fonctions_model.php';
    // si l'utilisateur existe dans la table utilisateurs
    $data = checkUser($email);
    $exist = count($data);
    if ($exist > 0) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // verfier si le mot passe est identique
            if (password_verify($password, $data['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['pseudo'] = $data['pseudo'];
                header('Location: ../profil.php');
                exit;
            } else {
                //redirige et afficher l'erreur
                header('Location: ../index.php?connexion_erreur=password');
                exit;
            }
        } else {
            header('Location: ../index.php?connexion_erreur=email');
            exit;
        }
    } else {
        header('Location: ../index.php?connexion_erreur=existe');
        exit;
    }
} else {
    header('Location: ../index.php');
    exit;
}
