<?php
$var="";
 if(is_null ($var)){
     echo"variavel \$var é nula/vazia!<br>";
 }
 $var = "Bill Gates";
   if(is_string ($var)){
    echo "variavel \$var é uma string!<br>";
 }
 $var = 12;
 if(is_integer($var)){
  echo "variavel \$var é um inteiro!<br>";
}
$var = false;
if(is_bool ($var)){
 echo "variavel \$var é booleana!<br>";
}

?>