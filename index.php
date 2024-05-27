<?php include './nav.php'; ?>

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
require_once 'App/Account.php';
require_once 'App/SocialMedia.php';

use App\Account;


$dateTime = new DateTime();


$account = new Account('John', 30, 'Social');

var_dump($account);



