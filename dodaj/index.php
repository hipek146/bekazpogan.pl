
<html>
<head>
<link rel="shortcut icon" type="image/png" href="../favicon.png"/>
<title>Beka z pogan</title>
<meta charset="UTF-8">
 <script src="../js/ZeroClipboard.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript"
  src="jquery.uploadify.min.js"></script>
  
<link rel="stylesheet" type="text/css" href="uploadify.css"/>

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
   text-align : center;
      text-decoration: none;
}
a:active.txt1{
         color: white;
   font-weight : normal;
   text-align : center;
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
	margin-top: 70px;
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
#add_txt{display: none;}
#add_img{display: none;}
#add_film{display: none;}
</style>
<script>
 function m_ov(e){
	 $(e).css({"cursor" : "pointer", "color" : "black", "background" : "#58ff07"});
 };
 function m_ou(e){
	  $(e).css({"cursor" : "default", "color" : "white", "background" : "none"});
 };
 

 function m_ou2(e){
	  $(e).css({"cursor" : "default", "color" : "white", "background" : "#4c4c4c"});
 };
 
 function d1_ov(e){
	 $(e).css({"cursor" : "pointer", "border" : "1px solid #d2d2d2 "});
	 document.getElementById("o1").src='../d1_2.jpg';
 };
 function d1_ou(e){
	  $(e).css({"cursor" : "default", "border" : "1px solid #515151"});
	  document.getElementById("o1").src='../d1_1.jpg';
 };
  function d2_ov(e){
	 $(e).css({"cursor" : "pointer", "border" : "1px solid #d2d2d2 "});
	 document.getElementById("o2").src='../d2_2.jpg';
 };
 function d2_ou(e){
	  $(e).css({"cursor" : "default", "border" : "1px solid #515151"});
	  document.getElementById("o2").src='../d2_1.jpg';
 };
  function d3_ov(e){
	 $(e).css({"cursor" : "pointer", "border" : "1px solid #d2d2d2 "});
	 document.getElementById("o3").src='../d3_2.jpg';
 };
 function d3_ou(e){
	  $(e).css({"cursor" : "default", "border" : "1px solid #515151"});
	  document.getElementById("o3").src='../d3_1.jpg';
 };
   function op_ov(e){
	 $(e).css({"cursor" : "pointer", "border" : "1px solid black", "color" : "black", "background" : "white", "outline" : "1px solid white"});
 };
 function op_ou(e){
	  $(e).css({"cursor" : "default", "border" : "1px solid #515151","color" : "white", "background" : "none", "outline" : "none"});
 };
  function c1(){
	  $("#add_txt").css({"display" : "block"});
	  $("#add_img").css({"display" : "none"});
	  $("#add_film").css({"display" : "none"});
 };
 function c2(){
	  $("#add_txt").css({"display" : "none"});
	  $("#add_img").css({"display" : "block"});
	  $("#add_film").css({"display" : "none"});
 };
 function c3(){
	  $("#add_txt").css({"display" : "none"});
	  $("#add_img").css({"display" : "none"});
	  $("#add_film").css({"display" : "block"});
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
	  
	 document.location = "../post/" + a;
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
if(showCookie(b.toString()) != 1){
	console.log(showCookie(b.toString()));
	$.ajax({
	url: '../rat.php',
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
		document.cookie = b + "=" + 1 + "; expires=" + "" + "; path=/";
	}
	});
}
	
};

var f_data = null;
function create(a){
	if (a == 1){
		var b = document.getElementsByName('title1')[0].value;
		var c = document.getElementsByName('source1')[0].value;
		if(typeof b != "undefined" && b && typeof c != "undefined" && c){
		$('#view').html("<b>Proszę czekać</b>");
		$.ajax({
			url: '../rat4.php',
			data: {type: "txt", title: b, host: c},
			type: 'post',
			success: function(output) {
				
				document.location = "../info/send.php?result=" + output;
			}
		});
		}
	}
	
	
	if (a == 2){
		var b = document.getElementsByName('title2')[0].value;
		var c = document.getElementsByName('source2')[0].value;
		if(typeof b != "undefined" && b && typeof c != "undefined" && c){
		$('#view').html("<b>Proszę czekać</b>");
		$.ajax({
			url: '../rat4.php',
			data: {type: "yt", title: b, host: c},
			type: 'post',
			success: function(output) {
				
				document.location = "../info/send.php?result=" + output;
			}
		});
		}
	}
	if (a == 3 && f_data != null){
		if(f_data == "gif") var c="a";
		else{
		var ca = document.getElementById("cv");
		var c = ca.toDataURL();
		var context = ca.getContext("2d");}
		var b = document.getElementsByName('title3')[0].value;
		var d = 'img/'+id_name+"."+f_data;
		if(typeof b != "undefined" && b && typeof c != "undefined" && c){
		$('#view').html("<b>Proszę czekać</b>");
		$.ajax({
			url: '../rat4.php',
			data: {type: "img", title: b, host: d, info: c},
			type: 'post',
			success: function(output) {
				
				document.location = "../info/send.php?result=" + output;
			}
		});
		}
	}
};

