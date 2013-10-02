<?php include_once "sales_controller.php" ?>

<?php

$value = initialize();
    if (!$value) 
        { ?>
            <form action="" method='POST'>
            Dealer Number:
            <input type="text" name="dealer" /><br />
            Month:
            <input type="text" name="month" /><br />
            <input type="submit" name="Generate Report" />
            </form>
        <?php }
    else
        {
        $info = $value['info'];
        ?>
        <h1><?= $info['dealer_initials'] . $info['dealer_id'] .
            $info['dealer_class']; ?></h1>
        <h3><?= $info['dealer_fname'] . " " . $info['dealer_lname']; ?>
        <br><?= $info['dealer_street']; ?>
        <br><?= $info['dealer_city'] . " " . $info['dealer_state']; ?>
        <br><br><?= $info['dealer_phone']; ?>
        <br><?= $info['dealer_email']; ?><br></h3>

        <table border='1'>
        <tr>

        <th>Date</th>
        <th>Line Item</th>
        <th>Ticket Number</th>
        <th>Item</th>
        <th>Notes</th>
        <th>Asking Price</th>
        <th>Sold For</th>
        <th>To Dealer</th>

        </tr>

        <?php
        $to_dealer = 0;

        while ($row = $value['results']->fetch_array(MYSQLI_ASSOC))
            { ?>
            <tr>

            <td> <?= $row['sold_date']; ?>                     </td>
            <td> <?= $row['line_item_id']; ?>                  </td>
            <td> <?= $row['ticket_number']; ?>                 </td>
            <td> <?= $row['item_desc']; ?>                     </td>
            <td> <?= $row['sale_note']; ?>                     </td>
            <td> <?= $row['item_ask']; ?>                      </td>
            <td> <?= $row['item_price']; ?>                    </td>
            <td> <?= number_format($row['dealer_earn'], 2); ?> </td>

            <?php $to_dealer += number_format($row['dealer_earn'], 2); ?>

            </tr> <?php } ?>

        </table>

        To dealer: $<?= number_format($to_dealer, 2); } ?>
