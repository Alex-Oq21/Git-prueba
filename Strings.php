<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar{
            color:#f00;
            font-weight:bold;
        }  
    </style>
</head>
<body>
    <?php
   $variable1="casa";
   $variable2="CASA";
   $resultad=strcasecmp($variable1,$variable2);
   if($resultad){
     echo"No coinciden";
   }else{
       echo"Coinciden";
   }

    ?>
</body>
</html>