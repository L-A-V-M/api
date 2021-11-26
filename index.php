<?php

if(isset($_GET['canc'])){

    $c= $_GET['canc'];
    $cse = explode(" ",$c);
    $canc = $cse[0];
    $i=0;
    foreach ($cse as $ca) {
        # code...
        if($cse[$i] != $cse[0]){
            $canc = $canc."$20".$ca
        }
        $i++;
    }




$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://shazam.p.rapidapi.com/auto-complete?term=kiss%20the&locale=en-US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: shazam.p.rapidapi.com",
		"x-rapidapi-key: 1d050a8fadmshf36262d9809444dp141b5ejsn4f0d24818d8d"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

$nres= "'".$response."'";
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    //echo $response
	$info = json_decode($response, true);
    $canciones = $info(['hints'];
}

}

?>
<DOCTYPE html>
    <html lang="es">    
    <head>
        <title> Busqueda de cancion </title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="gray" text="black">

        <center>

            <div class="contain">
                <form action="" action="GET">
                    <h2> CANCION: </h2>
                    <input type="text" name="canc"> 
                    <br><br>
                    <button type="submit"> BUSCAR </button> 
                    <br><br>
                </form>
            </div>
            
            <tr>

                <?php
                    if((isset($response))!=null){
                ?>
                <table width="300">
                    <tr>
                        <td> <h2> RESULTADO </h2> </td>
                    </tr>

                    <?php
                        for($i=0; $i<count($canciones); $i++){
                    ?>
                    <tr>
                        <td><?php echo $canciones[$i]['term']?></td>
                        <td><a href="https://www.youtube.com/results?search_query=SALSA" > 
                        <img src="logo.jpg" with="35px" height="20px"> </td></a> >
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                    var_dump($info);
                    }
                ?>

            </tr>

        </center>

    </body>

</html>