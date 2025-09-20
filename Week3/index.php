<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Fake Store</title>
</head>
<body>

<?php
    // Task 1: If/Else

    // $randomNumber = rand(1, 1000);
    // $divisibleByThree = $randomNumber % 3;
    // $divisibleByFive = $randomNumber % 5;


    // echo "$divisibleByThree";
    // echo "<br>";
    // echo "$divisibleByFive";
    // echo "<br>";

    // if($randomNumber % 3 === 0) {
    //     echo "Fizz";
    // } elseif($randomNumber % 5 === 0) {
    //     echo "Buzz";
    // } elseif($randomNumber % 3 === 1 && $randomNumber % 5 === 0) {
    //     echo "FizzBuzz";
    // } else {
    //     echo $randomNumber;
    // }

    // Function to fetch user data from the JSONPlaceholder API

    function getUsers() {

        $url = "https://jsonplaceholder.typicode.com/users";

        $data = file_get_contents($url);

        return json_decode($data, true);

    }



    // Get the list of users
    $users = getUsers();

    echo "
        <nav class='navbar bg-primary' data-bs-theme='dark'>
                <div class='container-fluid'>
                    <a class='navbar-brand' href='#'>Employees</a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                    
                    </div>
                </div>
        </nav>
    ";

    foreach($users as $user) {
        echo "
            <div class='card mb-3'>
                <div class='card-body bg-info'>
                    <h5 class='card-title'>{$user['name']}</h5>
                    <p class='card-text'>Username: {$user['username']}</p>
                    <p class='card-text'>email: {$user['email']}</p>
                    <p class='card-text'>Address: {$user['address']['street']} {$user['address']['suite']} City: {$user['address']['city']} Zipcode: {$user['address']['zipcode']}</p>
                    <p class='card-text'> Phone Number: {$user['phone']}</p>
                    <a class='navbar-brand>
                        <p class='card-text'> Website: {$user['website']}</p>
                    </a>
                    <div class='card text-bg-primary mb-3' style='max-width: 18rem;'>
                        <div class='card-header'>Company: {$user['company']['name']}</div>
                        <div class='card-body'>
                            <h5 class='card-title'>Motto: {$user['company']['catchPhrase']}</h5>
                            <p class='card-text'>Business: {$user['company']['bs']}</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }   
   
    ?>
    
</body>
</html>