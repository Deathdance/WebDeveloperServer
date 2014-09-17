<!DOCTYPE html>
<html>
<head>
    <title>forms</title>
</head>
<body>
<?php 

$num=$_GET["num"];

echo "<table>";
for ($x=1; $x<=$num; $x++) {

 echo "
	   <tr>
       <td>A</td>
 	   <td>B</td> 
 	   <td>C</td>
 	   </tr>
 	  ";
} 
echo  "</table>";
?>



</body>
</html>