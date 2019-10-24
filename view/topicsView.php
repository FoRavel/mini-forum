<?php $title = "MiniForum - Discussions"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>
<section>
    <a href="./index.php?action=createTopic&id=<?= $mainTopicId ?>">Créer Nouveau sujet</a>
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
