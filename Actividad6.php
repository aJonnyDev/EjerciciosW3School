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
            <body date="2014-01-01" type="private" color="gris Oscuro">Do not forget me this weekend!</body>
            </note>
            XML;

            # El simplexml_load_string convierte a la variable note en un objeto y lo mete en el $xml para que pueda ser manipulable
            $xml = simplexml_load_string($note);
            
            # En este foreach se pide que se busque en el xml el elemento body posicion 0 'body[0] osea el primer body y con ->attributes
            # le pide que busque los atributos de body, la variable $a imprimira el date y el type y la variable b imprimira 2014-01-01 y
            # private
            # $a: Esta variable representa el nombre de cada atributo. a = Date 
            # $b: Esta variable representa el valor de cada atributo.  b = 2014-01-01
            foreach($xml->body[0]->attributes() as $a => $b)
            {
                echo $a,' = ',$b,"<br>";
            }
        ?>
    </body>
</html>