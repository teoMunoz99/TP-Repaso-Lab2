<?php

    // Procesar el formulario
    if(!empty($_POST['correo']) && !empty($_POST['clave']) && !empty($_POST['plan'])){
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $plan = $_POST['plan'];
    }else{
        echo("Error al cargar los datos");
    }
        // Invocar a la función para Calcular la tarifa
        include 'myFunctions.php';
        $total = calcularTarifa($plan);

        // Mostrar el resultado
        echo("El correo del usuario es: ".$correo."<br>");
        echo("El plan elejido por el usuario es: ".$plan."<br>");
        echo("El total a pagar con impuestos es: ".$total);
       
   
?>