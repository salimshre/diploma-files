<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<title>Coronavirus safety</title>
    <meta name="google" value="notranslate">
    <meta property="og:type" content="Make your own wonderful wish for you loved one" />
    <meta property="og:title" content="Coronavirus safety" />
    <meta property="og:url" content="https://www.google.com"/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>

*{
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
body{
	background: #2196F3;
}
.marqueeLeft{
	position: fixed;
	top: 0;
	left: 0.5%;
	width: auto;
	height: 100%;
	color: #000;
}
.marqueeRight{
	position: fixed;
	top: 0;
	right: 0.5%;
	width: auto;
	height: 100%;
	color: #000;
}
main{
	max-width: 400px;
	background: blue;
	margin: auto;
	margin-top: 30px;
	margin-bottom: 30px;
	position: relative;
	text-align: center;
	box-shadow: 3px 4px 41px 0 rgba(0, 0, 0, 0.64);
}
.overlay{
	background: rgba(0,0,0,0.4);
	width: 100%;
	height: 100%;
}
.animated-box{
	background: url('images/background.gif');
	width: 100%;
	height: 100px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.animated-box span{
	font-size: 40px;
	letter-spacing: 3px;
	text-transform: uppercase;
	font-family: monospace;
	font-weight: bold;
	color: #fff;
	text-shadow: 0 0 0.1em #fff,
	             0 0 0.2em #fff,
	             0 0 0.3em #fff, 
	             0 0 0.4em #f7f, 
	             0 0 0.6em #f0f, 
	             0 0 0.8em #f0f, 
	             0 0 1em #f0f, 
	             0 0 1.2em #f0f;
}
.main-design{
	padding: 30px 0;
	padding-bottom: 0;
	color: white;
}
.main-design p{
	font-size: 20px;
}
.design1,.design2,.design3,.design4{
	width: 80%;
	border-radius: 20px;
	margin: auto;
	padding: 5px;
	font-family: arial,sans-serif;
	font-size: 18px;
	font-weight: bold;
	line-height: 20px;
	margin-bottom: 20px;
	box-shadow:rgba(0, 0, 0, 0.2) 5px 5px 5px;
}
.design1,.design3{
	background: red;
}

.design2,.design4{
	background: yellow;
	color: black;
}
h3{
	font-size: 20px;
	letter-spacing: 3px;
	padding: 20px;
	line-height: 35px;
	text-align: justify-all;
}

.input-box{
	width: 100%;
	height: 40px;
	position: fixed;
	left: 0;
	bottom: 0;
	display: none;
}
.input-box input{
	width: 80%;
	height: 100%;
	float: left;
	text-align: center;
	font-size: 20px;
	background: yellow;
	color: red;
	border:none;
	outline: none;
}
.input-box input::placeholder{
	color: red;
}
.input-box button{
	width: 20%;
	height: 100%;
	float: left;
	background: #3F51B5;
	color: white;
	font-size: 20px;
	border:none;
	outline: none;
	cursor: pointer;
}
/* Start Animation Coding */
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

/* jackInTheBox animation*/
@-webkit-keyframes jackInTheBox {
  from {
    opacity: 0;
    -webkit-transform: scale(0.1) rotate(30deg);
    transform: scale(0.1) rotate(30deg);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
  }

  50% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }

  70% {
    -webkit-transform: rotate(3deg);
    transform: rotate(3deg);
  }

  to {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes jackInTheBox {
  from {
    opacity: 0;
    -webkit-transform: scale(0.1) rotate(30deg);
    transform: scale(0.1) rotate(30deg);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
  }

  50% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }

  70% {
    -webkit-transform: rotate(3deg);
    transform: rotate(3deg);
  }

  to {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.jackInTheBox {
  -webkit-animation-name: jackInTheBox;
  animation-name: jackInTheBox;
  animation-duration: 3s;
}

/* tada animation */
@-webkit-keyframes tada {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  10%,
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
  }

  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes tada {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  10%,
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
  }

  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.tada {
  -webkit-animation-name: tada;
  animation-name: tada;
  animation-duration: 3s;
}

/* coronavirus live coding */
.corona-title{
	font-size: 2rem;
	font-family: calibri;
	margin: 0;
	padding: 0;
}
#country-name{
   font-family: verdana;
   font-size: 20px;
   color: red;
   text-transform: uppercase;
   padding: 0;
   margin-bottom: 10px;
}
.coronavirus-box{
	width: 100%;
	height: auto;
	text-align: center;
}
.coronavirus-box h4{
	font-family: Candara;
	font-size: 16px;
	margin-bottom: 10px;
	color: #ccc;
}

.coronavirus-box h5{
	padding: 0;
	margin: 0;
	float: left;
	font-family: verdana;
	font-size: 25px;
}
.coronavirus-box i{
	font-size: 35px;
	float: right;
	color: yellow;
}
.coronavirus-box .corona-box1,.corona-box2{
 width: 100%;
 min-height: 80px;
}
.corona-box1 div:nth-child(1),
.corona-box2 div:nth-child(1),
.corona-box1 div:nth-child(2),
.corona-box2 div:nth-child(2){
	width: 50%;
	height: 100%;
	float: left;
	padding: 10px 25px;
	background: #000099;
	box-shadow: 7px 7px 15px rgba(0,0,0, .15), -7px -7px 20px rgba(0, 0, 0, 1), 0px 0px 4px rgba(0, 0, 0, .2) !important;
}
/* social share coding*/
#share-box{
	width: 100%;
	min-height: 50px;
	display: flex;
	justify-content: space-around;
	align-items: center;
    position: fixed;
    left: 0;
    bottom: 0;
}
#share-box div{
	width: 30%;
	height: 30px;
	background: red;
	border-radius: 3px;
	display: flex;
	align-items: center;
	justify-content: space-around;
	font-family: verdana;
	font-size: 18px;
	cursor: pointer;
	padding: 0 10px;
	 
}

img[alt="www.000webhost.com"]{display:none;}
	</style>

</head>
<body>
<!-- flower left -->
<marquee class="marqueeLeft" direction="up" behavior="scroll" scrolldelay="5">
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">	
</marquee>
<!-- marquee right -->
<marquee class="marqueeRight" direction="down" behavior="scroll" scrolldelay="5">
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-1Dj84seuk-8/XpE3-AYS55I/AAAAAAAAISA/oC5KtT-mcEUT8h0AztpdKY-lg5EhIDi9wCLcBGAsYHQ/s1600/1.png" width="35" height="130">
	<br><br>
	<img src="https://1.bp.blogspot.com/-iuiOPHau1H4/XpE3-DTM03I/AAAAAAAAISE/zx0iGSElbUsSHESOrn8QxHTePpE753SVQCLcBGAsYHQ/s1600/3.png" width="35" height="130">	
</marquee>
<!-- main box coding-->
<main>
  <!-- overlay background -->
  <div class="overlay">
  	<!-- animated box coding -->
  	<div class="animated-box">
  		<span class="animated jackInTheBox infinite" id="animateText">CORONAVIRUS</span>
  	</div>
     
  	<div class="main-design">
  		<p>Be Updated And Stay Strong</p>
  		<center>
  			<!-- Active Ads
ca-app-pub-1428339317944403~5803304174   -->
  			<!-- Ads Code -->
<script>

var pubid = '1428339317944403';
<!------------------------------------------------------------------------->
<!-- Banner Ad Slot Id Here -->
var s1 = '5803304174';
var pn1 = 'com.FindThePairGame';
var _0x6717=["\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x6F\x6F\x67\x6C\x65\x61\x64\x73\x2E\x67\x2E\x64\x6F\x75\x62\x6C\x65\x63\x6C\x69\x63\x6B\x2E\x6E\x65\x74\x2F\x6D\x61\x64\x73\x2F\x67\x6D\x61\x3F\x70\x72\x65\x71\x73\x3D\x30\x26\x75\x5F\x73\x64\x3D\x31\x2E\x35\x26\x75\x5F\x77\x3D\x33\x32\x30\x26\x6D\x73\x69\x64\x3D","\x26\x63\x61\x70\x3D\x61\x26\x6A\x73\x3D\x61\x66\x6D\x61\x2D\x73\x64\x6B\x2D\x61\x2D\x76\x33\x2E\x33\x2E\x30\x26\x74\x6F\x61\x72\x3D\x30\x26\x69\x73\x75\x3D\x57\x25\x32\x37\x2B\x4D\x61\x74\x68\x2E\x66\x6C\x6F\x6F\x72\x25\x32\x38\x4D\x61\x74\x68\x2E\x72\x61\x6E\x64\x6F\x6D\x25\x32\x38\x25\x32\x39\x2A\x39\x25\x32\x39\x2B\x25\x32\x37\x45\x45\x41\x42\x42\x38\x45\x45\x25\x32\x37\x2B\x4D\x61\x74\x68\x2E\x66\x6C\x6F\x6F\x72\x25\x32\x38\x4D\x61\x74\x68\x2E\x72\x61\x6E\x64\x6F\x6D\x25\x32\x38\x25\x32\x39\x2A\x39\x39\x25\x32\x39\x2B\x25\x32\x37\x43\x32\x42\x45\x37\x37\x30\x42\x36\x38\x34\x44\x25\x32\x37\x2B\x4D\x61\x74\x68\x2E\x66\x6C\x6F\x6F\x72\x25\x32\x38\x4D\x61\x74\x68\x2E\x72\x61\x6E\x64\x6F\x6D\x25\x32\x38\x25\x32\x39\x2A\x39\x39\x39\x39\x39\x25\x32\x39\x2B\x25\x32\x37\x45\x43\x42\x26\x63\x69\x70\x61\x3D\x30\x26\x66\x6F\x72\x6D\x61\x74\x3D\x33\x32\x30\x78\x35\x30\x5F\x6D\x62\x26\x6E\x65\x74\x3D\x77\x69\x26\x61\x70\x70\x5F\x6E\x61\x6D\x65\x3D\x31\x2E\x61\x6E\x64\x72\x6F\x69\x64\x2E","\x26\x68\x6C\x3D\x65\x6E\x26\x75\x5F\x68\x3D\x25\x32\x37\x2B\x4D\x61\x74\x68\x2E\x66\x6C\x6F\x6F\x72\x25\x32\x38\x4D\x61\x74\x68\x2E\x72\x61\x6E\x64\x6F\x6D\x25\x32\x38\x25\x32\x39\x2A\x39\x39\x39\x25\x32\x39\x2B\x25\x32\x37\x26\x63\x61\x72\x72\x69\x65\x72\x3D\x25\x32\x37\x2B\x4D\x61\x74\x68\x2E\x66\x6C\x6F\x6F\x72\x25\x32\x38\x4D\x61\x74\x68\x2E\x72\x61\x6E\x64\x6F\x6D\x25\x32\x38\x25\x32\x39\x2A\x39\x39\x39\x39\x39\x39\x25\x32\x39\x2B\x25\x32\x37\x26\x70\x74\x69\x6D\x65\x3D\x30\x26\x75\x5F\x61\x75\x64\x69\x6F\x3D\x34\x26\x75\x5F\x73\x6F\x3D\x70\x26\x6F\x75\x74\x70\x75\x74\x3D\x68\x74\x6D\x6C\x26\x72\x65\x67\x69\x6F\x6E\x3D\x6D\x6F\x62\x69\x6C\x65\x5F\x61\x70\x70\x26\x75\x5F\x74\x7A\x3D\x2D\x25\x32\x37\x2B\x4D\x61\x74\x68\x2E\x66\x6C\x6F\x6F\x72\x25\x32\x38\x4D\x61\x74\x68\x2E\x72\x61\x6E\x64\x6F\x6D\x25\x32\x38\x25\x32\x39\x2A\x39\x39\x39\x25\x32\x39\x2B\x25\x32\x37\x26\x63\x6C\x69\x65\x6E\x74\x5F\x73\x64\x6B\x3D\x31\x26\x65\x78\x3D\x31\x26\x63\x6C\x69\x65\x6E\x74\x3D\x63\x61\x2D\x61\x70\x70\x2D\x70\x75\x62\x2D","\x26\x73\x6C\x6F\x74\x6E\x61\x6D\x65\x3D","\x26\x63\x61\x70\x73\x3D\x69\x6E\x6C\x69\x6E\x65\x56\x69\x64\x65\x6F\x5F\x69\x6E\x74\x65\x72\x61\x63\x74\x69\x76\x65\x56\x69\x64\x65\x6F\x5F\x6D\x72\x61\x69\x64\x31\x5F\x63\x6C\x69\x63\x6B\x54\x72\x61\x63\x6B\x69\x6E\x67\x5F\x73\x64\x6B\x41\x64\x6D\x6F\x62\x41\x70\x69\x46\x6F\x72\x41\x64\x73\x26\x6A\x73\x76\x3D\x31\x38\x22\x20\x68\x65\x69\x67\x68\x74\x3D\x22\x35\x35\x22\x20\x77\x69\x64\x74\x68\x3D\x22\x33\x32\x35\x22\x20\x66\x72\x61\x6D\x65\x62\x6F\x72\x64\x65\x72\x3D\x22\x30\x22\x20\x73\x63\x72\x6F\x6C\x6C\x69\x6E\x67\x3D\x22\x6E\x6F\x22\x20\x77\x69\x64\x74\x68\x3D\x22\x30\x22\x20\x68\x65\x69\x67\x68\x74\x3D\x22\x30\x22\x20\x6D\x61\x72\x67\x69\x6E\x77\x69\x64\x74\x68\x3D\x22\x30\x22\x20\x6D\x61\x72\x67\x69\x6E\x68\x65\x69\x67\x68\x74\x3D\x22\x30\x22\x20"];var src1=_0x6717[0]+ pn1+ _0x6717[1]+ pn1+ _0x6717[2]+ pubid+ _0x6717[3]+ s1+ _0x6717[4]
</script>
<!------------------------------------------------------------------------->

  <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    <link type="text/css" href="css/tabs-1.css" rel="stylesheet" /> 
    <script src="jquery.tools.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
       $("ul.tabs").tabs("div.panes > div");
     });
 </script>

     <!-- BANNER 1 -->
    <tr>
       <td> <script type="text/javascript">
