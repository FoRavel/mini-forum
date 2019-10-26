$(document).ready(function () {
    $("#registerButton").click(function () {
        $(".instruction-message").text("Saisissez un nouveau nom d'utilisateur");
        $("#loginInput").css("display", "initial");
        $("#registerConfirmButton").css("display", "initial");
        $("#loginConfirmButton").css("display", "none");
        $(".login-register-form").css("display", "flex");
    });
    $("#loginButton").click(function () {
        $(".instruction-message").text("Nom d'utilisateur:");

        $("#loginInput").css("display", "initial");
        $("#registerConfirmButton").css("display", "none");
        $("#loginConfirmButton").css("display", "initial");
        $(".login-register-form").css("display", "flex");
    });
    $("#loginContinueButton").click(function () {
        document.location.reload(true)
    });
    $("#registerConfirmButton").click(function () {
        var username = $("#loginInput").val();
        if (username == "") {
            $("#infoMessage").css("display", "initial");
            $("#infoMessage").text("Veuillez saisir un pseudo");
        } else {
            $.get("index.php", { action: "register", username: username }).done(function (data) {
                console.log(data)
                if (data == 0) {
                    $(".login-register-form").css("display", "none");
                    $("#loginInput").css("display", "none");
                    $("#registerConfirmButton").css("display", "none");
                    $("#infoMessage").css("display", "initial");
                    $("#infoMessage").text("Votre pseudo a bien été enregistré, vous pouvez désormais vous connecté");
                }else if(data == 1){
                    $("#infoMessage").css("display", "initial");
                    $("#infoMessage").text("Ce pseudo est déjà enregistré");
                }
            });
        }

    })
    $("#loginConfirmButton").click(function () {
        var username = $("#loginInput").val();
        if (username == "") {
            $("#infoMessage").css("display", "initial");
            $("#infoMessage").text("Veuillez saisir un pseudo");
        } else {
            $.get("index.php", { action: "login", username: username }).done(function (data) {
                console.log(data)
                if (data == 0) {
                    $("#infoMessage").css("display", "initial");
                    $("#infoMessage").text("Ce pseudo n'existe pas");
                }else if(data == 1){
                    $(".login-register-form").css("display", "none");
                    $("#loginInput").css("display", "none");
                    $("#loginConfirmButton").css("display", "none");
                    $("#loginButton").css("display", "none");
                    $("#logoffButton").css("display", "initial");
                    $("#loginContinueButton").css("display", "initial");
                    $("#infoMessage").css("display", "initial");
                    $("#infoMessage").text("Vous vous êtes connecté avec succès");
                }
            });
        }
    })
    function displayInputButtons(){
        $("#loginInput").css("display", "initial");
        $("#registerConfirmButton").css("display", "initial");
    }
    function hideInputButtons(){
        $("#loginInput").css("display", "none");
        $("#registerConfirmButton").css("display", "none");
    }
}); 