function tyt(a){
	document.getElementById('t'+a).innerHTML = document.getElementsByName('title'+a)[0].value;
	 var c = document.getElementById("Canvas" + a);
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.clearRect(0, 0, c.width, c.height);
ctx.moveTo(1,3);
ctx.lineTo(parseInt($('#t' + a).css('width'))*1+110,3);
ctx.lineTo(parseInt($('#t' + a).css('width'))*1+30,47);
ctx.lineTo(3,47);
ctx.lineTo(3,3);
ctx.fillStyle = "#202020"
ctx.fill();
ctx.strokeStyle = "#97ff64";
ctx.lineWidth = 3;
ctx.stroke();
ctx.strokeStyle = "#58ff07";
ctx.lineWidth = 1;
ctx.stroke();
};
function tt(){
	var t = document.getElementsByName('source1')[0].value;
	var p = t.replace(/\n/g, "<br>");
document.getElementById('tt').innerHTML = p;

};
function yt(){
document.getElementById("yt").src= "https://www.youtube.com/embed/" + document.getElementsByName("source2")[0].value.substr(32);
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
<!--<div style="
width: 960px;
height: 35px;
       border-top: 2px solid #c4b216;
	   border: 2px solid #c4b216;
       background: linear-gradient(#851105, #d52512);
	   position:relative;
	   top: 520px;
	   z-index: 2;
"></div>
<center>
<div style="
width: 780px;
height: 43px;
       border-left: 2px solid black;
	   border-right: 2px solid black;
       background-color: #202020;
	   position:relative;
	   top: 470px;
	   z-index: 3;
"></div>
</center>-->
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
if($_SERVER['HTTP_CLIENT_IP'])
{
 $ip = $_SERVER['HTTP_CLIENT_IP'];
}
else if($_SERVER['HTTP_X_FORWARDED_FOR'])
{
 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
 $ip = $_SERVER['REMOTE_ADDR'];
}
$id_name = "".date("YmdHis.").$ip;
echo "<script>var id_name = '". $id_name ."';</script>";


function round_up ($value, $places=1) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return ceil($value * $mult) / $mult;
 }
function delNewLines($str) {
    $del = array("\r" => '', "\n" => '');
    return strtr($str, $del);
}
   if(isset($_GET["id"])){
      $id=$_GET["id"];
   }else{
      $id=1;
   }
   
$cur_page = $id;
$results_per_page = 2;
$skip = (($cur_page - 1) * $results_per_page);

$connection  = mysqli_connect('mysql7.superhost.pl', 'sh209641_base', 'ZXBBBYYJ', 'sh209641_base');
$dbc = @mysqli_select_db('sh209641_base', $connection) ;
$query = "SELECT id, title, host, stars, type FROM posts ORDER BY id DESC";
$data = mysqli_query($connection, $query);

$total = @mysqli_num_rows($data); 
$num_pages = ceil($total / $results_per_page); 
$query .=  " LIMIT $skip, $results_per_page"; 


$result = mysqli_query($connection, $query);
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
<div id ="view">
<div style="margin-bottom: 15px; font-size: 20px; color: white;">DODAJ:</div>
<table width = "100%"><tr align="center"><td>
<div id = "d1" onmouseover = "d1_ov(this);" onmouseout = "d1_ou(this);" onclick = "c1();" style="width: 250px; border: 1px solid #515151"><img id="o1" src = "../d1_1.jpg"/></div></td><td>
<div id = "d2" onmouseover = "d2_ov(this);" onmouseout = "d2_ou(this);" onclick = "c2();" style="width: 250px; border: 1px solid #515151"><img id="o2" src = "../d2_1.jpg"/></div></td><td>
<div id = "d3" onmouseover = "d3_ov(this);" onmouseout = "d3_ou(this);" onclick = "c3();" style="width: 250px; border: 1px solid #515151"><img id="o3" src = "../d3_1.jpg"/></div></td></tr></table>
<div id = "add_txt" style="margin: 15px; font-size: 20px; color: white;">
Podaj tytuł:<br>
<input onkeyup="tyt(1)" style="margin: 5px; font-family: roboto; font-size: 18;" type="text" name="title1" size="63" maxlength="55" />
<br>Wprowadź tekst:<br>
<textarea onkeyup="tt()" style="resize: none; margin: 5px; font-family: roboto; font-size: 16;" name="source1" cols="60" rows="18" wrap="virtual"></textarea><br>
<div onmouseover = "op_ov(this);" onmouseout = "op_ou(this);" onclick = "create(1);" style="width: 180px; margin:3px; padding: 7px; border: 1px solid #515151; box-sizing: border-box;">Opublikuj</div>
<br><br>podgląd<hr color="white" />

<div id="title">
<canvas id="Canvas1" width="750" height="50"></canvas>
<div style = "position: relative; top: -39; left: 15;"><span id = "t1" style = "font-family: roboto;"></span></div>
</div>
<script>
 var c = document.getElementById("Canvas1");
var ctx = c.getContext("2d");
ctx.moveTo(1,3);
ctx.lineTo(parseInt($('#t1').css('width'))*1+110,3);
ctx.lineTo(parseInt($('#t1').css('width'))*1+30,47);
ctx.lineTo(3,47);
ctx.lineTo(3,3);
ctx.fillStyle = "#202020"
ctx.fill();
ctx.strokeStyle = "#97ff64";
ctx.lineWidth = 3;
ctx.stroke();
ctx.strokeStyle = "#58ff07";
ctx.lineWidth = 1;
ctx.stroke();
</script>
<div id ="tt" class = "txt" style = "border: 2px solid black; margin-bottom: 10px; width: 612px; background: black;"></div>

</div>



<div id = "add_film" style="margin: 15px; font-size: 20px; color: white;">
Podaj tytuł:<br>
<input onkeyup="tyt(2)" style="margin: 5px; font-family: roboto; font-size: 18;" type="text" name="title2" size="63" maxlength="55" />
<br>Podaj link do filmu YouTube:<br>
<input onkeyup="yt()" style="margin: 5px; font-family: roboto; font-size: 18;" type="text" name="source2" size="63" maxlength="85" /><br>
<div onmouseover = "op_ov(this);" onmouseout = "op_ou(this);" onclick = "create(2);" style="width: 180px; margin:3px; padding: 7px; border: 1px solid #515151; box-sizing: border-box;">Opublikuj</div>
<br><br>podgląd<hr color="white" />
<div id="title">
<canvas id="Canvas2" width="750" height="50"></canvas>
<div style = "position: relative; top: -39; left: 15;"><span id = "t2" style = "font-family: roboto;"></span></div>
</div>
<script>
 var c = document.getElementById("Canvas2");
var ctx = c.getContext("2d");
ctx.moveTo(1,3);
ctx.lineTo(parseInt($('#t2').css('width'))*1+110,3);
ctx.lineTo(parseInt($('#t2').css('width'))*1+30,47);
ctx.lineTo(3,47);
ctx.lineTo(3,3);
ctx.fillStyle = "#202020"
ctx.fill();
ctx.strokeStyle = "#97ff64";
ctx.lineWidth = 3;
ctx.stroke();
ctx.strokeStyle = "#58ff07";
ctx.lineWidth = 1;
ctx.stroke();
</script>

<iframe id = "yt" width="616" height="345" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen style="border: 2px solid black;"></iframe>
</div>

<div id = "add_img" style="margin: 15px; font-size: 20px; color: white;">
Podaj tytuł:<br>
<input onkeyup="tyt(3)" style="margin: 5px; font-family: roboto; font-size: 18;" type="text" name="title3" size="63" maxlength="55" />
<br><br>
<input type="file" name="file_upload" id="file_upload" />

  <br>
  <span style="color:green; font-size: 11;"><i>(kliknij na obszar zdjęcia, aby zmienić pozycję znaku wodnego)</i></span>
  <br>
<div onmouseover = "op_ov(this);" onmouseout = "op_ou(this);" onclick = "create(3);" style="width: 180px; margin:3px; padding: 7px; border: 1px solid #515151; box-sizing: border-box;">Opublikuj</div>
 <br><br>podgląd<hr color="white" />
<div id="title">
<canvas id="Canvas3" width="750" height="50"></canvas>
<div style = "position: relative; top: -39; left: 15;"><span id = "t3" style = "font-family: roboto;"></span></div>
</div>
<script>
 var c = document.getElementById("Canvas3");
var ctx = c.getContext("2d");
ctx.moveTo(1,3);
ctx.lineTo(parseInt($('#t3').css('width'))*1+110,3);
ctx.lineTo(parseInt($('#t3').css('width'))*1+30,47);
ctx.lineTo(3,47);
ctx.lineTo(3,3);
ctx.fillStyle = "#202020"
ctx.fill();
ctx.strokeStyle = "#97ff64";
ctx.lineWidth = 3;
ctx.stroke();
ctx.strokeStyle = "#58ff07";
ctx.lineWidth = 1;
ctx.stroke();
</script>
 <div id = "test" style="width: 616px; border: 2px solid black;"></div>
 
 <script type="text/javascript">
  <?php $timestamp = time(); ?>
   
  $(function() {
    $('#file_upload').uploadify({
      'formData' : {
        'timestamp' : '<?php echo $timestamp; ?>',
        'token'     : '<?php echo md5('unique_salt' . $timestamp); ?>'
      },
	  'fileSizeLimit' : '7MB',
      'swf'      : 'uploadify.swf',
      'uploader' : 'uploadify.php?filename='+id_name,
 
      'onUploadSuccess' : function(file, data, response) {
		  f_data = data;
        if(data == 'Invalid file type.') alert("Nieprawidłowy typ pliku!");
		else if(data == "jpg" || data == "jpeg" || data == "png"){
			getImageSize('../uploads/'+ id_name + '.'+ data + '?'+new Date().getTime());
			
		}
		else if(data == "gif")
			document.getElementById("test").innerHTML = '<img src = "../uploads/' + id_name + '.gif" width = "616" />';
      }
 
    });
  });
  var px =0, py = 0;
   var imageObject;
   var water;
   var pp = 0;
   function po(a,e){pp = a;}
  function posit(evt,a) {
	   if (pp == 1 || a == 1){
	  var ca = document.getElementById("cv");
	  var context = ca.getContext("2d");
    var rect = ca.getBoundingClientRect();
      px = evt.clientX - rect.left,
      py = evt.clientY - rect.top
	  if(px<water.width/2) px = water.width/2;
	  if(py<water.height/2) py = water.height/2;
	  if(px>ca.width-water.width/2) px = ca.width-water.width/2;
	  if(py>ca.height-water.height/2) py = ca.height-water.height/2;
	  context.clearRect(0, 0, ca.width, ca.height);
	  context.drawImage(imageObject, 0, 0, ca.width, ca.height);
	  context.drawImage(water, px-water.width/2, py-water.height/2);
	   }
}
  function getImageSize(src) {
    imageObject = new Image();
        imageObject.src = src;

    imageObject.onload = function () {
		water = new Image();
        water.src = "../watermark.png";
		water.onload = function () {
			document.getElementById("test").innerHTML = '<canvas onclick="posit(event,1)" onmousedown="po(1)" onmouseup = "po(0)" onmousemove="posit(event,0)" id="cv" width="616" height = "'+imageObject.height/imageObject.width*616+'"></canvas>';
			var ca = document.getElementById("cv");
			var context = ca.getContext("2d");
			context.drawImage(imageObject, 0, 0, ca.width, ca.height);
			context.drawImage(water, ca.width-water.width, ca.height-water.height);
		}
        
    } 
}
  </script>

</div>
</div>
<div id = "fb_page">
<div class="fb-page" data-href="https://www.facebook.com/bekazpogan/" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bekazpogan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bekazpogan/">Beka z pogan</a></blockquote></div>
</div>
</div>
</div><br><br><br>
<br><
<div id="stopka"><span id ="sto"><a class = "infolinks" href ="../info/kontakt.php">Kontakt</a></span><span id ="sto"><a class = "infolinks" href ="../info/regulamin.php">Regulamin</a></span><span id ="sto"><a class = "infolinks" href ="../info/pp.php">Polityka Prywatności</a></span><br><br>Administracja serwisu nie ponosi odpowiedzialności za materiały dodawane przez użytkowników, którzy podczas dodawania materiałów zaakceptowali regulamin serwisu.
Jeśli uważasz, że materiał znajdujący się w naszym serwisie łamie prawo, bądź narusza zasady, możesz zgłosić ten fakt administracji serwisu.</div>
</body>
</html>