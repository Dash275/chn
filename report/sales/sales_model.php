<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/chn/application/model.php');

function sales_by_dealer($dealer, $month)
{
     $month = month_fix($month);
     $query = "SELECT *
               FROM sales
               WHERE sold_date LIKE '$month'
               AND dealer_id = '$dealer'
               ORDER BY sold_date";
     global $mysqli;
     $result = $mysqli->query("$query");
     return $result;
}

function dealer_call($dealer)
{
     $query = "SELECT * FROM dealers
               WHERE dealer_id = '$dealer'";
     global $mysqli;
     $result = $mysqli->query("$query");
     return $result;
}

?>
