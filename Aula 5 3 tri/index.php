<html>
    <head>
        <title>Aula 05 - PHP</title>
    </head>

    <body>
        <?php
            $n1= 2;
            $n2= $_GET["x"];
            
            echo "Os valores informados são $n1 e $n2 <br>";
            echo "O valor absoluto de $n2 é " .abs($n2);
            echo "<br> o resultado de $n2 <sup>$n1</sup> é igual a " .pow($n2,$n1);
            echo "<br>A raiz quadrada de $n2 é ".sqrt($n2);
            echo "<br>O numero $n2 arredondado e " .round($n2);
            echo "<br>O numero $n2 arredondado para cima e " .ceil($n2);
            echo "<br>O numero $n2 arredondado para baixo e " .floor($n2);
            echo "<br>A parte inteira de $n2 é igual a " .intval($n2);
            echo "<br>Um pirulito custa R$" .number_format($n1,     2);
       ?>
    </body>
</html>
