<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Northwind con AJAX y Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Productos de Northwind</h1>
        <input type="text" id="search" class="form-control mb-4" placeholder="Buscar productos...">
        <div id="result">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>

                    </tr>
                </thead>
                <tbody id="productTable">

                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                let query = $('#search').val();
                $.ajax({
                    url: 'search.php',
                    type: 'POST',
                    data: { value : query },
                    success: function(data) {
                        $('#productTable').html(data);
                    },
                    error: function() {
                        $('#productTable').html('<tr><td colspan="4">Error en la búsqueda.</td></tr>');
                    }
                });
            });
        });
    </script>
</body>
</html>
