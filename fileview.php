<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<h2> PHP File View </h2>

<br/>
<hr/>
<?php
$file = fopen("textfile.txt", "r");
while(! feof($file))
{
   $lineitem = fgets($file);
   //list($field1,$field2,$field3,$field4) = explode( ";", $item ) ; 
        //echo " <tr> "; 
        //echo '<td>'; echo " " . $field2 . " "; echo "</td>";
        //echo "</tr>";
        echo " " . $lineitem . " ";
        echo "<br>";
}
fclose($file);
?>

<hr/>

</body>
</html>


