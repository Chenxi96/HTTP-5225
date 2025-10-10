<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit School</title>
</head>
<body>
    <h1>Edit School</h1>
    <hr>
    <div>
        <?php include('nav.php'); ?>
    </div>
    <hr>
    <div>
        <!-- boardName=Test
            &schoolName=Test
            &schoolNumber=112212
            &schoolLevel=test -->
        <?php
            require('connect.php');
            
            if($_SERVER['REQUEST_METHOD'] == 'GET') {
                $id = $_GET['id'];
                $query = "SELECT * FROM schools WHERE id = " . $id;
                $result = mysqli_query($connect, $query);
                $school = $result -> fetch_assoc();
            }

            if(isset($_POST['addSchool'])) {
                // print_r($_POST);
                $boardName = $_POST['boardName'];
                $schoolName = $_POST['schoolName'];
                $schoolNumber = $_POST['schoolNumber'];
                $schoolLevel = $_POST['schoolLevel'];

                $query = "INSERT INTO 
                    schools (`Board Name`, `School Number`, `School Name`, `School Level`) VALUE ('$boardName','$schoolNumber','$schoolName', '$schoolLevel')";
                $school = mysqli_query($connect, $query);
                if($school) {
                    // Success
                    //document.location = '' - JAVASCRIPT
                    header('Location: index.php'); // PHP
                } else {
                    // Failed
                    echo 'FAILED, error code is: ' . mysqli_error($connect);
                }
            }
        ?>
        <form action="addschool.php" method="POST">
            <input type="text" name="boardName" placeholder="Board Name" value="<?php echo $school['Board Name']?>">
            <br>
            <input type="text" name="schoolName" placeholder="School Name" value="<?php echo $school['School Name'] ?>">
            <br>
            <input type="number" name="schoolNumber" placeholder="School Number">
            <br>
            <input type="text" name="schoolLevel" placeholder="School Level">
            <input type="submit" name="addSchool" value="Add">
        </form>
    </div>
</body>
</html>