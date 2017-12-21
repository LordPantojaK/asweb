<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Pagina no encontrada</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
   <!-- <link href="css/style.css" rel="stylesheet">-->
<style>

@charset "utf-8";

/* ============================== */
/* 
  - Title: Turtle
  - Autor: Frekvenca spleta s.p. / Frequency Themes
  - Email: info@frekvencaspleta.si
  - Version: 1.00
*/
/* ============================== */

/* Fonts --------------------------------------------------------*/
@font-face {
    font-family: 'sansationbold';
    src: url('../fonts/sansation_bold.eot');
    src: url('../fonts/sansation_bold.eot?#iefix') format('embedded-opentype'),
         url('../fonts/sansation_bold.woff') format('woff'),
         url('../fonts/sansation_bold.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'sansationregular';
    src: url('../fonts/sansation_regular.eot');
    src: url('../fonts/sansation_regular.eot?#iefix') format('embedded-opentype'),
         url('../fonts/sansation_regular.woff') format('woff'),
         url('../fonts/sansation_regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

/******************************* RESET *******************************/

html, body, div, span, object, iframe,
h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video 
{margin:0; padding:0; border:0; outline:0; font-size:100%; vertical-align:baseline; background:transparent;}
html {overflow-y: scroll;}
article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {display:block;}
ul {list-style:none;}
blockquote, q {quotes:none;}
blockquote:before, blockquote:after, q:before, q:after {content:''; content:none;}
a {margin:0; padding:0; font-size:100%; vertical-align:baseline; background:transparent;}
ins {background-color:#ff9; color:#000; text-decoration:none;}
mark {background-color:#ff9; color:#000; font-style:italic; font-weight:bold;}
del {text-decoration: line-through;}
abbr[title], dfn[title] {border-bottom:1px dotted; cursor:help;}
table {border-collapse:collapse; border-spacing:0;}
hr {display:block; height:0; background-color: #c7c7c7; border-top: 1px solid #c7c7c7; border-left:0; border-right:0; border-bottom: 1px solid #FFF; margin:1em 0; padding:0;}
*+html hr {height: 2px;}

/* Standar Styles --------------------------------------------------------*/
html,
body {
  width: 100%;
  height: 100%;
}

body {
  background: url('../images/bg.gif');
  font-family: 'sansationregular';
}

.background {
  width: 100%;
  height: 900px;
  background: url('frequencythemes.com/turtle/images/background.jpg') no-repeat center top;
}

::-webkit-input-placeholder {
   color: #FFF;
}

:-moz-placeholder { /* Firefox 18- */
   color: #FFF;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #FFF;  
}

:-ms-input-placeholder {  
   color: #FFF;  
}

textarea:hover, 
input:hover, 
textarea:active, 
input:active, 
textarea:focus, 
input:focus,
button:focus,
button:active,
button:hover {
  outline:0px !important;
  -webkit-appearance:none;
}

a:focus {
	outline: none;
}
/* Content Styles --------------------------------------------------------*/
.wrapper {
  margin: 0 auto;
  width: 990px;
  position: relative;
}

.turtle {
  position: absolute;
  top: 416px;
  left: 0;
}

.turtle {
  position: relative;
  float: left;
  -moz-animation: 6s ease 0s normal none infinite swing;
  -moz-transform-origin: center top;
  -webkit-animation:swing 6s infinite ease-in-out;
  -webkit-transform-origin:bottom;
  -o-animation: 6s ease 0s normal none infinite swing;
  -o-transform-origin: center top;
  -o-animation:swing 6s infinite ease-in-out;
  -o-transform-origin:bottom;
  -ms-animation: 6s ease 0s normal none infinite swing;
  -ms-transform-origin: center top;
  -ms-animation:swing 6s infinite ease-in-out;
  -ms-transform-origin:bottom;
  animation: 6s ease 0s normal none infinite swing;
  transform-origin: center top;
  animation:swing 6s infinite ease-in-out;
  transform-origin:bottom;
  z-index: 1000;
}

@-moz-keyframes swing {
  0%{-moz-transform:rotate(-6deg)}
  50%{-moz-transform:rotate(6deg)}
  100%{-moz-transform:rotate(-6deg)}
}

@-webkit-keyframes swing {
  0%{-webkit-transform:rotate(-6deg)}
  50%{-webkit-transform:rotate(6deg)}
  100%{-webkit-transform:rotate(-6deg)}
}

@-o-keyframes swing {
  0%{-o-transform:rotate(-6deg)}
  50%{-o-transform:rotate(6deg)}
  100%{-o-transform:rotate(-6deg)}
}

@-ms-keyframes swing {
  0%{-ms-transform:rotate(-6deg)}
  50%{-ms-transform:rotate(6deg)}
  100%{-ms-transform:rotate(-6deg)}
}

@keyframes swing {
  0%{transform:rotate(-6deg)}
  50%{transform:rotate(6deg)}
  100%{transform:rotate(-6deg)}
}

.shadow {
  position: absolute;
  top: 756px;
  left: 0;
  width: 619px;
  height: 79px;
  background: url('../images/shadow.png') no-repeat;
}

.wall-p-c {
  position: absolute;
  top: 420px;
  left: 550px;
}

.description {
  position: absolute;
  top: 120px;
  left: 64px;
}

.description h1 {
  font-family: 'sansationbold';
  font-size: 120px;
  color: #FFF;
}

.description h2 {
  font-family: 'sansationbold';
  font-size: 42px;
  color: #f5d4ff;
  margin-bottom: 5px;
}

.description p {
  font-family: Tahoma, Verdana, Arial, Helvetica;
  font-size: 26px;
  color: #d1e881;
}

.sidebar {
  position: absolute;
  top: 434px;
  left: 720px;
}

.sidebar form {
  margin-bottom: 26px;
}

.sidebar input[type='text'],
.sidebar input[type='search'] {
  width: 203px;
  height: 55px;
  font-family: 'sansationregular';
  background: url('../images/input.png') no-repeat;
  border: 0;
  color: #FFF;
  font-size: 15px;
  text-align: center;
}

.sidebar input[type='submit'] {
  float: left;
  width: 54px;
  height: 54px;
  background: url('../images/icon-search.png') no-repeat;
  border: 0;
  cursor: pointer;
}

.title {
  color: #FFF;
  font-size: 14px;
  padding: 19px 0 19px 63px;
  background: url('../images/icon-link.png') no-repeat;
}

.links ul {
  margin: 5px 0 0 73px;
}

.links ul li a {
  display: inline-block;
  font-size: 11px;
  color: #c7dd75;
  text-decoration: none;
  padding: 3px 14px;
  margin-bottom: 5px;
}

.links ul li.active a,
.links ul li a:hover {
  background: #bed46f;
  color: #3b1a45;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}


/******************************* RESPONSIVE *******************************/
@media (max-width: 1000px) {
	.background {
	  background: url('frequencythemes.com/turtle/images/background.jpg') no-repeat center -56px;
	}
	.wrapper {
	  width: 768px;
	}
	.description h1 {
	  font-size: 94px;
	}
	.description h2 {
	  font-size: 32px;
	}
	.description p {
	  font-size: 22px;
	}
	.turtle {
	  top: 370px;
	  width: 500px;
	}
	.shadow {
	  top: 666px;
	  width: 560px;
	  background-size: 540px;
	}
	.wall-p-c {
	  width: 110px;
	  top: 401px;
	  left: 494px;
	}
	.sidebar {
	  width: 260px;
	  top: 561px;
	  left: 508px;
	}
}

@media (max-width: 768px) {
	.background {
	  background: url('frequencythemes.com/turtle/images/background.jpg') no-repeat center -175px;
	}
	.wrapper {
	  width: 580px;
	}
	.description {
	  top: 40px;
	}
	.description h1 {
	  font-size: 76px;
	}
	.description h2 {
	  font-size: 27px;
	}
	.description p {
	  font-size: 18px;
	}
	.turtle {
	  top: 248px;
	  left: 30px;
	}
	.shadow {
	  top: 544px;
	  left: 30px;
	}
	.wall-p-c {
	  left: 470px;
	}
	.sidebar {
	  width: 260px;
	  top: 635px;
	  left: 50%;
	  margin-left: -130px;
	}
	.links ul {
	  margin-bottom: 30px;
	}
}

@media (max-width: 580px) {
	.background {
	  background: url('frequencythemes.com/turtle/images/background.jpg') no-repeat center -349px;
	  height: 740px;
	}
	.wrapper {
	  width: 300px;
	}
	.description {
	  top: 20px;
	  left: 0;
	  padding: 0 20px;
	}
	.description h1 {
	  font-size: 54px;
	}
	.description h2 {
	  font-size: 22px;
	}
	.description p {
	  font-size: 18px;
	}
	.turtle {
	  top: 219px;
	  left: 0;
	  width: 274px;
	}
	.shadow {
	  top: 383px;
	  width: 300px;
	  background-size: 300px;
	  left: 0;
	}
	.wall-p-c {
	  left: 230px;
	  width: 63px;
	  top: 234px;
	}
	.sidebar {
	  width: 260px;
	  top: 455px;
	}
	.sidebar input[type='text'],
	.sidebar input[type='search'] {
	  width: 190px;
	}
}
</style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>

	<div class="background">
		<div class="wrapper">
			
			<div class="description">
				<h1>Oops!</h1>
				<h2>Parece que algo salió completamente mal</h2>
				<p>¡Prueba otra página!</p>
				</div>
			
			<img src="images/turtle.png" class="turtle" alt="">
			<div class="shadow"></div>
			
			<img src="images/wall-power-connection.png" class="wall-p-c" alt="">
			
			<div class="sidebar">
			<form>
					<input type="submit" value="">
					<input type="text" name="" placeholder="Buscar pagina">
				</form>
				
				<div class="links">
					<div class="title">Aquí hay algunos enlaces útiles:</div>
					
					<ul>
						<li><a href="#">About Us</a></li>
						<li class="active"><a href="#">Every Day Living</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

  </body>
</html>

