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

$new = new SimpleXMLElement('<nuevo></nuevo>');
$xml = new SimpleXMLIterator($bookxml);
for( $xml->rewind(); $xml->valid(); $xml->next()){
  $new1 = $new->addChild((string)$xml->getChildren()->getName());
    foreach($xml->getChildren() as $name => $dato){
        $new1 -> addChild((string)$name,(string)$dato);
    }
}
header('Content-Type: Text/xml');
echo $new->asXML()
?>