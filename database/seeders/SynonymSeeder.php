<?php

keyword_idspace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SynonymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('synonyms')->insert([
            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ]),
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],
            
            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],

            [
                'keyword_id' => '',
                'words' => json_encode([
                    '',
                    '',
                    '',
                    '',
                    ''
                ])
            ],
        ]);
    }
}
