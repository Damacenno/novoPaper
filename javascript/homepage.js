$(document).ready(function () {
    let classeServicos = new Servicos();
    classeServicos.resgatarServicos(null);

});

class Servicos {
    resgatarServicos(categorias) {

        $.ajax({
            url: "functions/listarServicos.php",
            type: "POST",
            data: {},
            dataType: "JSON"
        }).done(function (response) {
            console.log(response);
        }).fail(function (jqXHR, textStatus) {
            console.log(response);
        });

    }


}