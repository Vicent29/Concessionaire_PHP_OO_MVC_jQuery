<!-- Pagian donde leeras un coche en concreto -->
<div class="container" id="read">
    <h1 data-to= "Informacion del coche con matricula ">Informacion del coche con matricula "<u><?php echo $car['matricula'];?></u>"</h1>
    <p>
    <table >
        <tr>
            <td id="celda_left"><b data-tr="Num. de bastidor">...</b></td>
            <td id="celda_right"> <?php echo $car['num_bastidor']; ?> </td>
        </tr>
    
        <tr>
            <td id="celda_left"><b data-tr="Matricula">...</b></td>
            <td id="celda_right"> <?php echo $car['matricula']; ?> </td>
        </tr>
         
        <tr>
            <td id="celda_left"><b data-tr="Fecha de matriculacion">...</b></td>
            <td id="celda_right"> <?php echo $car['fechamatricula']; ?> </td>
        </tr>
        
        <tr>
            <td id="celda_left"><b data-tr="Marca">...</b></td>
            <td id="celda_right"> <?php echo $car['marca']; ?> </td>
        </tr>
        
        <tr>
            <td id="celda_left"><b data-tr="Modelo">...</b></td>
            <td id="celda_right"> <?php echo $car['modelo']; ?> </td>
        </tr>
        
        <tr>
            <td id="celda_left"><b data-tr="Km">...</b></td>
            <td id="celda_right"> <?php echo $car['Km']; ?> Km</td>
        </tr>

        <tr>
            <td id="celda_left"><b data-tr="Color">...</b></td>
            <?php echo "<td bgcolor=". $car['color'] ."></td>"; ?>
        </tr>
        
        <tr>
            <td id="celda_left"><b data-tr="Num. de puertas">...</b></td>
            <td id="celda_right"> <?php echo $car['num_puertas']; ?> </td>
        </tr>
        
        <tr>
            <td id="celda_left"><b data-tr="Motor">...</b></td>
            <td id="celda_right"> <?php echo $car['motor']; ?> </td>
        </tr>
        
        <tr>
            <td id="celda_left"><b data-tr="Cambio de marchas">...</b></td>
            <td id="celda_right"> <?php echo $car['cambio_marchas']; ?> </td>
        </tr>

        <tr>
            <td id="celda_left"><b data-tr="Extras de seguridad">...</b></td>
            <td id="celda_right"> <?php echo $car['e_seguridad']; ?> </td>
        </tr>

        <tr>
            <td id="celda_left"><b data-tr="Extras de confort">...</b></td>
            <td id="celda_right"> <?php echo $car['e_confort']; ?> </td>
        </tr>
        
        <tr>
            <td id="celda_left"><b data-tr="Precio">...</b></td>
            <td id="celda_right"> <?php echo $car['precio']; ?> €</td>
        </tr>

    </table>
    </p>
    <button><a href="index.php?module=ctrl_car&op=list" data-to="Volver"><img src="views\img\volver.png"> Volver</a></button>
</div>