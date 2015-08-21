<html>
<head>
  <title>Results</title>
  <script type="text/javascript"
  src="https://www.google.com/jsapi?autoload={
    'modules':[{
      'name':'visualization',
      'version':'1',
      'packages':['corechart']
    }]
  }"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">

  function getAverageTPS(server, workers, concurrency) {
    var data = $.ajax({
      url: "getData.php?server="+server+"&wrk="+workers+"&conc="+concurrency,
      dataType:"json",
      async: false
    }).responseText;

    var obj = jQuery.parseJSON(data);
    var avgTPS = 0;
    $.each(obj, function(key,value) {
      avgTPS += parseInt(value.tps);
    });
    return parseInt(avgTPS / 3);
  }

  console.log(getAverageTPS('GW', '500', '100'));

  google.setOnLoadCallback(drawChart500);
  google.setOnLoadCallback(drawChart1000);

  function drawChart500() {
    var data = google.visualization.arrayToDataTable([
      ['Concurrency', 'GW', 'A2Netty', 'PTT', 'NHTTP'],
      ['100',  getAverageTPS('GW', '500', '100'), getAverageTPS('A2Netty', '500', '100'), getAverageTPS('PTT', '500', '100'), getAverageTPS('NHTTP', '500', '100')],
      ['500',  getAverageTPS('GW', '500', '500'), getAverageTPS('A2Netty', '500', '500'), getAverageTPS('PTT', '500', '500'), getAverageTPS('NHTTP', '500', '500')],
      ['1000',  getAverageTPS('GW', '500', '1000'), getAverageTPS('A2Netty', '500', '1000'), getAverageTPS('PTT', '500', '1000'), getAverageTPS('NHTTP', '500', '1000')],
      ['2500',  getAverageTPS('GW', '500', '2500'), getAverageTPS('A2Netty', '500', '2500'), getAverageTPS('PTT', '500', '2500'), getAverageTPS('NHTTP', '500', '2500')],
      ['5000',  getAverageTPS('GW', '500', '5000'), getAverageTPS('A2Netty', '500', '5000'), getAverageTPS('PTT', '500', '5000'), getAverageTPS('NHTTP', '500', '5000')],
      ['10000',  getAverageTPS('GW', '500', '10000'), getAverageTPS('A2Netty', '500', '10000'), getAverageTPS('PTT', '500', '10000'), getAverageTPS('NHTTP', '500', '10000')],
    ]);

    var options = {
      title: 'Current Performance Results: 500 Workers',
      curveType: 'function',
      legend: { position: 'bottom' },
      vAxis: { title: "Concurrency" },
      hAxis: {
         title: "TPS",
      }
      pointSize: 5,
    };

    var chart = new google.visualization.LineChart(document.getElementById('500_worker'));

    chart.draw(data, options);
  }

  function drawChart1000() {
    var data = google.visualization.arrayToDataTable([
      ['Concurrency', 'GW', 'A2Netty', 'PTT', 'NHTTP'],
      ['100',  getAverageTPS('GW', '1000', '100'), getAverageTPS('A2Netty', '1000', '100'), getAverageTPS('PTT', '1000', '100'), getAverageTPS('NHTTP', '1000', '100')],
      ['500',  getAverageTPS('GW', '1000', '500'), getAverageTPS('A2Netty', '1000', '500'), getAverageTPS('PTT', '1000', '500'), getAverageTPS('NHTTP', '1000', '500')],
      ['1000',  getAverageTPS('GW', '1000', '1000'), getAverageTPS('A2Netty', '1000', '1000'), getAverageTPS('PTT', '1000', '1000'), getAverageTPS('NHTTP', '1000', '1000')],
      ['2500',  getAverageTPS('GW', '1000', '2500'), getAverageTPS('A2Netty', '1000', '2500'), getAverageTPS('PTT', '1000', '2500'), getAverageTPS('NHTTP', '1000', '2500')],
      ['5000',  getAverageTPS('GW', '1000', '5000'), getAverageTPS('A2Netty', '1000', '5000'), getAverageTPS('PTT', '1000', '5000'), getAverageTPS('NHTTP', '1000', '5000')],
      ['10000',  getAverageTPS('GW', '1000', '10000'), getAverageTPS('A2Netty', '1000', '10000'), getAverageTPS('PTT', '1000', '10000'), getAverageTPS('NHTTP', '1000', '10000')],
    ]);

    var options = {
      title: 'Current Performance Results: 1000 Workers',
      curveType: 'function',
      legend: { position: 'bottom' },
      vAxis: { title: "TPS" },
      hAxis: {
         title: "Concurrency",
      }
      pointSize: 5,
    };

    var chart = new google.visualization.LineChart(document.getElementById('1000_worker'));

    chart.draw(data, options);
  }
  </script>
</head>
<body>
  <div id="500_worker" style="width: 900px; height: 500px; float: left;"></div>
  <div id="1000_worker" style="width: 900px; height: 500px; float: left;"></div>
</body>
</html>
