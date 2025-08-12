$(document).ready(function () {

    // Barra lateral móviles
    $('.sidenav').sidenav();

    let input_tipo = $("input[name=tipo-mensaje]");
    let input_texto = $("input[name=texto-mensaje]");

    if (input_tipo.length && input_texto.length) {
        M.toast({ html: input_texto.val(), classes: input_tipo.val() + "lighten-5" });
    }

    //ocultar toast
    $(".toast").click(function () {
        $(this).hide();
    });

    //cambiar clave
    $("input[type=checkbox][name=cambiar_clave]").click(function () {
        $("#password").toggleClass("hide");
    });

    //fecha
    $(".datapicker").datapicker({
        firstDay: true,
        format: "dd-mm-YY",
        i18n: {
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            weekdays: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
            weekdaysShort: ["Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"],
            weekdaysAbbrev: ["L", "M", "X", "J", "V", "S", "D"]
        }
    });

});