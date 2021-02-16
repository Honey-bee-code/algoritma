<?php

$total = 0;
$max = 1000;

for($i=0; $i<$max; $i++){
    if($i%3 == 0 || $i%5 == 0) {
        $total = $total + $i;
    }
}


echo "Hasil PHP : ".$total;
echo "<p>";




?>

<div>Hasil Javascript : <span id="hasil"></span></div>
<script>
var sum = 0;
for(i = 0; i < 1000; i++){
  if(i%3 == 0 || i%5 == 0){
    sum = sum + i;
  }
}
document.getElementById('hasil').innerHTML=sum;
</script>