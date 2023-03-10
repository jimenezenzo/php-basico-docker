<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Listado de productos</h1>
                <?php
                    foreach ($products as $product)
                    {
                        echo "<strong>{$product->name}</strong> - {$product->description} <br>";
                    }
                ?>
                <hr>
                <p>
                    <a href="pdf.php">Exportar en PDF</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
