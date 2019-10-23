<?php $title = "MiniForum - Discussions"; ?>

<?php ob_start();?>

<input type="text" id="loginInput"/>
<button id="registerConfirmButton">Confirmer l'enregistrement</button>
<button id="loginConfirmButton">Confirmer la connexion</button>

<p id="infoMessage"></p>
<button id="loginButton">Se connecter</button>
<button id="registerButton">S'enregistrer</button>
<section>
    <table>
        <tr>
            <td>Discussions</td>
            <td>Messages</td>
        </tr>
        <?php foreach ($arrayObjTopics as $topic){?>
        <tr>
            <td>
            <a href="index.php?action=listMessages&id=<?=$topic->getId()?>"><?= $topic->getTitle() ?></a>
            <p>par <?= $topic->getAuthor().", ".$topic->getCreationDatetime() ?></p>
            </td>
            <td><?= $topic->getCountMessages() ?></td>
        </tr>
        <?php }; ?>
    </table>
</section> 

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
