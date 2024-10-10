<?php
$xml = <<<XML
<?xml version='1.0' encoding="UTF-8"?>
<dato>
    <nombre>Juan garcia</nombre>
    <edad> 35 </edad>
</dato>
XML;
$note = <<<XML
<?xml version='1.0' encoding="UTF-8"?>
<dato>
    <nombre>Pepe Martin</nombre>
    <estado> Casado </estado>
</dato>
XML;

$primero = simplexml_load_string($xml);

$segundo = simplexml_load_string($note);

$buscar = $primero->xpath('//dato');

$buscar2 = $segundo->xpath('//dato');
$new = new SimpleXMLElement('<datos></datos>');

foreach($buscar as $enc){
    $new1 = $new->addChild('dato');
    $new1 -> addChild('nombre',$enc->nombre);
    $new1 -> addChild('edad',$enc->edad);
}
foreach($buscar2 as $enco){
    $new2 = $new->addChild('dato');
    $new2 -> addChild('nombre',$enco->nombre);
    $new2 -> addChild('estado',$enco->estado);
}
header('Content-Type: Text/xml');
echo $new->asXML()
?>