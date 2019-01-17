<?php
$startTime = microtime(true);
$line = 7;
$column = 9;
$number = 1;
$offset_line = $line-1;
$offset_col = $column-1;
$offset_left = 0;
$i = 0;
$j = 0;

    while ($number < $line*$column){
        while ($j < $offset_col){
        $array[$i][$j] = $number++;
        $j++;
        }
        while ($i < $offset_line){
          $array[$i][$j] = $number++;
          $i++;
        }
        while ($j > $offset_left){
          $array[$i][$j] = $number++;
          $j--;
        }
        $offset_left++;
         
        while ($i > $offset_left){
          $array[$i][$j] = $number++;
          $i--;
        }
      
    $offset_col--;
    $offset_line--;
         
    }
        if($number == $line*$column){
        $array[$i][$j] = $number++;
        }

$table ='';
for ($i = 0;$i < $line;$i++){
    $tr=''; 
    for ($j = 0;$j < $column;$j++) {
        $tr .='<td>'.$array[$i][$j].'</td>';
    }
    $table .='<tr>'.$tr.'</tr>';
}
echo '<table>'.$table.'</table>';
$endTime = microtime(true);
echo 'Time:'."</br>";
echo $endTime - $startTime;
