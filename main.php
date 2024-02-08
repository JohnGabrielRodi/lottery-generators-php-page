<?php
  /*
    integrate stellar sdk to gamify

  */


?>

<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">


<title>
Pick 6 Lottery Number Generators
</title>

</head>

<body>
<section class="header">
<h1>Pick 6 Lottery Number Generators</h1>



</section>
<section class="pick">
    <?php
   if(isset($_POST['pick_6'])) {
            echo pick_6();
        }
    if(isset($_POST['extra_sorted_pick_6'])) {
            echo extra_sorted_pick_6();
        }

//add crypto element to it

function extra_sorted_pick_6(){
    $numbers = range(1, 49);
    shuffle($numbers);
    $numbers = array_slice($numbers, 0, 6);
    sort($numbers);
    $numbers = array_slice($numbers, 0, 6);
    echo "<br>";
    echo "<center><p class='extra'>Your numbers are: " . implode(', ', $numbers) . "</center>";
}


function pick_6(){

    $numbers = range(1, 49);
    shuffle($numbers);
    $numbers = array_slice($numbers, 0, 6);
    sort($numbers);
    $numbers = array_slice($numbers, 0, 6);
    echo "<br>";
    echo "<center><p class='pick6'>Your numbers are: " . implode(', ', $numbers) . "</center>";
    echo "<br><br></p>";
}

?>
</section>
</div>
</head>
<section class="forms">
<br>
<center>
   <form method="post">
        <input type="submit" name="pick_6" value="Pick_6"
                  />
</form>

<br>

<form method="post">
        <input type="submit" name="extra_sorted_pick_6" value="Extra Sorted Pick_6"
                  />

                </form>

</center>
</section>

<?php




?>

</body>
</html>

<?php

/* example:
Array
(
    [0] => 2
    [1] => 4
    [2] => 10
    [3] => 11
    [4] => 13
    [5] => 14
)
*/

//4     29 