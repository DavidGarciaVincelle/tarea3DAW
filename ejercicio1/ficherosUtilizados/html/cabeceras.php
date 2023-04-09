<h2>Script Cabeceras - Tarea de David Garcia Vincelle</h2><br>
<?php
foreach (getallheaders() as $nombre => $valor) {
    echo "$nombre: $valor\n";
    ?><br><?php
}
?>
