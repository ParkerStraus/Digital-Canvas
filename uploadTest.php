<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
        include 'connect.php';
        $conn = getConnection();
        //if button with the name uploadfilesub has been clicked
        if(isset($_POST['uploadfilesub'])) {
        //declaring variables
                $filename = $_FILES['uploadfile']['name'];
                $filetmpname = $_FILES['uploadfile']['tmp_name']; 
                $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
                echo $fileExtension;
                //folder where images will be uploaded
                $folder = 'imagesuploadedf/';
                //function for saving the uploaded images in a specific folder
                move_uploaded_file($filetmpname, $folder.$filename);
                $date = new DateTime();
                $modfileName = "image" . $date->format('YmdHis').".".$fileExtension;
                rename($folder.$filename, $folder.$modfileName);
                //inserting image details (ie image name) in the database
                $sql = "INSERT INTO `image` (`filename`)  VALUES ('$modfileName')";
                $qry = mysqli_query($conn,  $sql);
                if( $qry) {
                echo "</br>image uploaded<br>
                <img src=\"".$folder.$modfileName."\" alt=\"Image\" height = '300'><br>"; 
                }
        }
 
?>
 
 
<!DOCTYPE html>
<html>
<body>
        <!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
        <form action="" method="post" enctype="multipart/form-data" >
        <!--input tag for file types should have a "type" attribute with value "file"-->
                <input type="file" name="uploadfile" />
                <input type="submit" name="uploadfilesub" value="upload" />
        </form>
</body>
</html>