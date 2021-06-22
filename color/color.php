<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "../includes/class_color.php";
    $color = new Color();
    if (!isset($_GET['update'])) {
        if (empty($_POST['color'])) {
            echo "<div class='alert alert-danger'>Diligencie el campo color</div>
                        <a href='form_create_color.php' class='btn btn-info'>Intentar nuevamente</a>";
            return;
        } else {
            $color->createColor($_POST['color']);
            echo "<div class='alert alert-success'>Se guardó correctamente!</div>
                        <a href='../home.php' class='btn btn-info'>Ir al home</a>";
        }
    } else {
        $updateColor = $color->updateColor($_POST['id_color'], $_POST['color']);
        echo $updateColor;
    }
    ?>
</body>

</html>