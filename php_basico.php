 <!DOCTYPE html>
 <html>
 <body>
     <?php
 //ejercicio 1niv1
    $valorX=7;
    $cadena="Hello world!";
    $verdadero= true;
    $valorY=25.35;
    
    echo "numero entero del valor X=" .$valorX;
    echo "<br>";
    echo "numero decimal del valor Y= $valorY";
    echo "<br>";
    echo $cadena;
    echo "<br>";
    print "el valor booleano es: $verdadero";
    echo "<br>";
    echo "<hr>";

    //ejercicio 2niv1

    $cadena_texto= "Hello world!";

    echo $cadena_texto;
    echo "<br>";
    echo strtoupper($cadena_texto);
    echo "<br>";
    echo strlen($cadena_texto);
    echo "<br>";
    echo strrev($cadena_texto);
    echo "<br>";
    
    $cadena_texto2= "Esto es el curso de PHP";
    echo $cadena_texto." ".$cadena_texto2;
    echo "<br>";
    echo "<hr>";
    
    //ejercicio 3niv1

    define("NOMBRE_ALUMNO","Stefano");
    echo "<h1>".NOMBRE_ALUMNO."</h1>";
    echo "<br>";
    echo "<hr>";

    //ejercicio 4niv1

    $x= 15;
    $y= 23;
    $n= 12.36;
    $m= 32.20;

    echo "los valores enteros son: X $x, Y $y.";
    echo "<br>";
    echo "los valores decimales son: N $n, M $m.";
    echo "<br>";
    echo "El resultado de la suma de X+Y es: ".$x+$y;
    echo "<br>";
    echo "El resultado de la resta de X-Y es: ".$x-$y;
    echo "<br>";
    echo "El producto de X*Y es: ".$x*$y;
    echo "<br>";
    echo "El modulo de X%Y es: ".$x%$y;
    echo "<br>";
    echo "El resultado de la suma de N+M es: ".$n+$m;
    echo "<br>";
    echo "El resultado de la resta de N-M es: ".$n-$m;
    echo "<br>";
    echo "El producto de N*M es: ".$n*$m;
    echo "<br>";
    echo "El modulo de N%M es: ".$n%$m;
    echo "<br>";

    echo "El doble de X es: ".($x*2);
    echo "<br>";
    echo "El doble de Y es: ".($y*2);
    echo "<br>";
    echo "El doble de N es: ".($n*2);
    echo "<br>";
    echo "El doble de M es: ".($m*2);
    echo "<br>";
    echo "La suma de X+Y+N+M es: ".$x+$y+$n+$m;
    echo "<br>";
    echo "El producto de X*Y*N*M es: ".$x*$y*$n*$m;
    echo "<br>";
    echo "<hr>";

    //ejercicio 5niv1

    $array_int1= array(2, 4, 6, 7, 8);
    $array_int2= array(7, 34, 21);

    array_push($array_int2, 26);

    $mezcla_array= array_merge($array_int1, $array_int2);
    print_r($mezcla_array);
    echo "<br>";
    echo "<br>";
    //otra forma imprimir con el foreach

    foreach($mezcla_array as $result){
        echo $result;
        echo "<br>";
    }
    echo "<br/>";
   

    echo "El arrayList contiene ".$lenght_array=count($mezcla_array)." elementos.";

    echo "<br/>";
    echo "<hr/>";

    

 ?> 

 </body>
 </html>
 
