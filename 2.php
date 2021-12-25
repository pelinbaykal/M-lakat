<?php

/*
* Aşağıdaki algoritmayı kullanarak $response ta verilen çıktıyı alacak bir döngü yaratın.
* $response = 1,2,3,4,5,6,7,8,9,10,12,14,16,18,20,23,26,29,33,37

* 1-10 = 1
* 10-20 = 2
* 20-30 = 3
* 30-40 = 4
*/

$response=1;
while($response&lt;=10){
   echo "$response,";
   $response++;
}


$response=12;
while($response&lt;=20){
   echo ",$response";
   $response+=2;
}


$response=22;
while($response&lt;=30){
   echo ",$response";
   $response+=3;
}


$response=33;
while($response&lt;=40){
   echo ",$response";
   $response+=4;
}
