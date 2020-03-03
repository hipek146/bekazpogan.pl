<?
function round_up ($value, $places=1) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return ceil($value * $mult) / $mult;
 }
if(isset($_POST['stars']) && !empty($_POST['stars']) && isset($_POST['id']) && !empty($_POST['id']))
{
	$connection  = mysqli_connect('mysql7.superhost.pl', 'sh209641_base', 'ZXBBBYYJ', 'sh209641_base');
	$dbc = @mysql_select_db('mysql7.superhost.pl', $connection) ;
	$query = "SELECT id, stars, rating, s1, s2, s3, s4, s5 FROM poczekalnia WHERE id = " . $_POST['id'];
	$result = mysqli_query($connection, $query);
	$id = $_POST['id'];
	$i = 0;
	$k = 0;
	$s = 0;
	switch($_POST['stars']){
		case "s1":
			$s = 1;
		break;
		case "s2":
			$s = 2;
		break;
		case "s3":
			$s = 3;
		break;
		case "s4":
			$s = 4;
		break;
		case "s5":
			$s = 5;
			
		break;
		default:
			exit;
		break;
	}
	while($r = @mysqli_fetch_assoc($result)) { 
	mysqli_query($connection, "UPDATE poczekalnia SET ". $_POST['stars'] ."=" . ($r[$_POST['stars']] + 1) . "
    WHERE id='$id'");
	$i = $r['s1']+$r['s2']+$r['s3']+$r['s4']+$r['s5']+1;
	mysqli_query($connection, "UPDATE poczekalnia SET rating=" . $i . "
    WHERE id='$id'");
	$k = ($r['s1']*1 + $r['s2']*2 + $r['s3']*3 + $r['s4']*4 + $r['s5']*5 + $s)/$i;
	mysqli_query($connection, "UPDATE poczekalnia SET stars=" . round_up($k, 4) . "
    WHERE id='$id'");
	echo $k;
	}
	mysqli_close($connection); 
}
?>