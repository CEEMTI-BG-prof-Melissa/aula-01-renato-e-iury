<html>
    <head>
        <title>Aula 06 - Operadores de atribuição</title>
    </head>
    <body>
        <h3>Operadors de Atribuição</h3>
        <hr>

        <?php
        $a=2;
        $b=$a+5;

        echo"A é igual a $a e B é igual a $b.";
        echo"<br><br>";

        $a=$a+3;
        echo"agora A é igual $a.";
        echo"<br><br>";

        $b+=8;
        echo"agora B é igual $b.";
        echo"<br><br>";

        $b-=5;
        echo"Agora b é igual a $b.";
        echo"<br><br>";

        $b*=2;
        echo"Agora B é igual a $b.";
        echo"<br><br>";

        $b/=10;
        echo"Agora B é igual a $b.";
        echo"<br><br>";

        $b%=3;
        echo"Agora B é igual a $b.";
        echo"<br><br>";

        $b.=10;
        echo"Agora B é igual a $b.";
        echo"<br><br>";

        ?>
    </body>
</html>
