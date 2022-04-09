<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    </head>

    <body>

        <div id="create"> 
            <form autocomplete="on" method="POST" id="alta_car" name="alta_car"> 
            <h1 data-tr="Registro:">...</h1><br>

                <table>

                    <tr id="frist_color">
                        <td><b data-tr="Num. de bastidor">...</b></td>
                        <td><input type="text" placeholder="ABRGALEOK12345678" name="bastidor" id="bastidor" value="">

                            <font color="red">
                                <span id="error_bastidor" class="error"></span>
                            </font>
                        </td>

                    </tr>
                    <tr id=second_color>
                        <td><b data-tr="Matricula">...</b></td>
                        <td><input type="text" placeholder="2093JGB" name="matricula" id="matricula" value="">
                            <font color="red">
                                <span id="error_matricula" class="error"></span>
                            </font>
                        </td>
                    </tr>

                    <tr id="frist_color">
                        <td><b data-tr="Fecha de matriculacion">...</b></td>
                        <td><input id="fecha" type="text" name="fecha_matriculacion" placeholder="matriculacion" value="">
                            <font color="red">
                                <span id="error_fecha_matriculacion" class="error"></span>
                            </font>
                        </td>
                    </tr>

                    <tr id=second_color>
                        <td><b data-tr="Marca">...</b></td>
                        <td><input type="text" placeholder="Seat" name="marca" id="marca">
                            <font color="red">
                                <span id="error_marca" class="error">
                                </span>
                            </font>
                        </td>
                    </tr>
                    <tr id="frist_color">
                        <td><b data-tr="Modelo">...</b></td>
                        <td><input type="text" placeholder="Leon" name="modelo" id="modelo">
                            <font color="red">
                                <span id="error_modelo" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id=second_color>
                        <td><b data-tr="Km">...</b></td>
                        <td><input type="number" placeholder="3000 Km" name="km" id="km">
                            <font color="red">
                                <span id="error_km" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="frist_color">
                        <td><b data-tr="Color">...</b></td>
                        <td><input type="color" placeholder="Rojo" name="color" id="color" value="#FFFFFF">
                            <font color="red">
                                <span id="error_color" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id=second_color>
                        <td><b data-tr="Num. de puertas">...</b></td>
                        <td>
                            <input type="radio" name="num_puert" id="num_puert" value="3"> 3
                            <input type="radio" name="num_puert" id="num_puert" value="5"> 5
                            <!-- checked -->

                            <font color="red">
                                <span id="error_num_puertas" class="error"></span>
                            </font>
                        </td>
                    </tr>
                    <tr id="frist_color">
                        <td><b data-tr="Motor">...</b></td>
                        <td><select  name="motor" id="motor" placeholder="Tipo de motor">
                                <option value="Electrico">Electrico</option>
                                <option value="Hibrido">Hibrido</option>        
                                <option value="Gasolina">Gasolina</option>
                                <option value="Diesel">Diesel</option>
                                
                            </select>

                            <font color="red">
                                <span id="error_motor" class="error"></span>
                            </font>
                        </td>
                    </tr id="second_color">
                    <tr id="second_color">
                        <td><b data-tr="Cambio de marchas">...</b></td>
                        <td>
                            <input type="radio" name="cambio_marchas" id="cambio_marchas" value="manual">manual
                            <input type="radio" name="cambio_marchas" id="cambio_marchas" value="automatico">automatico

                            <font color="red">
                                <span id="error_cambio_marchas" class="error"></span>
                            </font>
                        </td>
                    </tr>

                    <tr id="frist_color">
                        <td><b data-tr="Extras de seguridad">...</b></td>
                        <td><select multiple size="3" name="seguridad[]" id="seguridad[]" placeholder="Extras seguridad">
                                <option value="Ninguna">Ninguno</option>
                                <option value="Sensor de distancia">Sensor de distancia</option>
                                <option value="Control de traccion">Control de tracción</option>        
                                <option value="Asistencia de frenada">Asistencia de frenada </option>
                                <option value="Sensor de carril">Sensor de carril</option>
                                
                            </select>

                            <font color="red">
                                <span id="error_seguridad" class="error"></span>
                            </font>
                        </td>
                    </tr>

                    <tr id="second_color">
                        <td><b data-tr="Extras de confort">...</b></td>
                        <td>
                            <input type="checkbox" id= "confort[]" name="confort[]" placeholder= "confort" value="Asientos calefactables"/>Asientos calefactables
                            <input type="checkbox" id= "confort[]" name="confort[]" placeholder= "confort" value="Control de crucero"/>Control de crucero
                            <input type="checkbox" id= "confort[]" name="confort[]" placeholder= "confort" value="Asistencia de estacionamiento"/>Asistencia de estacionamiento
                            <input type="checkbox" id= "confort[]" name="confort[]" placeholder= "confort" value="Ninguna"/>Ninguna

                            <font color="red">
                            <span id="error_confort" class="error"></span>
                            </font>
                            
                        </td>
                    </tr>

                    <tr id="frist_color">
                        <td><b data-tr="Precio">...</b></td>
                        <td><input type="number" placeholder="1500 €" name="precio" id="precio">

                            <font color="red">
                                <span id="error_precio" class="error"></span>
                            </font>

                        </td>
                    </tr>
                  
                </table>
            </form>
            <button><a href="index.php?module=ctrl_car&op=list" data-to="Volver"><img src="views\img\volver.png"> Volver</a></button>
            <button  name="register" id="register" type="button" value="Registrar" onclick="validateJS_car()" data-to="Registrar"><img src="views\img\register.png"> Registrar</button> 
        </div> <br>
    </body>
</html>