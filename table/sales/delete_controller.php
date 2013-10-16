<?php

include_once "./sales_model.php";

function initialize()
{
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          if (!empty($_POST['line']))
          {
               delete($_POST['line']);
          }
     }
}