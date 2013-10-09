<?php
include_once $_SERVER['DOCUMENT_ROOT']."/chn/application/model.php";

function widget_table()
{
     $query = "SELECT * FROM dealers ORDER BY dealer_id DESC LIMIT 5";
     global $mysqli;
     $result = $mysqli->query("$query");
     return $result;
}
?>