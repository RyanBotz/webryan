<?php

//api		
$arrContextOptions=array( "ssl"=>array( "verify_peer"=>false, "verify_peer_name"=>false, ), ); 
$url = "https://ryan-restapi.herokuapp.com/docs/nsfw/ass?apikey=Alphabot";
$json = file_get_contents("$url", false, stream_context_create($arrContextOptions));
//APIKEY
$data_json = json_decode($json, true);

$image = $data_json["result"];
//var_dump($json);
$img = $image;



?>

<!DOCTYPE html>
<html lang="in">
<head>
				<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0">
				<meta property="og:image" content="https://e.top4top.io/p_2216juvg50.jpg">
    <link rel="shortcut icon" href="https://e.top4top.io/p_2216juvg50.jpg" />
				<link rel="stylesheet" href="nsfw.css">
				<title>ASS</title>
</head>
<body align="center">
			
	<div class="hnti">		
				<h1>ASS</h1>				
				<img src="<?= $img ?>" alt="">
				<button type="submit">
				<a class="next" href="ass.php">NEXT</a>
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
