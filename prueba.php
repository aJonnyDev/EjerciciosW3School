<?php
    $note=<<<XML
    <note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Do not forget me this weekend!</body>
    </note>
    XML;

    $xml = new SimpleXMLElement('<note></note>');
    $var = simplexml_load_string($note);
    $fin = $var->xpath("/note/from");
    foreach($fin as $a){
        $final = $xml->addChild('user');
        $final -> addChild('from', (string)$a);
    }

    header('Content-Type: Text/xml');
    echo $xml->asXML()
?>