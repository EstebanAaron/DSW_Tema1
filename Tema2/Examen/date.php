<!DOCTYPE html>
<html>
<body>

<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d); //Created date is 2014-08-12 11:14:54am
?>
<?php
$date = new DateTime('2024-10-02');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d');
// Muestra '2024-10-12'


$date1 = new DateTime('2024-10-02');
$date2 = new DateTime('2024-12-25');
$diff = date_diff($date1, $date2);
echo $diff->format('%R%a días');
// Muestra '+84 días'


$timestamp = strtotime('next Monday');
echo date('Y-m-d', $timestamp);
// Muestra la fecha del próximo lunes


?>
</body>
</html>
