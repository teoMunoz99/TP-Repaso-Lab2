<?php
    function calcularTarifa($plan) {
        //Declaro el array
        $planes=['basico'=>1649, 'estandar'=>2799, 'premium'=>3999];
        //Calculo el impuesto
        $total = $planes[$plan] + ($planes[$plan] * 0.76);
        //Retorno el total;
        return $total;
    }
?>