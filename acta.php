<?php

// require '../../include/cnx.php';

//inicializamos el bufer para despues guardarlo en una variable
ob_start();
// consultas sql

// $cuenta = $_GET['cta'];

// $sqlCliente = "SELECT *, format(fechan,'dd'' de ''MMMM'' de ''yyyy','es-es') as fechaN,
// format(fechae,'dd'' de ''MMMM'' del año ''yyyy','es-es') as fechaE
//  FROM determinacionesA WHERE cuenta = ?";
// $resultC = sqlsrv_query($cnx, $sqlCliente, array($_GET['cta']));
// $rowC = sqlsrv_fetch_array($resultC);
// $formatter = new NumeroALetras();

// // include '../../include/cnx.php';
// $sqlCalcula = "select c.* from implementta i join CalculaImpuestos c on i.Clave = c.cuenta where i.Cuenta = ? order by anio, bim";
// $cnx_calcula = sqlsrv_query($cnx, $sqlCalcula, array($_GET['cta']));
// $cnx_calcula_drenaje = sqlsrv_query($cnx, $sqlCalcula, array($_GET['cta']));
// $cnx_calcula_actualiza = sqlsrv_query($cnx, $sqlCalcula, array($_GET['cta']));
// $cnx_calcula_recargos = sqlsrv_query($cnx, $sqlCalcula, array($_GET['cta']));
// $cnx_calcula_multas = sqlsrv_query($cnx, $sqlCalcula, array($_GET['cta']));
// $cnx_calcula_resumen = sqlsrv_query($cnx, $sqlCalcula, array($_GET['cta']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acta Circunstanciada</title>
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/ActaIrapuato/public/estilos/pdf.css" rel="stylesheet">

</head>

