<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura de metadatos</title>
</head>
<body>
    <img src="Imagenes/Castro.JPG" alt="Castro" height="500" width="800">
    <?php
        $exif = exif_read_data('Imagenes/Castro.JPG', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="Imagenes/Comida.jpg" alt="Comida" height="500" width="800">
    <?php
        $exif = exif_read_data('Imagenes/Comida.jpg', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="Imagenes/Concerto.jpg" alt="Concerto" height="500" width="800">
    <?php
        $exif = exif_read_data('Imagenes/Concerto.jpg', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="Imagenes/LaCoru.jpg" alt="LaCoru" height="500" width="800">
    <?php
        $exif = exif_read_data('Imagenes/LaCoru.jpg', 0, true);
        echo "prueba2.jpg:<br />\n";
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }
    ?>
    <br>

    <img src="Imagenes/Rosa.JPG" alt="Rosa" height="500" width="800">
    <?php
        $exif = exif_read_data('Imagenes/Rosa.JPG', 0, true);
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