<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura de metadatos</title>
</head>
<body>
    <img src="imagenes/Castro.JPG" alt="Castro" height="500" width="800">
    <?php
        $exif = exif_read_data('imagenes/Castro.JPG', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="imagenes/Comida.jpg" alt="Comida" height="500" width="800">
    <?php
        $exif = exif_read_data('imagenes/Comida.jpg', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="imagenes/Concerto.jpg" alt="Concerto" height="500" width="800">
    <?php
        $exif = exif_read_data('imagenes/Concerto.jpg', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="imagenes/LaCoru.jpg" alt="LaCoru" height="500" width="800">
    <?php
        $exif = exif_read_data('imagenes/LaCoru.jpg', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="imagenes/Rosa.JPG" alt="Rosa" height="500" width="800">
    <?php
        $exif = exif_read_data('imagenes/Rosa.JPG', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>
</body>
</html>