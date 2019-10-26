<?php $title = "MiniForum - Nouveau sujet"; ?>
<?php ob_start();?>
<?php include("header.php");?>
<?php $header = ob_get_clean();?>
<?php ob_start();?>
<section>
    <form class="new-topic-form"method="POST" action="./index.php?action=createTopic_trt&id=<?= $_GET["id"] ?>">
        <label>Titre</label>
        <input class="new-topic-form__input new-topic-form__input--default" type="text" name="title" required/>
        <textarea class="new-topic-form__input new-topic-form__input--textarea " name="title" required></textarea>
        <input class ="btn btn--input" type="button" name="post" value="Créer la nouvelle discussion"/>
    </form>
</section>

<?php $content = ob_get_clean();?>

<?php require("template.php");?>
