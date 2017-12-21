<?php
include("config.inc.php");
//include("validate.inc.php");

$serie = "766";
$mes = date("m");
$dia = date("d");

//echo "<br>".$dia."-".$mes."-".$ano."<br>";
$intervalo = 0;
echo date("d-m-Y");
function temperatura_dia($serie,$intervalo,$mes,$dia){
 $ano=date("Y");
 $consulta = mysqli_query($link,"SELECT  * FROM datos");
// $consulta = mysqli_query($link, "SELECT UNIX_TIMESTAMP(fecha),tempreratura from `datos` WHERE year( `fecha` ) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) ='$dia' AND `serie` = '$serie';");  
//$row=mysqli_fetch_array($consulta, MYSQLI_ASSOC);
while ($row = mysqli_fetch_assoc($consulta,MYSQLI_ASSOC)) {

        echo $row[0]." ".$row[1]."<br />";
}
/*
if (mysqli_num_rows() > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($consulta)) {
   	echo "[";
        echo (($row[0]*1000)-21600000);
        echo ",";
        echo $row[1];
        echo "],";
           
      for($x=0;$x<intervalo;$x++){
         $row=mysqli_fetch_array($consulta);
      }
    }

} else {
    echo "0 results";
}*/
/*
while($resultados = mysql_fetch_array($consulta)) {
      echo "[";
      echo (($resultados[0]*1000)-21600000);
      echo ",";
      echo $resultados[1];
      echo "],";
           
      for($x=0;$x<intervalo;$x++){
         $resultados=mysql_fetch_array($consulta);
      }
   }
   mysql_close();
*/ 
}

temperatura_dia($serie,$intervalo,$mes,$dia);

?><!---
<script src="jquery-2.1.4.min.js"></script>
<script src="highcharts.js"></script>
<script src="exporting.js"></script>
<script type="text/javascript">
$(document).ready(function() { 


var chart = {
               type: 'spline',
               zoomType:'x'
               //inverted: true
            }; 
            var title = {
               text: 'Temperatura en el dia'   
            };
            var subtitle = {
               text: '<?php echo "".$dia."-".$mes."-".date("Y").""; ?>'
            };
            var xAxis = {
               //reversed: false,
               title: {
                  enabled: true,
                  text: 'Hora'
               },
               type:'datetime',
               //labels: {
               //   formatter: function () {
               //      return this.value + 'km';
               //   }
               //},
               //maxPadding: 0.05,
              // showLastLabel: true
            };
            var yAxis = {
               title: {
                  text: 'Temperatura'
               },
               labels: {
                  formatter: function () {
                     return this.value + '\xB0';
                  }
               },
               lineWidth: 2
            };
            //var legend = {
            //   enabled: false 
            //};
            //var tooltip = {
            //   headerFormat:'<b>{series.name}</b><br/>',
            //   pointFormat: '{point.x} min: {point.y}\xB0C'
            //};
            //var plotOptions = {
            //   spline: {
            //      marker: {
            //         enable: false
            //     }
            //   }
           // };
            var series = [{
               name: 'Temperatura',
               data: [<?php temperatura_dia($serie,$intervalo,$mes,$dia); ?>]
            }];      
   
            var json = {};
            json.chart = chart;
            json.title = title;
            json.subtitle = subtitle;
           // json.legend = legend;
            //json.tooltip = tooltip;
            json.xAxis = xAxis;
            json.yAxis = yAxis;  
            json.series = series;
            //json.plotOptions = plotOptions;
            $('#container').highcharts(json);
});
</script>
<form>
<input type="date" name="cumpleanios" step="1" min="2017-01-01" max="2017-12-31" value="<?php echo date("Y-m-d");?>">
</form>
<div id="container" style="width: 100%; height: 500px; margin: 0 auto"></div>
-->
