<?php

include_once "./sales_model.php";

function initialize()
{
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          if (!empty($_POST['line']))
          {
               if (!empty($_POST['date']))
               {
                    update_date($_POST['line'], $_POST['date']);
               }
               if (!empty($_POST['id']))
               {
                    update($_POST['line'], "dealer_id", $_POST['id']);
               }
               if (!empty($_POST['ticket']))
               {
                    update($_POST['line'], "ticket_number", $_POST['ticket']);
               }
               if (!empty($_POST['stock']))
               {
                    update($_POST['line'], "stock_number", $_POST['stock']);
               }
               if (!empty($_POST['desc']))
               {
                    update($_POST['line'], "item_desc", $_POST['desc']);
               }
               if (!empty($_POST['note']))
               {
                    update($_POST['line'], "sale_note", $_POST['note']);
               }
               if (!empty($_POST['ask']))
               {
                    update($_POST['line'], "item_ask", $_POST['ask']);
               }
               if (!empty($_POST['sold_for']))
               {
                    update($_POST['line'], "item_price", $_POST['sold_for']);
               }
               if (!empty($_POST['earn']))
               {
                    update($_POST['line'], "dealer_earn", $_POST['earn']);
               }
               if (!empty($_POST['paid_by']))
               {
                    update($_POST['line'], "paid_by", $_POST['paid_by']);
               }
          }
     }
}

?>