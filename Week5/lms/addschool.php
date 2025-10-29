<?php
    require('profiles/loginFunction.php');
    secure();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <hr>
    <div>
        <?php include('reusable/nav.php'); ?>
    </div>
    <hr>
    <h1 class="text-center">Add School</h1>
    <div class="d-flex justify-content-center">
        <!-- boardName=Test
            &schoolName=Test
            &schoolNumber=112212
            &schoolLevel=test -->
        <?php
            require('connect.php');
            if(isset($_POST['addSchool'])) {
                
                $boardName = $_POST['boardName'];
                $schoolName = $_POST['school-name'];
                $schoolNumber = $_POST['school-number'];
                $schoolLevel = $_POST['school-level'];
                $schoolLanguage = $_POST['school-language'];
                $schoolType = $_POST['school-type'];
                $schoolConditions = $_POST['school-conditions'];
                $schoolStreet = $_POST['street'];
                $schoolCity = $_POST['city'];
                $schoolProvince = $_POST['province'];
                $schoolPostalCode = $_POST['postal-code'];
                $schoolPhone = $_POST['phone'];
                $schoolFax = $_POST['fax'];
                $schoolGradeRange = $_POST['grade-range'];
                $schoolDateOpen = $_POST['date-open'];
                $schoolEmail = $_POST['email'];
                $schoolWebsite = $_POST['website'];
                $schoolBoardWebsite = $_POST['board-website'];

                // print_r($_POST);
                $query = "INSERT INTO schools(`Board Name`,
                             `School Number`, 
                             `School Name`, 
                             `School Level`, 
                             `School Language`, 
                             `School Type`,
                             `School Special Conditions`,
                             `Street`,
                             `City`,
                             `Province`,
                             `Postal Code`,
                             `Phone`,
                             `Fax`,
                             `Grade Range`,
                             `Date Open`,
                             `Email`,
                             `Website`, `Board Website`) VALUE ('$boardName', '$schoolNumber', '$schoolName', '$schoolLevel', '$schoolLanguage', '$schoolType', '$schoolConditions', '$schoolStreet', '$schoolCity', '$schoolProvince', '$schoolPostalCode', '$schoolPhone', '$schoolFax', '$schoolGradeRange', '$schoolDateOpen', '$schoolEmail', '$schoolWebsite', '$schoolBoardWebsite')";

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
        <form class="w-50" action="addschool.php" method="POST">
            <div class="mb-3">
                <label for="board-name" class="form-label">Board Name:</label>
                <input type="text" class="form-control" id="board-name" name="boardName" >
            </div>
            <div class="mb-3">
                <label for="school-number" class="form-label">School Number:</label>
                <input type="number" class="form-control" id="school-number" name="school-number" >
            </div>
            <div class="mb-3">
                <label for="school-name" class="form-label">School Name:</label>
                <input type="text" class="form-control" id="school-name" name="school-name">
            </div>
            <div class="mb-3">
                <label for="school-level" class="form-label">School Level:</label>
                <input type="text" class="form-control" id="school-level" name="school-level" >
            </div>
            <div class="mb-3">
                <label for="school-language" class="form-label">School Type:</label>
                <input type="text" class="form-control" id="school-language" name="school-language" >
            </div>
            <div class="mb-3">
                <label for="school-type" class="form-label">School Special:</label>
                <input type="text" class="form-control" id="school-type" name="school-type" >
            </div>
            <div class="mb-3">
                <label for="school-conditions" class="form-label">School Special Conditions:</label>
                <input type="text" class="form-control" id="school-conditions" name="school-conditions">
            </div>
            <div class="mb-3">
                <label for="street" class="form-label">Street:</label>
                <input type="text" class="form-control" id="street" name="street" >
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" name="city" >
            </div>
            <div class="mb-3">
                <label for="province" class="form-label">Province:</label>
                <input type="text" class="form-control" id="province" name="province" >
            </div>
            <div class="mb-3">
                <label for="postal-code" class="form-label">Postal Code:</label>
                <input type="text" class="form-control" id="postal-code" name="postal-code" >
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" >
            </div>
            <div class="mb-3">
                <label for="fax" class="form-label">Fax:</label>
                <input type="text" class="form-control" id="fax" name="fax" >
            </div>
            <div class="mb-3">
                <label for="grade-range" class="form-label">Grade Range:</label>
                <input type="text" class="form-control" id="grade-range" name="grade-range">
            </div>
            <div class="mb-3">
                <label for="date-open" class="form-label">Date Open:</label>
                <input type="text" class="form-control" id="date-open" name="date-open" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email" >
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website:</label>
                <input type="text" class="form-control" id="website" name="website">
            </div>
            <div class="mb-3">
                <label for="board-website" class="form-label">Board Website:</label>
                <input type="text" class="form-control" id="board-website" name="board-website">
            </div>
            
            <input type="submit" name="addSchool" value="Add" class="btn btn-primary w-100">
        </form>

    </div>
</body>
</html>