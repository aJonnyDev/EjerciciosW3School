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

// devolver el elemento actual
var_dump($xml->current());
?>

</body>
</html>