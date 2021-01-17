<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Quad_Value</title>
</head>
<body>
    
<?php 
    
if(isset($_POST['a'])){ $a= $_POST['a']; }
if(isset($_POST['b'])){ $b= $_POST['b']; }
if(isset($_POST['c'])){ $c= $_POST['c']; }

$d = $b^2 - 4*$a*$c;
//echo $d;

echo "The discriminant is: ";
echo $d;

echo "<br>";
echo "<br>";

if($d > 0)
{
echo "The roots are real solutions!";
}
elseif($d == 0) 
{
echo "The roots are equal!";
}
else
{
echo "The roots are complex!";
} 

echo "<br>";
echo "<br>";

echo "----The Roots of the equartion are:----";

echo "<br>";
echo "<br>";

echo "First roots are: ";
echo ((-$b + ($b^2 - 4*$a*$c)) / (2*$a));

echo "<br>";
echo "<br>";

echo "Second roots are: ";
echo ((-$b - ($b^2 - 4*$a*$c)) / (2*$a));



//if($d < 0)
//{
//echo "The equation has no real solutions!";
//}
//elseif($d == 0) 
//{
//echo "x = ";
//echo (-$b / 2*$a);
//} 
//else
//{
//echo "x1 = ";
//echo ((-$b + sqrt($d))/(2*$a));
//echo "<br>";
//echo "x2 = ";
//echo ((-$b - sqrt($d))/(2*$a));
//}


?>

</body>
</html>
