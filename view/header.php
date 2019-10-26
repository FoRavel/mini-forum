

    <div class="login-register-form">
    <p class="instruction-message"></p>
    <p id="infoMessage"></p>    
        <input type="text" id="loginInput" class="login-register-form__input"/>
        <button id="registerConfirmButton" class="login-register-form__btn">Confirmer l'enregistrement</button>
        <button id="loginConfirmButton" class="login-register-form__btn">Confirmer la connexion</button>

    </div>


<div class="login-register-buttons">
    <?php if(isset($_SESSION["username"])){?>
        <button id="logoffButton " class="login-register-buttons__btn btn--white"><a href="./index.php?action=signOff">Se déconnecter</a></button>
    <?php }else{ ?>
        <button id="loginButton" class="login-register-buttons__btn btn--white">Se connecter</button>
        <button id="loginContinueButton">Continuer</button>
    <?php }?>
    <button id="registerButton"class="login-register-buttons__btn">S'enregistrer</button>
</div>