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

$xml = new SimpleXMLIterator($note);

// rebobinar al primer elemento
$xml->rewind();

//key() sirve para devolver la clave actual, osea como hice un $xml->rewind(); significa que volvi al primer elemento del
#xml osea al primer elemento de <note> y el primer elemento de <note> es <to> el key imprimira por pantalla 'to' no el valor
#de la etiqueta si no el nombre de la etiqueta.
var_dump($xml->key());
?>

</body>
</html>