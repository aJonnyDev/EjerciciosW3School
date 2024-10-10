<!DOCTYPE html>
<html>
<body>

<?php
$xml=<<<XML
<book xmlns:chap="http://example.org/chapter-title">
  <title>My Book</title>
  <chapter id="1">
    <chap:title>Chapter 1</chap:title>
    <para>Donec velit. Nullam eget tellus...</para>
  </chapter>
  <chapter id="2">
    <chap:title>Chapter 2</chap:title>
    <para>Lorem ipsum dolor sit amet....</para>
  </chapter>
</book>
XML;

$sxe=new SimpleXMLElement($xml);
#$sxe->registerXPathNamespace('c', 'http://example.org/chapter-title'); registra el espacio 
#de nombres http://example.org/chapter-title con el prefijo c en el objeto SimpleXMLElement $sxe. 
#Osea es como cambiar el chap de xmlns:chap="http://example.org/chapter-title" a cambiarlo por una c lo que terminaria asi
#xmlns:c="http://example.org/chapter-title"
$sxe->registerXPathNamespace('c', 'http://example.org/chapter-title');
#Y finalmente como ya esta cambiado del espacio de nombres el //c:title es como si fuera un //chap:title osea que con
#este comando //c:title te buscara las etiquetas chap:title
$result=$sxe->xpath('//c:title');
foreach ($result as $title)
  {
  echo $title . "<br>";
  }
?>

</body>
</html>