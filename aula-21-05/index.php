<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1> exemplo de arrey multidimensional</h1>
<?php

$array=[
    'alunos' => [
        [
           'id'=>1,
          'nome'=> 'cecilia',
           'idade'=>18,
           'curso'=> 'informatica',
           'endereço'=>'guanambi'
        ],
        
        [
            'id'=>2,
          'nome'=> 'roberta',
           'idade'=>20,
           'curso'=> 'engenharia agronoma',
           'endereço'=>'juvenilia'
        ],

        [ 'id'=>1,
        'nome'=> 'franciely',
         'idade'=>19,
         'curso'=> 'agro industria',
         'endereço'=>'cocos'
         ]


    ] 
    
]

?>
<h2> impressoção arrey com print_R</h2>
<pre>

<?php
print_r($array['alunos'][0]['nome']);
print_r($array['alunos'][1]['nome']);
print_r($array['alunos'][2]['nome']);

?>

</pre>

<h2>tabela de informaçõe</h2>

<table style="width:100%" >
  <tr>
    <th>nome</th>
    <th>idade</th>
    <th>curso</th>
    <th>endereço</th>
  </tr>

<tr>
  <td>Cecilia</td>
    <td>18</td>
    <td>informatica</td>
    <td>guanambi</td>
  </tr>

     <td>Roberta</td>
     <td>20</td>
     <td>engenharia agronoma</td>
     <td>juvenilia</td>

</tr>

<tr>
   <td>Franciely</td> 
   <td>19</td>
<td>agro industria</td>
<td>cocos</td>
</tr>







</body>
</html>