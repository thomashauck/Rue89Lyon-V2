<!doctype html>
<html lang="en">
   <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sarkozy', 'Hollande', '', 'Abstention'],
          ['Strasbourg',  45.30,      54.70, 0,  23.23],
          ['Alsace',  63.40,      36.60, 0  ,24.40],
          ['France',  48.50,       51.50, 0  , 18.64],
        ]);

         var options = {
            legend: {position: 'bottom'},
            title: 'Résultats définitis (pourcentages des suffrages exprimés)',
            hAxis: {title: 'Résultats', titleTextStyle: {color: 'black'}},
            animation:{
               duration: 1000,
               easing: 'out',
            },
            colors : ['#B2DFEE','pink','#ffffff', '#CCCCCC']
         };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <h2 style="font-size:11px;font-family:arial;margin:0 0 -25px 0;width:464px;text-align:center;">Résultats à 20h00 (pourcentages des suffrages exprimés)</h2>
      <title>Graph résultats à l'élection présidentielle Mai 2012</title>
   </head>


      <div id="chart_div" style="width:464px; height: 300px;"></div>
   </body>
</html>