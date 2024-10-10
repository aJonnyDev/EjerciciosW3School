<?php
$xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<library>
    <book>
        <title>El señor de los anillos</title>
        <author>J.R.R. Tolkien</author>
        <genre>Fantasía</genre>
        <publication_year>1954</publication_year>
    </book>
    <book>
        <title>Cien años de soledad</title>
        <author>Gabriel García Márquez</author>
        <genre>Realismo mágico</genre>
        <publication_year>1967</publication_year>
    </book>
    <book>
        <title>1984</title>
        <author>George Orwell</author>
        <genre>Distopía</genre>
        <publication_year>1949</publication_year>
    </book>
</library>
XML;

$obj = simplexml_load_string($xml);
$new = new SimpleXMLElement('<nuevo></nuevo>');
$buscar = $obj->xpath('//book');

foreach ($buscar as $ejem){
    $xd = $new->addChild('ejemplo');
    $xd->addChild('Titulo',$ejem->title);
    $xd->addChild('Autor',$ejem->author);
    $xd->addChild('Genero',$ejem->genre); 
    $xd->addChild('Publicacion',$ejem->publication_year); 
}
header('Content-Type: Text/xml');
echo $new->asXML();

?>