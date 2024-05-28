<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<body> 

<h1> testes de funçoes PHP </h1> <br>

<h2>Constantes Pré-definidas</h2>
 <pre>
      <?php
      
      function funcConsts() {
        echo "ARQUIVO: ".__FILE__."<br>";
        echo "DIRETÓRIO: ".__DIR__."<br>";
        echo "LINHA: ".__LINE__."<br>";
        echo "FUNÇÃO: ".__FUNCTION__."<br>";
       }
        funcConsts();
  
      ?>
  </pre>    

  
    <h2>PHP Estruturado funcConsts </h2>
    <pre>
        <?php
        class veiculo {
            private $marca;
            function __construct() {
            echo "CLASSE: ".__CLASS__."<br>";
            }
           function setMarca($marca) { $this->marca = $marca;
            echo "MÉTODO: ".__METHOD__."<br>";
           } }
           $obj = new veiculo();
            $obj->setMarca("Wolksvagem");
           
        ?>
  </pre>

  <h2> function soma sem parametros </h2>
  <pre>
    <?php
       
    function soma(){
        $A1 = 10;
        $A2 = 20;
        $soma = $A1 + $A2;
        echo " O valor da soma é: $soma";
        
            }
            soma();
    ?>
  </pre>

  <h2>function soma com parametros</h2>
<pre>
    <?php
      function somacomparametros($b1, $b2){
       $b3=$b1+$b2;
       echo "O valor da soma é:$b3";
      } somacomparametros(2000,500);
        somacomparametros(7,8);
        soma();
    ?>
</pre>
<h2>funçao de soma com multiplicaçao</h2>
<pre>
<?php

function somamultiplica($M1, $M2, $M3){

    $M4 = $M1 + $M2;
    $M5 = $M4*$M3;
    echo "o resultado dessas operações é $M5";
}

somamultiplica(30,45,2);
?>
</pre>

<h2>exemlo</h2>
<pre>
    <?php
    function exemplo($soma1, $soma2, $multiplica, $divide){
        $resultadosoma = $soma1 + $soma2;
        $resultadomultiplicacao = $resultadosoma*$multiplica;
        $resultadofinal = $resultadomultiplicacao/$divide;
        echo " O resultado final é $resultadofinal";
    }

    exemplo(100,20,100,20);
    
    ?>
</pre>
<h2> Explo 2</h2>
<pre>
    <?php 
    function E2($p1) {
        $p2 = $p1*$p1;
        return $p2;
    } echo E2(2)->E2(soma(5,5));
      soma(2,3);
      echo soma (2,E2(2));
    
    ?>
</pre>
</body>
</html>