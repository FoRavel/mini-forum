
<input type="text" id="loginInput"/>
<button id="registerConfirmButton">Confirmer l'enregistrement</button>
<button id="loginConfirmButton">Confirmer la connexion</button>
<?php if(isset($_SESSION["username"])){?>
    <button id="logoffButton"><a href="./index.php?action=signOff">Se déconnecter</a></button>
<?php }else{ ?>
    <button id="loginButton">Se connecter</button>
    <button id="loginContinueButton">Continuer</button>
<?php }?>
<p id="infoMessage"></p>    
<button id="registerButton">S'enregistrer</button>