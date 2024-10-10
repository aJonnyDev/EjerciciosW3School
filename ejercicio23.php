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

// Compruebe si es válida
var_dump($xml->valid());

// pasar al siguiente elemento
$xml->next();

// Compruebe si es válida
var_dump($xml->valid());
?>

</body>
</html>