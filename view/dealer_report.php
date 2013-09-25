<?php include_once "../controller/sales_controller.php" ?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
        Dealer Number:
        <input type="text" name="dealer" /><br />
        Month:
        <input type="text" name="month" /><br />
        <input type="submit" name="Generate Report" />
    </form>
<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['dealer'] and $_POST['month']) {
        $dealer = $_POST['dealer'];
        $month = $_POST['month'];
        $call = dealer_report($dealer, $month);
        echo "<table border='1'>";
        echo "<tr>";

        echo "<th>Date</th>";
        echo "<th>Line Item</th>";
        echo "<th>Ticket Number</th>";
        echo "<th>Item</th>";
        echo "<th>Notes</th>";
        echo "<th>Asking Price</th>";
        echo "<th>Sold For</th>";
        echo "<th>To Dealer</th>";

        echo "</tr>";

        $to_dealer = 0;

        while ($row = $call->fetch_array(MYSQLI_ASSOC)) {
            echo "<tr>";

            echo "<td>" . $row['sold_date']     . "</td>";
            echo "<td>" . $row['line_item_id']  . "</td>";
            echo "<td>" . $row['ticket_number'] . "</td>";
            echo "<td>" . $row['item_desc']     . "</td>";
            echo "<td>" . $row['sale_note']     . "</td>";
            echo "<td>" . $row['item_ask']      . "</td>";
            echo "<td>" . $row['item_price']    . "</td>";
            echo "<td>" . $row['dealer_split']  . "</td>";

            $to_dealer += $row['dealer_split'];

            echo "</tr>"; }

        echo "</table>";

        echo "To dealer: \$$to_dealer"; }
    else {
        echo "You must supply a number and month."; } }
else {
    die("This script uses only GET or POST."); }
?>
