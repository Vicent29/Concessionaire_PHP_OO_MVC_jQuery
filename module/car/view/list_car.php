<!-- Pagina donde mostraras todos los coches -->

<div id="page_list">
    <div id=header_desplegable>
        <ul id=nav_desplegable>
            <li><button><a data-tO="MAS OPCIONES"><img src="views\img\more_actions.png">MORE ACTIONS</a></button>
                <ul>
                    <li><button id="crear"><a href="index.php?module=ctrl_car&op=create" data-tO="AÑADIR COCHE"><img src="views\img\create.png">REGISTER CAR</a></button> </li>
                    <li><button id="delete_all"><a href="index.php?module=ctrl_car&op=delete_all" data-tO="BORRAR TODOS"><img src="views\img\delete_all.png">DELETE ALL</a></button></li>
                    <li><button id="dummies"><a href="index.php?module=ctrl_car&op=dummies" data-tO="COCHES ELECTRICOS"><img src="views\img\dummies.png">ELECTRIC CARS</a></button></li>
                    <li><button id="exceptions"><a href="index.php?module=ctrl_car&op=list_exceptions" data-tO="EXCEPCIONES"><img src="views\img\exceptions.png">EXCEPTIONS</a></button></li>
                </ul>
            </li>
        </ul>

    </div>

    <div id=table-container>
        <table class="table_list" id="table_list"  >
            <thead>
                <tr class="carac">
                    <td id="pre-frist" data-tr="Num. de bastidor">...</td>
                    <td data-tr="Matricula">...</td>
                    <td data-tr="Matriculación">...</td>
                    <td data-tr="Marca">...</td>
                    <td data-tr="Modelo">...</td>
                    <td data-tr="Color">...</td>
                    <td data-tr="Motor">...</td>
                    <td data-tr="Precio">...</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($rdo->num_rows === 0) {
                    echo '<tr>';
                    echo '<td align="center"  colspan="3">NO HAY NINGUN COCHE</td>';
                    echo '</tr>';
                } else {
                    foreach ($rdo as $row) {
                        echo "<tr class='cars'>";
                        echo "<td id='frist'>" . $row['num_bastidor'] . "</td>";
                        echo "<td >" . $row['matricula'] . "</td>";
                        echo "<td>" . $row['fechamatricula'] . "</td>";
                        echo "<td>" . $row['marca'] . "</td>";
                        echo "<td>" . $row['modelo'] . "</td>";
                        echo "<td bgcolor=" . $row['color'] . "></td>";
                        echo "<td>" . $row['motor'] . "</td>";
                        echo "<td>" . $row['precio'] . "</td>";
                        echo "<td>";

                        print("<div  class='car_read' id='" . $row['id'] . "'></div>");  //READ
                        echo '&nbsp;&nbsp;';

                        // echo '<a class="Button_blue" href="index.php?module=ctrl_car&op=read&id='.$row['id'].'"><img src="views\img\read.png"</a>';
                        // echo '&nbsp;&nbsp;';
                        echo '<a class="btnes" href="index.php?module=ctrl_car&op=update&id=' . $row['id'] . '"><img src="views\img\update.png"/></a>';
                        echo '&nbsp;&nbsp;';
                        echo '<a class="btnes" href="index.php?module=ctrl_car&op=delete&id=' . $row['id'] . '"><img src="views\img\delete.png"/></a>';

                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <br> <br> <br> <br> <br>

    <!-- modal window -->
    <section id="modalcar"></section>

    <!-- <section id="list_cars_shop"></section> -->
</div>