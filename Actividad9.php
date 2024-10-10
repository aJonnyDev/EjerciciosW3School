<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $xml=<<<XML
            <?xml version="1.0" standalone="yes"?>
            <cars xmlns:c="https://w3schools.com/ns">
            <c:car id="1">Volvo</c:car>
            <c:car id="2">BMW</c:car>
            <c:car id="3">Saab</c:car>    
            </cars>
            XML;
            
            $sxe=new SimpleXMLElement($xml);
            #El método getDocNamespaces() devolverá un array asociativo donde la clave c representa el prefijo del espacio de nombres y 
            #el valor asociado es el URI del espacio de nombres, que es https://w3schools.com/ns.
            $ns=$sxe->getDocNamespaces();
            #El print_r no devuelve un valor si no que imprime la structura de datos en este caso este pedido '$sxe->getDocNamespaces()'
            #mete un array en $ns por lo que si intentamos hacer print($ns) saldra un error, tendremos que usar el print_r para que pueda
            #imprimir de manera correcta el array
            print_r($ns);
        ?>
    </body>
</html>