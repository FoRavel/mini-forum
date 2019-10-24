
<?php $title = "MiniForum - Déconnexion"; ?>
<?php ob_start();?>

<?php $header = ob_get_clean();?>

<?php ob_start();?>
<p>Vous vous êtes déconnecté avec succès. <a href="./index.php">Retour à l'index</a></p>
<?php $content = ob_get_clean();?>

<?php require("template.php");?>
