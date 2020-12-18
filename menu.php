<?php
session_start();
if(!$_SESSION['test'])
{
    header('location:login.php');

}














?><html>
<title>menu</title>
<link rel="stylesheet" href="style.css">


<body>
<a href="login.php">
        <img src="images/back-arrow.png"></a>
    <aside>
        <table>
            <th>Options</th>
            <tr>
                <td><button><a href="upload.php">Upload</a></button></td>
            </tr>
            <tr>
                <td><button><a href="download.php">Download</a></button></td>
            </tr>
        </table>
    </aside>
</body>
</html>