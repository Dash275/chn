<?php include_once "./sales_model.php"; ?>

<h3>All Line Items</h3>
<table border="1">
  <tr>
    <th>Line Item</th>
    <th>Dealer ID</th>
    <th>Ticket #</th>
    <th>Stock #</th>
    <th>Description</th>
    <th>Notes</th>
    <th>Regular Price</th>
    <th>Sold For</th>
    <th>Date</th>
    <th>Paid By</th>
    <th>Dealer Earned</th>
    <th>Line Modified</th>
  </tr>

<?php
$sales = full_table();
while ($r = mysqli_fetch_assoc($sales))
{
     $r['dealer_full_id'] = dealer_id_get($r['dealer_id']);
?>

  <tr>
    <td><?= $r['line_item_id']; ?></td>
    <td><?= $r['dealer_full_id']; ?></td>
    <td><?= $r['ticket_number']; ?></td>
    <td><?= $r['stock_number']; ?></td>
    <td><?= $r['item_desc']; ?></td>
    <td><?= $r['sale_note']; ?></td>
    <td><?= $r['item_ask']; ?></td>
    <td><?= $r['item_price']; ?></td>
    <td><?= $r['sold_date']; ?></td>
    <td><?= $r['paid_by']; ?></td>
    <td><?= $r['dealer_earn']; ?></td>
    <td><?= $r['timestamp']; ?></td>
  </tr>

<?php
}
?>
</table><br>
