$(document).ready(function() {
    $('#search').on('keyup', function() {
        var pSearch = $(this).val();

        $.ajax({
            url: 'search.php',
            method: 'POST',
            data: { query: pSearch },
            success: function(response) {
                $('#categoryTable tbody').html(response);
            }
        });
    });
});
