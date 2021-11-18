<html>
    <body>
    <h3>Indicar si el numero es par o impar</h3>
    <form name="ValorNumerico" method="post" action="Funciones_y_estructuras_control.php">
        Introducir un numero(press ENTER): <input type="text" name="valorX" value="">
        
        <br></br>
<?php

if($valorN=$_POST["valorX"]%2==0){
    echo "El numero es par.";

}else if(!is_numeric($valorN=$_POST["valorX"])){
    echo "No es un valor numerico.";

}else{
    echo "El numero es impar."; 
}
?>
</body>
</html>

