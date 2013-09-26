<?php include_once "../model/model.php" ?>

<?php

function sales_report($dealer, $month) {
    $range = DateTime::createFromFormat('Y-m', $month);
    $range = $range->format('Y-m');
    $range = $range . "-%";
    $table = "sales";
    $where = "sold_date";
    $wherearg = "LIKE";
    $whereto = "'" . $range . "'";
    if ($dealer) {
        $wheretwo = "dealer_id";
        $whereargtwo = "=";
        $wheretotwo = "'" . $dealer . "'";
        $call = select("*", $table, $where, $wherearg, $whereto,
            $order = "sold_date", $wheretwo, $whereargtwo, $wheretotwo); }
    else {
        $call = select("*", $table, $where, $wherearg, $whereto,
            $order = "sold_date"); }
    return $call; }

function dealer_info($dealer) {
    $call = select("*", "dealers", $where = "dealer_id", $wherearg = "=",
        $whereto = $dealer);
    return $call; }

?>
