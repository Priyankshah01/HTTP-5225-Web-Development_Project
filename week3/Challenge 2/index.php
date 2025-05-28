<?php

$randomNum = rand(1,100);

if($randomNum % 3 === 0 && $randomNum % 5 === 0){
    echo "The magic Number " . $randomNum . " is FizzBuzz";
}elseif($randomNum % 5 === 0){
    echo "The magic Number " . $randomNum . " is Buzz";
}elseif($randomNum % 3 === 0){
    echo "The magic Number " . $randomNum . " is Fizz";
}else{

    echo "The magic number " . $randomNum . " is the number itself.";
}

?>