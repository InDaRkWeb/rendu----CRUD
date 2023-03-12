<?php

function plusGrand($array){
    if(empty($array)){ return null; }
   
    $max = 0;
    foreach($array as $item){
        if($item > $max) {
            $max = $item;
        }
    }
 
    return $max;
    //return max($array);
 } 
?> 

<!DOCTYPE html>
<body>
    <h1>Exo 7</h1>
    <p><?= plusGrand([1,2,3]); ?></p>
    <p><?= plusGrand([1,2,3,4,1,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,10]); ?></p>
</body>
</html>