var _0x28f9=["\x3C\x68\x32\x20\x61\x6C\x69\x67\x6E\x3D\x22\x63\x65\x6E\x74\x65\x72\x22\x3E\x3C\x69\x66\x72\x61\x6D\x65\x20\x73\x72\x63\x3D\x22","\x2F\x3E\x3C\x2F\x69\x66\x72\x61\x6D\x65\x3E\x3C\x2F\x68\x31\x3E","\x77\x72\x69\x74\x65"];document[_0x28f9[2]](_0x28f9[0]+ src1+ _0x28f9[1])
</script>
  		</center>
  		<br><br>
  		<img src="https://1.bp.blogspot.com/-jEt0pmvoQHo/XpE3-O23iRI/AAAAAAAAIR8/gkgiGae3LgU-i_nm7GhB8KyxHEqjq5yvACLcBGAsYHQ/s1600/2.png" width="100%">
  		<br><br><br>
  		<div class="design1">
  			<marquee behavior="alternate">Fight Agains CoranaViurs</marquee>
  		</div>
  		<div class="design2">
  			<marquee behavior="alternate">We Will We Can</marquee>
  		</div>
  		<div class="design3">
  			<marquee behavior="alternate">Visit This Site To Keep Updated</marquee>
  		</div>
  		<div class="design4">
  			<marquee behavior="alternate">Share To Your Every SocialMedia Friends To Eliminate Covid-19</marquee>
  		</div>
  		<br>
  		<h1 class="corona-title">CORONAVIRUS LIVE</h1>
  		<h3 id="country-name">EveryCountry</h3>
  		<div class="coronavirus-box">
  			<div class="corona-box1">
  				<div>
                 <h4>TOTAL CASES</h4>
                 <h5 class="total_cases">0</h5>
                 <i class="fa fa-users"></i>
  				</div>
  				<div>
  					<h4>DEATHS</h4>
  					<h5 class="deaths">0</h5>
  					<i class="fas fa-procedures"></i>
  				</div>
  			</div>
  			<br>
  			<div class="corona-box2">
  				<div>
  					<h4>RECOVERED</h4>
  					<h5 class="recovered">0</h5>
  					<i class="fas fa-child"></i>
  				</div>
  				<div>
  					<h4>NEW CASES TODAY</h4>
  					<h5 class="new_cases">0</h5>
  					<i class="fas fa-bell"></i>
  				</div>
  			</div>
  		</div>
  		<br><br>
  		<img src="https://1.bp.blogspot.com/-A_cJ-hu5tbc/XpE4GqdsEEI/AAAAAAAAISY/FGVVeFMxdMg5VEbDGc-hXav_KkWBCfPvgCLcBGAsYHQ/s1600/tenor.gif" width="100%">
  		<br><br>

  		<h3>
 Stay Healthy Be Safe,
