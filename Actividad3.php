<!DOCTYPE html>
<html>
    <body>

        <?php
            $note = <<<XML
            <note>
            <to>Tove</to>
            <from>Jani</from>
            <heading>Reminder</heading>
            <body>Do not forget me this weekend!</body>
            </note>
            XML;

            $xml = new SimpleXMLElement($note);
            // Add attribute to root element
            $xml->addAttribute("type", "COSA RARA");
            $xml->addAttribute("Prueba","EEEHHH Nacidoooo");
            // Add attribute to body element
            $xml->body->addAttribute("date", "2014-01-01");

            // Recorrer y mostrar los atributos del elemento raíz
            echo "<h3>Attributes of root element:</h3>";
            foreach($xml->attributes() as $name => $value) {
                echo "$name = $value<br>";
            }

            // Recorrer y mostrar los atributos del elemento <body>
            echo "<h3>Attributes of body element:</h3>";
            foreach($xml->body->attributes() as $name => $value) {
                echo "$name = $value<br>";
            }

            // También puedes imprimir el XML completo con los atributos añadidos
            echo "<h3>XML completo con atributos:</h3>";
            echo "<Raiz>" . htmlspecialchars($xml->asXML()) . "</Raiz>";


            //Resultado
            
            // <note type="COSA RARA" Prueba="EEEHHH Nacidoooo">
            //     <to>Tove</to>
            //     <from>Jani</from>
            //     <heading>Reminder</heading>
            //     <body date="2014-01-01">Do not forget me this weekend!</body>
            // </note>
        ?>
    </body>
</html>
