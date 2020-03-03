<?
if(isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['host']) && !empty($_POST['host'])
	&& ($_POST['type'] == "txt" || $_POST['type'] == "img" || $_POST['type'] == "yt")         )
{
	$admin_mode = 0;
	$i = $_POST['id'];
	$host = $_POST['host'];
	
	
	$title = $_POST['title'];
	$type = $_POST['type'];
	$connection  = mysqli_connect('mysql7.superhost.pl', 'sh209641_base', 'ZXBBBYYJ', 'sh209641_base');
	$dbc = @mysql_select_db('sh209641_base', $connection) ;
	if(isset($_POST["login"]) && isset($_POST["password"])){
	$a_l = $_POST["login"];
	$a_p = $_POST["password"];

$query = "SELECT grade FROM admins WHERE login = '" . $a_l . "' AND password = '" . $a_p . "'";
$result = mysqli_query($connection, $query);
while($r = @mysqli_fetch_assoc($result)) {
	$admin_mode = $r['grade'];
}
if($admin_mode > 0){
	if (isset($_POST["info"])) {
		if ($_POST["info"]=="a"){
			$im = imagecreatefromgif($_POST['host']);
			echo substr($_POST['host'], 3) . " - ";
			rename(substr($_POST['host'], 3), "main_img/".substr($_POST['host'], 7));
			unlink(substr($_POST['host'], 3));
			$host = "../main_img/".substr($_POST['host'], 7);
	}
	}
	$ins = mysqli_query($connection, "INSERT INTO posts SET title='$title', host='$host', type='$type'"); 
	$sql = mysqli_query($connection, "DELETE FROM poczekalnia WHERE id = $i");
    if(!$sql) echo " error4 "; 
    if($ins) echo "done"; 
    else echo " error2 "; 
}
else echo " error3 "; 
}      
    mysqli_close($connection); 
	
	
}
else echo "error1";
?>