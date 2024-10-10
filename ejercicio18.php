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
#Después de llamar a rewind(), el bucle for comienza a iterar sobre la colección llamando repetidamente a valid() 
#para verificar si el iterador está apuntando a un elemento válido, y a next() para avanzar al siguiente elemento en 
#la colección. En cada iteración del bucle, el iterador se mueve al siguiente elemento, hasta que valid() devuelve false, 
#lo que indica que el final de la colección ha sido alcanzado.
  for( $xml->rewind(); $xml->valid(); $xml->next() ) {
    #$xml->getChildren() devuelve un iterador que contiene todos los hijos del elemento actual. El bucle foreach itera sobre 
    #este iterador, asignando cada hijo a la variable $data en cada iteración. Dentro del bucle, se imprime un mensaje que 
    #muestra el nombre y el valor del hijo actual. $name contiene el nombre del hijo (es decir, el nombre del elemento XML), 
    #mientras que $data contiene el valor del hijo (es decir, el contenido del elemento XML).
      foreach($xml->getChildren() as $name => $data) {
      echo "The $name is '$data'";
      echo "<br>";
      }
  }
?>

</body>
</html>