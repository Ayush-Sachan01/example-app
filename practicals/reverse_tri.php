<?php
$n=5; //No of rows to be printed
//Loop to print reverse triangle row-by-row:
for($i=$n;$i>=1;$i--){
    // Printing spaces in each row:
   for($j=$i;$j<=$n-1;$j++){
       print(" ");
   }
   //Printing stars in each row:
   for($k=1;$k<=2*$i-1;$k++){
       print("*");
   }
   //Changing line after printing every row:
   print("\n");
}
