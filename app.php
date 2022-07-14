
<?php
    $nombre = (string) "mONICA";
    $edad = (int) 44;
    $altura = (float) 1.50;
    $soyProfesor = (bool) true;
    $pasaTiempos = (array) [
        (string) "dISEÑAR",
        (string) "ACAMPAR",
        (string) "COCINAR",
        (string) "PODCATS"
    ];
    $dirrecion = (array) [
        "Principal" => (string) "CONUCOS",
        "opcional" => (string) "PIEDECUESTA",
    ];
    $cuerpo = (object) [];
    $cuerpo->colorPiel = (string) "BLANCA";
    $cuerpo->colorOjos = (string) "CAFE CLAROS";
    $cuerpo->tipoPelo = (string) "RIZADO";

    var_dump($nombre);
    echo "<br> <br>";
    var_dump($edad);
    echo "<br> <br>";
    var_dump($altura);
    echo "<br> <br>";
    var_dump($soyProfesor);
    echo "<br> <br>";
    var_dump($pasaTiempos);
    echo "<br> <br>";
    var_dump($dirrecion);
    echo "<br> <br>";
    var_dump($cuerpo);

?>



