<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
            include './php/connect.php';
            $conn = getConnection();
        if(isset($_POST['uploadfilesub'])) {
            //get values for file
            $filename = $_FILES['fileField']['name'];
            $filetmpname = $_FILES['fileField']['tmp_name']; 
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
            
            $folder = 'imagesuploadedf/';
            move_uploaded_file($filetmpname, $folder.$filename);
            $date = new DateTime();
            $modfileName = "image" . $date->format('YmdHis').".".$fileExtension;
            rename($folder.$filename, $folder.$modfileName);
            
            //get values for listing
            $authorname = $_POST['author'];
            $price = $_POST['price'];
            $title = $_POST['name'];
            
            //run query
            $sql = "INSERT INTO `image` (`filename`)  VALUES ('".$modfileName."');
                    SET @imageID = LAST_INSERT_ID();";
                    
            $qry = mysqli_multi_query($conn,  $sql);
            if($qry) {
            
                $lastid = $conn->insert_id;
                $conn->close();
            $conn = getConnection();
                $newsql = 
                    "INSERT INTO `artListing` (`author`,`imageID`,`price`,`title`) 
                    VALUES ('".$authorname."',".$lastid.",'".$price."','".$title."');";
                    
                $newqry = mysqli_query($conn,  $newsql);
                if($newqry){
                        $lastid = $conn->insert_id;
                        $url = 'itemview.php?art='.$lastid;
                        header('Location: '. $url);
                }
            }
            mysql_close($conn);
        }
        //filename
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Artsite</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="app.js"></script>
    
    <style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #F5F5F5;
    margin: 0;
    padding: 0;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
}

.main {
    margin: 80px auto 0;
    width: 90vw;
    padding: 20px;
    background-color: #FFF;
    border: 1px solid #EEE;
    box-shadow: 0px 1px 3px rgba(0,0,0,0.3);
}

.form-label {
    display: block;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 8px;
}

.form-input {
    display: block;
    font-size: 16px;
    padding: 8px;
    border: 1px solid #CCC;
    border-radius: 4px;
    margin-bottom: 16px;
    width: 100%;
}

.form-submit {
    background-color: #4CAF50;
    border: none;
    color: #FFF;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    padding: 12px;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

.form-submit:hover {
    background-color: #3E8E41;
}

.form-error {
    color: #D8000C;
    background-color: #FFBABA;
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #D8000C;
    border-radius: 4px;
}

.form-success {
    color: #4F8A10;
    background-color: #DFF2BF;
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #4F8A10;
    border-radius: 4px;
}
    </style>
</head>

<body>
<?php readfile("./header.html") ?>

    <div class="main">
        <h1>Upload Artwork</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fileField">File:</label>
                <input type="file" name="fileField" id="fileField">
            </div>
            
            <div class="form-group">
                <label for="name">Name of Artwork:</label>
                <input name="name" type="text" id="namefield">
            </div>
            
            <div class="form-group">
                <label for="author">Author:</label>
                <input name="author" type="text" id="authorfield">
            </div>
            
            <div class="form-group">
                <label for="price">Price:</label>
                <input name="price" type="number" id="priceField" step="0.01">
            </div>
            
            <button type="submit" name="uploadfilesub" class="btn">Upload</button>
        </form>
    </div>
   
    <?php readfile("./footer.html") ?>
</body>
</html>