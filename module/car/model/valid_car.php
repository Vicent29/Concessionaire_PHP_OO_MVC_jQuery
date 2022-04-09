<!-- Tendremos las funciones que validaran que la matricula y el numero de bastidor no se repita en ningun coche por lo que tendre que hacer un wherre y sacar true si la encuientra y false si no
TRUE= ya existe /  FALSE= no existe por lo que se puede crear -->
<?php

function validate_bastidor($bastidor)
{
    $sql = "SELECT * FROM coches WHERE num_bastidor='$bastidor'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    $res = mysqli_num_rows($res);
    connect::close($conexion);

    return $res;
}

function validate_matricula($matricula)
{
    $sql = "SELECT * FROM coches WHERE matricula='$matricula'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    $res = mysqli_num_rows($res);
    connect::close($conexion);

    return $res;
}


function validate(){

    // $data = 'hola validate php';
    // die('<script>console.log(' . json_encode($data) . ');</script>');
    
    $check=true;

    $v_bastidor=$_POST['bastidor'];
    $r_bastidor=validate_bastidor($v_bastidor);

    $v_matricula=$_POST['matricula'];
    $r_matricula=validate_matricula($v_matricula);

    
    if($r_matricula === 1){
        echo '<script language="javascript">
             toastr.error("La matricula ya ha sido utilizada en otro coche");
             </script>';
        $check=false;

    }
    if($r_bastidor === 1){
    
        echo '<script language="javascript">
             toastr.error("El bastidor ya ha sido utilizada en otro coche");
             </script>';
        $check=false;

    }
    return $check;
}
