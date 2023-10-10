$(document).ready(function () {
  $("#formBuscar").submit(function (e) {
    e.preventDefault();
    $("#loader").show();
    $.ajax({
      url: $(this).attr("action"),
      type: $(this).attr("method"),
      data: $(this).serialize(),
      success: function (respuesta) {
        $("#resultados").html(respuesta);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert(
          "Error al buscar los cursos. Intenta nuevamente más tarde."
        );
        console.error(
          "Error en la solicitud Ajax:",
          textStatus,
          errorThrown
        );
      },
      complete: function () {
        $("#loader").hide();
      },
    });
  });
});
