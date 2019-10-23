<?php $title = "MiniForum - Accueil"; ?>

<?php ob_start();?>

<input type="text" id="loginInput"/>
<button id="registerConfirmButton">Confirmer l'enregistrement</button>
<button id="loginConfirmButton">Confirmer la connexion</button>

<p id="infoMessage"></p>
<button id="loginButton">Se connecter</button>
<button id="loginContinueButton">Continuer</button>
<button id="logoffButton">Se déconnecter</button>
<button id="registerButton">S'enregistrer</button>
<section>
    <table>
        <tr>
            <td>Thèmes</td>
            <td>Discussions</td>
            <td>Messages</td>
        </tr>
        <?php foreach ($arrayObjTopics as $topic){?>
        <tr>
            <td><a href="index.php?action=listTopics&id=<?= $topic->getId()?>"><?= $topic->getTitle() ?></a><br><?= $topic->getDescription() ?></td>
            <td><?= $topic->getCountTopics() ?></td>
            <td><?= $topic->getCountMessages() ?></td>
        </tr>
        <?php }; ?>
    </table>
</section>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
