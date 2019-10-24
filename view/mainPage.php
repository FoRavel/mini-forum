<?php session_start();?>
<?php $title = "MiniForum - Accueil"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>
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
