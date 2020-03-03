<html>
<head>
<link rel="shortcut icon" type="image/png" href="../favicon.png"/>
<title>Beka z pogan</title>
<meta charset="UTF-8">
 <script src="../js/ZeroClipboard.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<style type="text/css">
 @font-face {
font-family: roboto;
src: url(../fonts/roboto/Roboto-Medium.ttf);
}
 @font-face {
font-family: mouser;
src: url(../fonts/mouser/Mouser.ttf);
}
body{
	 background: linear-gradient(#3a4647, #3f3f3f);
	 background-image: url(../tlo.jpg);
	 background-position: center;
	 background-attachment: fixed;
	 background-size: cover;
	 margin: 0;
	 padding: 0;
         font-family: roboto;
	min-width: 1100px;
	min-height: 100%;
	position: relative;
}	
#main{
	position: relative;
	top: 50px;
}
#all{
        background-color: #202020;
		width:800;
        padding: 30px;
        padding-top: 0;
		padding-bottom: 0;
		padding-left:0;
		padding-right:0;
        border: 2px solid black;
		position: relative;
		margin-bottom: 80px;
		top: -5px;
		-webkit-box-shadow: 0px 0px 66px 27px rgba(0,0,0,1);
-moz-box-shadow: 0px 0px 66px 27px rgba(25,69,92,1);
box-shadow: 0px 0px 66px 27px rgba(0,0,0,1);
}
#stopka{
	opacity: 0.8;
		width: 100%;
       border-top: 2px solid black;
       background: linear-gradient(#202020, #202020);
       position: absolute;
	   bottom: 0;
       overflow: hidden;
	   padding:10px;
	   z-index:4;
	   color: #e3e3e3;
	   font-size: 11;
	   box-sizing: border-box;
	   -webkit-box-shadow: 0px 17px 30px -11px rgba(0,0,0,1);
-moz-box-shadow: 0px 17px 30px -11px rgba(0,0,0,1);
box-shadow: 0px 17px 30px -11px rgba(0,0,0,1);
}
#sto{
	padding:15px;
	color: white;
	font-size: 18px;
}
#menu{
       width: 100%;
       height: 60px;
       border-bottom: 2px solid black;
       background: linear-gradient(#202020, #202020);
       position: relative;
       overflow: hidden;
	   z-index:4;
	   
	   -webkit-box-shadow: 0px 17px 30px -11px rgba(0,0,0,1);
-moz-box-shadow: 0px 17px 30px -11px rgba(0,0,0,1);
box-shadow: 0px 17px 30px -11px rgba(0,0,0,1);
}
#button{
      
       height: 64;
       box-sizing: border-box;
	   font-weight: bold;
	   color: white;
	   font-size: 24;
	   text-align: center;
	   padding-top: 14px;
	   padding-left: 30px;
	   padding-right: 30px;
	   -moz-user-select: none;
	   -webkit-user-select: none;
}
#title{
	height: 52px;
	width: 650px;
	padding: 0px;
	text-align: left;
	font-size: 20;
	
	position: relative;
	box-sizing: border-box;
	left: -104px;
	margin-bottom: 10px;
	color: white;
}
#post{
	background-image: url(../bg1.jpg);
	border: 3px solid #822a2a;
	box-sizing: border-box;
	padding: 3%;
	margin-bottom: 90px;
}
#st{
	border: 1px solid black;
	background-color: #373737;
	box-sizing: border-box;
	color: white;
	height: 35;
	padding-top: 3px;
	padding-left: 15px;
	padding-right: 15px;
}
#com{
	border: 1px solid black;
	background-color: #373737;
	color: white;
	height: 35;
	box-sizing: border-box;
	padding: 6px;
	padding-left: 15px;
	padding-right: 15px;
}
.lnk{
	border: 1px solid black;
	background-color: #373737;
	color: white;
	height: 35;
	box-sizing: border-box;
	padding: 6px;
	padding-left: 15px;
	padding-right: 15px;
}
.txt{
	box-sizing: border-box;
	padding: 8px;
	color: white;
	text-align: left;
	font-size: 19px;
}
a:link.txt1{
         color: white;
   font-weight : normal;
   
      text-decoration: none;
}
a:active.txt1{
         color: white;
   font-weight : normal;
   
      text-decoration: none;
}
a:visited.txt1{   
      color: white;
   font-weight : normal;
   text-align : center;
      text-decoration: none;     
}
a:hover.txt1{
   
      color: white;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}

#fb_page{
	width: 500px;
	margin: 20px;
	border: 2px solid #58ff07;

}

