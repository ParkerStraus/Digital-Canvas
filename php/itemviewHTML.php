<?php
function getArt($art) {
        
        include 'connect.php';
        $con = getConnection();
        $showtablequery = "CALL `GetArt`(".$art.");";
        $showtablequery_result = mysqli_query($con, $showtablequery);
        $text = "";
        while($showtablerow = mysqli_fetch_array($showtablequery_result)){
           $text = "<h1 id=\"title\">".$showtablerow["title"]."</h1>
            <h2 id=\"author\">".$showtablerow["author"]."</h2>
            <img src='imagesuploadedf/".$showtablerow["filename"]."'  id=\"image\" alt=\"image\" width =\"300\">
            <h1 id=\"price\">$".$showtablerow["price"]."</h1>
            <form action='/checkout.php' method='GET'>
                  <input type=\"hidden\" name=\"art\" value='".$art."'>
                  <input type=\"submit\" value=\"Order\">
            </form>";
            
        }
        
        
        $con->close(); 
        return $text;
        
        }
    ?>