<?
if(isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['host']) && !empty($_POST['host'])
	&& ($_POST['type'] == "txt" || $_POST['type'] == "img" || $_POST['type'] == "yt")         )
{
	$admin_mode = 0;
	$d = $_POST['id'];
	$connection  = mysqli_connect('mysql7.superhost.pl', 'sh209641_base', 'ZXBBBYYJ', 'sh209641_base');
	$dbc = @mysql_select_db('sh209641_base', $connection) ;
	if(isset($_POST["login"]) && isset($_POST["password"])){
	$a_l = $_POST["login"];
	$a_p = $_POST["password"];
	echo $a_l ." O ". $a_p;

$query = "SELECT grade FROM admins WHERE login = '" . $a_l . "' AND password = '" . $a_p . "'";
$result = mysqli_query($connection, $query);
while($r = @mysqli_fetch_assoc($result)) {
	$admin_mode = $r['grade'];
	echo $r[login];
}
if($admin_mode > 0){
	$sql = mysqli_query($connection, "UPDATE poczekalnia SET mode=1 WHERE id='$d'"); 
    if($sql) echo "done"; 
    else echo " error2 "; 
}
else echo " error3 ".$admin_mode; 
}

    mysqli_close($connection); 
	
	
}
else echo "error1";
?>