<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Movies = [
            [
                'name' => 'Learners Licence',
                'director' => 'Beginner',
                'poster' => 'pics/learnerspapers.jpg',
                'price' => 299.99
            ],
            [
                'name' => 'Code 08',
                'director' => 'Light Motor Vehicle',
                'poster' => 'pics/code8.jpg',
                'price' => 179.99
            ],
            [
                'name' => 'Code 10',
                'director' => 'Medium Truck Motor Vehicle',
                'poster' => 'pics/code10.jpg',
                'price' => 199.99
            ],
            [
                'name' => 'Code 14',
                'director' => 'Heavy Truck Motor Vehicle',
                'poster' => 'pics/code14.jpg',
                'price' => 349.99
            ]
        ];
        foreach ($Movies as $key => $value) {
            Movie::create($value);
        }
    }
}
