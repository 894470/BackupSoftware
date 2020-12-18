<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Download Your Files</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p><br></p>
        <div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>file name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    
                        include "config.php";
                        $stmt = $db->prepare("SELECT * FROM uploads");
                        $stmt->execute();
                        while($row = $stmt->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><a href="download2.php?id=<?php echo $row['id'] ?>" >Download</a></td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>