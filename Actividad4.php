<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Añadir hijos</title>
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

            $xml=new SimpleXMLElement($note);

            // Add a child element to the body element
            $xml->body->addChild("date","2014-01-01");

            // Add a child element after the last element inside note
            $footer=$xml->addChild("footer","Texto del Footer añadido");
            
            echo $xml->asXML();


            // Resultado:

            
            // <note>
            //      <to>Tove</to>
            //      <from>Jani</from>
            //      <heading>Reminder</heading>
            //      <body>
            //          Do not forget me this weekend!
            //          <date>2014-01-01</date>
            //      </body>
            //      <footer>Texto del Footer añadido</footer>
            // </note>
        ?>
    </body>
</html>