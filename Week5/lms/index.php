<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Schools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div>
        <div>
            <?php include('nav.php'); ?>
        </div>
    </div>
    
    <hr>
    <h1>Schools</h1>
    <div class="d-flex flex-wrap gap-2">
        <?php
            require('connect.php');
            $query = 'SELECT * FROM schools';
            $schools = mysqli_query($connect, $query);

            // echo '<pre>' . print_r($schools) . '</pre>';
            foreach($schools as $school) {
                echo '<div class="card d-flex flex-wrap" style="width: 18rem;">' .
                        '<div class="card-body">' .
                            '<h2 class="card-title">'. $school["School Name"] .'</h5>' .
                            '<h3 class="card-subtitle mb-2 text-body-secondary">' . $school["School Type"] . '</h6>' .
                            '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>' .
                            '<a href="#" class="card-link">Card link</a>' .
                            '<a href="#" class="card-link">Another link</a>' .
                            '<form action="editschool.php">' .
                                '<input type="hidden" name="id" value=' . $school["id"] . '>' .
                                '<input type="submit" value="Update">' .
                            '</form>' .
                            '<form action="deleteschool.php">' .
                                '<input type="hidden" name="id" value=' . $school["id"] . '>' .
                                '<input type="submit" value="Delete">' .
                            '</form>' .
                        '</div>' .
                        '</div>'; 
            }   
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </div>

    <style>
        .Box {
            border: 1px solid red;
            padding: 20px;
            display: inline-block;
            box-sizing: border-box;
        }
    </style>

    <div class="Box">
        <h3>School Name</h3>
    </div>

</body>
</html>