<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Paint</title>
    <head>

    </head>
    <body>
    
    <table id="table-data">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Color</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php

           $invCon = mysqli_connect('localhost','root','', 'inventory');
           
            $sql = "SELECT * FROM paint;";
            $result = mysqli_query($invCon,$sql);
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>
                <td>".$row['paint_name']."</td>
                <td>".$row['paint_brand']."</td>
                <td>".$row['paint_color']."</td>
            </tr>";
            }
        ?>
        </tbody>  
    </table>
    </body>
</html>