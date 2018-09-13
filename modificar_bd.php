<?php
$cadena = " host='localhost' port='5432' dbname='postgres' user='postgres' password='iavm2umr'";
$dbconn = pg_connect($cadena);

if (!$dbconn) {
    echo "An error occurred.\n";
    exit;
}

$punts = $_POST['puntuacio'];

                    pg_query ($dbconn, "
                    UPDATE menjar
                    SET vots= vots + 1
                ");
pg_close($dbconn);
?>