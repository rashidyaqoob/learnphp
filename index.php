<?php include './nav.php'; ?>
<h1>Home page</h1>

<?php
function sum(...$nums)
{
	var_dump($nums);
	return array_sum($nums);
}

echo sum(2, 2, 2);