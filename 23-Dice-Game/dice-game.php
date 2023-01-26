<h1>

    Dice Game

</h1>

<?php

  $number1 = rand(1, 6);
  $number2 = rand(1, 6);

  echo "<img src ='images/$number1.jpg' width='100px' />";
  echo "<img src ='images/$number2.jpg' width='100px' />";

  if($number1 == $number2)
  {
      echo "<div class='win'> You Win </div>";
  }else{
      echo "<div class='lose'> Oops </div>";
  }

  echo "<a href = '$_SERVER[PHP_SELF]'> Play Again </a>";

?>