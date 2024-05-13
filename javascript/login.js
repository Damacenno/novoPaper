$(document).ready(function () {
});

function requisitarLogin() {
    const login = $('#campo_login').val();
    const senha = $('#campo_senha').val();

    $.ajax({
        url: "functions/realizarLogin.php",
        type: "POST",
        data: { login: login, senha: senha },
        dataType: "text"
    }).done(function (response) {
        switch (response) {
            case '0':
                window.location.href = 'home.html';
                break;
            case '1':
                mostrarFeedback();
                break;
            case '2':
                mostrarFeedback();
                break;
        }
    }).fail(function (jqXHR, textStatus) {
        $("#feedbackTecnico").show();
    });
}

function mostrarFeedback() {
    $("#feedbackLogin").show();
    setTimeout(function () {
        $("#feedbackLogin").removeClass('entrada_feedback');
        setTimeout(function () {
            $("#feedbackLogin").addClass('saida_feedback');
            setTimeout(function () {
                $("#feedbackLogin").hide();
                $("#feedbackLogin").removeClass('saida_feedback');
                $("#feedbackLogin").addClass('entrada_feedback');
            }, 500);
        }, 500);
        
    }, 2500);
}