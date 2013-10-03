<?php
include_once 'types_model.php';

function initialize()
    {
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        if ($_POST['new_type'] and $_POST['new_split'])
            {
            create($_POST['new_type'], $_POST['new_split']);
            }
        }
    }

function show_table()
    {
    $table = table();
    return $table;
    }
?>
