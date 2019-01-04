<?php

// Establish link with database in this file
include 'config/db.php';

// Check connection
if ($link->connect_errno) {
    printf("Connect failed: %s\n", $link->connect_error);
    exit();
}


/* Establish routes for the endpoints */

// Include the routing functions
include 'routes.php';

// Include Transaction class
include 'src/Transaction.php';
include 'src/Leaderboard.php';
include 'src/User.php';

$route = new Route();

// CREATE ROUTES

// TimeStamp route
$route->add('/Timestamp', function(){
  echo json_encode(array('Timestamp' => time()));
});
// Transaction routes
$route->add('/Transaction', 'Transaction@create');
$route->add('/TransactionStats', 'Transaction@stats');

// Leaderboard routes
$route->add('/ScorePost', 'Leaderboard@create');
$route->add('/LeaderboardGet', 'Leaderboard@get');

// User routes
$route->add('/UserSave', 'User@create');
$route->add('/UserLoad', 'User@loadData');

$route->submit();

 
