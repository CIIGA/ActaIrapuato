<?php
require 'include/cnx.php';
// $fechaI = date('Y-m-d', strtotime($_POST['fechaI'] . ' -1 day'));
$fechaI = $_POST['fechaI'];
$fechaF = date('Y-m-d', strtotime($_POST['fechaF'] . ' +1 day'));
$sqlCantidadA = "SELECT count(*) as c FROM actaCircunstanciada WHERE fechaCaptura > ? and fechaCaptura < ?";
$cnxCantidadA = sqlsrv_query($cnx, $sqlCantidadA, array($fechaI,$fechaF));
$CantidadA = sqlsrv_fetch_array($cnxCantidadA);
$cantidad=$CantidadA['c'];
if ($cantidad != 0) {
    $response = [
        "success" => true,
        "mensaje" => "Se encontraron $cantidad actas entre estas fechas",
    ];
} else {
    $response = [
        "success" => false,
        "mensaje" => "No se encontraron actas entre este rango de fechas",
    ];
}


header("Content-Type: application/json");
    echo json_encode($response);
?>