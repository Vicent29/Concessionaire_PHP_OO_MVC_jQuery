<?php
	$path = $_SERVER['DOCUMENT_ROOT'] . '/CONCESIONARIO';
	include($path . "/model/connect_CRUD_car.php");
    // include("model/connect.php");
    
	class DAOCar{
		function create_car($datos){
			$bastidor = $datos['bastidor'];
			$matricula = $datos['matricula'];
			$fecha_matriculacion = $datos['fecha_matriculacion'];
			$marca = $datos['marca'];
			$modelo = $datos['modelo'];
			$km = $datos['km'];
			$color = $datos['color'];
			$num_puertas = $datos['num_puert'];
			$motor = $datos['motor'];
			$cambio_marchas = $datos['cambio_marchas'];
			$seguridad=null; 
			foreach ($datos['seguridad'] as $indice) {
        	    $seguridad=$seguridad."$indice,";
        	}
			$confort=null; 
			foreach ($datos['confort'] as $indice) {
        	    $confort=$confort."$indice,";
        	}
			$precio = $datos['precio'];
        	
			$sql = ("INSERT INTO coches (num_bastidor, matricula, fechamatricula, marca, modelo, km, color, num_puertas, motor, cambio_marchas, e_seguridad, e_confort, precio)
			VALUES ('$bastidor', '$matricula', '$fecha_matriculacion', '$marca', '$modelo', '$km', '$color', '$num_puertas', '$motor', '$cambio_marchas', '$seguridad', '$confort', '$precio')");
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_cars(){
			$sql = "SELECT * FROM coches ORDER BY id ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}

		function select_car($id){
			$sql = "SELECT * FROM coches WHERE id='$id'";
		
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

		function select_exceptions(){
			$sql = "SELECT * FROM exceptions ORDER BY current_date_time";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}

		function update_car($datos){
			$bastidor = $datos['bastidor'];
			$matricula = $datos['matricula'];
			$fecha_matriculacion = $datos['fecha_matriculacion'];
			$marca = $datos['marca'];
			$modelo = $datos['modelo'];
			$km = $datos['km'];
			$color = $datos['color'];
			$num_puertas = $datos['num_puert'];
			$motor = $datos['motor'];
			$cambio_marchas = $datos['cambio_marchas'];
			$seguridad=null; 
			foreach ($datos['seguridad'] as $indice) {
        	    $seguridad=$seguridad."$indice,";
        	}
			$Confort=null; 
			foreach ($datos['confort'] as $indice) {
        	    $Confort=$Confort."$indice,";
        	}
			$precio = $datos['precio'];
        	
			$sql = "UPDATE coches SET marca='$marca',modelo='$modelo',fechamatricula='$fecha_matriculacion',Km='$km',color='$color',num_puertas='$num_puertas',motor='$motor',cambio_marchas='$cambio_marchas',e_seguridad='$seguridad',e_confort='$Confort',precio='$precio' WHERE matricula='$matricula' AND num_bastidor='$bastidor'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		function delete_car($id){
			$sql = "DELETE FROM coches WHERE id='$id'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function delete_all_cars(){
			$sql = "DELETE FROM coches";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function dummies_car(){
		
			
			$delete= ("DELETE FROM coches");
			$insert = ("INSERT INTO coches (num_bastidor, matricula, fechamatricula, marca, modelo, km, color, num_puertas, motor, cambio_marchas, e_seguridad, e_confort, precio)
			VALUES 
			('ALOEGLSEO34782341', '1393ABC', '10/01/2015', 'Hyundai', 'Kona', '1000', '#F3F3F3',	'5', 'Hibrido', 'automatico', 'Sensor de distancia,Control de traccion,Asistencia de frenada,Sensor de carril,', 'Asientos calefactables,Control de crucero,Asistencia de estacionamiento,', '25000'),
			('BOOEGLSEO34122342', '2393HJC', '12/05/2017', 'BMW', 'i3', '3000', '#0A61F9', '5',	'Electrico', 'automatico', 'Sensor de distancia,Control de traccion,Asistencia de frenada,', 'Control de crucero,Asistencia de estacionamiento,', '13500'),
			('CEOEGLSEO34742343', '3393NRO', '23/07/2016', 'Tesla', 'Model3', '100', '#F72F0C',	'5', 'Electrico', 'automatico',	'Sensor de distancia,Control de traccion,Asistencia de frenada,', 'Asientos calefactables,Control de crucero,', '70000'),
			('SUSEGLSEO12782344', '4393LOL', '09/08/2019', 'Renault', 'ZOE', '2300', '#0D0E0E',	'5', 'Electrico', 'automatico', 'Sensor de distancia,Control de traccion,Asistencia de frenada,', 'Control de crucero,Asistencia de estacionamiento,', '9500'),
			('ZLOEGLSEO34782345', '5393ARA', '21/11/2020', 'Nissan', 'Leaf', '500', '#FA9A0A', '5', 'Hibrido', 'automatico', 'Control de traccion,Asistencia de frenada,Sensor de carril,',	'Asientos calefactables,Control de crucero,Asistencia de estacionamiento,', '19000'),
			('UCOEGLSEO34782346', '6393KFC', '14/12/2015', 'Kia', 'Eniro', '12250',	'#FA9F09', '5', 'Electrico', 'automatico', 'Asistencia de frenada,Sensor de carril,', 'Asientos calefactables,Control de crucero,', '13000'),
			('NLOEGLSEO54782347', '7393YAC', '19/10/2016', 'Smart', 'Fortwo', '10321', '#0D0D0D', '3', 'Hibrido', 'automatico',	'Asistencia de frenada,Sensor de carril,', 'Control de crucero,Asistencia de estacionamiento,',	'15500'),
			('SOOEGLSEO34712348', '8393JBL', '05/07/2020', 'Peugeot', 'E208', '9000', '#F50404', '5', 'Electrico', 'automatico', 'Sensor de distancia,Control de traccion,Sensor de carril,', 'Asientos calefactables,Control de crucero,Asistencia de estacionamiento,', '10000'),
			('HTOEGLSEO34782349', '9393SOS', '30/09/2019', 'Citroen', 'EC4', '40000', '#107F29', '3', 'Electrico', 'automatico', 'Ninguna,', 'Ninguna,', '11500'),
			('RMAEGLSEO34782340', '0393CAR', '22/04/2018', 'Opel', 'CorsaE', '30000', '#0316FC', '3', 'Hibrido', 'automatico', 'Ninguna,', 'Ninguna,', '12000')
			");
            
            $conexion = connect::con();
			$res = mysqli_query($conexion,$delete);
            $res = mysqli_query($conexion,$insert);
            connect::close($conexion);
			return $res;
		}
		
	}