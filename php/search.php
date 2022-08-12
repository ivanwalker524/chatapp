<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output = "";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE fname LIKE '%$searchTerm%'");
if (mysqli_num_rows($sql) > 0) {
    // echo '000';
    include "data.php"; // this will show
} else {
    $output .= "No user found related to your search term";
    // output was echoed here
}
echo $output; // this was moved from the else part
