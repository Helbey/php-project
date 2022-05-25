<?php

namespace App\Models;

class Movie 
{
    public static function all() {
        return [
            [
                'id' => 1,
                'image' => './pic/movies/m1.jpg',
                'title' => 'The hell',
                'description' => 'An action triller movie',
            ],
            [
                'id' => 2,
                'image' => './pic/movies/m2.jpg',
                'title' => 'Polis',
                'description' => 'A Science fiction movie',
            ],
            [
                'id' => 3,
                'image' => './pic/movies/m3.jpg',
                'title' => 'Freedom',
                'description' => 'A Triller movie',
            ],
            [
                'id' => 4,
                'image' => './pic/movies/m4.jpg',
                'title' => 'Power',
                'description' => 'Action crime movie',
            ],
            [
                'id' => 5,
                'image' => './pic/movies/m7.jpg',
                'title' => 'Call 2',
                'description' => 'A Horror movie',
            ],
            [
                'id' => 6,
                'image' => './pic/movies/m8.jpg',
                'title' => 'Logan',
                'description' => 'Action crime movie',
            ],
            [
                'id' => 7,
                'image' => './pic/movies/m9.jpg',
                'title' => 'Call 2',
                'description' => 'A Horror movie',
            ],
            [
                'id' => 8,
                'image' => './pic/movies/m10.jpg',
                'title' => 'Power',
                'description' => 'Action crime movie',
            ],
            [
                'id' => 9,
                'image' => './pic/movies/m11.jpg',
                'title' => 'Bat man',
                'description' => 'A Horror movie',
            ],
            [
                'id' => 10,
                'image' => './pic/movies/m6.jpg',
                'title' => 'Bat man',
                'description' => 'A Horror movie',                
            ],
            [
                'id' => 11,
                'image' => './pic/movies/m4.jpg',
                'title' => 'Bat man',
                'description' => 'A Horror movie',          
            ]
            ];
    }
    public static function find($id)
    {
        $movies = self::all();
        foreach($movies as $movie) {
            if ($movie['id'] == $id) {
                return $movie;
            }
        }
    }
}
