<?php
include_once 'types_model.php';

function initialize()
    {
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        if (isset($_POST['new_type']) and isset($_POST['new_split']))
            {
            create($_POST['new_type'], $_POST['new_split']);
            }
        elseif (isset($_POST['spl_type']) and isset($_POST['spl_new_split']))
            {
            split_change($_POST['spl_type'], $_POST['spl_new_split']);
            }
        elseif (isset($_POST['type_old']) and isset($_POST['type_new']))
            {
            type_change($_POST['type_old'], $_POST['type_new']);
            }
        elseif (isset($_POST['del_type']))
            {
            destroy($_POST['del_type']);
            }
        }
    }

function show_table()
    {
    $table = table();
    return $table;
    }
?>
