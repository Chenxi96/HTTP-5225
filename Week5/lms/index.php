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
            <?php include('reusable/nav.php'); ?>
        </div>
    </div>
    
    <hr>
    <h1 class="text-center">Schools</h1>
    <div class="d-flex flex-wrap gap-2 m-2">
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
                            '<p class="card-text">Board Name: ' . $school["Board Name"] . '</p>' .
                            '<p class="card-text">School Number: ' . $school["School Number"] . '</p>' .
                            '<p class="card-text">School Level:' . $school["School Level"] . '</p>' .
                            '<p class="card-text">School Language: ' . $school["School Language"] . '</p>' .
                            '<p class="card-text">School Special Conditions:' . $school["School Special Conditions"] . '</p>' .
                            '<p class="card-text">Street: ' . $school["Street"] . '</p>' .
                            '<p class="card-text">City: ' . $school["City"] . '</p>' .
                            '<p class="card-text">Province: ' . $school["Province"] . '</p>' .
                            '<p class="card-text">Postal Code: ' . $school["Postal Code"] . '</p>' .
                            '<p class="card-text">Phone Number: ' . $school["Phone"] . '</p>' .
                            '<p class="card-text">Fax Number: ' . $school["Fax"] . '</p>' .
                            '<p class="card-text">Grade Range: ' . $school["Grade Range"] . '</p>' .
                            '<p class="card-text">Date Open: ' . $school["Date Open"] . '</p>' .
                            '<p class="card-text">Email: ' . $school["Email"] . '</p>' .
                            '<p class="card-text">Website: ' . $school["Website"] . '</p>' .
                            '<p class="card-text">Board Website: ' . $school["Board Website"] . '</p>' .
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

</body>
</html>