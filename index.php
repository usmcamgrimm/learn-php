<?php

// indexed arrays
$peopleOne = ['adrian', 'jessica', 'colton'];
// echo $peopleOne[1]; # jessica

$peopleTwo = array('anakin', 'obi-wan');
// echo $peopleTwo[1]; # obi-wan

$ages = [1, 12, 19, 24];
# print_r => 'print readable'
// print_r($ages); # Array ( [0] => 1 [1] => 12 [2] => 19 [3] => 24 )

$ages[1] = 13; # changing the value of an entry in an array
// print_r($ages); # Array ( [0] => 1 [1] => 13 [2] => 19 [3] => 24 )

# adding a new value to the array
$ages[] = 45;
// print_r($ages); # Array ( [0] => 1 [1] => 13 [2] => 19 [3] => 24 [4] => 45 )
array_push($ages, 46);
// print_r($ages); # Array ( [0] => 1 [1] => 13 [2] => 19 [3] => 24 [4] => 45 [5] => 46 )

# Determine the length of an array
// echo count($ages); #returns 6

# Merge arrays together
$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree); # Array ( [0] => adrian [1] => jessica [2] => colton [3] => anakin [4] => obi-wan )

// associative arrays
# Key-Value Pairs => Use Keyts instead of indexes
$lightsaberOne = ['anakin' => 'blue', 'luke' => 'green', 'mace' => 'purple'];
// echo $jediOne['luke']; # returns green
// print_r($jediOne); # Array ( [anakin] => blue [luke] => green [mace] => purple )

$lightsaberTwo = array('vader' => 'red', 'rey' => 'yellow', 'yoda' => 'blue');
// print_r($lightsaberTwo); # Array ( [vader] => red [rey] => yellow [yoda] => blue )

$lightsaberTwo['obi-wan'] = 'blue'; # Adding obi-wan => blue
// print_r($lightsaberTwo); # Array ( [vader] => red [rey] => yellow [obi-wan] => blue )

# Override a value
$lightsaberTwo['yoda'] = 'green';
// print_r($lightsaberTwo); # Array ( [vader] => red [rey] => yellow [yoda] => green [obi-wan] => blue )

# Determine the length of an array
// echo count($lightsaberOne); # returns 3

# Merge arrays together
$lightsaberThree = array_merge($lightsaberOne, $lightsaberTwo);
print_r($lightsaberThree); # Array ( [anakin] => blue [luke] => green [mace] => purple [vader] => red [rey] => yellow [yoda] => green [obi-wan] => blue )



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>

<body>
</body>

</html>