<?php
  $a; $b;

  function calculate ($a, $b) {
    echo $a + $b . '</br>';
    echo $a - $b . '</br>';
    echo $a * $b . '</br>';
    echo $a / $b . '</br>';
  }

  echo '<h1>Simple Calculator</h1>';
  calculate(20, 5);
?>