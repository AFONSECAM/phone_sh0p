<!DOCTYPE html>
<?php ini_set("display_errors", "on");
error_reporting(E_ALL); ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bateria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once("../includes/class_battery.php");
    $battery = new Battery();

    if (isset($_GET['update'])) {
        $update_battery = $battery->updateBattery($_POST['id_battery'], $_POST['capacidad']);
        echo $update_battery;
    } elseif (isset($_GET['delete_id_battery'])) {
        $delete_battery = $battery->deleteBattery($_GET['delete_id_battery']);
        echo $delete_battery;
    } else {
        if (empty($_POST['capacidad'])) {
            echo "<div class='alert alert-danger'>Diligencie el campo capacidad</div>
                        <a href='form_create_battery.php' class='btn btn-info'>Intentar nuevamente</a>
                        <hr>
                        <a href='../home.php' class='btn btn-info'>Home</a>";
            return;
        } elseif ($_FILES["archivo"]["error"] > 0) {
            echo "<div class='alert alert-danger'>Cargue una imagen</div>
                        <a href='form_create_battery.php' class='btn btn-info'>Intentar nuevamente</a>
                        <hr>
                        <a href='../home.php' class='btn btn-info'>Home</a>";
            return;
        } else {
            // $fecha = date("Y-m-d H:i:s");
            // $archivo = $fecha . $_FILES['archivo']['name'];
            // if (move_uploaded_file($_FILES['archivo']['tmp_name'], "/opt/lampp/htdocs/phone_shop/uploads/" . $archivo)) {
            //     $ruta = "../uploads/" . $archivo;
            $battery->createBatery($_POST['capacidad']);
            echo "<div class='alert alert-success'>Se guardó correctamente!</div>
                            <a href='form_create_battery.php' class='btn btn-info'>Crear nueva +</a>
                            <hr>
                            <a href='../home.php' class='btn btn-info'>Home</a>";
            // } else {
            //     echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
            // }
        }
    }

    ?>
</body>

</html>