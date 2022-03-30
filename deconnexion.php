<?php
// demarrage de la session ensuite  la détruit
session_start();
session_destroy();
header('Location:index.php');

?>