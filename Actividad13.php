<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $dom=new domDocument;
            $dom->loadXML("<note><to>Tove</to><from>Jani</from></note>");
            $x=simplexml_import_dom($dom);
            echo $x->from;
        ?>
    </body>
</html>