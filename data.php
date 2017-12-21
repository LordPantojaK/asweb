<?php
include("config.inc.php");
//include("validate.inc.php");
include("header.inc.php");

?>
<?php
$error="";

$serie = "766";
/* if($_POST["opc"]){
	if(strlen($_POST["opc"])>2){
	$serie=$_POST["opc"];
	$error=$_POST["opc"];
 	} else{
         $error="Todos los campos son obligatorios";
        }
}*/
if($_POST['Date']){
  $fecha = $_POST['Date']; 
  $obj_fecha  = date_create_from_format('Y-m-d', $fecha);
 // $fecha_con_formato = date_format($obj_fecha, "d/m/Y");
  $ano = date_format($obj_fecha, "Y");
  $mes = date_format($obj_fecha, "m");
  $dia = date_format($obj_fecha, "d");
  
}else{
  $ano=date("Y");
  $mes = date("m");
  $dia = date("d");
}
$intervalo = 0;

function temperatura_dia($link,$serie,$intervalo,$ano,$mes,$dia){
	$query = "SELECT UNIX_TIMESTAMP(fecha),tempreratura from `datos` WHERE year( `fecha` ) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) ='$dia' AND `serie` = '$serie';";
        
        if ($result=mysqli_query($link,$query)) {
        	/* obtener un array asociativo */
    		while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
			echo "[";
      			echo (($row[0]*1000)-21600000);
      			echo ",";
      			echo $row[1];
      			echo "],";
		}
        }
    
}
//include("menu.inc.php");
?>
<script type="text/javascript">
$(document).ready(function() { 
    //fecha today input data
    var now = new Date();
    var month = (now.getMonth() + 1);               
    var day = now.getDate();
    if(month < 10) 
        month = "0" + month;
    if(day < 10) 
        day = "0" + day;
    var today = now.getFullYear() + '-' + month + '-' + day;
    $('#datePicker').val(today);
    //Grafico
    var chart = {
               type: 'spline',
               zoomType:'x'
               //inverted: true
            }; 
            var title = {
               text: 'Temperatura en el dia'   
            };
            var subtitle = {
               text: '<?php echo "".$dia."-".$mes."-".$ano.""; ?>'
            };
            var xAxis = {
               //reversed: false,
               title: {
                  enabled: true,
                  text: 'Hora'
               },
               type:'datetime',
              /* labels: {
                  formatter: function () {
                     return this.value + 'R';
                  }
               },*/
               maxPadding: 0.05,
               showLastLabel: true
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
            var legend = {
               enabled: true 
            };
           /* var tooltip = {
               headerFormat:'<b>{series.name}</b><br/>',
               pointFormat: '{point.x} min: {point.y}\xB0C'
            };*/
            var plotOptions = {
                line: {
	        	dataLabels: {
				enabled: true
			},
		enableMouseTracking: true
		}
            };
            var series = [{
               name: 'Temperatura',
               data: [<?php temperatura_dia($link,$serie,$intervalo,$ano,$mes,$dia); ?>]
            }];      
   
            var json = {};
            json.chart = chart;
            json.title = title;
            json.subtitle = subtitle;
            //json.legend = legend;
            //json.tooltip = tooltip;
            json.xAxis = xAxis;
            json.yAxis = yAxis;  
            json.series = series;
            json.plotOptions = plotOptions;
            $('#container').highcharts(json);
});
</script>
<form method="post" action="data.php">
    <input type="date" name="Date" id="datePicker"/>
<?php
  /* if ($result=mysqli_query($link,"SELECT DISTINCT (serie) FROM datos")) {
       
       echo "<select name='Opc'>";
       echo "<option value=''>Seleccionar uno</option>";
         while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
             
              echo "<option value='".$row['serie']."'>".$rows['serie']."</option>";
	}
       echo "</select>" ;
    } */
?>
    <button>Revisar</button>
<?php 
if($error)
	echo "<div class='error'>$error</div>";
?>
</form>
<div id="container" style="width: 100%; height: 400px; margin: 0 auto"></div>
<?php 
//include("footer.inc.php");
?>

