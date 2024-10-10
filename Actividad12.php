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
            <book xmlns:chap="http://example.org/chapter-title">
            <title>My Book</title>
            <chapter id="1">
                <chap:title>Chapter 1</chap:title>
                <para>Donec velit. Nullam eget tellus...</para>
            </chapter>
            <chapter id="2">
                <chap:title>Chapter 2</chap:title>
                <para>Lorem ipsum dolor sit amet....</para>
            </chapter>
            </book>
            XML;

            $sxe=new SimpleXMLElement($xml);
            $sxe->registerXPathNamespace('c', 'http://example.org/chapter-title');
            $result=$sxe->xpath('//c:title');
            foreach ($result as $title)
            {
            echo $title . "<br>";
            }
        ?>
    </body>
</html>