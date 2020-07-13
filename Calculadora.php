<style>
    .resultado{
        color:Black;
        font-weight:bold;
        font-size:32;
    }
</style>
<?php
      
            function calcular($calculo){
                global $numero2;
                global $numero1;
            if(! strcmp("Suma ",$calculo)){
                global $numero2;
                global $numero1;
                echo"El resultado es ".($numero1+$numero2);
            }
            if(! strcmp("Resta ",$calculo)){
                global $numero2;
                global $numero1;
                echo"El resultado es ".($numero1-$numero2);
            }
            if(! strcmp("Multiplicacion ",$calculo)){
                global $numero2;
                global $numero1;
                echo"El resultado es ".($numero1*$numero2);
            }
            if(! strcmp("División ",$calculo)){
                global $numero2;
                global $numero1;
                echo"El resultado es ".($numero1/$numero2);
            }
            if(! strcmp("Módulo ",$calculo)){
                global $numero2;
                global $numero1;
                echo"El resultado es ".($numero1%$numero2);
            }
        }
    ?>