a:link.pager{
	padding: 3px;
	padding-left: 8px;
	padding-right: 8px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:active.pager{
	padding: 3px;
	padding-left: 8px;
	padding-right: 8px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:visited.pager{  
padding: 3px;
	padding: 3px;
	padding-left: 8px;
	padding-right: 8px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:hover.pager{
	padding: 3px;
	padding-left: 8px;
	padding-right: 8px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}

a:link.pager2{
	padding: 9px;
	padding-left: 40px;
	padding-right: 40px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:active.pager2{
	padding: 9px;
	padding-left: 40px;
	padding-right: 40px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:visited.pager2{  
	padding: 9px;
	padding-left: 40px;
	padding-right: 40px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:hover.pager2{
	padding: 9px;
	padding-left: 40px;
	padding-right: 40px;
	border: 2px solid #1d1d1d;
	background-color: rgb(55, 55, 55);
         color: #9b9b9b;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}

a:link.infolinks{
	padding: 2px;
         color: white;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:active.infolinks{
	padding: 2px;
         color: white;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:visited.infolinks{  
	padding: 2px;
         color: white;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
a:hover.infolinks{
	padding: 2px;
         color: white;
   font-weight : normal;
   text-align : center;
      text-decoration: none;
}
</style>
<script>
 function a_m_ov(e){
	 $(e).css({"cursor" : "pointer", "color" : "red", "background" : "#58ff07"});
 };
 function a_m_ou(e){
	  $(e).css({"cursor" : "default", "color" : "black", "background" : "none"});
 };
 
 function m_ov(e){
	 $(e).css({"cursor" : "pointer", "color" : "black", "background" : "#58ff07"});
 };
 function m_ou(e){
	  $(e).css({"cursor" : "default", "color" : "white", "background" : "none"});
 };

 function m_ou2(e){
	  $(e).css({"cursor" : "default", "color" : "white", "background" : "#4c4c4c"});
 };
 
 
  function com_ov(e){
	 $(e).css({"cursor" : "pointer", "color" : "black", "background" : "white"});
 };
 function com_ou(e){
	  $(e).css({"cursor" : "default", "color" : "white", "background" : "#373737"});
 };
 function home(){
	 document.location = "http://bekazpogan.pl";
 };
  function ran(){
	  
	 document.location = "../random";
 };
  function tp(){
	  
	 document.location = "../top";
 };
 function pocz(){
	  
	 document.location = "../poczekalnia";
 };
   function dod(){
	  
	 document.location = "../dodaj";
 };
   function com_c(a){
	  
	 document.location = "../temp/" + a;
 };
  function cop_c(e, a){
	  $(e).text('SKOPIOWANO');
	  $(e).css('border' , '1px solid #58ff07');
	  setTimeout(function(){$(e).text('KOPIUJ LINK');
	  $(e).css('border' , '1px solid black');}, 1500);
};
	
  function sti_1(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "pointer" });
	document.getElementById(b+"rt_1").src='../star3.png';
	if(a == 1) $("#floa"+b).css("width", "100%");
};

 function sti_2(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "pointer" });
  document.getElementById(b+"rt_1").src='../star3.png';
	document.getElementById(b+"rt_2").src='../star3.png';
	if(a == 1) $("#floa"+b).css("width", "100%");
};


 function sti_3(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "pointer" });
  document.getElementById(b+"rt_1").src='../star3.png';
	document.getElementById(b+"rt_2").src='../star3.png';
	document.getElementById(b+"rt_3").src='../star3.png';
	if(a == 1) $("#floa"+b).css("width", "100%");
};
function sti_4(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "pointer" });
  document.getElementById(b+"rt_1").src='../star3.png';
	document.getElementById(b+"rt_2").src='../star3.png';
	document.getElementById(b+"rt_3").src='../star3.png';
	document.getElementById(b+"rt_4").src='../star3.png';
	if(a == 1) $("#floa"+b).css("width", "100%");
};
function sti_5(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "pointer" });
  document.getElementById(b+"rt_1").src='../star3.png';
	document.getElementById(b+"rt_2").src='../star3.png';
	document.getElementById(b+"rt_3").src='../star3.png';
	document.getElementById(b+"rt_4").src='../star3.png';
	document.getElementById(b+"rt_5").src='../star3.png';
	if(a == 1) $("#floa"+b).css("width", "100%");
};

  function sto_1(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "default" });
	if(a > 1)document.getElementById(b+"rt_1").src='../star2.png';
	else {document.getElementById(b+"rt_1").src='../star2.png';
		$("#floa"+b).css("width", 22*(a-0));}
};

 function sto_2(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "default" });
  if(a > 1)document.getElementById(b+"rt_1").src='../star2.png';
	else {document.getElementById(b+"rt_1").src='../star2.png';
		document.getElementById(b+"rt_2").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-0)); return 0;}
  if(a > 2)document.getElementById(b+"rt_2").src='../star2.png';
	else {document.getElementById(b+"rt_2").src='../star2.png';
		$("#floa"+b).css("width", 22*(a-1));
	}
};


 function sto_3(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "default" });
  if(a > 1)document.getElementById(b+"rt_1").src='../star2.png';
	else {document.getElementById(b+"rt_1").src='../star2.png';
		document.getElementById(b+"rt_2").src='../star1.png';
		document.getElementById(b+"rt_3").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-0)); return 0;}
  if(a > 2)document.getElementById(b+"rt_2").src='../star2.png';
	else {
		document.getElementById(b+"rt_2").src='../star2.png';
		document.getElementById(b+"rt_3").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-1));return 0;}
	if(a > 3)document.getElementById(b+"rt_3").src='../star2.png';
		else{document.getElementById(b+"rt_3").src='../star2.png';
		$("#floa"+b).css("width", 22*(a-2));}
};
function sto_4(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "default" });
  if(a > 1)document.getElementById(b+"rt_1").src='../star2.png';
	else {document.getElementById(b+"rt_1").src='../star2.png';
		document.getElementById(b+"rt_2").src='../star1.png';
		document.getElementById(b+"rt_3").src='../star1.png';
		document.getElementById(b+"rt_4").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-0)); return 0;}
  if(a > 2)document.getElementById(b+"rt_2").src='../star2.png';
	else {document.getElementById(b+"rt_2").src='../star2.png';
		document.getElementById(b+"rt_3").src='../star1.png';
		document.getElementById(b+"rt_4").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-1));return 0;}
	if(a > 3)document.getElementById(b+"rt_3").src='../star2.png';
		else{ document.getElementById(b+"rt_3").src='../star2.png';
			document.getElementById(b+"rt_4").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-2));return 0;}
	if(a > 4)document.getElementById(b+"rt_4").src='../star2.png';
	else {document.getElementById(b+"rt_4").src='../star2.png';
	$("#floa"+b).css("width", 22*(a-3));}
};
function sto_5(a, b) {
  $( "#"+b+"st" ).css({ "cursor" : "default" });
  if(a > 1)document.getElementById(b+"rt_1").src='../star2.png';
	else {document.getElementById(b+"rt_1").src='../star2.png';
		document.getElementById(b+"rt_2").src='../star1.png';
		document.getElementById(b+"rt_3").src='../star1.png';
		document.getElementById(b+"rt_4").src='../star1.png';
		document.getElementById(b+"rt_5").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-0)); return 0;}
  if(a > 2)document.getElementById(b+"rt_2").src='../star2.png';
	else {document.getElementById(b+"rt_2").src='../star2.png';
		document.getElementById(b+"rt_3").src='../star1.png';
		document.getElementById(b+"rt_4").src='../star1.png';
		document.getElementById(b+"rt_5").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-1));return 0;}
	if(a > 3)document.getElementById(b+"rt_3").src='../star2.png';
		else{ document.getElementById(b+"rt_3").src='../star2.png';
			document.getElementById(b+"rt_4").src='../star1.png';
			document.getElementById(b+"rt_5").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-2));return 0;}
	if(a > 4)document.getElementById(b+"rt_4").src='../star2.png';
	else {document.getElementById(b+"rt_4").src='../star2.png';
		document.getElementById(b+"rt_5").src='../star1.png';
		$("#floa"+b).css("width", 22*(a-3));return 0;}
	document.getElementById(b+"rt_5").src='../star2.png';
	$("#floa"+b).css("width", 22*(a-4));
};
function Round(n, k) 
{
    var factor = Math.pow(10, k+1);
    n = Math.round(Math.round(n*factor)/10);
    return n/(factor/10);
}
function showCookie(name) {
    if (document.cookie!="") { //jeżeli document.cookie w ogóle istnieje
        var cookies=document.cookie.split("; ");  //tworzymy z niego tablicę ciastek
        for (var i=0; i<cookies.length; i++) { //i robimy po niej pętlę
            var cookieName=cookies[i].split("=")[0]; //nazwa ciastka
            var cookieVal=cookies[i].split("=")[1]; //wartość ciastka
            if (cookieName===name) {
                return decodeURI(cookieVal) //jeżeli znaleźliśmy ciastko o danej nazwie, wtedy zwracamy jego wartość
            }
        }
    }
}

