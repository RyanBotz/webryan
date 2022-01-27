<?php

$arrContextOptions=array( "ssl"=>array( "verify_peer"=>false, "verify_peer_name"=>false, ), ); 
$url = "https://restapiryan.herokuapp.com/api/asupan/bocil?apikey=Alphabot";
$json = file_get_contents("$url", false, stream_context_create($arrContextOptions));
//APIKEY
$data_json = json_decode($json, true);

$image = $data_json["result"]["url"];
//var_dump($json);
$img = $image;

echo $img; 

?>


<!DOCTYPE html>
<html lang="in">
<head>
				<meta charset="UTF-8">
				<title>Judul halaman</title>
</head>
<body>
				
				<video width="320" height="240" autoplay>
      <source src="movie.mp4" type="video/mp4">
      <source src="movie.ogg" type="vi<video width="320" height="240" autoplay>
      <source src="<?= $img ?>" type="video/mp4">
      <source src="<?= $img ?>" type="video/ogg">
  Your browser deo/ogg">
  Your browser does not support the video tag.
      </video>
      
</body>
</html>
