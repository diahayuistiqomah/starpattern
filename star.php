<?php
 function printStar($pattern,$n=5)
 {

    //upsideleft
    if($pattern=="upsideleft"){
        for($i=1;$i<=$n;$i++){
            for($j=1;$j<=$i;$j++){
                echo "*";
            }
            echo "\n";
        }
    }
    //upsideright
    if($pattern=="upsideright"){
        for($i=1;$i<=$n;$i++){
            for($j=$n;$j>=$i;$j--){
                echo " ";
            }
            for($k=1;$k<=$i;$k++){
                echo "*";
            }
            echo "\n";
        }
    }
    //downsideleft
    if($pattern=="downsideleft"){
        for($i=1;$i<=$n;$i++){
            for($j=$n;$j>=$i;$j--){
                echo "*";
            }
            echo "\n";
        }
    }
    //downsideright
    if($pattern=="downsideright"){
        for($i=1;$i<=$n;$i++){
            for($j=1;$j<=$i;$j++){
                echo " ";
            }
            for($k=$n;$k>=$i;$k--){
                echo "*";
            }
            echo "\n";
        }
    }
 }
  // Panggil fungsi printStars dengan parameter 5
    printStar("upsideleft",5);
    printStar("upsideright");
    printStar("downsideleft");
    printStar("downsideright",9);

?>
```
