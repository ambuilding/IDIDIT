<?php

header('Content-Type: application/json');

$usernames = ['Peter', 'Tom', 'Anne', 'Andy', 'Tank'];

$results = array_values(array_filter($usernames, function ($name) {
	return strpos($name, $_GET['q']) === 0;
}));

array_slice($results, 0, 5);

echo json_encode($results);

// php users.php
// php-cgi users.php q=An
