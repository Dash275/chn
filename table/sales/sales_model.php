<?php

include_once $_SERVER['DOCUMENT_ROOT']."/chn/application/model.php";

function dealer_id_get($num)
{
     $query = "SELECT dealer_initials, dealer_id, dealer_class FROM dealers
               WHERE dealer_id = '$num'";
     global $mysqli;
     $dealer = $mysqli->query("$query");
     $dealer = mysqli_fetch_assoc($dealer);
     $dealer = $dealer['dealer_initials'] . $dealer['dealer_id']
             . $dealer['dealer_class'];
     return $dealer;
}

function widget_table()
{
     $query = "SELECT * FROM sales
               ORDER BY line_item_id DESC
               LIMIT 5";
     global $mysqli;
     return $mysqli->query("$query");
}

function long_table()
{
     $query = "SELECT * FROM sales
               ORDER BY line_item_id DESC
               LIMIT 500";
     global $mysqli;
     return $mysqli-query("$query");
}

function full_table()
{
     $query = "SELECT * FROM sales
               ORDER BY line_item_id DESC";
     global $mysqli;
     return $mysqli->query("$query");
}

?>