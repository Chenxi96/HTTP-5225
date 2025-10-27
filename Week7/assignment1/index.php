<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container bg-body-secondary">
    <h1 class="p-2">Drop in program in Toronto</h1>
    <?php
        require('connect.php');

        $sql = "SELECT `Location Name`, `Course Title`, Section, `First Date` FROM locations INNER JOIN drop_in ON locations.`Location ID` = drop_in.`Location ID` LIMIT 100";
        $dropIns = mysqli_query($connect, $sql);
            echo '
            <table class="table border rounded ">
                <thead>
                    <tr>
                    <th scope="col">Location Name</th>
                    <th scope="col">Course Title</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Start Date</th>
                    </tr>
                </thead>
                <tbody>
            ';
        foreach($dropIns as $dropIn) {
            echo '
                <tbody>
                    <tr>
                    <td>'. $dropIn['Location Name'] . '</td>
                    <td>' . $dropIn['Course Title'] . '</td>
                    <td>' . $dropIn['Section'] . '</td>
                    <td>' . $dropIn['First Date'] . '</td>
                    </tr>
                ';
        }
        
        echo '
                </tbody>
            </table>';
    ?>


</body>
</html>