function buscar() {
  let texto = $('#buscador').val();
  $.ajax({
    url: 'buscar.php',
    type: 'POST',
    data: { texto: texto },
    success: function (res) {
      $('#resultado').html(res);
    },
  });
}
