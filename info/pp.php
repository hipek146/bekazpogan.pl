
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
</script>
</head>
<body>
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

<div style="color:white; font-size: 13; text-align: justify; padding:4px;">1. Serwis nie zbiera w sposób automatyczny żadnych informacji, z wyjątkiem informacji zawartych w plikach cookies.
<br>
<br>2. Pliki cookies (tzw. "ciasteczka") stanowią dane informatyczne, w szczególności pliki tekstowe, które przechowywane są w urządzeniu koñcowym Użytkownika Serwisu i przeznaczone są do korzystania ze stron internetowych Serwisu. Cookies zazwyczaj zawierają nazwę strony internetowej, z której pochodzą, czas przechowywania ich na urządzeniu koñcowym oraz unikalny numer. 
<br>
<br>3. Podmiotem zamieszczającym na urządzeniu koñcowym Użytkownika Serwisu pliki cookies oraz uzyskującym do nich dostęp jest operator Serwisu bekazpogan.pl
<br>
<br>4. Pliki cookies wykorzystywane są w celu: 
<br>a) dostosowania zawartości stron internetowych Serwisu do preferencji Użytkownika oraz optymalizacji korzystania ze stron internetowych; w szczególności pliki te pozwalają rozpoznać urządzenie Użytkownika Serwisu i odpowiednio wyświetlić stronę internetową, dostosowaną do jego indywidualnych potrzeb;
<br>b) tworzenia statystyk, które pomagają zrozumieć, w jaki sposób Użytkownicy Serwisu korzystają ze stron internetowych, co umożliwia ulepszanie ich struktury i zawartości;
<br>c) utrzymanie sesji Użytkownika Serwisu (po zalogowaniu), dzięki której Użytkownik nie musi na każdej podstronie Serwisu ponownie wpisywać loginu i hasła;
<br>
<br>5. W ramach Serwisu stosowane są dwa zasadnicze rodzaje plików cookies: "sesyjne" (session cookies) oraz "stałe" (persistent cookies). Cookies "sesyjne" są plikami tymczasowymi, które przechowywane są w urządzeniu koñcowym Użytkownika do czasu wylogowania, opuszczenia strony internetowej lub wyłączenia oprogramowania (przeglądarki internetowej). "Stałe" pliki cookies przechowywane są w urządzeniu koñcowym Użytkownika przez czas określony w parametrach plików cookies lub do czasu ich usunięcia przez Użytkownika.
<br>
<br>6. W ramach Serwisu stosowane są następujące rodzaje plików cookies:
<br>a) "niezbędne" pliki cookies, umożliwiające korzystanie z usług dostępnych w ramach Serwisu, np. uwierzytelniające pliki cookies wykorzystywane do usług wymagających uwierzytelniania w ramach Serwisu;
<br>b) pliki cookies służące do zapewnienia bezpieczeñstwa, np. wykorzystywane do wykrywania nadużyć w zakresie uwierzytelniania w ramach Serwisu;
<br>c) "wydajnościowe" pliki cookies, umożliwiające zbieranie informacji o sposobie korzystania ze stron internetowych Serwisu;
<br>d) "funkcjonalne" pliki cookies, umożliwiające "zapamiętanie" wybranych przez Użytkownika ustawieñ i personalizację interfejsu Użytkownika, np. w zakresie wybranego języka lub regionu, z którego pochodzi Użytkownik, rozmiaru czcionki, wyglądu strony internetowej itp.; 
<br>e) "reklamowe" pliki cookies, umożliwiające dostarczanie Użytkownikom treści reklamowych bardziej dostosowanych do ich zainteresowañ. 
<br>
<br>7. W wielu przypadkach oprogramowanie służące do przeglądania stron internetowych (przeglądarka internetowa) domyślnie dopuszcza przechowywanie plików cookies w urządzeniu koñcowym Użytkownika. Użytkownicy Serwisu mogą dokonać w każdym czasie zmiany ustawieñ dotyczących plików cookies. Ustawienia te mogą zostać zmienione w szczególności w taki sposób, aby blokować automatyczną obsługę plików cookies w ustawieniach przeglądarki internetowej bądź informować o ich każdorazowym zamieszczeniu w urządzeniu Użytkownika Serwisu. Szczegółowe informacje o możliwości i sposobach obsługi plików cookies dostępne są w ustawieniach oprogramowania (przeglądarki internetowej). 
<br>
<br>8. Operator Serwisu informuje, że ograniczenia stosowania plików cookies mogą wpłynąć na niektóre funkcjonalności dostępne na stronach internetowych Serwisu.
<br>
<br>9. Pliki cookies zamieszczane w urządzeniu koñcowym Użytkownika Serwisu i wykorzystywane mogą być również przez współpracujących z operatorem Serwisu reklamodawców oraz partnerów.</div>





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