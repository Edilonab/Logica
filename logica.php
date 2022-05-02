<?php
 
    function countMultiples($n)
    {
        $res = 0;
        for ($i = 1; $i < $n; $i++)

            if ($i % 3 == 0 || $i % 5 == 0)

                ($res += $i);
    
        return $res;
    }
    
    echo "Valor é = " ,countMultiples(1000);
        


/*
Lógica de programação

Pensando em todos os números naturais inferiores a 10 que são múltiplos de 3 ou 5, 
temos 3, 5, 6 e 9. Somando esses múltiplos obtemos o valor 23. Utilize um algorítimo 
para calcular a soma de todos os múltiplos de 3 ou 5 abaixo de 1000
*/ 
?>