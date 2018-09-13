<?php
$cadena = " host='localhost' port='5432' dbname='postgres' user='postgres' password='iavm2umr'";
$dbconn = pg_connect($cadena);
echo "$dbconn";
if (!$dbconn) {
    echo "An error occurred.\n";
    exit;
}

$a = $_POST['tipo'];

$result = pg_query ($dbconn, "
                    SELECT nom, ratio
                    FROM menjar
                    WHERE tipus = '$a'
                    ORDER BY ratio;
                ");

$files =0;
$files = pg_num_rows($result);
$x=0;

while ($x < $files) {
    pg_result_seek($result, x);
    $valor = pg_fetch_row($result);
    $x = $x + 1;

    echo <<<HTML
        <div class="ranking">
            <div class="elements_rank">
                <div class="contain">
                <a class ="$valor[0]" href="#" title="nom"> $valor[0] </a>
                
                <div class="estrelles">
                
                
	            <a href="#" data-value="1" title="Votar con 1 estrellas"> <img id="una" src="gris.png"></a>
	            <a href="#" data-value="2" title="Votar con 2 estrellas"> <img id="dos" src="gris.png"> </a>
	            <a href="#" data-value="3" title="Votar con 3 estrellas"> <img id="tres" src="gris.png"></a>
	            <a href="#" data-value="4" title="Votar con 4 estrellas"> <img id="quatre" src="gris.png"> </a>
	            <a href="#" data-value="5" title="Votar con 5 estrellas"> <img id="cinc" src="gris.png"> </a>
	            </div>
	            </div>
	            <style>
                     #una, #dos, #tres, #quatre , #cinc {
                     height: 30px;
                     width: 30px;
                     display: inline-block;
                   } 
                   a{
                        color: black;
                        font-family: "Verdana";
                        font-weight: bold;
                        font-size: 16px;
                        display: inline-block;
                        text-decoration: none; 
                   }           
                   .ranking{
                        display: block;
                        height: 20%;
                        
                   }
                   .elements_rank{
                        display:block;
                        height: 80%;
                        width: 80%;
                        background-color: rgba(0,0,0,.3);
                        border-style: solid;
                        border-width: 0px;
                        border-color: rgba(0,0,0,.1);
                        border-radius: 10px;
                        margin: 0 auto;
                        padding-left: 20px;
                   }
                   .estrelles{
                        display:inline-block;
                        height: 100%;
                        margin: 0 auto;
                   }
                   .contain{
                        display: block;
                        height: 100%;
                        width: 100%;
                        margin: auto 0;
                   }
                </style>
	            
	            <script src="js/animacions.js"> </script>
            </div>
        </div>
HTML;

}
pg_close($dbconn);
?>