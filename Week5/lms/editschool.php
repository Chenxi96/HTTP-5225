<?php
    require('profiles/loginFunction.php');
    secure();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <hr>
    <div>
        <?php include('reusable/nav.php'); ?>
    </div>
    <hr>
    <h1 class="text-center">Update School</h1>
    <div class="d-flex justify-content-center">
        
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
                    echo '<form action="editschool.php" method="POST" class="w-50">' .
                            '<input type="hidden" name="id" value=' . $school["id"] . '>' .
                            '<div class="mb-3">' .
                                '<label for="board-name" class="form-label">Board Name:</label>' .
                                '<input type="text" class="form-control" id="board-name" name="board-name" value=' . $school["Board Name"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="school-number" class="form-label">School Number:</label>' .
                                '<input type="number" class="form-control" id="school-number" name="school-number" value=' . $school["School Number"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="school-name" class="form-label">School Name:</label>' .
                                '<input type="text" class="form-control" id="school-name" name="school-name" value=' . $school["School Name"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="school-level" class="form-label">School Level:</label>' .
                                '<input type="text" class="form-control" id="school-level" name="school-level" value=' . $school["School Level"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="school-language" class="form-label">School Type:</label>' .
                                '<input type="text" class="form-control" id="school-language" name="school-language" value=' . $school["School Language"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="school-type" class="form-label">School Special:</label>' .
                                '<input type="text" class="form-control" id="school-type" name="school-type" value=' . $school["School Type"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="school-conditions" class="form-label">School Special Conditions:</label>' .
                                '<input type="text" class="form-control" id="school-conditions" name="school-conditions" value=' . $school["School Special Conditions"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="street" class="form-label">Street:</label>' .
                                '<input type="text" class="form-control" id="street" name="street" value=' . $school["Street"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="city" class="form-label">City:</label>' .
                                '<input type="text" class="form-control" id="city" name="city" value=' . $school["City"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="province" class="form-label">Province:</label>' .
                                '<input type="text" class="form-control" id="province" name="province" value=' . $school["Province"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="postal-code" class="form-label">Postal Code:</label>' .
                                '<input type="text" class="form-control" id="postal-code" name="postal-code" value=' . $school["Postal Code"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="phone" class="form-label">Phone:</label>' .
                                '<input type="text" class="form-control" id="phone" name="phone" value=' . $school["Phone"] . '>' .
                            '</div>' .

                            '<div class="mb-3">' .
                                '<label for="fax" class="form-label">Fax:</label>' .
                                '<input type="text" class="form-control" id="fax" name="fax" value=' . $school["Fax"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="grade-range" class="form-label">Grade Range:</label>' .
                                '<input type="text" class="form-control" id="grade-range" name="grade-range" value=' . $school["Grade Range"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="date-open" class="form-label">Date Open:</label>' .
                                '<input type="text" class="form-control" id="date-open" name="date-open" value=' . $school["Date Open"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="email" class="form-label">Email:</label>' .
                                '<input type="text" class="form-control" id="email" name="email" value=' . $school["Email"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="website" class="form-label">Website:</label>' .
                                '<input type="text" class="form-control" id="website" name="website" value=' . $school["Website"] . '>' .
                            '</div>' .
                            '<div class="mb-3">' .
                                '<label for="board-website" class="form-label">Board Website:</label>' .
                                '<input type="text" class="form-control" id="board-website" name="board-website" value=' . $school["Board Website"] . '>' .
                            '</div>' .
                            '<input type="submit" name="editSchool" class="btn btn-primary w-100" value="Submit">' .
                        '</form>';
            }

            if(isset($_POST['editSchool'])) {
                // print_r($_POST);
                $id = $_POST['id'];
                $boardName = $_POST['board-name'];
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

                $query = "UPDATE schools
                        SET `Board Name` = '$boardName',
                            `School Number` = '$schoolNumber',
                            `School Name` = '$schoolName',
                            `School Level` = '$schoolLevel',
                            `School Language` = '$schoolLanguage',
                            `School Type` = '$schoolType',
                            `School Special Conditions` = '$schoolConditions',
                            `Street` = '$schoolStreet',
                            `City` = '$schoolCity',
                            `Province` = '$schoolProvince',
                            `Postal Code` = '$schoolPostalCode',
                            `Phone` = '$schoolPhone',
                            `Fax` = '$schoolFax',
                            `Grade Range` = '$schoolGradeRange',
                            `Date Open` = '$schoolDateOpen',
                            `Email` = '$schoolEmail',
                            `Website` = '$schoolWebsite',
                            `Board Website` = '$schoolBoardWebsite'
                        WHERE `id` = $id";
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

        
    </div>
</body>
</html>