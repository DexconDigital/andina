<?php $page = "Error";
$nombre_inmobiliaria = "Andina Inmobiliaria" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/error.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body onLoad="redireccionar()">
    <!-- Error Page -->
    <div class="error">
        <div class="container-floud">
            <div class="col-xs-12 ground-color text-center">
                <div class="container-error-404">
                    <div class="clip">
                        <div class="shadow"><span class="digit thirdDigit"></span></div>
                    </div>
                    <div class="clip">
                        <div class="shadow"><span class="digit secondDigit"></span></div>
                    </div>
                    <div class="clip">
                        <div class="shadow"><span class="digit firstDigit"></span></div>
                    </div>
                    <div class="msg">OH!<span class="triangle"></span></div>
                </div>
                <h2 class="h1">Código no encontrado</h2>
            </div>
        </div>
    </div>
    <!-- Error Page -->

</body>
<script language="JavaScript">
    function redireccionar() {
        setTimeout("window.location.href='index.php'", 5000);
    }
</script>
<script src="js/error.js"></script>

</html>