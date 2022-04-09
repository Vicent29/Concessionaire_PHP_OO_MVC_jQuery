<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/CONCESIONARIO';
include($path . "/module/car/model/DAO_car.php");
if (isset($_SESSION["tiempo"])) {  
    $_SESSION["tiempo"] = time(); //Devuelve la fecha actual
}

switch ($_GET['op']) {

    case 'create':
        include("module/car/model/valid_car.php");
        $check = true;

        if ($_POST) {

            $check = validate();

            if ($check) {
                $_SESSION['id'] = $_POST;
                try {
                    $daocar = new DAOCar();
                    $rdo = $daocar->create_car($_POST);
                } catch (Exception $e) {
                    $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car Create';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }

                if ($rdo) {
                    die('<script language="javascript">
                    toastr.success("Se ha añadido correctamente", "", {
                        "positionClass": "toast-top-full-width",
                        timeOut: 600,
                        onHidden: function() {
                            window.location.href = "' . 'index.php?module=ctrl_car&op=list' . '"}});
                    </script>');
                } else {
                    $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Create';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }
        }
        include("module/car/view/create_car.php");
        break;

    case 'list';

        try {
            $daocar = new DAOCar();
            $rdo = $daocar->select_all_cars();
        } catch (Exception $e) {
            $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car List';
            die('<script>window.location.href="' . $callback . '";</script>');
        }

        if (!$rdo) {
            $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car List';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/car/view/list_car.php");
        }
        break;

    case 'read';

        try {
            $daocar = new DAOCar();
            $rdo = $daocar->select_car($_GET['id']);
            $car = get_object_vars($rdo);
        } catch (Exception $e) {
            $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car Read';
            die('<script>window.location.href="' . $callback . '";</script>');
        }
        if (!$rdo) {
            $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Read';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/car/view/read_car.php");
        }
        break;

    case 'update':
        // include("module/car/model/valid_car.php");
        if ($_POST) {
            
            $id = $_GET['id'];
            // $_SESSION['id'] = $_POST;

            try {
                $daocar = new DAOCar();
                $rdo = $daocar->update_car($_POST);
            } catch (Exception $e) {
                $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car Update';
                die('<script>window.location.href="' . $callback . '";</script>');
            }


            if ($rdo) {

                die('<script language="javascript">
                    toastr.success("Se ha actualizado correctamente el coche ' . "$id" . ' " , "", {
                        "positionClass": "toast-top-full-width",
                        timeOut: 800,
                        onHidden: function() {
                            window.location.href = "' . 'index.php?module=ctrl_car&op=list' . '"}});
                    </script>');
            } else {
                $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Update';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }

        try {
            $daocar = new DAOCar();
            $rdo = $daocar->select_car($_GET['id']);
            $car = get_object_vars($rdo);
        } catch (Exception $e) {
            $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car Update';
            die('<script>window.location.href="' . $callback . '";</script>');
        }

        if (!$rdo) {
            $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Update';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/car/view/update_car.php");
        }
        break;

    case 'delete':
        if (isset($_POST['delete'])) {
            $id = $_GET['id'];
            try {
                $daocar = new DAOCar();
                $rdo = $daocar->delete_car($_GET['id']);
            } catch (Exception $e) {
                $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car Delete';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if ($rdo) {
                die('<script language="javascript">
                toastr.success("Se ha borrado correctamente el coche ' . "$id" . ' " , "", {
                    "positionClass": "toast-top-full-width",
                    timeOut: 600,
                    onHidden: function() {
                        window.location.href = "' . 'index.php?module=ctrl_car&op=list' . '"}});
                </script>');
            } else {
                $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Delete';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }
        try {
            $daocar = new DAOCar();
            $rdo = $daocar->select_car($_GET['id']);
            $car = get_object_vars($rdo);
        } catch (Exception $e) {
            $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Delete';
            die('<script>window.location.href="' . $callback . '";</script>');
        }
        include("module/car/view/delete_car.php");
        break;


        case 'delete_all':
            if (isset($_POST['delete_all'])) {
                
                try {
                    $daocar = new DAOCar();
                    $rdo = $daocar->delete_all_cars();
                } catch (Exception $e) {
                    $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car Delete All';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
    
                if ($rdo) {
                    die('<script language="javascript">
                    toastr.success("Se ha borrado todos los coches correcatemente" , "", {
                        "positionClass": "toast-top-full-width",
                        timeOut: 600,
                        onHidden: function() {
                            window.location.href = "' . 'index.php?module=ctrl_car&op=list' . '"}});
                    </script>');
                } else {
                    $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Delete All';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }
            include("module/car/view/delete_all_cars.php");
            break;

    case 'dummies':

            if (isset($_POST['cargar_dummies'])) {
               
                try {
                    $daocar = new DAOCar();
                    $rdo = $daocar->dummies_car();
                } catch (Exception $e) {
                    $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car Dummies';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
    
                if ($rdo) {
                die('<script language="javascript">
                    toastr.success("Registrados correctamente los 10 coches electricos", "", {
                        "positionClass": "toast-top-full-width",
                        timeOut: 600,
                        onHidden: function() {
                            window.location.href = "' . 'index.php?module=ctrl_car&op=list' . '"}});
                </script>');
            } else {
                $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car Dummies';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }
           
        include("module/car/view/dummies.php");
        break;

        case 'list_exceptions':
            try {
                $daocar = new DAOCar();
                $rdo = $daocar->select_exceptions();
            } catch (Exception $e) {
                $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=Ctrl_car List exceptions';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if (!$rdo) {
                $callback = 'index.php?module=ctrl_exceptions&op=503&type=503&lugar=DAO_car List exceptions';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                include("module/car/view/list_exceptions.php");
            }
        break;


        case 'read_modal':

            try{
                $daocar = new DAOCar();
                $rdo = $daocar->select_car($_GET['id']);
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
    			echo json_encode("error");
                exit;
    		}else{
    		    $car = get_object_vars($rdo);
                echo json_encode($car);
                //echo json_encode("error");
                exit;
    		}
            break;
    

    default;
        include("module/exceptions/views/pages/error404.php");
        $callback = 'index.php?module=ctrl_exceptions&op=404&type=404&lugar=Ctrl_car --> No encuentar al pagina';
        die('<script>window.location.href="' . $callback . '";</script>');
        break;
}
