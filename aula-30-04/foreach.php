<?php

 
$alunos = array ("yasmim","cecilia","isis","sofya");



 echo"impressão 1 por 1 <br>";
echo "$alunos[0]<br>";
echo "$alunos[1]<br>";
echo "$alunos[2]<br>";
echo "$alunos[3]<br>";


echo "<br>exemplo com for <br>";

 
for ($i=0; $i<(count ($alunos)); $i++){
    echo $i;
    echo " $alunos[$i]<br>";
  
}  
 
echo"<br> exemplo com foreach <br>";
foreach($alunos as $dados){
    echo "$dados<br>";
}

    

?>