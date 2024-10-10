<!DOCTYPE html>
<html>
<body>

<?php
$bookxml = <<<XML
<bookstore>
<book>
  <title>Everyday Italian</title>
  <author>Giada De Laurentiis</author>
</book>
<book>
  <title>Harry Potter</title>
  <author>J K. Rowling</author>
</book>
<book>
  <title>Learning XML</title>
  <author>Erik T. Ray</author>
</book>
</bookstore>
XML;

$xml = new SimpleXMLIterator($bookxml);
for( $xml->rewind(); $xml->valid(); $xml->next() ) {
  #El método hasChildren() se utiliza en PHP para verificar si un elemento en un objeto SimpleXMLIterator tiene hijos. 
  #Devuelve true si el elemento actual tiene hijos y false si no tiene.
    if($xml->hasChildren()) {
        var_dump($xml->current());
        echo "<br>";
    }
}
?>

</body>
</html>