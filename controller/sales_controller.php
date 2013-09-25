<?php include_once "../model/model.php" ?>

<?php

function dealer_report($dealer, $month) {
    $range = DateTime::createFromFormat('Y-m', $month);
    $range = $range->format('Y-m');
    $range = $range . "-%";
    $table = "sales";
    $where = "sold_date";
    $wherearg = "LIKE";
    $whereto = "'" . $range . "'";
    $wheretwo = "dealer_id";
    $whereargtwo = "=";
    $wheretotwo = "'" . $dealer . "'";
    $call = select("*", $table, $where, $wherearg, $whereto,
        $order = "sold_date", $wheretwo, $whereargtwo, $wheretotwo);
    return $call; }

?>
