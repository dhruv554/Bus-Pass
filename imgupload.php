<html>
    <head>
        <title>Upload Image</title>
    </head>
    
    <body>
        
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image"/>
            <input type="text" name="mail"/>
            <input type="submit" name="upload" value="Upload">
        </form>
        
    </body>
</html>

<?php
    
    $conn = mysqli_connect("localhost","root","","imageupload");
    if(isset($_POST['upload']))
    {
        $mail = $_POST["mail"];
        $filename = $_FILES['image']['name'];
        $filetype = $_FILES['image']['type'];
        $filetmp = $_FILES['image']['tmp_name'];
        
        $image = move_uploaded_file($filetmp,"uploadedimages/$filename");
        $qry = "INSERT INTO `images`( `email`, `filename`, `image`) VALUES ('$mail','$filename','$image')";
        $result = mysqli_query($conn,$qry);
    }
?>