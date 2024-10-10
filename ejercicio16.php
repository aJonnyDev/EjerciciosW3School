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
#El new simplexmlelement($note) crea un objeto de la variable $note para que esta pueda ser manipulada sin embargo tambien
#se puede crear con el new simplexmlelement('<user></user>') esto crearia un xml dentro de la variable $xml donde 
#$xml contendria solo <user></user>.
$xml = new SimpleXMLElement($note);
#El xpath sirve para usar los comandos de xpath y buscar algo en concreto, recuerda que /note/to es una ruta absoluta y 
#la doble barra '//' sirve para seleccionar todo osea //note//to esto seria seleccioname todos los <to> de todos los <note>,
#Otro ejemplo de un xml que cuente con edades puede ser: //user[age > 50] esto me seleccionaria a todos los usuarios donde
#La etiqueta <age> tiene que ser mayor a 50.
$result = $xml->xpath("/note/to");
print_r($result);
?>

</body>
</html>