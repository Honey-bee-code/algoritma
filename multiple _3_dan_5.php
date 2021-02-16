<?php

$sum = 0;
for($i=0; $i<1000; $i++){
    if($i%3 == 0 || $i%5 == 0) {
        $sum = $sum + $i;
    }
}
echo $sum;



?>

<div id="hasil"></div>
<script>
var sum = 0;
for(i = 0; i < 1000; i++){
  if(i%3 == 0 || i%5 == 0){
    sum = sum + i;
  }
}
document.getElementById('hasil').innerHTML=sum;
</script>