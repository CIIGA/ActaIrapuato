$("#descargar").click(function () {
  Swal.fire({
    title: "Generando las actas",
    html: "Por favor, espere...",
    icon: "info",
    allowOutsideClick: false,
    didOpen: () => {
      Swal.showLoading();
    },
  });
  fecha1 = $("#fechaI").val();
  fecha2 = $("#fechaF").val();
  $("#modalDescarga").modal("hide");

  var url = "zip.php?action=descargar&fechaI=" + fecha1 + "&fechaF=" + fecha2;
  $.ajax({
    url: url,
    type: "GET",
    success: function (response) {
      $("#fechaI").val("");
      $("#fechaF").val("");
      Swal.fire({
        title: "Listo comenzara su descarga",
        text: "Revise su archivo en la parte de descargas de su equipo.",
        icon: "success",
      });
      window.location.href = url;
    },
    error: function (xhr) {
      Swal.fire({
        title: "Error",
        text: "Ha ocurrido un error al descargar el archivo.",
        icon: "error",
      });
    },
  });
});
