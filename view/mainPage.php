<?php $title = "MiniForum - Accueil"; ?>

<?php ob_start();?>

<input type="text" id="loginInput"/>
<button id="registerConfirmButton">Confirmer l'enregistrement</button>
<button id="loginConfirmButton">Confirmer la connexion</button>

<p id="infoMessage"></p>
<button id="loginButton">Se connecter</button>
<button id="registerButton">S'enregistrer</button>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
