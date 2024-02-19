<?php
  function submitInvoice($artid, $name, $addr, $card_number, $card_cvv, $card_expiry_month, $card_expiry_year){
    include 'connect.php' ;
    $conn = getConnection();
    $sql = "CALL `CreateInvoice`('".$name."', '".$addr."', '".$card_number."',  '".$card_expiry_month."/".substr($card_expiry_year,2,2)."', '".$card_cvv."', ".$artid.");";
                    
    $qry = mysqli_query($conn,  $sql);
    mysqli_close($conn);
    header("Location: OrderConfirmed.html");

    return;
    }
?>