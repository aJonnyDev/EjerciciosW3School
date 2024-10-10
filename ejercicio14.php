<!DOCTYPE html>
<html>
<body>

<?php
#El simplexml_load_file sirve para meter el archivo note.xml en la variable $xml para que esta pueda ser manipulable
#La diferencia de este y el simplexml_load_string es que el string lo convierte en un objeto si el xml esta en el mismo archivo,
#y el file recupera el xml de otro arhivo y lo convierte en objeto
$xml=simplexml_load_file("note.xml");
print_r($xml);
?>

</body>
</html>