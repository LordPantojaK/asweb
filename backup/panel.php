<?php

include("config.inc.php");
include("validate.inc.php");

include("header.inc.php");

?>
<script>
	strLED1 = "";
	strLED2 = "";
	strLED3 = "";
	strLED4 = "";
	var LED3_state = 0;
	var LED4_state = 0;
		function GetArduinoIO()
		{
			nocache = "&nocache=" + Math.random() * 1000000;
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if (this.readyState == 4) {
					if (this.status == 200) {
						if (this.responseXML != null) {
							// XML file received - contains analog values, switch values and LED states
							var count;
							// get analog inputs
							var num_an = this.responseXML.getElementsByTagName('analog').length;
							for (count = 0; count < num_an; count++) {
								document.getElementsByClassName("analog")[count].innerHTML =
									this.responseXML.getElementsByTagName('analog')[count].childNodes[0].nodeValue;
							}
							// get switch inputs
							var num_an = this.responseXML.getElementsByTagName('switch').length;
							for (count = 0; count < num_an; count++) {
								document.getElementsByClassName("switches")[count].innerHTML =
									this.responseXML.getElementsByTagName('switch')[count].childNodes[0].nodeValue;
							}
							// LED 1
							if (this.responseXML.getElementsByTagName('LED')[0].childNodes[0].nodeValue === "checked") {
								document.LED_form.LED1.checked = true;
							}
							else {
								document.LED_form.LED1.checked = false;
							}
							// LED 2
							if (this.responseXML.getElementsByTagName('LED')[1].childNodes[0].nodeValue === "checked") {
								document.LED_form.LED2.checked = true;
							}
							else {
								document.LED_form.LED2.checked = false;
							}
							// LED 3
							if (this.responseXML.getElementsByTagName('LED')[2].childNodes[0].nodeValue === "on") {
								document.getElementById("LED3").innerHTML = "LED 3 is ON (D8)";
								LED3_state = 1;
							}
							else {
								document.getElementById("LED3").innerHTML = "LED 3 is OFF (D8)";
								LED3_state = 0;
							}
							// LED 4
							if (this.responseXML.getElementsByTagName('LED')[3].childNodes[0].nodeValue === "on") {
								document.getElementById("LED4").innerHTML = "LED 4 is ON (D9)";
								LED4_state = 1;
							}
							else {
								document.getElementById("LED4").innerHTML = "LED 4 is OFF (D9)";
								LED4_state = 0;
							}
						}
					}
				}
			}
			// send HTTP GET request with LEDs to switch on/off if any
			request.open("GET", "ajax_inputs" + strLED1 + strLED2 + strLED3 + strLED4 + nocache, true);
			request.send(null);
			setTimeout('GetArduinoIO()', 1000);
			strLED1 = "";
			strLED2 = "";
			strLED3 = "";
			strLED4 = "";
		}
		// service LEDs when checkbox checked/unchecked
		function GetCheck(){
    
			if (LED_form.LED1.checked) {
				strLED1 = "&LED1=1";
			}
			else {
				strLED1 = "&LED1=0";
			}
			if (LED_form.LED2.checked) {
				strLED2 = "&LED2=1";
			}
			else {
				strLED2 = "&LED2=0";
			}
                        if (LED_form7.FOCO.checked) {
                                alert('ok');
                                document.LED_form.LED1.checked =false;
                                strLED1 = "&FOCO=1";
                        }       
                        else {   
                                document.LED_form.LED1.checked = true;
                                strLED1 = "&FOCO=0";
                        }
                
		}
		function GetButton1()
		{
			if (LED3_state === 1) {
				LED3_state = 0;
				strLED3 = "&LED3=0";
			}
			else {
				LED3_state = 1;
				strLED3 = "&LED3=1";
			}
		}
		function GetButton2()
		{
			if (LED4_state === 1) {
				LED4_state = 0;
				strLED4 = "&LED4=0";
			}
			else {
				LED4_state = 1;
				strLED4 = "&LED4=1";
			}
		}
	function realizaProceso(valorCaja1, valorCaja2){
       		var parametros = {
                	"valorCaja1" : valorCaja1,
                	"valorCaja2" : valorCaja2
        	};
        	$.ajax({
                	data:  parametros,
                	url:   'ejemplo_ajax_proceso.php',
                	type:  'post',
                	beforeSend: function () {
                        	$("#resultado").html("Procesando, espere por favor...");
                	},
                	success:  function (response) {
                        	$("#resultado").html(response);
                	}
       		 });
	}
        
	</script>
	<style>
  * { margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;
  }
