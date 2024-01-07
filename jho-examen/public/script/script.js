function access(pass) {
    var pass = $("#password").val();
    $.ajax({
        url: "index.php?r=clau",
        method: "GET",
        data: { pass: pass },
        success: function (data) {
            window.location = "index.php?r=consulta";},
        error: function (error) {
            $("#mensajeError").html("Contrasenya incorrecta.");
            $("#mensajeError").show();
        }
    });
}
var cookieModal = new bootstrap.Modal(document.getElementById('cookieModal'), {
  });
  
  window.onload = function() {
    cookieModal.show();
  };
  
  function aceptarCookies() {
    cookieModal.hide();
  }