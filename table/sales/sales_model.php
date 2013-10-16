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

function split_get($id)
{
     $query = "SELECT dealer_split FROM dealers
               WHERE dealer_id = '$id'";
     global $mysqli;
     $split = $mysqli->query("$query");
     $split = mysqli_fetch_assoc($split);
     $split = $split['dealer_split'];
     return $split;
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

function new_item($date, $id, $ticket, $stock, $desc, $note, $ask, $sold_for,
                  $dealer_split, $dealer_earn, $paid_by)
{
     $date = date_fix($date);
     $query = "INSERT INTO sales (sold_date, dealer_id, ticket_number,
                                 stock_number, item_desc, sale_note, item_ask,
                                 item_price, dealer_split, dealer_earn,
                                 paid_by)
              VALUES ('$date', '$id', '$ticket',
                      '$stock', '$desc', '$note','$ask',
                      '$sold_for', '$dealer_split', '$dealer_earn',
                      '$paid_by')"; 
    global $mysqli;
    $mysqli->query("$query");
}

function update($line, $column, $value)
{
     $query = "UPDATE sales
               SET $column='$value'
               WHERE line_item_id='$line'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_date($line, $date)
{
     $date = date_fix($date);
     $query = "UPDATE sales
               SET sold_date='$date'
               WHERE line_item_id='$line'";
     global $mysqli;
     $mysqli->query("$query");
}

function delete($line)
{
     $query = "DELETE FROM sales
               WHERE line_item_id='$line'";
     global $mysqli;
     $mysqli->query("$query");
}

?>