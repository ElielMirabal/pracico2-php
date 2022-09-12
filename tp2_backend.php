<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* 1. Crear una variable n y validar que sea un número positivo. */
        $n1=5;

        if ($n1 > 0) {
            print "<p>es un numero positivo</p>";
        } else {
            print "<p> es un numero negativo </p>";
        }



       /*  2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10. */

        if ($n1 > 1 and $n1 < 10) {
            print "<p>es un numero entre 1 y 10, el numero es $n1</p>";
        }  else {
            print "<p>el numero esta fuera de rango permitido</p>";
        }


        /* 3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2. */
        $n2= -2;
        if($n2 < 2 or $n2 > 10) {
            print "<p>el numero es $n2</p>";
        } else {
            print "<p>el numero esta fuera de rango permitido</p>";
        }


        /* 4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta.
        Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división.
        Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”  */
        $numero1 = 15;
        $numero2= 10;

        if ($numero1 > $numero2) {
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            print "<p> la suma de los numeros es $suma y la resta de los numeros es $resta </p>";
        } elseif($numero1 < $numero2) {
            $multiplicacion = $numero2 * $numero1;
            $division = $numero2 / $numero1;
            $resto = $numero2 % $numero1;
            print "<p> la multiplicacion de los numeros es $multiplicacion, la division de los numeros es $division, y el resto de los numeros es $resto.</p>";
        } else {
            print "<p> los numeros son iguales </p>";
        }

    ?>
</body>
</html>