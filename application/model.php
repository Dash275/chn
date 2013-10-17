<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/chn/config.php') ?>

<?php
$foo = "foo";
$mysqli = new mysqli("$host", "$user", "$password", "$database");
if ($mysqli->connect_errno) {
    echo "Failed to connect to $host: (" . $mysqli->connect_errno . ") " .
          $mysqli->connect_error; }

function date_fix($date)
{
     $date = explode("/", $date);
     $date = $date[2] . "-" . $date[0] . "-" . $date[1];
     return $date;
}

function month_fix($month)
{
     $month = explode("/", $month);
     $month = $month[1] . "-" . $month[0] . "-%";
     return $month;
}

function year_fix($year)
{
     $year = $year . "-%-%";
     return $year;
}

?>
