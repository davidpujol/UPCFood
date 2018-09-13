<?php
$cadena = " host='localhost' port='5432' dbname='postgres' user='postgres' password='iavm2umr'";
$dbconn = pg_connect($cadena);

if (!$dbconn) {
    echo "An error occurred.\n";
    exit;
}

$res = $_POST['restaurant'];

$result = pg_query ($dbconn, "
                    SELECT mapa
                    FROM menjar
                    WHERE nom='$res'
                    GROUP BY mapa
                ");
    $valor = pg_fetch_row($result);

echo <<<HTML
        
               <iframe src=$valor[0] frameborder="0" allowfullscreen> </iframe>  
               <style>
                    iframe{
                        display: block;
                        height:100%;
                        width: 100%;
                        border-style: solid;
                        border-width: 2px;
                        border-radius: 10px;
                    }
                </style>
        
HTML;

pg_close($dbconn);
?>