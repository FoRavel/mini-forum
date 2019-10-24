<?php session_start();?>
<?php $title = "MiniForum - Accueil"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>
<section>
    <table class=".table">
        <tr>
            <th class="table__header" scope="col">Sujets</th>
            <th class="table__header" scope="col">Discussions</th>
            <th class="table__header" scope="col">Messages</th>
        </tr>
        <?php foreach ($arrayObjTopics as $topic){?>
        <tr class="table__row">
            <td><a id="mainTopicLink" class="table__main-topic-title" href="index.php?action=listTopics&id=<?= $topic->getId()?>"><?= $topic->getTitle() ?></a><p class="table__main-topic-description"><?= $topic->getDescription() ?></p></td>
            <td><?= $topic->getCountTopics() ?></td>
            <td><?= $topic->getCountMessages() ?></td>
        </tr>
        <?php }; ?>
    </table>
</section>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
