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

$id = $_GET['id'];
$query = "select * from posts where id = ?";

// dd($query);

// $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
$posts = $db->query($query, [$id])->fetch();

dd($posts);



// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