/*body, html { padding: 3px 3px 3px 3px; background-color: #222; font-family: Verdana, sans-serif ; font-size: 11pt; text-align: center; }*/
  div.main_page {position: relative;display: table;width: 775px; margin-bottom: 3px; 
                 margin-left: auto; margin-right: auto; padding: 0px 0px 0px 0px;border-width: 2px; 
                 border-color: #212769 3px;  border-style: solid; background-color: #FFFFFF; 
                 text-align: center;
  }
  div.page_header { height: 55px; width: 100%; background-color: #F5F6F7;
  }
  .IO_box { float: left; margin: 0 15px 15px 0; border: 1px solid blue; padding: 0 5px 0 5px; width: 120px;
  }
  h1 { font-size: 120%;	color: blue; margin: 0 0 10px 0;
  }
  h2 { font-size: 85%; color: #5734E6; margin: 5px 0 5px 0;
  }
  p, form, button {font-size: 80%; color: #252525;
  }
  .small_text {	font-size: 70%; color: #737373;
  }
  .out_box { float: left; margin: 0 10px 10px 0; border: 2px solid blue; padding: 0 1px 0 1px; min-width: 180px;
  }
  .caja{ float:left; width:98%; magin: 10px 2px 2px 10px; border: 2px solid black; padding: 0 5px 0 5px; min-width: 280px;
  }
  input { margin: 10px;
  }
  input { vertical-align: -3px;
  }
  h1 { font-size: 120%;	color: blue; margin: 0 0 10px 0;
  }
  h2 { font-size: 85%; color: #5734E6; margin: 5px 0 5px 0;
  }
  p, form, button { font-size: 80%; color: #252525;
  }
  .small_text {	font-size: 80%;	color: #737373;
  }
	</style>
<?php 
include("menu.inc.php");
?>
        <div class="main_page">
        <h1>Arduino Ajax I/O</h1>
        <div class="IO_box">
			<h2>Analog Inputs</h2>
			<p class="small_text">A0 used by Ethernet shield</p>
			<p class="small_text">A1 used by Ethernet shield</p>
			<p>A2: <span class="analog">...</span></p>
			<p>A3: <span class="analog">...</span></p>
			<p>A4: <span class="analog">...</span></p>
			<p>A5: <span class="analog">...</span></p>
		</div>
		<div class="IO_box">
			<h2>Switch Inputs</h2>
			<p class="small_text">D0: used by serial RX</p>
			<p class="small_text">D1: used by serial TX</p>
			<p>Switch 1 (D2): <span class="switches">...</span></p>
			<p>Switch 2 (D3): <span class="switches">...</span></p>
			<p class="small_text">D4: used by Ethernet shield</p>
			<p>Switch 3 (D5): <span class="switches">...</span></p>
		</div>
		<div class="IO_box">
			<h2>LEDs Using Checkboxes</h2>
			<form id="check_LEDs" name="LED_form">
				<input type="checkbox" name="LED1" value="0" onclick="GetCheck()" />LED 1 (D6)<br /><br />
				<input type="checkbox" name="LED2" value="0" onclick="GetCheck()" />LED 2 (D7)<br /><br />
			</form>
		</div>
		<div class="IO_box">
			<h2>LEDs Using Buttons</h2>
			<button type="button" id="LED3" onclick="GetButton1()">LED 3 is OFF (D8)</button><br /><br />
			<button type="button" id="LED4" onclick="GetButton2()">LED 4 is OFF (D9)</button><br /><br />
			<p class="small_text">D10 to D13 used by Ethernet shield</p>
		</div>
                <script>
			function showEstado(str) {
    				if (str == "") {
        				document.getElementById("txtHint").innerHTML = "";
        				return;
    				} else {
        				if (window.XMLHttpRequest) {
            					// code for IE7+, Firefox, Chrome, Opera, Safari
            					xmlhttp = new XMLHttpRequest();
        				} else {
            					// code for IE6, IE5
            					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        				}
        				xmlhttp.onreadystatechange = function() {
            					if (this.readyState == 4 && this.status == 200) {
                					document.getElementById("txtHint").innerHTML = this.responseText;
            					}
        				};
       					xmlhttp.open("GET","getestado.php?q="+str,true);
        				xmlhttp.send();
    				}
			}
		</script>
                <div class="IO_box">
                        <form>
			<select name="leds" onchange="showEstado(this.value)">
  				<option value="">Seleccionar LED:</option>
  				<option value="1">LED 1</option>
  				<option value="2">LED 2</option>
  				<option value="3">LED 3</option>
  				<option value="4">LED 4</option>
  			</select>
			</form>
			<br>
			<div id="txtHint"><b>Aqui se muestra el estado del led ...</b></div>
                </div>
               <div class="caja">
               <br>
               <h1>Arduino MEGA 24 Output</h1>
		<div class="out_box">
			<form class="check_LEDs" name="LED_form1">
				<input type="checkbox" name="LED1" value="0" onclick="GetCheck('LED1', this)" />LED 1 (D26)
				<input type="checkbox" name="LED2" value="0" onclick="GetCheck('LED2', this)" />LED 2 (D27)<br />
				<input type="checkbox" name="LED3" value="0" onclick="GetCheck('LED3', this)" />LED 3 (D28)
				<input type="checkbox" name="LED4" value="0" onclick="GetCheck('LED4', this)" />LED 4 (D29)
			</form>
		</div>
		<div class="out_box">
			<form class="check_LEDs" name="LED_form2">
				<input type="checkbox" name="LED5" value="0" onclick="GetCheck('LED5', this)" />LED 5 (D30)
				<input type="checkbox" name="LED6" value="0" onclick="GetCheck('LED6', this)" />LED 6 (D31)<br />
				<input type="checkbox" name="LED7" value="0" onclick="GetCheck('LED7', this)" />LED 7 (D32)
				<input type="checkbox" name="LED8" value="0" onclick="GetCheck('LED8', this)" />LED 8 (D33)
			</form>
		</div>
