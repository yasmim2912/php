<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Array-laços</h1>

<h2>Exemplo 01</h2>

<pre>

    <?php

    $A1 = array("Antonio","Luis","Jose","João");
    foreach($A1 as $dados);

     echo "$dados:";

    ?>

</pre>

<h2>Array com for</h2>

 <pre>

    <?php

    $A2= array(10,9,8,7);

   echo $A2[0];
    for ($i=0; $i < 4; $i++) { 
      echo "$i [$i=1]";
    }

   ?>

   </pre>    
  
 <pre>
<?php

 $var = array("maria"=>25,
   "joao"=>44,
   "pedro"=>12,
   "neusa"=>73);

    foreach ( $var as $chave => $valor) {
      echo"  $chave: $valor valor anos <br>";
     }
print_r($var)
 ?> 
 </pre> 

 <h2>array multifuncional: explicita <br></h2>

<pre>
    <?php
    $alunos= array("maria"=>
                                array("endereco" =>"rua chile 1233",
                                 "bairo"=>"rebouças"),
                  " joao"=>  
                               array("endereco" =>"rua francisco 12093",
                                "bairo"=>"so nascente"),
                    
                "pedro" =>    array("endereco" =>"rua pierry 2343",
                               "bairo"=>"andorinha"),

                "neusa" =>   array("endereco" =>"rua coceiçao 1833",
                               "bairo"=>"horizonte")
    ) ;
    print_r($alunos ["maria"]["endereco"]);
     print_r($alunos["maria"]["bairo"]);
 ?>
     <pre>
    <h2>impressao de uma array com foreach</h2>
  <?php
     
     foreach($alunos as $chave => $aux)
     echo $chave. ": <br>";
     foreach($aux as $chave => $valor){
         echo " - $valor <br>";}

  ?>
     </pre>
   
    </pre>
</body>
</html>