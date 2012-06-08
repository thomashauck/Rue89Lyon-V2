<!doctype html>
<html lang="en">
   <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Sarkozy', 'Hollande', 'Abstention'],
          ['Strasbourg',  43,      57,   12],
          ['Alsace',  51,      49,   10],
          ['France',  52,       48,    11],
        ]);

         var options = {
            legend: {position: 'bottom'},
            title: 'Pourcentage exprimé',
            hAxis: {title: 'Résultats', titleTextStyle: {color: 'black'}},
            animation:{
               duration: 1000,
               easing: 'out',
            },
            colors : ['#B2DFEE','pink','#CCCCCC']
         };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
      <title>Graph résultats à l'élection présidentielle Mai 2012</title>
   </head>

   <body>
      <div id="chart_div" style="width:464px; height: 500px;"></div>
   </body>
</html>