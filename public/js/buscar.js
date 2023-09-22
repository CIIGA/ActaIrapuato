$(document).ready(function () {
  $("#form").submit(function (event) {
    event.preventDefault();
    fechaI = $("#fechaI").val();
    fechaF = $("#fechaF").val();
    if (fechaI === "" || fechaF === "") {
      Swal.fire({
        title: "¡Error!",
        text: "complete todos los campos",
        icon: "error",
        showConfirmButton: true,
      });
      return;
    }
    $.ajax({
      type: "POST",
      url: "buscar.php", // Cambia esto por la URL correcta de tu archivo PHP
      data: $(this).serialize(),
      dataType: "json",
      success: function (response) {
        if (response.success == true) {
        $("#mensaje").text(response.mensaje);
        $("#modalDescarga").modal("show");
        } else {
          Swal.fire({
            title: "¡Error!",
            text: response.mensaje,
            icon: "error",
            showConfirmButton: true,
          });
         
        }
      },
      error: function () {
        alert("Error en la solicitud AJAX.");
      },
    });
  });
});
