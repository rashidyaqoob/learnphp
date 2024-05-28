<?php require './nav.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="public/css/styles.css">
<title>My PHP Project</title>
</head>

<body>
<h1 class="text-3xl font-bold underline">Home page</h1>
</body>

</html>

<?php
spl_autoload_register(function ($class) {
    $formattedClass = str_replace('\\', '/', $class);
    $path = "{$formattedClass}.php";
    include_once $path;
    var_dump($class);
});


use App\{Account, Socialmedia, Utility, RestaurantOne};


$dateTime = new DateTime();

$restaurant = new RestaurantOne();


$account = new Account('John', 30);
$socialMedia = new Socialmedia();

$account->deposit(50)->deposit(20);

echo '<br><br><br>';
$restaurant->prepareFood();
echo '<br><br><br>';

var_dump($account->getBalance() . ' Get balance');
echo '<br><br><br>';
var_dump($account->setBalance(100) . ' Set balance');

var_dump($socialMedia);
echo '<br><br><br>';
var_dump($dateTime);
echo '<br><br><br>';
Utility::printArr([32,3,3,4,4]);
