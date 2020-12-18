<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";
$conn = mysqli_connect($host, $user, $pass, $db);
    if(isset($_POST['submit'])){
        $filename = $_FILES['file']['name'];
        $fileTempname = $_FILES['file']['tmp_name'];
        $path = "files/".$filename;
        $query = "INSERT INTO uploads(name) VALUES ('$filename')";
        $run = mysqli_query($conn, $query);
        if($run){
            move_uploaded_file($fileTempname,$path);
            echo"file uploaded successfully!";
        }
        else{
            echo"error".mysqli_error($conn);
        }

    }
?><html>
<title>upload</title>
<link rel="stylesheet" href="style.css">

<body>
    <a href="menu.php">
        <img src="images/back-arrow.png"></a>
    <p>choose your file to uplaod</p><br>
    <form method="post" enctype="multipart/form-data" action="#">
        <br>
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button><br>

    </form>
    
</body>

</html>