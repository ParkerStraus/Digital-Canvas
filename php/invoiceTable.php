<?php

function generateTable(){

include 'connect.php';
$conn = getConnection();


$sql = "SELECT * FROM invoice";
$result = $conn->query($sql);
$xml = new SimpleXMLElement('<invoices/>');
while ($row = $result->fetch_assoc()) {
$invoice = $xml->addChild('invoice');
$invoice->addChild('invoiceID', $row['invoiceID']);
$invoice->addChild('artID', $row['artID']);
$invoice->addChild('name', $row['name']);
$invoice->addChild('address', $row['address']);
$invoice->addChild('creditcard', $row['creditcard']);
$invoice->addChild('ccv', $row['ccv']);
$invoice->addChild('ccExpire', $row['ccExpire']);
}


echo '<main class="main">';
echo '<h1 class="main-title">Invoices</h1>';
echo '<table class="invoices-table">';
echo '<thead>';
echo '<tr>';
echo '<th>Invoice ID</th>';
echo '<th>Art ID</th>';
echo '<th>Name</th>';
echo '<th>Address</th>';
echo '<th>Credit Card</th>';
echo '<th>CCV</th>';
echo '<th>CC Expire</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($xml->invoice as $invoice) {
echo '<tr>';
echo '<td>' . $invoice->invoiceID . '</td>';
echo '<td>' . $invoice->artID . '</td>';
echo '<td>' . $invoice->name . '</td>';
echo '<td>' . $invoice->address . '</td>';
echo '<td>' . $invoice->creditcard . '</td>';
echo '<td>' . $invoice->ccv . '</td>';
echo '<td>' . $invoice->ccExpire . '</td>';
echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</main>';
return;
}
?>