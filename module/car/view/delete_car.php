<!-- Pagina donde podras borrar el coche que quieras -->

<form  method="post" name="delete_car" id="delete_car" action="index.php?module=ctrl_car&op=delete&id=<?php echo $_GET['id']; ?>">
    <table>
        <tr>
            <td id="delete_text">
                <h3>¿Estas seguro de borrar el coche con la matricula "<u><?php echo $car['matricula']; ?></u>" y con el numero de bastidor "<u><?php echo $car['num_bastidor']; ?></u>" ?</h3>
            </td>
        </tr>
        <tr>
            <td id="botones">
            <button type="submit" class="Button_aceptar" name="delete" id="delete"><b data-to="Aceptar"> <img src="views\img\aceptar.png"> Aceptar</b></button>
            <button class="Button_cancelar"><a href="index.php?module=ctrl_car&op=list" data-to="Cancelar"><img src="views\img\cancelar.png"> Cancelar </a></button>
            </td>
        </tr>
    </table><br>
</form> 