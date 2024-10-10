<!DOCTYPE html>
<html>
<body>

<?php
$xml=<<<XML
<?xml version="1.0" standalone="yes"?>
<cars xmlns:c="https://w3schools.com/ns" xmlns:a="https://w3schools.com/country">
  <c:car id="1">Volvo</c:car>
  <c:car id="2">BMW</c:car>
  <c:car id="3">Saab</c:car>   
  <!--Si quieres que tambien se imprima por pantalla a="https://w3schools.com/country" tienes que asociar la a con algo
  dentro de la etiqueta cars, para imprimirlo por pantalla agrega la siguiente linea al codigo
  <a:car id="4">Ssaab</a:car> -->  
</cars>
XML;
 
$sxe=new SimpleXMLElement($xml);
#El getnamespaces devuelve los espacios en nombres es algo raro que no entendi muy bien pero cuando ponen el 
#xmlns:(Cualquiernombre) el getnamespaces devolvera en este caso la c="https://w3schools.com/ns" , no devolvera el 
#a="https://w3schools.com/country" porque dentro de <cars> no hay ninguna a:car osea que la a no esta asociado a nada
#por lo que solo imprimira por pantalla la c="https://w3schools.com/ns"
$ns=$sxe->getNamespaces(true);
#var_dump() en PHP se utiliza para mostrar información sobre una o más variables, incluyendo su tipo y valor. Es una 
#herramienta muy útil para la depuración y la comprensión de las estructuras de datos en tiempo de ejecución.
var_dump($ns);
?>

</body>
</html>