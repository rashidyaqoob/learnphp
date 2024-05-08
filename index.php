<?php
function getStatus($message) {
  $messageStatus = $message;
  echo($messageStatus);
}

getStatus("hello wordsld");


// Short circuiting.
function example() {
  return "Hello example";
}

var_dump(true && example());

$a = 1;

while($a < 15) {
  echo $a . "<br>";
  $a++;
}

for($i=0; $i<4; $i++) {
  echo( 'test for loop ,<br>');
}