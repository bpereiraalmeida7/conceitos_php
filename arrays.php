<!DOCTYPE html>
<html>
    <body>

        <?php

            $array1 = array('ES', 'MG', 'RJ', 'SP');
            $array2 = array('São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo');

            function montaArray($param1, $param2){
                $array3 = array();

                //array_reverse irá reverter as posições dos valores do array e armazenar na variável temporária(tmp).
                $tmp = array_reverse($param2, true);
                
                foreach($param1 as $value1){
                    foreach($tmp as $value2){
                        $array3 += [
                            $value1 => $value2,
                        ];
                    }
                }
                
                foreach($array3 as $value3 => $key){
                    echo $value3 ."-". $key ."<br>";
                }      
            }

            montaArray($array1, $array2);
        ?>

    </body>
</html>
