<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    if (isset($_POST['guardar'])){

        require_once('../models/entrada.php');
        $config = new Entrada();

        $config -> setIdEmpleado($_POST['id_empleado']);
        $config -> setIdConstructora($_POST['id_constructora']);
        $config -> setFechaDeEntrega($_POST['fecha_entrega']);
        $config -> setobservaciones($_POST['observaciones']);
        $config -> AddData();
        echo "<script>alert('datos guardados');document.location='./../..//frontend' </script>";
    }

?>