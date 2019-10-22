$(document).ready(function () {
    $("#registerButton").click(function () {
        $("#loginInput").css("display", "initial");
        $("#registerConfirmButton").css("display", "initial");

    });
    $("#loginButton").click(function () {
        $("#loginInput").css("display", "initial");
        $("#loginConfirmButton").css("display", "initial");
    });
    $("#registerConfirmButton").click(function () {
        var username = $("#loginInput").val();
        if (username == "") {
            $("#infoMessage").text("Veuillez saisir un pseudo");
        } else {
            $.get("index.php", { action: "register", username: username }).done(function (data) {
                console.log(data)
                if (data == 0) {
                    $("#loginInput").css("display", "none");
                    $("#registerConfirmButton").css("display", "none");
                    $("#infoMessage").text("Votre pseudo a bien été enregistré, vous pouvez désormais vous connecté");
                }else if(data == 1){
                    $("#infoMessage").text("Ce pseudo est déjà enregistré");
                }
            });
        }

    })
    $("#loginConfirmButton").click(function () {
        var username = $("#loginInput").val();
        if (username == "") {
            $("#infoMessage").text("Veuillez saisir un pseudo");
        } else {
            $.get("index.php", { action: "login", username: username }).done(function (data) {
                console.log(data)
                if (data == 0) {
                    $("#infoMessage").text("Ce pseudo n'existe pas");
                }else if(data == 1){
                    $("#loginInput").css("display", "none");
                    $("#loginConfirmButton").css("display", "none");
                    $("#infoMessage").text("Vous vous êtes connecté avec succès");
                }
            });
        }

    })
}); 