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
        $vec = $obj->listarRutas();
        ?>

        <?php
            $k = 0;
            $ms = 10;
            foreach ($vec as $uni){
                if($k==0){
                    echo "<div class='grid grid-cols-4'>";
                }
                echo "<div class='max-w-sm bg-white border border-gray-200 rounded-lg shadow mb-6 animate-fade-up animate-duration-500 animate-delay-[".$ms."ms] animate-ease-out'>";
                echo "<a href='../src/rutas-viajes.php?rutcod=".$uni['RUTCOD']."'><img class=' rounded-t-lg w-96 h-96 object-cover ' src='../img/$uni[1].jpg' alt='' /></a>";
                echo "<div class='p-5'>";
                echo "<a href='#'><h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'>$uni[1]</h5></a>";
                echo "<p class='mb-3 font-normal text-gray-700'>".$uni['RUTCOD']."</p>";
                echo "<a href='../src/rutas-viajes.php?rutcod=".$uni['RUTCOD']."' class='inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300'>Información";
                echo "<svg class='w-3.5 h-3.5 ml-2' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 10'>";
                echo "<path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5h12m0 0L9 1m4 4L9 9'/>";
                echo "</svg>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                $k++;
                $ms = $ms + 500;
                if($k==4){
                    echo "</div>";
                    $k=0;
                }
            }
            if($k!=0){
                echo "</div>";
            }
        ?>
        

    </body>
</html>