$(document).ready(function() {
    $('#busqueda').on('keyup', function() {
        var busqueda = $(this).val();

        if (busqueda.length > 0) {
            $.ajax({
                url: 'datos.php',
                type: 'POST',
                data: { busqueda: busqueda },
                success: function(res) {
                    $('#resultados').html(res);
                }
            });
        } else {
            $('#resultados').html('');
        }
    });
});