<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
</head>
<body>
    <?php
        $connect = mysqli_connect(
            'localhost',
            'root', // Username
            'root', // Password
            'CSV_DB 7'
        );
        if(!$connect) {
            die("Connection Failed " . mysqli_connect_error());
        }

        $query = "SELECT * FROM colors";
        $colors = mysqli_query($connect, $query);

        foreach($colors as $color) {
            echo "
                <div style='width: 100%; background-color: {$color["Hex"]}; height: 50px; display: flex; justify-content: center; align-items: center;'>
                    <p>{$color["Name"]}</p>
                </div>
            ";
        };
        

    ?>
</body>
</html>