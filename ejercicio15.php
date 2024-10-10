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
#Utiliza simplexml_load_string() para cargar esta cadena XML en un objeto SimpleXMLElement. 
#Esto convierte el XML en una estructura de datos que se puede manipular fácilmente en PHP.
$xml=simplexml_load_string($note);
#Utiliza print_r() para imprimir la estructura del objeto SimpleXMLElement. print_r() es una 
#función de diagnóstico que muestra información sobre una variable en un formato legible para humanos.
#Al imprimir el objeto SimpleXMLElement, print_r($xml) mostrará la estructura jerárquica del XML, incluyendo los elementos,
#sus atributos y los valores de los nodos de texto.
print_r($xml);
?>

</body>
</html>