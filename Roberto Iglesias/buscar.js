$(document).ready(function() {
    $('#search').on('keyup', function() {
        var search = $(this).val();
        if (search.length > 0) {
            $.ajax({
                url: 'buscar.php',
                method: 'POST',
                data: {query: search},
                success: function(response) {
                    alert(response); 
                    $('#results').html(response);
                }
            });
        } else {
            $('#results').html('');
        }
    });
});
