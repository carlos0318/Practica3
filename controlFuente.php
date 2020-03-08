<?php
$dato = 0;
if(empty ($_POST)){
    $dato= 0;
}
else{
    $dato= $_POST["txtDato1"];
}
?>
<html>

<head>
    <link rel="stylesheet" href="estilos/principal.css">
    <title>Dioses Griegos</title>
</head>

<body style="background: #fefde1;">

    <form id="frmPrincipal" method="POST">



        <center>
            <table border="0" width="80%" cellspacing="0" cellpadding="5" class="sombreado">
                <tr>
                    <td colspan="3" bgcolor="negro">
                        <table width="100%" border="0">
                            <tr>
                                <td align="left" width="20%"><img src="imagenes/logo.jfif" width="90px" height="90px"> </td>
                                <td align="middle" width="60%">
                                    <font class="fontTitulo"><b>Dioses Griegos</b></font>
                                </td>
                                <td align="right" width="20%">
                                    <img src="imagenes/002-myspace.png" width="30px" height="30px" class="redondeo"><br>
                                    <font class="fontEtiqueta">
                                        Fecha: <b>dd/mm/aaaa</b>
                                        <br> Usuario: <b>(nombre)</b>
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="10%" align="left" bgcolor="#fffd81">
                        <br><br>
                        <a href="#" target="_self" class="fontVinculos">000webhost</a>
                        <br><br>
                        <a href="#" target="_self" class="fontVinculos">azure</a>
                        <br><br>
                        <a href="#" target="_self" class="fontVinculos">amazon</a>
                    </td>
                    <td width="70%" bgcolor="white">
                        <table border="0" width="100%">
                            <tr>
                                <td colspan="2" align="left">
                                    <font class="fontTrabajoTitulo"><b>Práctica de PHP</b></font>
                                    <br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font class="fontTrabajoEtiqueta"><b>Replicar el siente ejecto.. </b></font>
                                    <br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <font class="fontTrabajoEtiqueta"><b>Captura el limite... </b></font>
                                <br><br>
                                </td>
                                <td>
                                    <input type="number" id="txtDato1" name="txtDato1" value="<?php echo $dato ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php

                                    echo "<br>";
                                    $i = 0;
                                    $cont = 0;
                                    for($i=1;$i<=$dato;$i++){
                                        $cont++;
                                        if($cont == 1){
                                            echo "<br><font size=$i color='blue' face='Arial'>Este mensaje esa repetido $dato veces</font> &nbsp;";
                                        }elseif($cont == 2){
                                            echo "<br><font size=$i color='red' face='Arial'>Este mensaje esa repetido $dato veces</font> &nbsp;";
                                        }else{
                                            echo "<br><font size=$i color='green' face='Arial'><u>Este mensaje esa repetido $dato veces</u></font> &nbsp;";
                                            $cont = $cont -3;
                                        }
                                    }   

                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br><br>
                                    <input type="submit" id="btnSubmit" value="Generar efecto">
                                </td>
                            </tr>

                        </table>
                    </td>
                    <td width="10%" align="middle" bgcolor="#fffd81">
                        <br><br>
                        <img src="imagenes/zeus.jfif" class="imgPromocion">
                        <br><br>
                        <img src="imagenes/poseidon.jfif" class="imgPromocion">
                        <br><br>
                        <img src="imagenes/hades.jpg" class="imgPromocion">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" bgcolor="negro">
                        <font class="fontEtiqueta">
                            Derechos reservados
                        </font>
                        &nbsp;
                        <a href="https://www.facebook.com" target="_blank"><img src="imagenes/021-facebook.png " class="imgRedes"></a> &nbsp;
                        <a href="https://www.instagram.com" target="_blank"> <img src="imagenes/025-instagram.png " class="imgRedes"></a> &nbsp;
                        <a href="https://www.twitter.com" target="_blank"><img src="imagenes/043-twitter.png " class="imgRedes"></a>
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>

</html>