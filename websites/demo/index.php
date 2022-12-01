<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Phillip K. Dick',
        'releaseYear' => 2004,
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'Diary of the Wimpy Kid',
        'author' => 'Donald Ron',
        'releaseYear' => 2022,
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'Some other book',
        'author' => 'Daval Gregory',
        'releaseYear' => 1997,
        'purchaseUrl' => 'https://example.com'
    ],
];

// function filter($items, $fn)
// {
//     $filteredItems = [];

//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// };

// Let's use php's built in array filter:

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Donald Ron';
});

require "index.view.php";