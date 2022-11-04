<?php
$column = $_POST["column-number"];
$row = $_POST["row-number"];
$l = 1;
$m = 0;
$table = "<table>";
for($i=0;$i<$row;$i++)
{
    $table .= '<table border="1">';
   $table .= "<tr>";
      for($j=1;$j<=$column;$j++)
      {
         $m = $l * $j;
         $table .=  "<td>   $m </td>";
        
      }
      $l++;
   $table .= "</tr>";
      
}
$table .= "</table>";


echo $table;
?>