<?php $title = "MiniForum - Messages"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>

<section>
    <table>
        <?php foreach ($arrayObjMessages as $message){?>
        <tr class="table__row">
            <td class="table__col--padding">
            <p class="table__message-date-author">Posté le <?= $message->getDate()?> par <span class="table__message-author"><?= $message->getAuthor() ?></span></p>
            <p><?= $message->getText() ?></p>
            </td>
        </tr>
        <?php }; ?>
    </table>
</section> 

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
