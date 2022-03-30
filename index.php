<?php include "header.php";?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <form class="shadow w-450 p-3" action="Backend/connexion.php" method="post">
        <h4 class="display-4  fs-1">Se connecter </h4><br>
        <?php
        if (isset($_GET['connexion_erreur'])) {
            $err = htmlspecialchars($_GET['connexion_erreur']);

            switch ($err) {
                case 'password' || 'email' :
                    ?>
                    <div class="alert alert-danger">
                        <strong> L'email ou mot de passe incorrect</strong>
                    </div>
                    <?php
                    break;
                case 'existe':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte non existant
                    </div>
                    <?php
                    break;
            }
        }
        ?>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required"
                   autocomplete="on">
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                   required="required"
                   autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter </button>
        <a href="inscription_form.php" class="link-secondary">S'inscrire</a>
    </form>
</div>



