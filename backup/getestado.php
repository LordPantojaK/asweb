
<?php
include("config.inc.php");

$q = intval($_GET['q']);

//$con = mysqli_connect('localhost','peter','abc123','my_db');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
echo "<form class='check_LEDs' name='LED_form1'>";
                        
//mysqli_select_db($con,"ajax_demo");
$sql="SELECT `id` , `nombre` , `estado` FROM `values` WHERE `id` = '".$q."'";
if ($result=mysqli_query($link,$sql)) {
    /* obtener un array asociativo */
    while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
    echo "<input type='checkbox' name='".$row[1]."' value='".$row[0]."' onclick='".alert('ok')."' />".$row[1]."";

       }
}
echo "</form>";
//
mysqli_close($link);
?>
