<!DOCTYPE html>
<html>

<head>




<link rel="stylesheet" href="Planning.css">

</head>
<body>

<h1>Planning The Day</h1>

<!-- Filter of times for the five tasks-->


<!-- Array of Hours -->
<?php
$Day = filter_input(INPUT_GET, "Day", FILTER_VALIDATE_INT);
$Months = filter_input(INPUT_GET, "Months", FILTER_DEFAULT);
$Years = filter_input(INPUT_GET, "Years", FILTER_VALIDATE_INT);

$Time1 = filter_input(INPUT_GET, "Time1", FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^\d\d:\d\d$/")));
$Time2 = filter_input(INPUT_GET, "Time2", FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^\d\d:\d\d$/")));
$Time3 = filter_input(INPUT_GET, "Time3", FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^\d\d:\d\d$/")));
$Time4 = filter_input(INPUT_GET, "Time4", FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^\d\d:\d\d$/")));
$Time5 = filter_input(INPUT_GET, "Time5", FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^\d\d:\d\d$/")));
//Filter of the five tasks atacked to the 5 Times associated with the tasks being filtered here 
$Task1 = filter_input(INPUT_GET, "Task1", FILTER_DEFAULT);
$Task2 = filter_input(INPUT_GET, "Task2", FILTER_DEFAULT);
$Task3 = filter_input(INPUT_GET, "Task3", FILTER_DEFAULT);
$Task4 = filter_input(INPUT_GET, "Task4", FILTER_DEFAULT);
$Task5 = filter_input(INPUT_GET, "Task5", FILTER_DEFAULT);
// the Array of Tasks that are listed if a Task is stated 

$Tasks = array(
    1 => $Task1,
    2 => $Task2,
    3 => $Task3,
    4 => $Task4,
    5 => $Task5
);


// the Array of Times that are listed if a time is stated 
$Times = array(
    1 => strtotime($Time1),
    2 => strtotime($Time2),
    3 => strtotime($Time3),
    4 => strtotime($Time4),
    5 => strtotime($Time5)
);

asort($Times);
echo ("<br>".$Day." ".$Months." ".$Years."<br>");

foreach ($Times as $ID => $Time) {
    if ($Tasks[$ID] === NULL || $Time === false ) {
        continue;
    }
    $TimeString = date("h:i A", $Time);
    echo "$Tasks[$ID] => $TimeString<br>";
}




?>



</body>
</html>

