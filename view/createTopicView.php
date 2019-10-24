<?php $title = "MiniForum - Nouveau sujet"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>
<section>
    <form method="POST" action="./index.php?action=createTopic_trt&id=<?= $_GET["id"] ?>">
        <input type="text" name="title" required/>
        <textarea name="title" required></textarea>
        <input type="button" name="post" value="Poster"/>
    </form>
</section>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
