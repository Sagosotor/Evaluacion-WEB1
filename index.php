<?php
//  Ejercicio #2 

/*2. El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal,
basado en la formula 𝐈𝐌𝐂 =
𝑷𝒆𝒔𝒐
𝑨𝒍𝒕𝒖𝒓𝒂𝒙𝑨𝒍𝒕𝒖𝒓𝒂
La clasificación del IMC, es la siguiente:
• IMC <= 18,4 (Insuficiencia de peso)
• 18,5<=IMC<=24,9 (Peso normal)
• 25<=IMC<=29,9 (Sobrepeso)
• 30<=IMC<=34,9 (Obesidad 1)
• 35<=IMC<=39,9 (Obesidad 2)
• IMC>=40 (Obesidad 3)*/

echo("<br><br>Ejercicio 2 <br><br>");
echo("Calcular el indice de masa corporal <br>");

$peso=85;
$altura=1.78;
echo("<br>El peso del usuario es =".$peso." kg <br>");
echo("<br>La altura del usuario es =".$altura." m <br>");
$imc=$peso/$altura;

echo("<br>El indice de masa corporal del usuario es =".$imc."<br>");

if($imc<= 18.4){
    echo("El usuario tiene insuficiencia de peso <br>");
}else if($imc>=18.5 && $imc<=24.9){
    echo("El usuario tiene peso normal <br> ");
}else if($imc>=25 && $imc<=29.9){
    echo("El usuario tiene sobrepeso <br>");
}else if ($imc>=30 && $imc<=34.9){
    echo("El usuario tiene obesidad grado 1 <br>");
}else if ($imc>=35 && $imc<=39.9){
    echo("El usuario tiene obesidad grado 2 <br>");
}else{
    echo("El usuario tiene obesidad grado 3 <br>");
}

echo ("<br>..........................");

echo("<br><br> Ejercicio 3 <br><br>");
echo("Promocion Descuentos <br>");

$Cantzapatosvendidos=5;
$Precioparzapatos=150000;

if($Cantzapatosvendidos== 3){
    $descuento=$Precioparzapatos*0.1;
    $valor=$Precioparzapatos-$descuento;
    echo("El valor a pagar es: $ ".$valor. "El descuento fue del 10% de: ".$descuento." <br>");
}else if ($Cantzapatosvendidos> 3 && $Cantzapatosvendidos<= 5){
    $descuento=$Precioparzapatos*0.2;
    $valor=$Precioparzapatos-$descuento;
    echo("El valor a pagar es: $".$valor. "El descuento fue del 20% de: ".$descuento."<br>");
}else if($Cantzapatosvendidos>5 ){
    $descuento=$Precioparzapatos*0.4;
    $valor=$Precioparzapatos-$descuento;
    echo("El valor a pagar es : $".$valor. "El descuento fue del 40% de: ".$descuento."<br>");
}else{
    echo("El valor a pagar es: $" .$Precioparzapatos." <br>");
}  





?>