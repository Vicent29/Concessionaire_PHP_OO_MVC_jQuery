// Se encargara de validar las expresiones regulares o regex
function validate_bastidor(texto) {
    if (texto.length > 0) {
        var reg = /^[A-Z]{9}[0-9]{8}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_matricula(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{4}[A-Z]{3}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_fecha(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}

function validate_marca(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_modelo(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z0-9]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_km(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]*$/;
        return reg.test(texto);
    }
    return false;
}


function validate_color(texto) {
    if (texto.length > 0) {
        var reg = /^[#a-zA-Z0-9]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_NumPuertas(num) {
    var i;
    var ok = 0;
    for (i = 0; i < num.length; i++) {
        if (num[i].checked) {
            ok = 1
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }

}

function validate_motor(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_marchas(num) {
    var i;
    var ok = 0;
    for (i = 0; i < num.length; i++) {
        if (num[i].checked) {
            ok = 1
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }

}

function validate_seguridad(array) {
    var check = false;
    for (var i = 0, l = array.options.length, o; i < l; i++) {
        o = array.options[i];
        if (o.selected) {
            check = true;
        }
    }
    return check;
}

function validate_confort(array) {
    var i;
    var ok = 0;
    for (i = 0; i < array.length; i++) {
        if (array[i].checked) {
            ok = 1
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}

function validate_precio(tipo) {
    if (tipo.length > 0) {
        var reg = /^[0-9]*$/;
        return reg.test(tipo);
    }
    return false;

}

function validateJS_car() {

    var check = true;
    //variables que cogen los datos del formulario, el valor  de cada uno de los campos con el ID
    var v_bastidor = document.getElementById('bastidor').value;
    var v_matricula = document.getElementById('matricula').value;
    var v_fecha_matriculacion = document.getElementById('fecha').value;
    var v_marca = document.getElementById('marca').value;
    var v_modleo = document.getElementById('modelo').value;
    var v_Km = document.getElementById('km').value;
    var v_color = document.getElementById('color').value;
    var v_num_puertas = document.getElementsByName('num_puert');
    var v_motor = document.getElementById('motor').value;
    var v_cambio_marchas = document.getElementsByName('cambio_marchas');
    var v_seguridad = document.getElementById('seguridad[]');
    var v_confort = document.getElementsByName('confort[]');
    var v_precio = document.getElementById('precio').value;


    //paso los valores de las variablea anteriores por cada una de als expresiones regulares
    var r_bastidor = validate_bastidor(v_bastidor);
    var r_matricula = validate_matricula(v_matricula);
    var r__fecha_matriculacion = validate_fecha(v_fecha_matriculacion);
    var r_marca = validate_marca(v_marca);
    var r_modelo = validate_modelo(v_modleo);
    var r_km = validate_km(v_Km);
    var r_color = validate_color(v_color);
    var r_num_puertas = validate_NumPuertas(v_num_puertas);
    var r_motor = validate_motor(v_motor);
    var r_cambio_marchas = validate_marchas(v_cambio_marchas);
    var r_seguridad = validate_seguridad(v_seguridad);
    var r_confort = validate_confort(v_confort);
    var r_precio = validate_precio(v_precio);

    if (!r_bastidor) {
        document.getElementById('error_bastidor').innerHTML = " * El bastidor introducido no es valido";
        check = false;
        return check;
    } else {
        document.getElementById('error_bastidor').innerHTML = "";
    }

    if (!r_matricula) {
        document.getElementById('error_matricula').innerHTML = " * La matricula introducida no es valida";
        check = false;
        return check;
    } else {
        document.getElementById('error_matricula').innerHTML = "";
    }

    if (!r__fecha_matriculacion) {
        document.getElementById('error_fecha_matriculacion').innerHTML = " * No has introducido ninguna fecha";
        check = false;
        return check;
    } else {
        document.getElementById('error_fecha_matriculacion').innerHTML = "";
    }

    if (!r_marca) {
        document.getElementById('error_marca').innerHTML = " * No has introducio la marca del coche";
        check = false;
        return check;
    } else {
        document.getElementById('error_marca').innerHTML = "";
    }

    if (!r_modelo) {
        document.getElementById('error_modelo').innerHTML = " * El modelo introducido no es valido";
        check = false;
        return check;
    } else {
        document.getElementById('error_modelo').innerHTML = "";
    }

    if (!r_km) {
        document.getElementById('error_km').innerHTML = " * Los Km no son validos";
        check = false;
        return check;
    } else {
        document.getElementById('error_km').innerHTML = "";
    }

    if (!r_color) {
        document.getElementById('error_color').innerHTML = " * El color introducido no es valido";
        check = false;
        return check;
    } else {
        document.getElementById('error_color').innerHTML = "";
    }

    if (!r_num_puertas) {
        document.getElementById('error_num_puertas').innerHTML = " * No has seleccionado el numero de puertas";
        check = false;
        return check;
    } else {
        document.getElementById('error_num_puertas').innerHTML = "";
    }

    if (!r_motor) {
        document.getElementById('error_motor').innerHTML = " * No has seleccionado el tipo de motor";
        check = false;
        return check;
    } else {
        document.getElementById('error_motor').innerHTML = "";
    }

    if (!r_cambio_marchas) {
        document.getElementById('error_cambio_marchas').innerHTML = " * No has seleccionado el cambio de marchas";
        check = false;
        return check;
    } else {
        document.getElementById('error_cambio_marchas').innerHTML = "";
    }

    if (!r_seguridad) {
        document.getElementById('error_seguridad').innerHTML = " * Dbebes de selecionar un extra de segurdidad";
        check = false;
        return check;
    } else {
        document.getElementById('error_seguridad').innerHTML = "";
    }

    if (!r_confort) {
        document.getElementById('error_confort').innerHTML = " *Selecciona minimo un extra de confort";
        check = false;
        return check;
    } else {
        document.getElementById('error_confort').innerHTML = "";
    }

    if (!r_precio) {
        document.getElementById('error_precio').innerHTML = " * El precio no es valido";
        check = false;
        return check;
    } else {
        document.getElementById('error_precio').innerHTML = "";
    }


    if (document.getElementById("alta_car")) {
        document.alta_car.submit();
        document.alta_car.action = "index.php?module=ctrl_car&op=create";
    } else {
        document.getElementById("update_car").submit();
        document.getElementById("update_car").action = "index.php?module=ctrl_car&op=update";

    }

    return check;

}

//MODAL READ CAR
function loadContentModal() {
    $(document).ready(function () {
        $('.car_read').click(function () {
            var id = this.getAttribute('id');
            // console.log(id);

            $.ajax({
                type: "GET",
                // format: "json",
                dataType: "json",
                url: "module/car/ctrl/ctrl_car.php?op=read_modal&id=" + id,

            })
                .done(function (data) {
                    if(data === 'error') {
                        window.location.href = "index.php?module=ctrl_exceptions&op=503&type=503&lugar=Data_Error Modal Read";
                    }else{
                        $('#modalcar').empty();
                        $('<div></div>').attr('id', 'details_cars').appendTo('#modalcar');
                        $('#details_cars').html(function() {
                            var content = ""
                            for (row in data){
                                content += '<br><span data-tr ="' + row +   '">' + row + '</span>: <span id =' + row + '>' + data[row] + '</span>';
                            }
                            return content;
                        });
                        changeLang();
                        modal(data.matricula,data.id);
                    }


                })
                .fail(function () {
                    window.location.href = "index.php?module=ctrl_exceptions&op=503&type=503&lugar=Valid_car Modal Read";
                })
        })
    })
}

function modal(matricula,id) {
    $("#modalcar").show().dialog({
    
        title: "Informacion del coche con matricula:" + matricula,
        width: 850, //<!-- ------------- ancho de la ventana -->
        height: 600, //<!--  ------------- altura de la ventana -->
        //show: "scale", <!-- ----------- animación de la ventana al aparecer -->
        //hide: "scale", <!-- ----------- animación al cerrar la ventana -->
        resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
        //position: "down", //<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
        modal: "false", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            },
            Update: function() {
                window.location.href = "index.php?module=ctrl_car&op=update&id=" + id;
                console.log(id);
            },
            Delete: function() {
                window.location.href = "index.php?module=ctrl_car&op=delete&id=" + id;
            }
        },
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });
}

$(document).ready(function() {
    // $('#table_list').DataTable();
    loadContentModal();
});


