<?php
//simplexml loadfile sirve para cargar archivos xml al una variable de otro archivo
    $xml=simplexml_load_file("note.xml"); //esto ya esta pasado a objeto
    header('content-type: Text/xml');

    // ese objeto xml lo pasa todo a xml como tal
    print $xml -> asXML();
    echo 'Apruebame pobre bello';
?>
