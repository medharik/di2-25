<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$t=[12,-14,-5,3,-8,-10];
$l=count($t);
for($i=0;$i <$l ;$i++)
{
if($t[$i] < 0) unset($t[$i]);
}

print_r($t);







?>




</body>
</html>