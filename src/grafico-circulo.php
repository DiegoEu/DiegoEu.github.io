<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../../assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <link href="../dist/output.css" rel="stylesheet">
    <title></title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <?php
    include_once '../src/ViajesUtil.php';
    $obj = new ViajesUtil();
    $vec = $obj->graficaChoferes();
    $label = "";
    $data = "";
    foreach ($vec as $uni){
      $label = $label."'".$uni[0]."',";
      $data = $data.$uni[1].",";
    }
    ?>
    <div
      class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
    >
      <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
        <div class="flex flex-wrap items-center">
          <div class="relative w-full max-w-full flex-grow flex-1">
            <h6
              class="uppercase text-blueGray-400 mb-1 text-xs font-semibold"
            >
              Conductores
            </h6>
            <h2 class="text-blueGray-700 text-xl font-semibold">
              Numero total de viajes
            </h2>
          </div>
        </div>
      </div>
      <div class="p-4 flex-auto">
        <!-- Chart -->
        <div class="relative h-350-px">
          <canvas id="doughnut-chart" height="350px"></canvas>
        </div>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script type="text/javascript">

      (function () {
        /* Chart initialisations */
        /* Bar Chart */
        var config = {
          type: "doughnut",
          data: {
            labels: [
              <?=$label?>
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: [
                    'rgba(63, 81, 181, 0.5)',
                    'rgba(77, 182, 172, 0.5)',
                    'rgba(66, 133, 244, 0.5)',
                    'rgba(156, 39, 176, 0.5)',
                    'rgba(233, 30, 99, 0.5)',
                    'rgba(66, 73, 244, 0.4)',
                    'rgba(66, 133, 244, 0.2)',
                    ],
                data: [<?=$data?>],
                fill: false,
                barThickness: 8,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)",
              },
              align: "end",
              position: "bottom",
            },
            
          },
        };
        ctx = document.getElementById("doughnut-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
      })();
    </script>
  </body>
</html>