function sen(a, b){
if(showCookie("po" +b.toString()) != 1){
	console.log(showCookie("po" + b.toString()));
	$.ajax({
	url: '../rat2.php',
	data: {stars: 's'+a, id: b},
	type: 'post',
	success: function(output) {
		//document.getElementById('g_'+b).innerHTML='&nbsp'+Round(output, 2);
		var q = "<table><tr>";
		var p = 1;
		var s = parseFloat(output); 
		while(s > 1){
			q += "<td><div id = 'st_" + p + "' 1onclick = 'sen(" + p + ", " + b + ");' 1onmouseover='sti_" + p + "(0, " + b +");' 1onmouseout='sto_" + p + "(" + parseFloat(output) + ", " + b +");'><img src = \"../star2.png\"/ width = 22 id = '" + b + "rt_" + p + "'></div></td>";
			p = p + 1;
			s = s - 1;
		}
		if(output != 0) q+= "</td><td><div id = 'st_" + p + "'><div 1onclick = 'sen(" + p + ", " + b + ");' 1onmouseover='sti_" + p + "(1, " + b +");' 1onmouseout='sto_" + p + "(" + parseFloat(output) + ", " + b +");' style=\" background-image: url(../star1.png); width: 22px; height: 21px; text-align: left; background-size:contain;\"><div id = 'floa" + b + "' style=\" height: 21px; width: " + s * 22 + "; overflow: hidden\"><img src = \"../star2.png\" width = 22 id = '"+ b + "rt_" + p + "'/></div></div></div></td>";
		p = p + 1;
		s = output;
		while(s <= 4){
			q += "<td><div 1onclick = 'sen(" + p + ", " + b + ");' 1onmouseover='sti_" + p + "(1, " + b +");' id = 'st_" + p + "' 1onmouseout='sto_" + p + "(" + parseFloat(output) + ", " + b +");' >";
			q += "<img src = \"../star1.png\"/ width = 22 id = '" + b + "rt_" + p + "'></div></td>";
			p = p + 1;
			s = parseFloat(s) + 1;
		}
		q += "<td style = \" color: white; \"><span id ='g_" + b +"'>&nbsp" + Round(output, 2) + "</span></td></tr></table>";
		document.getElementById(b+'st').innerHTML=q;
		$('#'+b+'st').css("border", "1px solid red");
		document.cookie = "po" + b + "=" + 1 + "; expires=" + "" + "; path=/";
	}
	});
}
	
};

