<?
if(isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['host']) && !empty($_POST['host'])
	&& ($_POST['type'] == "txt" || $_POST['type'] == "img" || $_POST['type'] == "yt")         )
{
	if (isset($_POST["info"])) {
		if ($_POST["info"]=="a"){
			$im = imagecreatefromgif("uploads/" . substr($_POST['host'], 4));
			rename("uploads/" . substr($_POST['host'], 4), $_POST['host']);
	}
	else{
  // $imageData = $GLOBALS['HTTP_RAW_POST_DATA'];
  $imageData = $_POST["info"];
 
  // cleanups 
  $filteredData = substr($imageData, strpos($imageData, ",") + 1);
 
  // decode right data
  $unencodedData = base64_decode($filteredData);
 
  // output
  $fp = fopen($_POST['host'], "wb");
  fwrite($fp, $unencodedData);
  fclose($fp);
  unlink("uploads/" . substr($_POST['host'], 4));
	}
  $_POST['host'] = "../" . $_POST['host'];
}
	
	$title = $_POST['title'];
	$host = $_POST['host'];
	$type = $_POST['type'];
	$connection  = mysqli_connect('mysql7.superhost.pl', 'sh209641_base', 'ZXBBBYYJ', 'sh209641_base');
	$dbc = @mysql_select_db('sh209641_base', $connection) ;
	$ins = @mysqli_query($connection, "INSERT INTO poczekalnia SET title='$title', host='$host', type='$type'"); 
     
    if($ins) echo "done"; 
    else echo "error"; 
     
    mysql_close($connection); 
	
	
}
else echo "error";
?>