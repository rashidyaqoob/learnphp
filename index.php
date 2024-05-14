<?php include './nav.php'; ?>
<h1>Home page</h1>

<?php

$users = ["John", "Doe", "Ala"];

if (array_key_exists(2, $users)) {
    echo 'Users found';
}

$users = array_filter($users, fn($user) => $user !== "Doe");

print_r(array_values($users));


function getNewName(): string
{
    // Generate two random uppercase letters
    $letters = range(A, Z);
    shuffle(($letters));

    // Generate three random digits
    $digits = rand(0, 999);

    // Return the combined result
    return $letters[0] . $letters[4] . $digits;
}

// Example of using the function
echo getNewName();