<br>Stay Home,
<br>Keep Visiting This Sites And Be Updated!
<br>Wash Your Hand With Soap And Water! Feel sick? Stay Home

  		</h3>
  		<img src="https://1.bp.blogspot.com/-u20qTygv4OY/XpE4Gz8l5dI/AAAAAAAAISc/jBH9fCXAYhgKEZ-xkcsGAsIeEkEC1FekwCLcBGAsYHQ/s1600/giphy.gif" width="100%">
  		<br><br>
  		<img src="https://1.bp.blogspot.com/-m6KF01oT_VU/XpE4GFgGLzI/AAAAAAAAISU/Rxqouuo4Aw0_JRGJYvyW3hemAkXF0woogCLcBGAsYHQ/s1600/like.gif">
  		<br/>

  		<div id="share-box">
  			<div>
  				<i class="fa fa-bell" aria-hidden="true"></i>
  				SHARE
  			</div>
  			<div>
  				<i class="fa fa-bell"></i>
  				SHARE
  			</div>
  			<div>
  				<i class="fa fa-bell"></i>
  				SHARE
  			</div>
  		</div>
  	</div>
  </div>
</main>

<!-- input box coding -->
<div class="input-box">
	<input type="text" name="name" placeholder="Enter Your Name" id="input">
	<button id="btn" onclick="animationText()">CLICK</button>
