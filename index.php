<!doctype html>
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<header>
    <div class="sides"><img class="logo" src="src/logo_upc.png"></div>
    <div class="shadow_title"><div class="img_title"></div></div>
    <div class="sides"></div>
</header>


<nav class="menu">
    <ul>
        <li><a href="#" class="boto1"><img class="img_menu" src="src/pizza.png"></a></li>
        <li> <a href="#" class="boto2"><img class="img_menu" src="src/bocata.png"></a></li>
        <li> <a href="#" class="boto3"><img class="img_menu" src="src/platocombinado.png"> </a></li>
        <li><a href="#" class="boto4"><img class="img_menu" src="src/vegetariano.png"></a></li>
        <li><a href="#" class="boto5"><img class="img_menu" src="src/cerveza.png"></a></li>
    </ul>
</nav>

<div class="cos">
    <div class="seccions">

        <?php
        $cadena = " host='localhost' port='5432' dbname='postgres' user='postgres' password='iavm2umr'";
        $dbconn = pg_connect($cadena);

        if (!$dbconn) {
            echo "An error occurred.\n";
            exit;
        }
        $result = pg_query ($dbconn, "
                    SELECT nom, ratio
                    FROM menjar
                    WHERE tipus = 'Pizza'
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


    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.2909183403776!2d2.1111972152066056!3d41.38948810382827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498509f468895%3A0xf3ab8ba023c5cd56!2sFIB+-+Facultat+d&#39;Inform%C3%A0tica+de+Barcelona!5e0!3m2!1sca!2ses!4v1508009666337"  frameborder="0"  allowfullscreen></iframe>
    </div>
</div>
<footer>(c) 15 october 2017 / Oriol Aranda - David Pujol - Pol Garcia </footer>
<script src=https://code.jquery.com/jquery-3.1.0.min.js></script>
<script src="js/animacions.js"> </script>

</body>
</html>
