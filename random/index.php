
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<style type="text/css">
</style>
</head>
<body>



<?php

function round_up ($value, $places=1) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return ceil($value * $mult) / $mult;
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

$dbc = @mysql_select_db('sh209641_base', $connection) ;
$query = "SELECT id FROM posts  ORDER BY RAND()"; 
$result = mysqli_query($connection, $query);
while($r = @mysqli_fetch_assoc($result)) { 
header("Location: http://bekazpogan.pl/post/" . $r['id']);
}

?>
</body>
</html>