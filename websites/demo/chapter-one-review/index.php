<?php 

// $name = 'Daval Software Agency';
// $cost = 15;

$business = [
    'name' => 'Daval Software Agency',
    'cost' => 15,
    'categories' => ["Testing", "PHP", "Javascript"]
];

// if ($business['cost'] > 99) {
//     echo "Not interested.";
// }


// foreach ($business['categories'] as $category) {
//     echo $category . "<br>";
// }


// functions:
function register($user){
    // Create the user record in the db
    // Log them in
    // Send a welcome email
    // Redirect to their new dashboard
}

// requiring views:
// best for separating business logic from the view
 require "../chap-review/index.view.php";