<!DOCTYPE html>
<html>
<body>

<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;
#el iterador SimpleXMLIterator se utiliza para recorrer los elementos del XML de manera similar a un bucle foreach.
#Después de crear el SimpleXMLIterator con el fragmento XML proporcionado, puedes utilizarlo para acceder y trabajar 
#con los elementos del XML de manera iterativa. Por ejemplo, puedes usar métodos como current() para obtener el elemento 
#actual, next() para avanzar al siguiente elemento y valid() para verificar si el iterador sigue siendo válido.
$xml = new SimpleXMLIterator($note);

// rebobinar al primer elemento
$xml->rewind();
#var_dump() en PHP se utiliza para mostrar información sobre una o más variables, incluyendo su tipo y valor. Es una 
#herramienta muy útil para la depuración y la comprensión de las estructuras de datos en tiempo de ejecución.
// El current() sirve para devolver el elemento actual, en este caso var_dump($xml->current()); imprimira por pantalla
#object(SimpleXMLIterator)#2 (1) { [0]=> string(4) "Tove" } osea en general imprime tove porque antes hicimos un 
#rewind para volver al primer elemento y el primer elemento de <note> es <to> y el valor de <to> es Tove
var_dump($xml->current());
?>

</body>
</html>