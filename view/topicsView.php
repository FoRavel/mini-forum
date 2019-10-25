<?php $title = "MiniForum - Discussions"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>
<section>
<a class="btn btn--margin" href="./index.php?action=createTopic&id=<?= $mainTopicId ?>">Commencer une nouvelle discussion</a>
    <table class="table">
        <tr>
            <th class="table__header table__col--padding">Discussions</th>
            <th class="table__header table__col--padding">Messages</th>
        </tr>
        <?php foreach ($arrayObjTopics as $topic){?>
        <tr class="table__row">
            <td class="table__col--padding">
            <a class="table__topic-title" href="index.php?action=listMessages&id=<?=$topic->getId()?>"><?= $topic->getTitle() ?></a>
            <p class="table__topic-author">par <?= $topic->getAuthor().", ".$topic->getCreationDatetime() ?></p>
            </td>
            <td class="table__col--padding"><?= $topic->getCountMessages() ?></td>
        </tr>
        <?php }; ?>
    </table>
</section> 

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