function cre(a,b,c,d,e,f){
	if(a=="txt")a=1;
	else if(a=="yt")a=2;
	else if(a=="img")a=3;
	if (a == 1){
		$.ajax({
			url: '../am1.php',
			data: {type: "txt", title: b, host: c, login: d, password: e, id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
	
	
	if (a == 2){
		$.ajax({
			url: '../am1.php',
			data: {type: "yt", title: b, host: c, login: d, password: e, id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
	if (a == 3){
		$.ajax({
			url: '../am1.php',
			data: {type: "img", title: b, host: c, login: d, password: e, info: "a", id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
};

function del(a,b,c,d,e,f){
	if(a=="txt")a=1;
	else if(a=="yt")a=2;
	else if(a=="img")a=3;
	if (a == 1){
		$.ajax({
			url: '../am3.php',
			data: {type: "txt", title: b, host: c, login: d, password: e, id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
	
	
	if (a == 2){
		$.ajax({
			url: '../am3.php',
			data: {type: "yt", title: b, host: c, login: d, password: e, id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
	if (a == 3){
		$.ajax({
			url: '../am3.php',
			data: {type: "img", title: b, host: c, login: d, password: e, info: "a", id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
};

function upd(a,b,c,d,e,f){
	if(a=="txt")a=1;
	else if(a=="yt")a=2;
	else if(a=="img")a=3;
	if (a == 1){
		$.ajax({
			url: '../am2.php',
			data: {type: "txt", title: b, host: c, login: d, password: e, id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
	
	
	if (a == 2){
		$.ajax({
			url: '../am2.php',
			data: {type: "yt", title: b, host: c, login: d, password: e, id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
	if (a == 3){
		$.ajax({
			url: '../am2.php',
			data: {type: "img", title: b, host: c, login: d, password: e, info: "a", id: f},
			type: 'post',
			success: function(output) {
				alert(output);
			}
		});
	}
};


</script>
</head>
<body>
<?php include_once("../analyticstracking.php") ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center>
<?
if(isset($_GET["id"])){
      $id=$_GET["id"];
   }else{
      $id=1;
   }
$admin_mode = 0;
if(isset($_GET["res"])){
$results_per_page = $_GET["res"];
}
else{
	$results_per_page=6;
}
if(isset($_GET["mod"])){
	if($_GET["mod"]==1)
	$selects = "WHERE mode = 0";
}
$connection  = mysqli_connect('mysql7.superhost.pl', 'sh209641_base', 'ZXBBBYYJ', 'sh209641_base');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$dbc = @mysqli_select_db('sh209641_base', $connection) ;
if(isset($_GET["admin_login"]) && isset($_GET["admin_password"])){
	$a_l = $_GET["admin_login"];
	$a_p = $_GET["admin_password"];

$query = "SELECT grade FROM admins WHERE login = '" . $a_l . "' AND password = '" . $a_p . "'";
$result = mysqli_query($connection, $query);
while($r = @mysqli_fetch_assoc($result)) {
	$admin_mode = $r['grade'];
}
if($admin_mode > 0){
	$query = "SELECT id FROM poczekalnia WHERE mode = 0";
	$data = mysqli_query($connection, $query);
	$total = @mysqli_num_rows($data);
	echo '<div style="width: 100%; padding-top: 10px; height: 33px; background-color: #b1d3e6"><span style="color: red; margin-right: 20px;">Panel Administracyjny</span>Ilość oczekujących postów: '. $total .'<span style ="border: 1px solid #165696; outline: 1px solid #DCE7F2; background-color: #DCE7F2;margin-left: 20px; margin-right: 20px; padding: 5px;">Wyświetl:<span style="margin-left: 15px; margin-right:15px;" 
	onmouseover="a_m_ov(this)" onmouseout="a_m_ou(this)" onclick="document.location = \'../poczekalnia/?admin_login='.$a_l.'&admin_password='.$a_p.'&id='.$id.'&mod=1&res=\'+document.getElementsByName(\'wynikow\')[0].value;">oczekujące</span><span onmouseover="a_m_ov(this)" onmouseout="a_m_ou(this)" onclick="document.location = \'../poczekalnia/?admin_login='.$a_l.'&admin_password='.$a_p.'&id='.$id.'&mod=0&res=\'+document.getElementsByName(\'wynikow\')[0].value;">wszystkie</span></span>Wyników na stronie: <input type="text" name="wynikow" size="4" value="'.$results_per_page.'"><span>Wyloguj</span></div>';
}
}
?>
<div id = "menu"><table cellpadding="0" cellspacing="0">
<tr><td>
<tr><td>
<div class="fb-like" data-href="https://www.facebook.com/bekazpogan/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
</td><td>
<a href = "../index.php"><img src="../logo.png" style = "height: 64px; position: relative; left: 0px; 
margin-left: 15px;
z-index: 10;
"/></a></td><td>
<div id = "button" onmouseover = "m_ov(this);" onmouseout = "m_ou(this);" onclick = "home();">GŁÓWNA</div></td><td>
<div id = "button" onmouseover = "m_ov(this);" onmouseout = "m_ou(this);" onclick = "pocz();">POCZEKALNIA</div></td><td>
<div id = "button" onmouseover = "m_ov(this);" onmouseout = "m_ou(this);" onclick = "ran();">LOSOWY</div></td><td>
<div id = "button" onmouseover = "m_ov(this);" onmouseout = "m_ou(this);" onclick = "tp();">TOP</div></td><td>
<div id = "button" onmouseover = "m_ov(this);" onmouseout = "m_ou2(this);" onclick = "dod();" style="background-color: #4c4c4c">+ DODAJ</div>
</td></tr></table>
</div>
<div id ="main" width=860>
<div id = "all" width=720>
<br><br>
<?php
//error_reporting(0);
function round_up ($value, $places=1) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return ceil($value * $mult) / $mult;
 }
   
$cur_page = $id;
$skip = (($cur_page - 1) * $results_per_page);

$query = "SELECT id, title, host, stars, type, mode FROM poczekalnia " . $selects . " ORDER BY id DESC";
$data = mysqli_query($connection, $query);

$total = mysqli_num_rows($data); 
$num_pages = ceil($total / $results_per_page); 
$query .=  " LIMIT $skip, $results_per_page"; 

$result = mysqli_query($connection,$query);


$next ='';
$before = '';	
function generate_page_links($cur_page, $num_pages, $admin_mode, $a_l, $a_p) {
     $page_links = '';
 
     // odnośnik do poprzedniej strony (-1)
     if ($cur_page > 1) {
          $before= '<a href="/poczekalnia/' . ($cur_page - 1) . '" class = "pager2">Poprzednia</a> ';
     }
 
     $i = $cur_page - 4;
     $page = $i + 8;

     for ($i; $i <= $page; $i++) {
 
          if ($i > 0 && $i <= $num_pages) {
               
               //jeżeli jesteśmy na danej stronie to nie wyświetlamy jej jako link    
               if ($cur_page == $i  && $i != 0) {
                    $page_links .= '<span style = "padding: 3px; padding-left: 8px; padding-right: 8px; border: 2px solid #1d1d1d; background-color: #ababab;color: white;">' . $i . '</span>';
               }
               else {
 
                    //wyświetlamy odnośnik do 1 strony
                    if ($i == ($cur_page - 4) && ($cur_page - 5) != 0) { 
							if($admin_mode > 0)
						$page_links .='<a href="../poczekalnia/?admin_login='.$a_l.'&admin_password='.$a_p.'&id=1&mod='.$_GET['mod'].'&res=\'+document.getElementsByName(\'wynikow\')[0].value" class = "pager">1</a> ';
                         else
						 $page_links .= ' <a href="' . '/poczekalnia/1" class = "pager">1</a> '; 
                    }
               
                    //wyświetlamy "kropki", jako odnośnik do poprzedniego bloku stron
                    if ($i == ($cur_page - 4) && (($cur_page - 6)) > 0) {
					if($admin_mode > 0)
						$page_links .='<a href="../poczekalnia/?admin_login='.$a_l.'&admin_password='.$a_p.'&id='.($cur_page - 5).'&mod='.$_GET['mod'].'" class = "pager">...</a> '; 
                         else
						 $page_links .= ' <a href="' . '/poczekalnia/' . ($cur_page - 5) . '" class = "pager">...</a> '; 
                    } 
               
                    //wyświetlamy liki do bieżących stron
					if($admin_mode > 0)
						$page_links .='<a href="../poczekalnia/?admin_login='.$a_l.'&admin_password='.$a_p.'&id='.$i.'&mod='.$_GET['mod'].'" class = "pager"> ' . $i . '</a> ';
                         else
                    $page_links .= ' <a href="' . '/poczekalnia/' . $i . '" class = "pager"> ' . $i . '</a> ';
          
                    //wyświetlamy "kropki", jako odnośnik do następnego bloku stron
                    if ($i == $page && (($cur_page + 4) - ($num_pages)) < -1) { 
					if($admin_mode > 0)
						$page_links .='<a href="../poczekalnia/?admin_login='.$a_l.'&admin_password='.$a_p.'&id='.($cur_page + 5).'&mod='.$_GET['mod'].'" class = "pager">...</a>'; 
                         else
                         $page_links .= ' <a href="' . '/poczekalnia/' . ($cur_page + 5) . '" class = "pager">...</a>'; 
                    } 
               
                    //wyświetlamy odnośnik do ostatniej strony
                    if ($i == $page && ($cur_page + 4) != $num_pages) { 
					if($admin_mode > 0)
						$page_links .=' <a href="../poczekalnia/?admin_login='.$a_l.'&admin_password='.$a_p.'&id='.$num_pages.'&mod='.$_GET['mod'].'" class = "pager">' . $num_pages . '</a> '; 
                         else
                         $page_links .= ' <a href="' . '/poczekalnia/' . $num_pages . '" class = "pager">' . $num_pages . '</a> '; 
                    }
               }
          }
     }
 
     //odnośnik do następnej strony (+1)
     if ($cur_page < $num_pages) {
          $next = '<a href="' . '/poczekalnia/' . ($cur_page + 1) . '" class = "pager2">Następna</a>';
     }
  echo "<script>$('#before').html('" . $before ."'); $('#next').html('" . $next ."');</script>";
     return $page_links;
}
	
	
	$bol = 1;
	
	while($r = mysqli_fetch_assoc($result)) { 
		$s = $r['stars'];
		$ss = $s;
		$d = $r['id'];
		echo "<div id=\"title\">";
		echo "<canvas id=\"Canvas" . $r['id'] . "\" width=\"750\" height=\"50\"></canvas>";
        echo "<div style = \" position: relative; top: -39; left: 15;\"><span id = \"t" . $r['id'] . "\" style = \"font-family: roboto;\">"  . $r['title'] . "</span></div>"; 
		echo "</div>";
		echo "<script>
		console.log(parseInt($('#t". $r['id'] ."').css('width')));
var c = document.getElementById(\"Canvas" . $r['id'] . "\");
var ctx = c.getContext(\"2d\");
ctx.beginPath();
ctx.moveTo(1,3);
ctx.lineTo(parseInt($('#t". $r['id'] ."').css('width'))*(1+0.12*". $bol .")+110,3);
ctx.lineTo(parseInt($('#t". $r['id'] ."').css('width'))*(1+0.12*". $bol .")+30,47);
ctx.lineTo(3,47);
ctx.lineTo(3,3);
ctx.fillStyle = \"#202020\"
ctx.fill();
ctx.strokeStyle = \"#97ff64\";
ctx.lineWidth = 3;
ctx.stroke();
ctx.strokeStyle = \"#58ff07\";
ctx.lineWidth = 1;
ctx.stroke();
</script>";

$bol = 0;
		if($r['type'] == "img")
			echo "<a href = \"../temp/" . $d . "\"><img src=\"" . $r['host'] . "\" width = 85% style = \"border: 2px solid black; margin-bottom: 10px;\"/></a><br>";
		else if($r['type'] == "txt")
			echo "<a class=\"txt1\" href = \"../temp/" . $d . "\"><div class = \"txt\" style = \"border: 2px solid black; margin-bottom: 10px; width: 85%; background: black;\">" . nl2br($r['host']). "</div></a><br>";
		else if($r['type'] == "yt")
			echo "<iframe width=\"616\" height=\"345\" src=\"https://www.youtube.com/embed/" . substr($r['host'], 32) ."\" frameborder=\"0\" allowfullscreen style=\"border: 2px solid black;\"></iframe>";
		/***************************************/
		
		if($admin_mode > 0){
			if($r['mode'] == 0){
			echo '<div style="padding:10px; margin:3px; background-color:#b1d3e6"><span onmouseover="a_m_ov(this)" onmouseout="a_m_ou(this)" onclick="cre(\''.$r['type'].'\',\''.$r['title'].'\',\''.str_replace("\n","\\n",$r['host']).'\',\''.$a_l.'\',\''.$a_p.'\',\''.$r['id'].'\');" style="padding:5px; margin:10px;">AKCEPTUJ</span>
			<span onmouseover="a_m_ov(this)" onmouseout="a_m_ou(this)" style="padding:5px; margin:10px;"  onclick="upd(\''.$r['type'].'\',\''.$r['title'].'\',\''.str_replace("\n","\\n",$r['host']).'\',\''.$a_l.'\',\''.$a_p.'\',\''.$r['id'].'\');">ODRZUĆ</span>
			<span onmouseover="a_m_ov(this)" onmouseout="a_m_ou(this)" style="padding:5px; margin:10px;" onclick="del(\''.$r['type'].'\',\''.$r['title'].'\',\''.str_replace("\n","\\n",$r['host']).'\',\''.$a_l.'\',\''.$a_p.'\',\''.$r['id'].'\');">USUŃ</span></div>';
			}
			if($r['mode'] == 1){
			echo '<div style="padding:10px; margin:3px; background-color:#E8438B">Ten post odrzucono! <span onmouseover="a_m_ov(this)" onmouseout="a_m_ou(this)" style="padding:5px; margin:10px;" onclick="cre(\''.$r['type'].'\',\''.$r['title'].'\',\''.str_replace("\n","\\n",$r['host']).'\',\''.$a_l.'\',\''.$a_p.'\',\''.$r['id'].'\');">PRZENIEŚ DO GŁÓWNEJ</span>
			<span onmouseover="a_m_ov(this)" onmouseout="a_m_ou(this)" style="padding:5px; margin:10px;" onclick="del(\''.$r['type'].'\',\''.$r['title'].'\',\''.str_replace("\n","\\n",$r['host']).'\',\''.$a_l.'\',\''.$a_p.'\',\''.$r['id'].'\');">USUŃ</span></div>';
			}
		}
		
		/****************************************/
		echo "<table width = 95% cellpadding=\"0\" cellspacing=\"0\"><tr><td <tr align=\"right\" width = 100%><table cellpadding=\"0\" cellspacing=\"5\" style=\"margin-bottom: 60px;\"><tr><td>";
		echo "<div class=\"fb-share-button\" data-href=\"../temp/".$d."\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbekazpogan.pl%2F&amp;src=sdkpreparse\">Udostępnij</a></div>";
		echo "</td><td><div id = \"" . $d . "st\" style=\"
		border: 1px solid black;
	background-color: #373737;
	box-sizing: border-box;
	color: white;
	height: 35;
	padding-top: 3px;
	padding-left: 15px;
	padding-right: 15px;
		\"><table><tr>";
		$v = "";
		if (isset($_COOKIE['po' . $d])) {
			if($_COOKIE['po' . $d] == 1)
			echo "<script>$('#" . $d ."st').css(\"border\", \"1px solid red\");</script>";
		 $v ="1";
		}
		
		$p = 1;
		while($s > 1){
			echo "<td><div id = 'st_" . $p . "' ".$v."onclick = 'sen(" . $p . ", " . $d . ");' ".$v."onmouseover='sti_" . $p . "(0, " . $d .");' ".$v."onmouseout='sto_" . $p . "(" . $ss . ", " . $d .");'><img src = \"../star2.png\"/ width = 22 id = '" . $d . "rt_" . $p . "'></div></td>";
			$p = $p + 1;
			$s = $s - 1;
		}
		if($r['stars'] != 0) echo "</td><td><div id = 'st_" . $p . "'><div ".$v."onclick = 'sen(" . $p . ", " . $d . ");' ".$v."onmouseover='sti_" . $p . "(1, " . $d .");' ".$v."onmouseout='sto_" . $p . "(" . $ss . ", " . $d .");' style=\" background-image: url(../star1.png); width: 22px; height: 21px; text-align: left; background-size:contain;\"><div id = 'floa" . $d . "' style=\" height: 21px; width: " . $s * 22 . "; overflow: hidden\"><img src = \"../star2.png\" width = 22 id = '" . $d . "rt_" . $p . "'/></div></div></div></td>";
		$p = $p + 1;
		$s = $r['stars'];
		while($s <= 4){
			echo "<td><div ".$v."onclick = 'sen(" . $p . ", " . $d . ");' ".$v."onmouseover='sti_" . $p . "(1, " . $d .");' id = 'st_" . $p . "' ".$v."onmouseout='sto_" . $p . "(" . $ss . ", " . $d .");' ><img src = \"../star1.png\"/ width = 22 id = '" . $d . "rt_" . $p . "'></div></td>";
			$p = $p + 1;
			$s = $s + 1;
		}
		echo "<td style = \" color: white; \"><span id ='g_" . $d ."'>&nbsp" . round($r['stars'], 2, PHP_ROUND_HALF_UP) . "</span></td></tr></table></div></td>";
		/**************************************************************************/
		
		
		
		/**************************************************************************/
		echo "<td><div id = \"com\" onmouseover = \"com_ov(this);\" onmouseout = \"com_ou(this);\" onclick  = \"com_c(" . $r['id'] .");\">KOMENTARZE</div></td>";
		echo "<td><div id =\"lnk" . $r['id'] . "\" class = \"lnk\" onmouseover = \"com_ov(this);\" onmouseout = \"com_ou(this);\" onclick  = \"cop_c(this, 'www.bekazpogan.pl/temp/" . $r['id'] . "');\" data-clipboard-text='www.bekazpogan.pl/temp/" . $r['id'] . "'>KOPIUJ LINK</div></td></tr></table></td></tr></table>";
		echo "<script>var client" . $r['id'] ." = new ZeroClipboard( document.getElementById('lnk" . $r['id'] . "') );

client" . $r['id'] .".on( \"ready\", function( readyEvent ) {

  client" . $r['id'] .".on( \"aftercopy\", function( event ) {
  } );
} );</script>";
    
	}
?>
<table><tr><td>
<div style="margin-bottom:21px;" id = "before"></div></td><td>
<div style="margin-bottom:21px;" id = "next"></div></td></tr></table>
 <?
if ($num_pages > 0) {
     echo generate_page_links($cur_page, $num_pages, $admin_mode, $a_l, $a_p);
}

?>
<script>

/*
$.ajax({
url: '../rat.php',
data: {stars: 's1', id: '3'},
type: 'post',
success: function(output) {
$("#wyniki").append(output);
}
});*/
</script>



<div id = "fb_page">
<div class="fb-page" data-href="https://www.facebook.com/bekazpogan/" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bekazpogan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bekazpogan/">Beka z pogan</a></blockquote></div>
</div>
</div>
</div><br><br><br>
<br>
<div id="stopka"><span id ="sto"><a class = "infolinks" href ="../info/kontakt.php">Kontakt</a></span><span id ="sto"><a class = "infolinks" href ="../info/regulamin.php">Regulamin</a></span><span id ="sto"><a class = "infolinks" href ="../info/pp.php">Polityka Prywatności</a></span><br><br>Administracja serwisu nie ponosi odpowiedzialności za materiały dodawane przez użytkowników, którzy podczas dodawania materiałów zaakceptowali regulamin serwisu.
Jeśli uważasz, że materiał znajdujący się w naszym serwisie łamie prawo, bądź narusza zasady, możesz zgłosić ten fakt administracji serwisu.</div>
</body>
</html>