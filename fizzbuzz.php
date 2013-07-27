<?php
for ($i = 0; $i <= 100; $i++){
  $byThree = $i/3;
  $byFive = $i/5;
  if (is_int($byThree)){
    if (is_int($byFive)){
      print "FizzBuzz";
    } else {
      print "Fizz";
    }
  } else if (is_int($byFive){
    print "Buzz";
  } else {
    print "$i";
  }
}
?>