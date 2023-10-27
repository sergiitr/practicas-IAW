<?php
    function exponente($numero, $exponente) {
        $variable=0;
        $aux=1;
        if ( $exponente > 0 ) {
            do {
                $aux = $aux * $numero;
                $variable = $variable + 1;
            } while ($variable<$exponente);
        } elseif ( $exponente == 0 )
            $aux=1;
        else {
            do {
                $aux = $aux * (1/$numero);
                $variable = $variable + 1;
            } while ($variable<abs($exponente));
        }
        return $aux;
    }

    function ordenar($n1, $n2, $n3) {
        if ( $n1 > $n2  && $n2 > $n3 )
            echo "<p>",$n1 , " - ", $n2 , " - ", $n3 , "</p>";
        elseif ( $n1 > $n3  && $n3 > $n2 )
            echo "<p>",$n1 , " - ", $n3 , " - ", $n2 , "</p>";
        elseif ( $n2 > $n1  && $n1 > $n3 )
            echo "<p>",$n2 , " - ", $n1 , " - ", $n3 , "</p>";
        elseif ( $n2 > $n3  && $n3 > $n1 )
            echo "<p>",$n2 , " - ", $n3 , " - ", $n1 , "</p>";
        elseif ( $n3 > $n1  && $n1 > $n2 )
            echo "<p>",$n3 , " - ", $n1 , " - ", $n2 , "</p>";
        else
            echo "<p>",$n3 , " - ", $n2 , " - ", $n1 , "</p>";
    }

    function sumaComprendidos($n1, $n2) {
        $aux=0;
        $i=0;
        if ($n1 <= $n2)
            for ($i=$n1; $i<=$n2; $i++)
                $aux = $aux + $i;
        else
            for ($i=$n1; $i>=$n2; $i--)
                $aux = $aux + $i;
        return $aux;
    }
?>