<?php
include_once $_SERVER['DOCUMENT_ROOT']."/chn/application/model.php";

function widget_table()
{
     $query = "SELECT * FROM dealers ORDER BY dealer_id DESC LIMIT 5";
     global $mysqli;
     $result = $mysqli->query("$query");
     return $result;
}

function full_table()
{
     $query = "SELECT * FROM dealers ORDER BY dealer_id ASC";
     global $mysqli;
     $result = $mysqli->query("$query");
     return $result;
}

function new_dealer($initials, $id, $type, $fname, $lname, $street, $city,
                    $state, $phone, $email, $split)
{
     $query = "INSERT INTO dealers (dealer_initials, dealer_id, dealer_class,
                                    dealer_fname, dealer_lname, dealer_street,
                                    dealer_city, dealer_state, dealer_phone,
                                    dealer_email, dealer_split)
               VALUES('$initials', '$id', '$type', '$fname', '$lname',
                      '$street', '$city', '$state', '$phone', '$email',
                      '$split')";
     global $mysqli;
     $mysqli->query("$query");
}

function split_find ($type)
{
     $query = "SELECT dealer_split
               FROM types
               WHERE dealer_type = '$type'";
     global $mysqli;
     $result = $mysqli->query("$query");
     $result = $result->fetch_array(MYSQLI_ASSOC);
     $result = $result['dealer_split'];
     return $result;
}

?>