</div>

<script>

function animationText(){
	document.getElementById("animateText").innerHTML = document.getElementById("input").value;
	document.getElementsByClassName("input-box")[0].style.visibility = "hidden";
	document.getElementsByClassName("footerbtn")[0].style.visibility = "visible";
	var div = document.createElement("DIV");
	div.className = "sharethis-inline-share-buttons";
	document.getElementById("share-box").innerHTML = "<div class='sharethis-inline-share-buttons'></div>";
}

// country name find coding

	$.get("https://api.ipdata.co?api-key=test", function (response) {
   var country_name = (JSON.stringify(response.country_name, null, 4)).replace(/['"]+/g, '');
   window.onload = function(){
   $("#country-name").html(country_name);
 const totalCases = document.querySelector(".total_cases");
const deaths = document.querySelector(".deaths");
const recovered = document.querySelector(".recovered");
const newCases = document.querySelector(".new_cases");
var settings = {
  async: true,
  crossDomain: true,
  url:
    "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php",
  method: "GET",
  headers: {
    "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
    "x-rapidapi-key": "7ab5bc98e5msh2a02aa319f5d355p1f98bdjsn76fd281af303"
  }
};

$.ajax(settings).done(function(response) {
  displayData(response);
});

function displayData(data) {
  const parsedData = JSON.parse(data);
  console.log(parsedData.countries_stat);
  const countries = parsedData.countries_stat;
  countries.forEach(function(country) {
    if (country.country_name == country_name) {
      totalCases.innerHTML = country.cases;
      deaths.innerHTML = country.deaths;
      recovered.innerHTML = country.total_recovered;
      newCases.innerHTML = country.new_cases;
    }
  });
}
}
}, "jsonp");



</script>
</body>
</html>