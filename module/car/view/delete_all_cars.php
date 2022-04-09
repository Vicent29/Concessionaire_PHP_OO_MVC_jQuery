<!-- Pagina paraa borrar todos los cohes registrados -->
<form  method="post" name="delete_all_cars" id="delete_all_cars" action="index.php?module=ctrl_car&op=delete_all">
    <table>
        <tr>
            <td id="delete_text">
                <h3 data-tr="¿Esta seguro de que quiere borrar todos los coches registrados?">...</h3>
            </td>
        </tr>
        <tr>
            <td id="botones">
            <button type="submit" class="Button_aceptar" name="delete_all" id="delete_all"><b data-to="Aceptar"> <img src="views\img\aceptar.png"> Aceptar </b></button>
            <button class="Button_cancelar"><a href="index.php?module=ctrl_car&op=list" data-to="Cancelar"><img src="views\img\cancelar.png"> Cancelar </a></button>
            </td>
        </tr>
    </table><br>
</form> 