<body>
    <header>
        <div>
            <img class="imgHeaderLeft" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/ActaIrapuato/public/img/logoleft.png">

        </div>
        <div>
            <img class="imgHeaderRigth" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/ActaIrapuato/public/img/logoright.png">
            <img class="titleHeaderRigth" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/ActaIrapuato/public/img/logo2.png">
        </div>


        <p class="header_title">
            <span class="bold letra1">MUNICIPIO DE IRAPUATO, GTO.</span><br />
            <span class="bold">TESORERÍA MUNICIPAL</span><br>
            <span class="">Álvaro Obregón #100, Col. Zona Centro, Municipio, Irapuato, Gto. C.P. 36500</span><br />
            <span>R.F.C MIG850101IZ2</span>

        </p>
    </header>

    <main>
        <p class="bold text-center">CUENTA PREDIAL: <?php echo "texto" ?></p>
        <p class="bold text-justify">PROPIETARIO: <br /> <?php echo "texto" ?></p>

        <table class="tableText">
            <tr>
                <td class="bold text-justify" style="width: 25%;">DOMICILIO DE NOTIFICACIÓN</td>
                <td style="width: 12.5%;"></td>
                <td class="bold text-justify" style="width: 25%;">UBICACIÓN DEL PREDIO</td>
                <td style="width: 12.5%;"></td>
                <td class="text-justify" style="width: 25%;"><span class="bold">FOLIO: </span><?php echo "texto" ?></td>
            </tr>
            <tr>
                <td class="mayuscula"><?php echo "texto" ?></td>
                <td></td>
                <td class="mayuscula"><?php echo "texto" ?></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br>
        <p class="bold text-center">DATOS DEL PREDIO: <?php echo "texto" ?></p>
        <table class="tableText">
            <tr style="background-color: black;">
                <td class="bold text-center tdWhithe">Valor fiscal</td>
                <td class="bold text-center tdWhithe">Efectos</td>
                <td class="bold text-center tdWhithe">Último movimiento</td>
                <td class="bold text-center tdWhithe">Tasa</td>
                <td class="bold text-center tdWhithe">Cuota Bimestral</td>
                <td class="bold text-center tdWhithe">Cuota anual</td>

            </tr>
            <tr>
                <td class="text-center"><?php echo "texto" ?></td>
                <td class="text-center"><?php echo "texto" ?></td>
                <td class="text-center"><?php echo "texto" ?></td>
                <td class="text-center"><?php echo "texto" ?></td>
                <td class="text-center"><?php echo "texto" ?></td>
                <td class="text-center"><?php echo "texto" ?></td>

            </tr>
        </table>

        <br><br>
        <p class="text-justify">Estimado contribuyente, la Tesorería Municipal, lo invita para que regularice el adeudo del <span class="bold">Impuesto Predial, </span>
            por ser propietario o poseedor del bien inmueble, siendo que a la fecha su adeuto es el siguiente:</p>
        <!-- centro la tabla horizontalmente -->
        <div style="text-align: center;">
            <table style="width: 40%; border-collapse: collapse; margin: 0 auto;">
                <tr>
                    <td>Adeudo rezago</td>
                    <td class="text-right"><?php echo "texto" ?></td>
                </tr>
                <tr>
                    <td>Adeudo corriente</td>
                    <td class="text-right"><?php echo "texto" ?></td>
                </tr>
                <tr>
                    <td>Actualización del impuesto</td>
                    <td class="text-right"><?php echo "texto" ?></td>
                </tr>
                <tr>
                    <td>Gastos de ejecución</td>
                    <td class="text-right"><?php echo "texto" ?></td>
                </tr>
                <tr>
                    <td>Recargos ordinarios</td>
                    <td class="text-right"><?php echo "texto" ?></td>
                </tr>
                <tr>
                    <td>Recargos moratorios</td>
                    <td class="text-right"><?php echo "texto" ?></td>
                </tr>
                <tr>
                    <td class="bold">Total</td>
                    <td class="text-right"><?php echo "texto" ?></td>
                </tr>
            </table>
        </div>
        <br>
        <p class="text-justify">Para regularizar su pago del impuesto predial, favor de acudir a las oficinas de la Tesorería Municipal de Irapuato, Guanajuato, ubicadas
            en la calle Álvaro Obregon No. 100 planta baja, Centro de Gobierno, <span class="bold">Zona Centro de esta Ciudad.</span>
        </p>
        <p class="text-justify">En virtud de lo expuesto, usted cuenta con el plazo de <span class="bold">tres días</span> hábiles contados a partir del día hábil siguiente
            a aquel en que reciba esta invitacón, para regularizar su adeudo y gozar de la tranquilidad del cumplimiento voluntario de sus obligaciones fiscales, contribuyendo
            con ello a crear un mejor Municipio.</p>
        <p class="bold text-justify"> En el supuesto de que al recibir esta carta invitación se encuente al corriente de su adeudo en materia del impuesto predial,
            favor de hacer caso omiso de la presente.
        </p>
        <p class="text-justify">Para cualquier aclaración o duda ponemos a sus órdenes la linea teléfonica (462) 606 9999 extenciones 1561, 1562 y 1563 o bien,
            presentarse en las instalaciones de la Tesorería Municipal en el domicilio entes señalado, presentando este documento.
        </p>
        <p class="text-justify">Recuerde, no existen funcionarios acreditados para recibir el pago en efectivo, los medios de pago autorizados, solo son los indicados
            en esta carta invitación.
        </p>
        <p class="text-justify">Le informamos que su adeudo se actualizará conforme a la ley de Hacienda para los Municipios del Estado de Guanajuato, la Ley
            de Ingresos para el Municipio de Irapuato, Guanajuato y demás leyes aplicables hasta el momento en que realice su pago, asi mismo le comunicamos que con fines
            de actualizar la base de datos de impuestos inmobiliarios se tomaran fotografias de la fachada de su inmueble.
        </p>
        <br>
        <p class="bold">IRAPUATO, GTO., A 18 DE SEPTIEMBREDE 2023 <br />
            DIRECCIÓN DE IMPUESTOS INMOBILIARIOS <br><br>
            -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        <br>
        <br>
        
        <p class="bold letra1 text-center">ACUSE DE RECIBIDO</p>
        <p class="text-right"><span class="bold">FOLIO: </span><?php echo "texto" ?></p>
        <p>
            <span class="text-justify mayuscula"><span class="bold">CUENTA PREDIAL: </span><?php echo "texto" ?></span><br />
            <span class="text-justify mayuscula"><span class="bold">PROPIETARIO: </span><?php echo "texto" ?></span><br />
            <span class="text-justify mayuscula"><span class="bold">DOMICILIO DEL PREDIO: </span><?php echo "texto" ?></span><br />
            <span class="text-justify mayuscula"><span class="bold">DOMICILIO DE NOTIFICACIÓN: </span><?php echo "texto" ?></span>
        </p>
        <table class="tableText">
            <tr>
                <td class="text-justify" style="width: 42%;">TELEFONO: ___________________________________________</td>
                <td style="width: 16%;"></td>
                <td class="text-justify" style="width: 42%;">CORREO: ___________________________________________</td>
            </tr>
            <tr>
                <td><br></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>RECIBÍ: ___________________________________________</td>
                <td></td>
                <td>ENTREGA: ___________________________________________</td>
            </tr>
           
            <tr>
                <td class="text-center">NOMBRE Y FIRMA</td>
                <td></td>
                <td class="text-center">NOMBRE Y FIRMA</td>
            </tr>
        </table>
        <p>FECHA DE ENTREGA: _______________________________</p>

        <table style="width: 100%;">
            <tr>
                <td class="bold" style="width: 15%;">Lugar de la visita</td>
            </tr>
            <tr>
                <td style="width: 15%;">Predio</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Notificación</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Otro</td>
                <td style="width: 5%;" class="borders"></td>
                <td rowspan="11" style="width: 40%;" class="borders"></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td class="bold" style="width: 15%;">Tipo de predio</td>
            </tr>
            <tr>
                <td style="width: 15%;">Urbano</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Rustico</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;"></td>
                <td style="width: 5%;" class="borders"></td>
                
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td class="bold" style="width: 15%;">Uso de predio</td>
            </tr>
            <tr>
                <td style="width: 15%;">Habitacional</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Comercial</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Industrial</td>
                <td style="width: 5%;" class="borders"></td>
                
            </tr>
            <tr>
                <td style="width: 15%;">Gobierno</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Agricola</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Parcela</td>
                <td style="width: 5%;" class="borders"></td>
                
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td class="bold" style="width: 15%;">Estado del predio</td>
            </tr>
            <tr>
                <td style="width: 15%;">Habitado</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Baldio</td>
                <td style="width: 5%;" class="borders"></td>
                <td style="width: 15%;">Abandonado</td>
                <td style="width: 5%;" class="borders"></td>
                
            </tr>
        </table>





    </main>

    <!-- <p>
        <script type="text/php">
            if ( isset($pdf) ) {
                $pdf->page_script('
                    $font1 = $fontMetrics->get_font("helvetica", "normal");
                    $font2 = $fontMetrics->get_font("helvetica", "bold");
                    $pdf->text(490, 930, "P á g i n a  $PAGE_NUM de $PAGE_COUNT", $font1, 8);
                    $pdf->text(400, 950, "Dirección Jurídica y de Fiscalización", $font2, 8);
                ');
            }
            </script>
    </p> -->
</body>
<!-- <p class="text-justify"></p> -->

</html>
<?php
//guardar tod0 el buher en una variable
$html = ob_get_clean();

//requerir dompdf
// require_once '../../include/dompdf/autoload.inc.php';
require_once "dompdf/autoload.inc.php";




use Dompdf\Dompdf;

$pdf = new Dompdf();

$options = $pdf->getOptions();
$options->set(array("isRemoteEnabled" => true));
$pdf->set_option("isPhpEnabled", true);
$pdf->setOptions($options);

$pdf->loadHtml($html);
$pdf->setPaper('legal');
// horizontal
// $dompdf->setPaper('A4', 'landscape'); 
$pdf->render();
// true para que habra el pdf
// false para que se descargue
$pdf->stream("Acta Circunstanciada.pdf", array("Attachment" => false));
?>