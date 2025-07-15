<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'year' => 2005
            ],
            [
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'year' => 1980
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'year' => 2009
            ],
            [
                'title' => 'Ayat-Ayat Cinta',
                'author' => 'Habiburrahman El Shirazy',
                'year' => 2004
            ],
            [
                'title' => 'Supernova',
                'author' => 'Dewi Lestari',
                'year' => 2001
            ],
        ]);
    }
}
