<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
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

            $xml = new SimpleXMLElement($note);

            $result = $xml->xpath("/note/to");

            print_r($result);
            print_r("<br>");
            
            //Esto printea lo que contiene <body> si tiene la palabra  forget
            $result = $xml->xpath("/note/body[contains(., 'forget')]");
            
            print_r($result);
            print_r("<br>");

            // En este caso no printea nada porque el body no tiene ninguna de esas palabras
            $result = $xml->xpath("/note/body[contains(., 'cosa') and contains(., 'cosa extra')]");

            print_r($result);
        ?>
    </body>
</html>