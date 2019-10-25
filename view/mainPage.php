<?php session_start();?>
<?php $title = "MiniForum - Accueil"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>
<section>
    <table class="table">
        <tr>
            <th class="table__header table__col--padding" scope="col">Sujets</th>
            <th class="table__header table__col--padding" scope="col">Discussions</th>
            <th class="table__header table__col--padding" scope="col">Messages</th>
        </tr>
        <?php foreach ($arrayObjTopics as $topic){?>
        <tr class="table__row">
            <td class="table__col--padding"><a id="mainTopicLink" class="table__topic-title" href="index.php?action=listTopics&id=<?= $topic->getId()?>"><?= $topic->getTitle() ?></a><p class="table__main-topic-description"><?= $topic->getDescription() ?></p></td>
            <td class="table__col--padding"><?= $topic->getCountTopics() ?></td>
            <td class="table__col--padding"><?= $topic->getCountMessages() ?></td>
        </tr>
        <?php }; ?>
    </table>
</section>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
