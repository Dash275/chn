<?php include_once '../config.php' ?>

<?php

$mysqli = new mysqli("$host", "$user", "$password", "$database");
if ($mysqli->connect_errno) {
    echo "Failed to connect to $host: (" . $mysqli->connect_errno . ") " .
          $mysqli->connect_error; }

function select($id, $table, $where = NULL, $wherearg = NULL,
    $whereto = NULL, $order = NULL, $wheretwo = NULL,
    $whereargtwo = NULL, $wheretotwo = NULL) {
    global $mysqli;
    $query = "SELECT $id FROM $table";
    if ($where) {
        $query = "$query WHERE $where"; }
    if ($wherearg and $whereto) {
        $query = "$query $wherearg $whereto"; }
    if ($wheretwo) {
        $query = "$query AND $wheretwo"; }
    if ($whereargtwo and $wheretotwo) {
        $query = "$query $whereargtwo $wheretotwo"; }
    if ($order) {
        $query = "$query ORDER BY $order"; }
    $call = $mysqli->query("$query");
    /* echo $query; */
    return $call; }

?>
