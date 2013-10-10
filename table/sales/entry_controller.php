<?php

include_once "./sales_model.php";

function initialize()
{
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          if (!empty($_POST['date']) and
              !empty($_POST['id']) and
              !empty($_POST['sold_for']))
          {
               if (empty($_POST['earn']))
               { #if an explicit amount wasn't specified
                    $split_required = "yes";
                    if (empty($_POST['split']))
                    { #if a split wasn't specified
                         $_POST['split'] = split_get($_POST['id']);
                         if (empty($_POST['split']))
                         { #if a split can't be found in the database
                              $_POST['split'] = .5;
                         }
                    } #then calculate the amount from the split
                    $_POST['earn'] = number_format(
                         $_POST['split'] * $_POST['sold_for'], 2);
               }
               if (isset($split_required))
               { #signal that a dollar amount was supplied
                    $_POST['split'] = "";
               } #so that split doesn't get entered if supplied too
               new_item($_POST['date'],
                        $_POST['id'],
                        $_POST['ticket'],
                        $_POST['stock'],
                        $_POST['desc'],
                        $_POST['note'],
                        $_POST['ask'],
                        $_POST['sold_for'],
                        $_POST['split'],
                        $_POST['earn'],
                        $_POST['paid_by']);
          }
     }
}

?>