<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Delete School</h1>

    <?php
        require('connect.php');

        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $query = "DELETE FROM schools WHERE id = " . $id;
            if(mysqli_query($connect, $query)) {
                header('Location: index.php');
            } else {
                echo 'Did not work try again!';
            }
        }

   ?>
    
</body>
</html>