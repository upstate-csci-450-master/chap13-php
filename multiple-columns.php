<html>
<head>
</head>
<body>
<?php

$max_columns = 4;
$data = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

?>
<table>
<?php
    $record_id = 0;
    while(true) // create rows until out of records to display
    {
       for ($column = 1; $column<=$max_columns; $column++)
       {
           //stop loop when there is no more data available
           if (!isset($data[$record_id])){
               return;
           }

           // if start of column, open <tr>
           if ($column == 1){
               echo "<tr>";
           }
           ?>

           <td align="center" valign="middle" bgcolor="lightblue" width="50px" height="50px">
           <?php echo $record_id ?>
           </td>

           <?php
           // if column equals max columns, close table row
           if ($column == $max_columns){
               echo "</tr>";
           }

           $record_id++;  //next record
       }
    }
?>
</table>
</body>
</html>
