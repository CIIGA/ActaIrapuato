<?php
require_once "dompdf/autoload.inc.php";

use Dompdf\Dompdf;

// Crear un archivo .zip
$zip = new ZipArchive();
$zipFilename = 'Actas Circunstanciadas.zip';
$zip->open($zipFilename, ZipArchive::CREATE);
require 'include/cnx.php';
$fechaI = date('Y-m-d', strtotime($_GET['fechaI'] . ' -1 day'));
$fechaF = date('Y-m-d', strtotime($_GET['fechaF'] . ' +1 day'));
$sqlActa = "SELECT cuenta,contribuyente,domicilio,DATEPART(HOUR, fechaCaptura) as hora, DATEPART(MINUTE, fechaCaptura) as minutos, DAY(fechaCaptura) as dia,
format(fechaCaptura,'MMMM','es-es') as mes,YEAR(fechaCaptura) as anio,numOficio,numCarta,CaracteristicasDomicilio,constatado,personaReferencia,sexo,edad,estatura,complexion,
tez,identificacion,numero,manifiesta,hechos,DATEPART(HOUR, fechaTermino) as horaFin, DATEPART(MINUTE, fechaTermino) as minutosFin,expedidapor
FROM actaCircunstanciada WHERE fechaCaptura > ? and fechaCaptura < ?";
$cnxActa = sqlsrv_query($cnx, $sqlActa, array($fechaI,$fechaF));
// $Acta = sqlsrv_fetch_array($cnxActa);
// print_r($Acta);

while ($Acta = sqlsrv_fetch_array($cnxActa)) {
    $formatter = new NumberFormatter('es', NumberFormatter::SPELLOUT);
$anio = $formatter->format($Acta['anio']);
$cuenta=$Acta['cuenta'];
    // Crear el contenido HTML del PDF
    ob_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acta Circunstanciada</title>
        <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/ActaIrapuato/public/estilos/acta.css" rel="stylesheet">

    </head>

    <body>
        <main>
            <p class="bold text-center titulo">Acta Circunstanciada</p>

            <p class="text-justify">Contribuyente: <span class="bold mayuscula"><?php echo utf8_encode($Acta['contribuyente']) ?></span><br />
                <span>Domicilio: <span class="bold mayuscula"><?php echo utf8_encode($Acta['domicilio']) ?></span></span><br />
                <span>Cuenta predial: <span class="bold mayuscula"><?php echo $Acta['cuenta'] ?></span></span>
            </p>


            <p class="text-justify">En el municipio de Irapuato, Guanajuato, siendo las <span class="underline"><?php echo $Acta['hora'] ?></span>
                horas con <span class="underline"><?php echo $Acta['minutos'] ?></span> minutos del dia <span class="underline"><?php echo $Acta['dia'] ?></span>
                del mes de <span class="underline"><?php echo $Acta['mes'] ?></span> del año <span class="underline"><?php echo $anio ?></span>,
                el C. Luis Gerardo Carrillo Torres, habilitado como notificador conforme a la <span class="bold">carta facultativa</span> con Número de Oficio
                <span class="underline"><?php echo $Acta['numOficio'] ?></span>, emitida por el Tesorero Municipal Migue Ángel Fonseca Gutiérrez, vigente del 24
                de agosto del 2023 al 31 de diciembre del 2023, me constituí físicamente en el domicilio señalado al rubro, con el objeto de entregar
                Carta Invitación número <span><?php echo utf8_encode($Acta['numCarta']) ?></span> de fecha <span><?php echo $Acta['dia'] ?></span> de <span><?php echo $Acta['mes'] ?></span>
                del <span><?php echo $anio ?></span> dirigida al contribuyente C. <span class="mayuscula"><?php echo utf8_encode($Acta['contribuyente']) ?></span>.
            </p>
            <br>
            <p class="text-justify">Hago constar los hechos ocurridos al momento de entregar la <span class="bold">Carta Invitación señalada,</span> Me constituí fisca y legalmente en el domicilio
                ubicado en <span class="mayuscula"><?php echo utf8_encode($Acta['domicilio']) ?></span>, mismo que tiene las siguientes características <span class="underline"><?php echo utf8_encode($Acta['CaracteristicasDomicilio']) ?></span>
                Cerciorándome que es el domicilio correcto por haberlo constatado con: <span class="underline"><?php echo utf8_encode($Acta['constatado']) ?></span>, donde una persona que manifiesta
                ser: <span class="underline"><?php echo $Acta['personaReferencia'] ?></span> cuya media filiación es sexo:
                <span class="underline"><?php echo $Acta['sexo'] ?></span>, edad aproximada,
                <span class="underline"><?php echo utf8_encode($Acta['edad']) ?></span>, estatura aproximada: <span class="underline"><?php echo $Acta['estatura'].',' ?></span> complexión
                <span class="underline"><?php echo utf8_encode($Acta['complexion']) ?></span>, tez <span class="underline"><?php echo $Acta['tez'] ?></span>, persona que se identifica con
                <span class="underline"><?php echo utf8_encode($Acta['identificacion']) ?></span> expedida por <span class="underline"><?php echo $Acta['expedidapor'] ?></span>, con numero
                <span class="underline"><?php echo $Acta['numero'] ?></span>; que manifiesta que el contribuyente buscado <span class="underline"><?php echo utf8_encode($Acta['manifiesta']) ?></span>
                por lo que hago constar los siguientes hechos <span class="underline"><?php echo utf8_encode($Acta['hechos']) ?></span>.
            </p>
            <br>
            <p class="text-justify">No habiendo más hechos que hacer constar, se da por terminada la presente acta, siendo las <span class="underline"><?php echo $Acta['horaFin'] ?></span>
                horas con <span class="underline"><?php echo $Acta['minutosFin'] ?></span> minutos, del mismo dia en que se actúa.</p>
            <br>
            <p class="text-center">__________________________________ <br /><span>Luis Gerardo Carrillo Torres</span></p>
        </main>
    </body>


    </html>
<?php
    $html = ob_get_clean();

    // Crear un nuevo objeto Dompdf
    $pdf = new Dompdf();

    $options = $pdf->getOptions();
    $options->set(array("isRemoteEnabled" => true));
    $pdf->set_option("isPhpEnabled", true);
    $pdf->setOptions($options);

    // Cargar el contenido HTML en Dompdf
    $pdf->loadHtml($html);

    // Establecer el tamaño del papel (por ejemplo, carta)
    $pdf->setPaper('letter');

    // Renderizar el PDF
    $pdf->render();

    // Nombre del archivo PDF
    $pdfFilename = "Acta Circunstanciada - {$cuenta}.pdf";

    // Agregar el PDF al archivo .zip
    $zip->addFromString($pdfFilename, $pdf->output());

    // Liberar la memoria del PDF generado
    unset($pdf);
}

// Cerrar el archivo .zip
$zip->close();

// Descargar el archivo .zip
header('Content-Type: application/zip');
header("Content-Disposition: attachment; filename=\"$zipFilename\"");
readfile($zipFilename);

// Eliminar el archivo .zip después de la descarga
unlink($zipFilename);
?>