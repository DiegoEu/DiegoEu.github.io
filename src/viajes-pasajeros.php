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
    <body onload="inic()">
        <?php
        include_once './ViajesUtil.php';
        $obj = new ViajesUtil();
        $vianro = $_REQUEST['vianro'];
        $rutcod = $_REQUEST['rutcod'];
        $vec = $obj->listarPasajeros($vianro);
        ?>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Codigo de boleto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Numero de asiento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pago
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Eliminar</span>
                        </th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    foreach ($vec as $uni){
                        echo "<tr class='bg-white border-b hover:bg-gray-50'>";
                        echo "<th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap'>".$uni['BOLNRO']."</th>";
                        echo "<td class='px-6 py-4'>$uni[1]</td>";
                        echo "<td class='px-6 py-4'>$uni[2]</td>";
                        echo "<td class='px-6 py-4'>$uni[3]</td>";
                        echo "<td class='px-6 py-4 text-right'><a href='../src/pasajeros-eliminar.php?rutcod=$rutcod&vianro=$vianro&bolnro=".$uni['BOLNRO']."' class='font-medium text-blue-600 hover:underline'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="inline-flex mt-2 xs:mt-0">
            <a href="../src/rutas-viajes.php?rutcod=<?=$rutcod?>">
            <button class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900">
                    Volver
            </button>
            </a>
        </div>
        <!--Form-->
        <br>
        <h3 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold mt-8">Nuevo boleto</h6>        
        <br>
        <form action="../src/pasajero-registrar.php">

        <input class="opacity-0" type="text" name="rutcod" id="txtruta" readonly>
        
        <input class="opacity-0" type="text" name="vianro" id="txtvia" readonly>
         
        <!--Nombres-->
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="nombre" id="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombres</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="apellido" id="apellido" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="apellido" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellidos</label>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 md:gap-6">
            <!--nro asiento-->
            <div class="relative z-0 w-full mb-6 group">
                <input type="number" max="40" min="1" name="nroasi" id="nroasi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="nroasi" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numero de asiento</label>
            </div>
            <!--tipo pasajero-->
            <fieldset>
            <div class="flex items-center mb-4">
                <input id="tipo_n" type="radio" name="tipopasaj" value="N" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                <label for="tipo_n" class="block ml-2 text-sm font-medium text-gray-900 ">
                Niño
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input id="tipo_a" type="radio" name="tipopasaj" value="A" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                <label for="tipo_a" class="block ml-2 text-sm font-medium text-gray-900">
                Adulto
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input id="tipo_e" type="radio" name="tipopasaj" value="E" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                <label for="tipo_e" class="block ml-2 text-sm font-medium text-gray-900">
                Estudiante
                </label>
            </div>
            </fieldset>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="number" min="0" max="1000" name="pago" id="pago" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="pago" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pago</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
        
        <script>
            function inic(){
                document.getElementById("txtvia").value = '<?=$vianro?>';
                document.getElementById("txtruta").value = '<?=$rutcod?>';
            }
l        </script>
    </body>
</html>