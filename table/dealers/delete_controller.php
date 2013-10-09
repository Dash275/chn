<?php

include_once "./dealers_model.php";

function initialize()
{
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          if (!empty($_POST['id']))
          {
               delete_dealer($_POST['id']);
          }
     }
}

?>