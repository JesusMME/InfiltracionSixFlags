<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletos</title>
    </head>
    <body>
        <?php
            $nombre = (isset($_POST['nombre'])&& $_POST["nombre"] != "")? $_POST['nombre'] : "No especifico";
            $apellidos = (isset($_POST['apellidos'])&& $_POST["apellidos"] != "")? $_POST['apellidos'] : "No especifico";
            $edad = (isset($_POST['edad'])&& $_POST["edad"] != "")? $_POST['edad'] : "No especifico";
            $numeroBoleto = (isset($_POST['numeroBoleto'])&& $_POST["numeroBoleto"] != "")? $_POST['numeroBoleto'] : "No especifico";
            $direccion = (isset($_POST['direccion'])&& $_POST["direccion"] != "")? $_POST['direccion'] : "No especifico";
            $selector = (isset($_POST['selector'])&& $_POST["selector"] != "")? $_POST['selector'] : "No especifico";
            if($numeroBoleto != "0" || $numeroBoleto > "15"){
                for($i=0; $i < $numeroBoleto; $i++){
                    echo"
                    <table border='1'>
                        <thead>
                            <tr><th colspan='4'><h1>Ticket Sixflags</h1></th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$nombre;</td>
                                <td>$apellidos</td>
                                <td>$edad</td>
                                ";
                                if($selector=="Clasificación humilde"){
                                    echo "<td rowspan='3'><img src='../imagenesphp/Humilde.jpg' alt='chavo' width='200'></td>";
                                } else if ($selector=="Clasificación normal (sin nada del otro mundo)"){
                                    echo "<td rowspan='3'><img src='../imagenesphp/Normal.jpg' alt='normal' width='200'><td>";
                                } else if ($selector=="Clasificación Flash pass"){
                                    echo "<td rowspan='3'><img src='../imagenesphp/Flash.jpg' alt='flash' width='200'><td>";
                                } else if ($selector=="Clasificación VIP"){
                                    echo "<td rowspan='3'><img src='../imagenesphp/VIP.jpg' alt='vip' width='200'><td>";
                                } else if ($selector=="Solo puedes comprar este desde una mac pro"){
                                    echo "<td rowspan='3'><img src='../imagenesphp/SoloMac.jpeg' alt='solomac' width='200'><td>";
                                }
                            echo "
                            </tr>
                            <tr>
                                <td>$direccion</td>
                                <td>$numeroBoleto</td>
                                <td>$selector</td>
                            </tr>
                            <tr>";
                                if($selector=="Clasificación humilde"){
                                    echo"<th colspan='3'><i><strong>vamos a revisar que no contrabandee comida</strong></i></th>";
                                } else if ($selector=="Clasificación normal (sin nada del otro mundo)"){
                                    echo"<th colspan='3'><i><strong>Pasele pasele</strong></i></th>";
                                } else if ($selector=="Clasificación Flash pass"){
                                    echo"<th colspan='3'><i><strong>Flash flash mi rapidash</strong></i></th>";
                                } else if ($selector=="Clasificación VIP"){
                                    echo"<th colspan='3'><i><strong>¿Tan poquito de propina?</strong></i></th>";
                                } else if ($selector=="Solo puedes comprar este desde una mac pro"){
                                    echo"<th colspan='3'><i><strong>Pase mi buen estimado rico mac pato</strong></i></th>";
                                }
                            echo"</tr>
                        </tbody>
                    </table>
                    <br/>";
                }
            }
            else{
                if($numeroBoleto == "0"){
                    echo "<h1>No se pueden imprimir boletos</h1>";
                }
                if($numeroBoleto > 15){
                    echo "<h1>Se han pedido más boletos de los que se pueden mostrar</h1>";
                }
            }
        ?>
    </body>
</html>
