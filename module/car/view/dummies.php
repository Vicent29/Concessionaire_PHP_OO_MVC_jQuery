<!--Pagian apra añadir los 10 coches electricos-->

<form  method="post" name="dummies_car" id="dummies_car" action="index.php?module=ctrl_car&op=dummies">
    <table>
        <tr>
            <td>
                <h3 data-tr="¿Quieres borrar los coches registrados y registrar los 10 nuevos coches electricos?">...</h3>
            </td>
        </tr>
        <tr>
            <td id="botones">
            <button type="submit" class="Button_aceptar" name="cargar_dummies" id="cargar_dummies"><b data-to="Aceptar"> <img src="views\img\aceptar.png"> Aceptar</b></button>
            <button class="Button_cancelar"><a href="index.php?module=ctrl_car&op=list" data-to="Cancelar"><img src="views\img\cancelar.png"> Cancelar </a></button>
            </td>
        </tr>
    </table><br>
</form> 