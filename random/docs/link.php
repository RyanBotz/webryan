<?php

if (isset($_POST['submit'])) {
			$nulis = $_POST['nulis'];       
			$jihan = str_replace(" ","%20", $nulis); 
			} else{
			          $text = "nulis dulu broo...";
			}

//api		
$arrContextOptions=array( "ssl"=>array( "verify_peer"=>false, "verify_peer_name"=>false, ), ); 
$url = "https://restapiryan.herokuapp.com/api/short/tiny?url=$jihan&apikey=Alphabot";
$json = file_get_contents("$url", false, stream_context_create($arrContextOptions));
//APIKEY
$data_json = json_decode($json, true);

$link = $data_json["result"]["link"];
$status = $data_json["status"];


//echo $link; 
//echo $status; 

//var_dump($img);
?>



 
<!DOCTYPE html>
<html lang="in">
<head>
				
				<style>
					body {
									background: #000;
					}
					input{
					  			 border: 1px solid #000;
					  			 padding: 15px;
					  			 width: 330px;					  			 
					  			 border-radius: 3px;		
					  			 width: auto;		  			 
			   }
					.h1{
					 				 color: #fff;
					 				 
		 	 	  }
					.box{				
					  				position: relative;						
										background: teal;
										border-radius: 10px;
										padding: 10px;
										width: 100%;
					}		
					button{																																		
										color: #fff;
										background: red;
										width: auto;
										border-radius: 3px;									
										padding: 10px;
										font-size: 8px;
										border: 1px solid #000;
										
					}
					img{
										padding: 10px;
										width: auto;
										width: 326px;ding: 20px;										
										border-radius: 1px;
										
					}
</style>

				<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0">
				<title>Short Link</title>
				<link rel="stylesheet" href="bot.ccs">
</head>
<body align="center">
				
<form action="" method="post">
				<div class="box">
				   <h1 class="h1">Short Link</h1>
				   
				   <input type="text" name="nulis" placeholder="Paste Your Link">
				   
				   	  
<button type="submit" name="submit" >
				<h1>KLIK</h1>
</button>	

<p>LINK :</p><input type="text" readonly value="<?= $link ?>">
<p>STATUS : <?= $status ?></p>





			   
				</div>  
</form>
				

						
</body>
</html>
