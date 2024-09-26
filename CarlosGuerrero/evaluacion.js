$(document).ready(function() {
    $('#buscador').on('keyup', function() {
        var query = $(this).val();
        if (query.length > 0) {
            $.ajax({
                url: 'search.php',
                method: 'POST',
                data: { busqueda: query },
                success: function(data) {
                    $('#resultados').html(data);
                }
            });
        } else {
            $('#resultados').empty();
        }
    });
});
