<?php $title = "MiniForum - Accueil"; ?>

<?php ob_start();?>

<input type="text" id="loginInput"/>
<button id="registerConfirmButton">Confirmer l'enregistrement</button>
<button id="loginConfirmButton">Confirmer la connexion</button>

<p id="infoMessage"></p>
<button id="loginButton">Se connecter</button>
<button id="registerButton">S'enregistrer</button>
<section>
    <ul>
<?php foreach ($arrayTopics as $value){?>
    <li><?= $value["title"] ?><br><?= $value["description"]?></li>
<?php }; ?>
    </ul>
</section>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
