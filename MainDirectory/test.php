<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TestForFunc</title>
</head>
<body>
<h3>Hello owner! Nice to see you. Keep working! :D</h3>
<?php
/*for($i=0;$i<100;$i++){
    $arrSum[]=random_int(-100,100);
    var_dump($arrSum)."</br>";
  }*/
function RandomNumbers()
{
    $min = 1000;
    $max = 1000;
    for ($i = 0; $i < 50; $i++) {
        $ArrRan[] = random_int(-$min, $max);
    }
    if ($member < 0) {
        $ArrNeg[] = $member;
    } elseif ($member > 0) {
        $ArrPos[] = $member;
    } else {
        $ArrZer[] = $member;
    }
    foreach ($ArrRan as $member) {
    }
}
RandomNumbers();
/* echo "Array of negative variable: </br>";
echo var_dump($ArrNeg)."</br>";
echo "Array of positive variable: </br>";
echo var_dump($ArrPos)."</br>";
echo "Number of zeros in array: </br>";
echo var_dump($ArrZer)."</br>";
echo "Summary  array: </br>";
echo var_dump($ArrRan)."</br>"; */





?>
</body>
</html>
