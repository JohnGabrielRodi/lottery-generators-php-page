<html>
<head>

<title>
Pick 6 Lottery Number Generators
</title>

</head>

<body>


<section class="header">
<h1>Pick 6 Lottery Number Generators</h1>
</section>


<style>
.header {
    background-color: blue;
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 200%;
}

.pick6 {
    background-color: red;
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 200%;
}

.extra {
    background-color: green;
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 200%;
}
</style>





    <?php


   if(isset($_POST['pick_6'])) {
            echo pick_6();
        }
    if(isset($_POST['extra_sorted_pick_6'])) {
            echo extra_sorted_pick_6();
        }






function extra_sorted_pick_6(){

    $numbers = range(1, 49);
    shuffle($numbers);
    $numbers = array_slice($numbers, 0, 6);
    sort($numbers);
    //center the numbers
    $numbers = array_slice($numbers, 0, 6);
    echo '<br>';
    echo "<center><p class='extra'>Your numbers are: " . implode(', ', $numbers) . "</center>";
    echo "<br><br></p>";
}


function pick_6(){

    $numbers = range(1, 49);
    shuffle($numbers);
    $numbers = array_slice($numbers, 0, 6);
    sort($numbers);
    $numbers = array_slice($numbers, 0, 6);
    echo "<center><p class='pick6'>Your numbers are: " . implode(', ', $numbers) . "</center>";
    echo "<br><br></p>";
}





?>

</div>
</head>




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

//4     29     7     12     27     48
