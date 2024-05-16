<?php include './nav.php'; ?>
<h1>Home page</h1>

<?php
require_once 'App/Account.php';
require_once 'App/SocialMedia.php';

use App\Account;


$dateTime = new DateTime();


$account = new Account('John', 30, 'Social');

var_dump($account);



