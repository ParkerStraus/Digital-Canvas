
    <?php
        $pagenum = ($_GET['page'])*9;
        include 'connect.php';
        $con = getConnection();
        
        $showtablequery = "CALL `BrowseArt`(".$pagenum.", 9, '');";
        $showtablequery_result = mysqli_query($con, $showtablequery);
        while($showtablerow = mysqli_fetch_array($showtablequery_result)){
                echo"
                <div class=\"artwork\" onclick=show('overlay'," . $showtablerow[ "artID" ] . ")>
                <img src=\"imagesuploadedf/".$showtablerow[ "filename" ]."\">
                        <h2>".$showtablerow[ "title" ]."</h2>
                        <p>".$showtablerow[ "author" ]."</p>
                      </div>
                ";
        }
    ?>