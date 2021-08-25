<?php
//BSS 
function interpretacion($cadena){
$decimal = 0;
$posicion = 0;
$longitud = strlen($cadena);
    for ($i=($longitud-1);$i>=0;$i--){
        $decimal += intval($cadena[$i]) * pow(2 ,$posicion);
        $posicion+=1;
    }
return $decimal;
}

function representacion($decimal){
    $cadena = '';
    $resultado = $decimal;
    do{
        $cadena.=fmod($resultado,2);
        $resultado =floor($resultado /2);
        
    }while($resultado> 0);
    return strrev($cadena);
}


?>