<!---		<div class="out_box">
			<form class="check_LEDs" name="LED_form3">
				<input type="checkbox" name="LED9" value="0" onclick="GetCheck('LED9', this)" />LED 9 (D34)
				<input type="checkbox" name="LED10" value="0" onclick="GetCheck('LED10', this)" />LED 10 (D35)<br />
				<input type="checkbox" name="LED11" value="0" onclick="GetCheck('LED11', this)" />LED 11 (D36)
				<input type="checkbox" name="LED12" value="0" onclick="GetCheck('LED12', this)" />LED 12 (D37)
			</form>
		</div>
		<div class="out_box">
			<form class="check_LEDs" name="LED_form4">
				<input type="checkbox" name="LED13" value="0" onclick="GetCheck('LED13', this)" />LED 13 (D38)
				<input type="checkbox" name="LED14" value="0" onclick="GetCheck('LED14', this)" />LED 14 (D39)<br />
				<input type="checkbox" name="LED15" value="0" onclick="GetCheck('LED15', this)" />LED 15 (D40)
				<input type="checkbox" name="LED16" value="0" onclick="GetCheck('LED16', this)" />LED 16 (D41)
			</form>
		</div>
--->		<div class="out_box">
			<form class="check_LEDs" name="LED_form5">
				<input type="checkbox" name="LED17" value="0" onclick="GetCheck('LED17', this)" />LED 17 (D42)
				<input type="checkbox" name="LED18" value="0" onclick="GetCheck('LED18', this)" />LED 18 (D43)<br />
				<input type="checkbox" name="LED19" value="0" onclick="GetCheck('LED19', this)" />LED 19 (D44)
				<input type="checkbox" name="LED20" value="0" onclick="GetCheck('LED20', this)" />LED 20 (D45)
			</form>
		</div>
		<div class="out_box">
			<form class="check_LEDs" name="LED_form6">
				<input type="checkbox" name="LED21" value="0" onclick="GetCheck('LED21', this)" />LED 21 (D46)
				<input type="checkbox" name="LED22" value="0" onclick="GetCheck('LED22', this)" />LED 22 (D47)<br />
				<input type="checkbox" name="LED23" value="0" onclick="GetCheck('LED23', this)" />LED 23 (D48)
				<input type="checkbox" name="LED24" value="0" onclick="GetCheck('LED24', this)" />LED 24 (D49)
			</form>
		</div>
                <div class="out_box">
                <form class="check_LEDs" name="LED_form7">
                <input type="checkbox" name="FOCO" id="valor1" value="1" onclick="GetCheck('FOCO', this)"/>FOCO
                <input type="checkbox" name="FOCO" id="valor2" value="0" onclick="GetCheck('FOOO', this)"/>FOCO
                Realiza suma
                <input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>
                </form>
                <br>Resultado: <span id="resultado">0</span>
                </div>
              </div>
         </div>
<?php 
include("footer.inc.php");
?>

