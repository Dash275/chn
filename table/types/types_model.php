<?php
include_once $_SERVER['DOCUMENT_ROOT']."/chn/application/model.php";

function table()
    {
    $query = "SELECT *
              FROM types";
    global $mysqli;
    $result = $mysqli->query("$query");
    return $result;
    }

function create($type, $split)
    {
    $query = "INSERT INTO types (dealer_type, dealer_split)
              VALUES ('$type', '$split')";
    global $mysqli;
    $mysqli->query("$query");
    }

function split_change($type, $split)
    {
    $query = "UPDATE types
              SET dealer_split = '$split'
              WHERE dealer_type = '$type'";
    global $mysqli;
    $mysqli->query("$query");
    }

function type_change($type, $new_type)
    {
    $query = "UPDATE types
              SET dealer_type = '$new_type'
              WHERE dealer_type = '$type'";
    global $mysqli;
    $mysqli->query("$query");
    }

function destroy($type)
    {
    $query = "DELETE FROM types
              WHERE dealer_type = '$type'";
    global $mysqli;
    $mysqli->query("$query");
    }

?>
