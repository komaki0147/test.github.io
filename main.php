
<?php
$num_1 = $_POST['num_1'];
$num_2 = $_POST['num_2'];
$cal = $_POST['cal'];
$num_3 = 0;
switch ($cal)
{
    case 'plus':
        $num_3 = $num_1+$num_2;
        break;
    case 'sub':
        $num_3 = $num_1-$num_2;
        break;
    case 'mul':
        $num_3 = $num_1*$num_2;
        break;
    case 'div':
        $num_3 = $num_1/$num_2;
        break;
}


echo $num_3;


?>


