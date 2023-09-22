<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acta Circunstanciada Irapuato-P</title>
    <link rel="icon" href="public/img/implementtaIcon.png">
    <link href="public/fontawesomev6/css/all.css" rel="stylesheet">
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/ActaIrapuato/public/estilos/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--********************************INICIO NAVBAR***************************************************************-->


    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#"><img src="public/img/logoImplementtaHorizontal.png" width="250" height="82" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <hr style="margin-top: -10px;">


</head>

<body>

    <div class="container col-md-5 ">
        <div class="mt-4">
            <h4 style="text-shadow: 0px 0px 2px #717171;"><img src="https://img.icons8.com/fluency/47/document.png" />
                Actas Circunstanciadas - Irapuato Predial</h4>

        </div>
        <hr>
        <div class="card card-primary">
            <div class="card-header bg-info text-center">
                <h3 class="card-title">Rango de Fechas</h3>
            </div>

            <form id="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fechaI">Fecha de inicio:</label>
                        <input type="date" class="form-control" id="fechaI" name="fechaI">
                    </div>
                    <div class="form-group">
                        <label for="fechaF">Fecha de fin</label>
                        <input type="date" class="form-control" id="fechaF" name="fechaF">
                    </div>

                </div>


                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass fa-beat"></i> Buscar Actas</button>
                </div>
            </form>
        </div>

        <div class="modal fade" id="modalDescarga" tabindex="-1" role="dialog" aria-labelledby="responseModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="responseModalLabel">Información Importante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success text-center" role="alert" id="mensaje">

                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="descargar"><i class="fa-solid fa-download fa-beat"></i> Decargar</button>
                        </div>
                    
                </div>
            </div>
        </div>



    </div>
    <script src="public/js/buscar.js"></script>
    <script src="public/js/descargar.js"></script>
</body>
<?php require "include/footer.php"; ?>


</html>