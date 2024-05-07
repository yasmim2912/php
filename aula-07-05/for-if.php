<?php

 $alunos = array ("yasmim","cecilia","isis","sofya");

echo"impressão 1 por 1 <br>";
echo "$alunos[0]<br>";
echo "$alunos[1]<br>";
echo "$alunos[2]<br>";
echo "$alunos[3]<br>";

echo"<br>imprima apenas o quarto aluno:<br>";
for ($i=0; $i<(count ($alunos)); $i++){
if($i==3){
    echo $i;
    echo "$alunos[$i]<br>";
} 
}
?>