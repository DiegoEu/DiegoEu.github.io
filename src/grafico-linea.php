

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
    <link
      rel="stylesheet"
      href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link href="../dist/output.css" rel="stylesheet">
    <title>Dashboard | Notus JS by Creative Tim</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div
      class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700"
    >
      <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
        <div class="flex flex-wrap items-center">
          <div class="relative w-full max-w-full flex-grow flex-1">
            <h6
              class="uppercase text-blueGray-100 mb-1 text-xs font-semibold"
            >
              Overview
            </h6>
            <h2 class="text-black text-xl font-semibold">
              Sales value
            </h2>
          </div>
        </div>
      </div>
      <div class="p-4 flex-auto">
        <!-- Chart -->
        <div class="relative">
          <canvas id="line-chart" height="450px"></canvas>
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
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [65, 78, 66, 44, 56, 67, 75],
                fill: false,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [40, 68, 86, 74, 56, 60, 87],
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "black",
            },
            legend: {
              labels: {
                fontColor: "black",
              },
              align: "end",
              position: "bottom",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(33, 37, 41, 0.3)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "black",
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(33, 37, 41, 0.3)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "black",
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);
      })();
    </script>
  </body>
</html>

