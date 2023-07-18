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
        include_once '../src/ViajesUtil.php';
        $obj = new ViajesUtil();
        $vec = $obj->listarChoferes();
        ?>
            
        <?php
            $ms = 10;
            foreach ($vec as $uni){
                echo "<a href='../src/conductor-info.php?codchof=".$uni['IDCOD']."' class='flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 mb-4 animate-fade-up animate-duration-500 animate-delay-[".$ms."ms] animate-ease-out' title='Mas información'>";
                echo "<img class='object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg' width='300px' heigth='300px' src='../img/".$uni['IDCOD'].".jpg' alt=''>";
                echo "<div class='flex flex-col justify-between p-4 leading-normal'>";
                echo "<h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'>$uni[1]</h5>";
                echo "<p class='mb-3 font-normal text-gray-700'> ".$uni['IDCOD'] ."| Ingreso:".$uni[2] ."| Categoria:".$uni[3] ."</p>";
                echo "</div>";
                echo "</a>";
                $ms = $ms + 30;
            }
        ?>

    </body>
</html>