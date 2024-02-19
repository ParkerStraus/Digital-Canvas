<?php
$u = $_GET['username'];
$p = $_GET['password'];

include 'connect.php';
$con = getConnection();
$showtablequery = "SELECT * FROM users WHERE username = '" . $u . "' AND password = '" . $p . "';";
$showtablequery_result = mysqli_query($con, $showtablequery);
$result = "";
while ($showtablerow = mysqli_fetch_row($showtablequery_result)) {
    $result = $showtablerow[1] . " " . $showtablerow[2];
}
echo json_encode($result);
?>
