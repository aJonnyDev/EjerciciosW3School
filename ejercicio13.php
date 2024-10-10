<!DOCTYPE html>
<html>
<body>

<?php
#Crea un nuevo objeto 'DOMdocument' y lo mete en la variable $dom
$dom=new domDocument;
#Carga un fragmento de XML en el objeto DOMDocument usando el método loadXML(). 
#El XML proporcionado es <note><to>Tove</to><from>Jani</from></note>.
$dom->loadXML("<note><to>Tove</to><from>Jani</from></note>");
#Luego, importa este objeto DOMDocument a un objeto SimpleXMLElement usando la función 
#simplexml_import_dom(). Esto convierte el XML en un objeto SimpleXMLElement, lo que facilita su manipulación.
$x=simplexml_import_dom($dom);
#imprime el valor del elemento <from> del XML usando la propiedad de objeto $x->from.
echo $x->from;
?>

</body>
</html>