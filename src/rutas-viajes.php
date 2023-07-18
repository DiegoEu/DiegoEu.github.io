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
        <?php
        include_once './ViajesUtil.php';
        $obj = new ViajesUtil();
        $rutcod = $_REQUEST['rutcod'];
        $vec = $obj->listarViajes($rutcod);
        ?>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Codigo de viaje
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hora
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Costo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Pasajero registrados</span>
                        </th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    foreach ($vec as $uni){
                        echo "<tr class='bg-white border-b hover:bg-gray-50'>";
                        echo "<th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap'>".$uni['VIANRO']."</th>";
                        echo "<td class='px-6 py-4'>$uni[5]</td>";
                        echo "<td class='px-6 py-4'>$uni[4]</td>";
                        echo "<td class='px-6 py-4'>$uni[6]</td>";
                        echo "<td class='px-6 py-4 text-right'><a href='../src/viajes-pasajeros.php?rutcod=$rutcod&vianro=".$uni['VIANRO']."' class='font-medium text-blue-600 hover:underline'>Información</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            
        </div>
        <div class="inline-flex mt-2 xs:mt-0">
            <a href="../src/rutas-contenedor.php">
            <button class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900">
                    Volver
            </button>
            </a>
        </div>
    </body>
</html>