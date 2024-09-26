<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Buscador con Ajax</title>
</head>

<body>
    <div class="container my-3 d-flex justify-content-center align-items-center gap-2">
        <label for="search" class="form-label">Buscar: </label>
        <input type="text" class="form-control" id="search">
    </div>
    <div class="container">
        <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Titulo</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                </tr>
            </thead>
            <tbody id="content">

            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>

</html>