<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

echo"<br> <Ex:01></Ex:01><br>";
$var = array(1,2,3,4,5);
echo "$var[0]<br>";
echo "$var[1]<br>";
echo "$var[2]<br>";    
echo "$var[3]<br>";
echo "$var[4]<br>";

echo"<br> Ex:02 <br>";
$var1 =array("fabio"=>30,"eber"=>40 ,"wq"=>60 );
echo "$var1[fabio]<br>";    
echo  "$var1[eber]<br>";             
echo  "$var1[wq]<br>";

echo"<br> Ex:03 <br>";
$var2 =array ("0"=>5,"6"=>8,"9"=>15);
$var2 [1]=20; 
echo  "$var2[0]<br>";
echo  "$var2[6]<br>";
echo  "$var2[9]<br>";
echo  "$var2[1]<br>";
$var2 [0]=4;
echo  "$var2[0]<br>";
?>

</body>
</html><link rel="stylesheet" href="index.css">
