<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../dist/output.css" rel="stylesheet">
    </head>
    <body>
        <div class="grid-cols-2 flex items-center">
        <!--Grafico Empleados/viajes-->
            <div class="p-4 w-1/2">
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-4">
                    <iframe src="../src/grafico-circulo.php" frameborder="0" height="500px" width="100%"></iframe>
                </div>
            </div>
        <!--Grafico Viajes/Popularidad-->
            <div class="p-4 w-1/2">
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-4">
                    <iframe src="../src/grafico-barra.php" frameborder="0" height="500px" width="100%"></iframe>
                </div>
            </div>
        </div>
        <!--Grafico Empleados/Edad-->
        <div class="p-4 ">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <iframe src="../src/grafico-linea.php" frameborder="0" height="600px" width="100%"></iframe>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>