<?php

$aluno1["nome"] = "yasmim";
$aluno1["idade"] = 18;
$aluno1["endereço"] = "Minha casa";
$aluno1["cidade"] = "juvenilia";
$aluno1["estado"] = "minas gerais";
$aluno1["cpf"] = "39467000";


echo "Aluno 1: <br>";
foreach ($aluno1 as $a) {
    echo  key($aluno1) . ": $a  <br>";
    next($aluno1);
    }
    
$aluno2["nome"] = "cecilia";
$aluno2["idade"] = 18;
$aluno2["endereço"] = "casa";
$aluno2["cidade"] = "guanambi";
$aluno2["estado"] = "Bahia";
$aluno2["cpf"] = "457000";

echo "<br>Aluno 2: <br>";
foreach ($aluno2 as $c) {
    echo  key($aluno2) . ": $c  <br>";
    next($aluno2);
}
    
$aluno3["nome"] = "isis";
$aluno3["idade"] = 18;
$aluno3["endereço"] = "casa";
$aluno3["cidade"] = "pindai";
$aluno3["estado"] = "Bahia";
$aluno3["cpf"] = "709000";

echo "<br> Aluno 3: <br>";
echo "nome: $aluno3[nome]<br>";
echo "idade: $aluno3[idade]<br>";
echo "endereço: $aluno3[endereço]<br>";
echo "cidade: $aluno3[cidade]<br>";
echo "estado: $aluno3[estado]<br>";
echo "cpf: $aluno3[cpf]<br>";

$professor["nome"] = "Fábio";
$professor["idade"] = 30;
$professor["endereço"] = "Um Lugar";
$professor["cidade"] = "Guanambi";
$professor["estado"] = "Bahia";
$professor["cpf"] = "000000000";

echo "<br>Professor: <br>";
foreach ($professor as $d) {
    echo  key($professor) . ": $d  <br>";
    next($professor);

}


?>