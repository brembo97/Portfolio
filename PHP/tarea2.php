<?php
    //Ejercicio 0
    echo nl2br("EJERCICIO 0 \n");

    $tipo = "Rueda de camion";
    $grosor = 0.33;
    $diametro = 1.25;
    $marca = "Kimashuki";

    if(diametro > 1.4){
        echo "La rueda es para un vehiculo grande.\n";
    }elseif (diametro <= 1.4) {
        echo "La rueda es para un vehiculo pequeno\n";
    }else{
        echo "No existe un tamano de rueda valido\n";
    }

    //Ejercicio 1
    echo nl2br("\nEJERCICIO 1 \n");

    function sumar($num1, $num2, $num3, $num4, $num5){
        $sum = $num1 + $num2 + $num3 + $num4 + $num5;
        echo "$sum\n";
    }
    sumar(4,5,6,7,8);

    function sumarReturn($num1, $num2, $num3, $num4, $num5){
        $sum = $num1 + $num2 + $num3 + $num4 + $num5;
        return "$sum";
    }

    $tmp = sumarReturn(2,5,1,8,10);
    echo "$tmp\n";

    function cilindroV($radio, $altura){
        $volumen = $radio * $radio * 3.1416 * $altura;
        return $volumen;
    }
    $vol = cilindroV(3,5);
    echo "El volumen del cilindro es $vol ";

    //Ejercicio 2
    echo nl2br("\nEJERCICIO 2 \n");

    for($i = 50; $i <= 500; $i += 25){
        echo $i;
    }

    for($j = 100; $j <= 500; $j += 100){
        echo $j/20;
        echo "\n";
    }
?>