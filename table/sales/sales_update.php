<?php include_once "./update_controller.php"; ?>
<?php initialize(); ?>
<?php include_once "./sales_widget.php"; ?>

<b>Update Line Item</b>
<form action="" method="POST">
  Line Number:<input type="text" name="line" /><br />
  Date (e.g. 12/21/1999):<input type="text" name="date" /><br />
  Dealer Number (e.g. 107, 2107):<input type="text" name="id" /><br />
  Ticket Number:<input type="text" name="ticket" /><br />
  Stock Number:<input type="text" name="stock" /><br />
  Description:<input type="text" name="desc" /><br />
  Notes:<input type="text" name="note" /><br />
  Regular Price:<input type="text" name="ask" /><br />
  Sold For:<input type="text" name="sold_for" /><br />
  Dealer Earn (e.g. 40.00, 35.50):<input type="text" name="earn" /><br />
  Paid By:<input type="text" name="paid_by" /><br />
  <input type="submit" name="Update Line Item">
</form><br>
