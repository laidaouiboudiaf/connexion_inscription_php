<?php include "header.php"; ?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <form class="shadow w-450 p-3" action="Backend/inscription.php" method="post">
        <h4 class="display-4 fs-1">S'inscrire </h4><br>
        <?php
        // Afficher les erreurs possibles apres la verifications des champs
        if (isset($_GET['inscription_erreur'])) {
            $err = htmlspecialchars($_GET['inscription_erreur']);
            switch ($err) {
                case 'reussi':
                    ?>
                    <div class="alert alert-success">
                        <strong>Succès</strong> inscription réussie !
                    </div>
                    <?php
                    break;

                case 'password':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe différent
                    </div>
                    <?php
                    break;

                case 'pseudo':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> Le pseudo est no valide
                    </div>
                    <?php
                    break;

                case 'email':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong>Adresse mail non valide
                    </div>
                    <?php
                    break;
                    ?>
                <?php
                case 'existe':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> Ce compte existe déjà
                    </div>
                <?php
            }
        }
        ?>
        <div class="mb-3">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required"
                   autocomplete="on">
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required"
                   autocomplete="on">
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required"
                   autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
        <a href="index.php" class="link-secondary"> Se connecter </a>
    </form>
</div>

</body>

