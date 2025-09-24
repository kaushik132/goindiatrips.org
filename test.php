<?php
$array = [3,2,4,3,12,444,9 ,10];



function twosum($array){
    $n = count($array);

  for($i = 0; $i < $n ; $i++){
      $key = $array[$i];
      $j = $i - 1;

      while($j >= 0 && $array[$j] > $key){
            $array[$j + 1] = $array[$j];
              $j--;

          }
          $array[$j + 1] =  $key;

      }

      return $array;
  }


$k =  twosum($array);
foreach($k as $val){
    echo $val . " ";
}

?>
