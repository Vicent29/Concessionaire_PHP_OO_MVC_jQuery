<!-- Página donde podras modificar algun valor de alguno de los coches -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    </head>
    <body>

        <div id="update">
            <form autocomplete="on" method="post"  id="update_car" name="update_car">
                <h1 data-to="Actualización del coche con matricula">Actualización del coche con matricula "<u> <?php echo $car['matricula'];?> </u>" :</h1>
                <table>
                    
                    <tr id="frist_color">
                        <td><b data-tr="Num. de bastidor">...</b></td>
                        <td><input type="text" placeholder="ABRGALEOK12345678" name="bastidor" id="bastidor" value="<?php echo $car['num_bastidor']; ?>" readonly>

                            <font color="red">
                                <span id="error_bastidor" class="error"></span>
                            </font>
                        </td>

                    </tr>
                    <tr id="second_color">
                        <td><b data-tr="Matricula">...</b></td>
                        <td><input type="text" placeholder="2093JGB" name="matricula" id="matricula" value="<?php echo $car['matricula']; ?>" readonly>
                            <font color="red">
                                <span id="error_matricula" class="error"></span>
                            </font>
                        </td>

                    </tr>
                    <tr id="frist_color">
                        <td><b data-tr="Fecha de matriculacion">...</b></td>
                        <td><input type="text" placeholder="matriculacion" id="fecha" name="fecha_matriculacion" value="<?php echo $car['fechamatricula']; ?>">
                            <font color="red">
                                <span id="error_fecha_matriculacion" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="second_color">
                        <td width="24%"><b data-tr="Marca">...</b></td>
                        <td width="76%"><input type="text" placeholder="Seat" name="marca" id="marca" value="<?php echo $car['marca']; ?>">
                            <font color="red">
                                <span id="error_marca" class="error">
                                </span>
                            </font>
                        </td>
                    </tr>
                    <tr id="frist_color">
                        <td><b data-tr="Modelo">...</b></td>
                        <td><input type="text" placeholder="Leon" name="modelo" id="modelo" value="<?php echo $car['modelo']; ?>">
                            <font color="red">
                                <span id="error_modelo" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="second_color">
                        <td><b data-tr="Km">...</b></td>
                        <td><input type="number" placeholder="3000" name="km" id="km" value="<?php echo $car['Km']; ?>">
                            <font color="red">
                                <span id="error_km" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="frist_color"> 
                        <td><b data-tr="Color">...</b></td>
                        <td><input type="color" placeholder="Rojo" name="color" id="color" value="<?php echo $car['color']; ?>">
                            <font color="red">
                                <span id="error_color" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="second_color">
                        <td><b data-tr="Num. de puertas">...</b></td>
                        <td>
                            <?php
                            if ($car['num_puertas'] === "3") {
                            ?>
                                <input type="radio" name="num_puert" id="num_puert" value="3" checked> 3
                                <input type="radio" name="num_puert" id="num_puert" value="5"> 5
                                <!-- checked -->
                            <?php
                            } else {
                            ?>
                                <input type="radio" name="num_puert" id="num_puert" value="3"> 3
                                <input type="radio" name="num_puert" id="num_puert" value="5" checked> 5
                            <?php
                            }
                            ?>

                            <font color="red">
                                <span id="error_num_puertas" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="frist_color">
                        <td><b data-tr="Motor">...</b></td>
                        <td><select name="motor" id="motor">
                                <?php
                                if ($car['motor'] === "Gasolina") {
                                ?>
                                    <option value="Electrico">Electrico</option>
                                    <option value="Hibrido">Hibrido</option> 
                                    <option value="Gasolina" selected>Gasolina</option>
                                    <option value="Diesel">Diesel</option>
                                
                                <?php
                                } elseif ($car['motor'] === "Diesel") {
                                ?>
                                    <<option value="Electrico">Electrico</option>
                                    <option value="Hibrido">Hibrido</option> 
                                    <option value="Gasolina">Gasolina</option>
                                    <option value="Diesel" selected>Diesel</option>
                                <?php
                                } elseif ($car['motor'] === "Hibrido") {
                                    ?>
                                        <<option value="Electrico">Electrico</option>
                                        <option value="Hibrido" selected>Hibrido</option> 
                                        <option value="Gasolina">Gasolina</option>
                                        <option value="Diesel">Diesel</option>
                                    <?php
                                } else {
                                ?>
                                <option value="Electrico" selected>Electrico</option>
                                    <option value="Hibrido">Hibrido</option> 
                                    <option value="Gasolina">Gasolina</option>
                                    <option value="Diesel">Diesel</option>
                                <?php
                                }
                                ?>

                            </select>

                            <font color="red">
                                <span id="error_motor" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="second_color">
                        <td><b data-tr="Cambio de marchas">...</b></td>
                        <td>
                            <?php
                            if ($car['cambio_marchas'] === "manual") {
                            ?>
                                <input type="radio" name="cambio_marchas" id="cambio_marchas" value="manual" checked>manual
                                <input type="radio" name="cambio_marchas" id="cambio_marchas" value="automatico">automatico
                            <?php
                            } else {
                            ?>
                                <input type="radio" name="cambio_marchas" id="cambio_marchas" value="manual">manual
                                <input type="radio" name="cambio_marchas" id="cambio_marchas" value="automatico" checked>automatico
                            <?php
                            }
                            ?>

                            <font color="red">
                                <span id="error_cambio_marchas" class="error"></span>
                            </font>
                        </td>
                    </tr>

                    <tr id="frist_color">
                        <td><b data-tr="Extras de seguridad">...</b></td>
                        <?php
                            $segur=explode(",",$car['e_seguridad']);
                        ?>
                        <td><select multiple size="3" id="seguridad[]" name="seguridad[]" placeholder="Extras seguridad">
                            <?php
                                $busca_array=in_array("Ninguna", $segur);
                                if($busca_array){
                            ?>
                                <option value="Ninguna" selected>Ninguna</option>
                            <?php
                                }else{
                            ?>
                                <option value="Ninguna">Ninguna</option>
                            <?php
                                }
                            ?>
                            <?php
                                $busca_array=in_array("Sensor de distancia", $segur);
                                if($busca_array){
                            ?>
                                <option value="Sensor de distancia" selected>Sensor de distancia</option>
                            <?php
                                }else{
                            ?>
                                <option value="Sensor de distancia">Sensor de distancia</option>
                            <?php
                                }
                            ?>
                            <?php
                                $busca_array=in_array("Control de traccion", $segur);
                                if($busca_array){
                            ?>
                                <option value="Control de traccion" selected>Control de traccion</option>
                            <?php
                                }else{
                            ?>
                                <option value="Control de traccion">Control de traccion</option>
                            <?php
                                }
                            ?>
                            <?php
                                $busca_array=in_array("Asistencia de frenada", $segur);
                                if($busca_array){
                            ?>
                                <option value="Asistencia de frenada" selected>Asistencia de frenada</option>
                            <?php
                                }else{
                            ?>
                                <option value="Asistencia de frenada">Asistencia de frenada</option>
                            <?php
                                }
                            ?>
                            <?php
                                $busca_array=in_array("Sensor de carril", $segur);
                                if($busca_array){
                            ?>
                                <option value="Sensor de carril" selected>Sensor de carril</option>
                            <?php
                                }else{
                            ?>
                                <option value="Sensor de carril">Sensor de carril</option>
                            <?php
                                }
                            ?>
                            </select>
                        <font color="red">
                            <span id="error_seguridad" class="error"></span>
                        </font></font></td>
                    </tr>

                    <tr id="second_color">
                        <td><b data-tr="Extras de confort">...</b></td>
                        <?php
                            $confo=explode(",", $car['e_confort']);
                        ?>
                        <td>
                            <?php
                                $busca_array=in_array("Asientos calefactables", $confo);
                                if($busca_array){
                            ?>
                                <input type="checkbox" id= "confort[]" name="confort[]" value="Asientos calefactables" checked/>Asientos calefactables
                            <?php
                                }else{
                            ?>
                                <input type="checkbox" id= "confort[]" name="confort[]" value="Asientos calefactables"/>Asientos calefactables
                            <?php
                                }
                            ?>
                            <?php
                                $busca_array=in_array("Control de crucero", $confo);
                                if($busca_array){
                            ?>
                                <input type="checkbox" id= "confort[]" name="confort[]" value="Control de crucero" checked/>Control de crucero
                            <?php
                                }else{
                            ?>
                                <input type="checkbox" id= "confort[]" name="confort[]" value="Control de crucero"/>Control de crucero
                            <?php
                                }
                            ?>
                            <?php
                                $busca_array=in_array("Asistencia de estacionamiento", $confo);
                                if($busca_array){
                            ?>
                                <input type="checkbox" id= "confort[]" name="confort[]" value="Asistencia de estacionamiento" checked/>Asistencia de estacionamiento
                            <?php
                                }else{
                            ?>
                            <input type="checkbox" id= "confort[]" name="confort[]" value="Asistencia de estacionamiento"/>Asistencia de estacionamiento
                            <?php
                                }
                            ?>
                            <?php
                                $busca_array=in_array("Ninguna", $confo);
                                if($busca_array){
                            ?>
                                <input type="checkbox" id= "confort[]" name="confort[]" value="Ninguna" checked/>Ninguna
                            <?php
                                }else{
                            ?>
                            <input type="checkbox" id= "confort[]" name="confort[]" value="Ninguna"/>Ninguna
                            <?php
                                }
                            ?>

                        <font color="red">
                            <span id="error_confort" class="error"></span>
                        </font>

                        </td>
                    </tr>

                    <tr id="frist_color">
                        <td><b data-tr="Precio">...</b></td>
                        <td><input type="number" name="precio" id="precio" value="<?php echo $car['precio']; ?>">

                            <font color="red">
                                <span id="error_precio" class="error"></span>
                            </font>

                        </td>
                    </tr>
            
                </table>
            </form>
            <button><a href="index.php?module=ctrl_car&op=list" data-to="Volver"><img src="views\img\volver.png"> Volver</a></button>
            <button  name="update" id="update" type="button" value="Submit" onclick="validateJS_car()" data-to="Actualizar"><img src="views\img\button_submit.png"> Actualizar</button> 
        </div> <br>
    </body>

</html>