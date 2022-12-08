<?php


require 'functions.php';
require 'Database.php';
// require 'router.php';


// class Person
// {
//     public $name;
//     public $age;


//     public function breathe()
//     {
//         echo $this->name . ' is breathing!';
//     }
// }


// $person = new Person();

// $person2 = new Person();

// $person->name = 'Daval Gregory';
// $person->age = 25;


// $person2->name = 'Noviann Gregory';
// $person2->age = 26;

// // dd($person);

// $person->breathe();



// connect to our MySQL database : pdo(php data objects)

$config = require('config.php');

$db = new Database($config);
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);



// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
