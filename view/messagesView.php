<?php $title = "MiniForum - Messages"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>

<section>
    <table>
        <?php foreach ($arrayObjMessages as $message){?>
        <tr>
            <td>
            <p><?= $message->getText() ?></p>
            <p>par <?= $message->getAuthor().", ".$message->getDate() ?></p>
            </td>

        </tr>
        <?php }; ?>
    </table>
</section> 

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
