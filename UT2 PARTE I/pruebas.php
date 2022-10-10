<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'a.php';
        $nombre = "TU";
        
        echo "Hola", $nombre,"<br>";
        echo "hola <br>", $nombre;
        echo "HOLA <b>", $nombre,"</b>";
        echo "Hola $nombre que tal<br/>";
        echo "Hola de nuevo  ", __LINE__," ", __FILE__;
        
        echo "
                    <table border=1 >
                        <th colspan = 2>
                            $nombre
                        </th>
                        <tr>
                            <td>
                                Hola
                            </td>
                            <td>
                                $nombre
                            </td>
                        </tr>
                        
                    </table>
                ";
    ?>
</body>

</html>