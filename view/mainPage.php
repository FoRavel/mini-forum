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
<?php foreach ($arrayObjTopics as $topic){?>
    <li><?= $topic->getTitle() ?>
    <br><?= $topic->getDescription() ?>
    <br><?= $topic->getCountTopics() ?>
    <br><?= $topic->getCountMessages() ?>
    </li>
<?php }; ?>
    </ul>
</section>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
