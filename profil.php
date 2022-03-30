<?php
session_start();
include('header.php')
?>
<div class="container">
    <div class="col-md-12">
        <div class="text-center">
            <h2 class="p-5">Vous etes bien connecté : <?= $_SESSION['pseudo'] ?> !</h2>

            <img src="css/bravo.gif" alt="Vous">
            <hr/>
            <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
        </div>
    </div>
</div>
</body>

