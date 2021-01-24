<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<h3>Hello owner! Nice to see you. Keep working! :D</h3>
<?php
echo date('jS l \of F Y H:i:s')."|||";
$year=2020;
$leap=date("L" , mktime(0, 0, 0, 0, 0, $year));
if($leap==TRUE){
    echo "The year $year is the leap year";
    }else{
    echo "The year $year is NOT the leap year";
    }
?>
</body>
</html>