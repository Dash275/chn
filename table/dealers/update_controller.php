<?php

include_once "./dealers_model.php";

function initialize ()
{
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          if (!empty($_POST['id']))
          {
               if (!empty($_POST['initials']))
               {
                    update_initials($_POST['id'], $_POST['initials']);
               }
               if (!empty($_POST['type']))
               {
                    update_type($_POST['id'], $_POST['type']);
               }
               if (!empty($_POST['fname']))
               {
                    update_fname($_POST['id'], $_POST['fname']);
               }
               if (!empty($_POST['lname']))
               {
                    update_lname($_POST['id'], $_POST['lname']);
               }
               if (!empty($_POST['street']))
               {
                    update_street($_POST['id'], $_POST['street']);
               }
               if (!empty($_POST['city']))
               {
                    update_city($_POST['id'], $_POST['city']);
               }
               if (!empty($_POST['state']))
               {
                    update_state($_POST['id'], $_POST['state']);
               }
               if (!empty($_POST['phone']))
               {
                    update_phone($_POST['id'], $_POST['phone']);
               }
               if (!empty($_POST['email']))
               {
                    update_email($_POST['id'], $_POST['email']);
               }
               if (!empty($_POST['split']))
               {
                    update_split($_POST['id'], $_POST['split']);
               }
               if (!empty($_POST['new_id']))
               {
                    update_id($_POST['id'], $_POST['new_id']);
               }
          }
     }
}

?>