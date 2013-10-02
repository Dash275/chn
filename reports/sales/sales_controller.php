<?php // include_once "../../application/model.php" ?>
<?php include_once 'sales_model.php' ?>

<?php
/*
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
*/
function initialize()
    {
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
        return false;
        }
    else if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        if ($_POST['dealer'] and $_POST['month'])
            {
//            $dealer = $_POST['dealer'];
//            $month = $_POST['month'];
//            $call = sales_report($dealer, $month);
//            $info = dealer_info($dealer);
//            $info = $info->fetch_array(MYSQLI_ASSOC);
            $value['dealer'] = $_POST['dealer'];
            $value['month'] = $_POST['month'];
            $value['results'] = sales_by_dealer($value['dealer'],
                $value['month']);
            $value['info'] = dealer_call($value['dealer']);
            $value['info'] = $value['info']->fetch_array(MYSQLI_ASSOC);
            return $value;
            }
        }
    }
?>
