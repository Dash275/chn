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

function update_initials($id, $initials)
{
     $query = "UPDATE dealers
               SET dealer_initials = '$initials'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_id($id, $new_id)
{
     $query = "UPDATE dealers
               SET dealer_id = '$new_id'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_type($id, $type)
{
     $query = "UPDATE dealers
               SET dealer_class = '$type'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_fname($id, $fname)
{
     $query = "UPDATE dealers
               SET dealer_fname = '$fname'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_lname($id, $lname)
{
     $query = "UPDATE dealers
               SET dealer_lname = '$lname'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_street($id, $street)
{
     $query = "UPDATE dealers
               SET dealer_street = '$street'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_city($id, $city)
{
     $query = "UPDATE dealers
               SET dealer_city = '$city'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_state($id, $state)
{
     $query = "UPDATE dealers
               SET dealer_state = '$state'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_phone($id, $phone)
{
     $query = "UPDATE dealers
               SET dealer_phone = '$phone'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_email($id, $email)
{
     $query = "UPDATE dealers
               SET dealer_email = '$email'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function update_split($id, $split)
{
     $query = "UPDATE dealers
               SET dealer_split = '$split'
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

function delete_dealer($id)
{
     $query = "DELETE FROM dealers
               WHERE dealer_id = '$id'";
     global $mysqli;
     $mysqli->query("$query");
}

?>