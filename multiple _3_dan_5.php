<?php

for($i=0; $i<1000; $i = $i +3){
  echo $i."|";
}
echo "<br>";
for($i=0; $i<1000; $i = $i +5){
  echo $i."|";
}
echo "<br>";
echo "<br>";


$total = 0;
$max = 1000;

for($i=0; $i<$max; $i++){
    if($i%3 == 0 || $i%5 == 0) {
        $total = $total + $i;
    }
}


echo "Hasil PHP : ".$total;
echo "<p>";

// Using the formula 1 + 2 + 3 + ... + n = n*(n+1)/2 instead of a code loop.

// Sum of all numbers <1000 divisible by 3:
// 3 + 6 + 9 + ... + 999 = 3 * (1 + 2 + 3 + ... + 333) = 3 * 333*334/2 = 166833

// Sum of all numbers <1000 divisible by 5:
// 5 + 10 + 15 + ... + 995 = 5 * (1 + 2 + 3 + ... + 199) = 5 * 199*200/2 = 99500

// Adding these up, those numbers divisible by 3*5 = 15 are counted double. Therefore we need to subtract these once:

// Sum of all numbers <1000 divisible by 15:
// 15 + 30 + 45 + ... + 990 = 15 * (1 + 2 + 3 + ... + 66) = 15 * 66*67/2 = 33165

// Thus we get the result 166833 + 99500 - 33165 = 233168.


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

