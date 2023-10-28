<?php
  $variable=10;
  function factorial($n){
      if($n==0 || $n==1){
          return 1;
      }
      else{
          return $n * factorial($n-1);
      }
  }
  $result=factorial($variable);
  echo "The factorial of $variable is: $result \n\n";


