<h3>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000.
</h3>
<?php

echo "Rumus induksi: 1 + 2 + 3 + … + n = n(n+1)/2 = n(n + 1)/2";
echo "<br>";
$n = $_POST['i'];
$hasil = $n*($n+1)/2;
echo "Jika n = ".$n;
echo "<br>";
echo "Maka hasil induksi dari ".$n." adalah : ".$hasil;
?>
<form action="" method="post">
input: 
<input type="number" name="i" value="<?=$n?>">
hasil induksi: 
<input type="text" value="<?=$hasil?>">
<button type="submit" class="btn">Submit</button>
</form>
<?php
echo "Ini sama dengan seperti, ";
for($i=0; $i<$n; $i = $i+1){
  echo $i."+";
}
echo $n."=".$hasil;
echo "<p>";



for($i=0; $i<$n; $i = $i +3){
  echo $i."|";
}
echo "<br>";
for($i=0; $i<$n; $i = $i +5){
  echo $i."|";
}
echo "<br>";
echo "<br>";

//cara pertama

$total1 = 0;
$max = 1000;

for($i=0; $i<$max; $i++){
    if($i%3 == 0 || $i%5 == 0) {
        $total1 = $total1 + $i;
        // echo count($i%3 == 0);
    }
}


echo "Hasil PHP cara 1 : ".$total1;
echo "<p>";



echo "<p>";

//cara kedua

$max = 1000;
$b3 = floor($max / 3);
$b5 = floor($max / 5);
$b15 = floor($max / 15);

$c3 = 3*$b3*($b3+1)/2;
$c5 = 5*$b5*($b5+1)/2;
$c15 = 15*$b15*($b15+1)/2;

$total2 = $c3+$c5-$c15;

echo $b3;
echo "<p>";
echo $b5;
echo "<p>";
echo $b15;
echo "<p>";
echo "Hasil PHP cara 2 : ".$total2;
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

