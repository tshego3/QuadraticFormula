<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Quad</title>
</head>
<body>
<?php
//        echo "Hello World";
//         put your code here
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
?>
<form action=<?php echo $_SERVER["REQUEST_METHOD"] ?> method="POST">

Variables a, b and c:
<br>
<br>

Value of "a": 
<input type="text" name="a">
<br>
Value of "b": 
<input type="text" name="b">
<br>
Value of "c": 
<input type="text" name="c">
<br>
<input type="submit" value="Post these Values">
</form>

<?php

}
elseif($_SERVER["REQUEST_METHOD"]== "POST")
{
 $a=$_POST["A"];
 $b=$_POST["B"];
 $c=$_POST["C"];      
 $x1= ($b+(b**2-4*$a+$b)**.5)/(2*$a);
 $x2= ($b-(b**2-4*$a+$b)**.5)/(2*$a);
 echo "The Value of x is $x1 or $x2";
}
?>
</body>
</html>
