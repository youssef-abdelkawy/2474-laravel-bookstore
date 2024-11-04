<?php

namespace Database\Seeders;

use App\models\Book ;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Book::factory(400)->create();
    }
}
