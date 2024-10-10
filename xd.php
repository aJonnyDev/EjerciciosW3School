<?php
    $note=<<<XML
    <note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Do not forget me this weekend!</body>
    <body>Hola</body>
    </note>
    XML;

$new = simplexml_load_string($note);
$buscar = $new->xpath('/note/body[1]');
echo $buscar[0]
?>