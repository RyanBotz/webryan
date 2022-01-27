<?php

$arrContextOptions=array( "ssl"=>array( "verify_peer"=>false, "verify_peer_name"=>false, ), ); 
$url = "https://restapiryan.herokuapp.com/api/asupan/bocil?apikey=Alphabot";
$json = file_get_contents("$url", false, stream_context_create($arrContextOptions));
//APIKEY
$data_json = json_decode($json, true);

$image = $data_json["result"]["url"];
//var_dump($data_json);
$img = $image;

//echo $img; 

?>

<!DOCTYPE html>
<html lang="in">
<head>
				<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0">
				<meta property="og:image" content="https://e.top4top.io/p_2216juvg50.jpg">
    <link rel="shortcut icon" href="https://e.top4top.io/p_2216juvg50.jpg" />
				<link rel="stylesheet" href="random.css">
				<title>RANDOM BOCIL</title>
</head>
<body align="center">
			
	<div class="hnti">		
				<h1>RANDOM BOCIL</h1>				
				<video controls autoplay>
      <video width="320" height="240" autoplay>
      <source src="movie.mp4" type="video/mp4">
      <source src="movie.ogg" type="vi<video width="320" height="240" autoplay>
      <source src="<?= $img ?>" type="video/mp4">
      <source src="<?= $img ?>" type="video/ogg">
  Your browser deo/ogg">
  Your browser does not support the video tag.
      </video>
				<button type="submit">
				<a class="next" href="lol.php">NEXT</a>
      </button>	
	</div>		
	
	<p>Creator :RyanBotz</p>
	<p>ApiKey  :<a href="https://ryan-restapi.herokuapp.com/docs">RyanBotz</a>
	
	</p>
	<p>Pesan   :
					JANGAN LUPA
	<a href="https://youtube.com/channel/UCBsYmd6PJ0Ck_DofYdP9LyQ">SUBCRIBE</a>
	</p>
				
</body>
</html>
