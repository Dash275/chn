<?php include_once "sales_controller.php" ?>

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
        $call = sales_report($dealer, $month);
        $info = dealer_info($dealer);
        $info = $info->fetch_array(MYSQLI_ASSOC);

        echo "<h1>" . $info['dealer_initials'] . $info['dealer_id'] .
            $info['dealer_class'] . "</h1>";
        echo "<h3>" . $info['dealer_fname'] . " " . $info['dealer_lname'];
        echo "<br>" . $info['dealer_street'];
        echo "<br>" . $info['dealer_city'] . " " . $info['dealer_state'];
        echo "<br><br>" . $info['dealer_phone'];
        echo "<br>" . $info['dealer_email'] . "<br></h3>";

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
            echo "<td>" . number_format($row['dealer_earn'], 2)  . "</td>";

            $to_dealer += number_format($row['dealer_earn'], 2);

            echo "</tr>"; }

        echo "</table>";

        echo "To dealer: \$" . number_format($to_dealer, 2); }
    else {
        echo "You must supply a number and month."; } }
else {
    die("This script uses only GET or POST."); }
?>
