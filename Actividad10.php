<!DOCTYPE html>
<html>
    <body>

        <?php
            $xml=<<<XML
            <?xml version="1.0" standalone="yes"?>
                <cars>
                    <car id="1">Volvo</car>
                    <car id="2">BMW</car>
                    <car id="3">Saab</car>    
                </cars>
            XML;
            
            $sxe=new SimpleXMLElement($xml);
            // Obtener el nombre del elemento coches osea imprime cars que es el nodo root <cars>
            echo $sxe->getName() . "<br>";

            // Imprime también los nombres de los hijos del elemento coches, si solo pusiera el $child imprime Volvo, BMW y Saab pero
            // con el getname() imprimira el nombre de la etiqueta de los hijos de cars osea imprimira car,car,car no imprimira lo que contienen estas etiquetas.
            foreach ($sxe->children() as $child)
            {
                echo $child->getName() . "<br>";
            }
        ?>
    </body>
</html>