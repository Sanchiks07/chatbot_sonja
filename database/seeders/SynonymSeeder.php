<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SynonymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('synonyms')->insert([
            // ------ GENEREAL INFORMATION ------
            [
                'keyword_id' => 1,
                'words' => json_encode([
                    'headquarters',
                    'location',
                    'business hours',
                    'come to the office',
                    'adress'
                ]),
            ],

            [
                'keyword_id' => 2,
                'words' => json_encode([
                    'conversation',
                    'ask'
                ])
            ],

            [
                'keyword_id' => 3,
                'words' => json_encode([
                    'direct chat'
                ])
            ],

            [
                'keyword_id' => 4,
                'words' => json_encode([
                    'incident',
                    'health emergency'
                ])
            ],

            // ------ TRANSPORT ------
            [
                'keyword_id' => 5,
                'words' => json_encode([
                    'coach',
                    'railway',
                    'transport card',
                    'public transit'
                ])
            ],
            
            [
                'keyword_id' => 6,
                'words' => json_encode([
                    'Lisboa transport card',
                    'transport card',
                    'transit card',
                    'contactless travel card',
                    'travel pass'
                ])
            ],

            // ------ ACCOMMODATION ------
            [
                'keyword_id' => 7,
                'words' => json_encode([
                    'key collection',
                    'code panel'
                ])
            ],

            [
                'keyword_id' => 8,
                'words' => json_encode([
                    'fix',
                    'repairs'
                ])
            ],

            [
                'keyword_id' => 9,
                'words' => json_encode([
                    'wireless internet',
                    'network password',
                    'modem'
                ])
            ],

            [
                'keyword_id' => 10,
                'words' => json_encode([
                    'tidy',
                    'trash cans',
                    'common areas'
                ])
            ],

            [
                'keyword_id' => 11,
                'words' => json_encode([
                    'washing clothes',
                    'household appliances',
                    'microwave oven'
                ])
            ],

            [
                'keyword_id' => 12,
                'words' => json_encode([
                    'regulations',
                    'loud music',
                    'common areas'
                ]),
            ],

            [
                'keyword_id' => 13,
                'words' => json_encode([
                    'last day'
                ])
            ],

            // ------ FOOD & GROCERIES ------
            [
                'keyword_id' => 14,
                'words' => json_encode([
                    'food shopping',
                    'food market',
                    'grocery shopping'
                ])
            ],

            [
                'keyword_id' => 15,
                'words' => json_encode([
                    'coffee shop',
                    'meal',
                    'morning meal',
                    'midday meal'
                ])
            ],

            [
                'keyword_id' => 16,
                'words' => json_encode([
                    'prepare food',
                    'kitchen equipment',
                    'communal kitchen'
                ])
            ],
            
            [
                'keyword_id' => 17,
                'words' => json_encode([
                    'bottled water',
                    'potable water'
                ])
            ],

            [
                'keyword_id' => 18,
                'words' => json_encode([
                    'bank card',
                    'paying',
                    'tap to pay',
                    'money'
                ])
            ],

            [
                'keyword_id' => 19,
                'words' => json_encode([
                    'meat-free',
                    'plant-based',
                    'gluten-free food',
                    'food intolerance'
                ])
            ],

            [
                'keyword_id' => 20,
                'words' => json_encode([
                    'storing food',
                    'remaining food',
                    'communal refrigerator'
                ])
            ],

            [
                'keyword_id' => 21,
                'words' => json_encode([
                    'local cuisine',
                    'local dishes',
                    'signature dishes'
                ])
            ],

            [
                'keyword_id' => 22,
                'words' => json_encode([
                    'takeaway delivery',
                    'takeout'
                ])
            ],

            [
                'keyword_id' => 23,
                'words' => json_encode([
                    'public holiday',
                    'businesss hours',
                    'stores'
                ]),
            ],

            // ------ HEALTHCARE ------
            [
                'keyword_id' => 24,
                'words' => json_encode([
                    'physician',
                    'medical clinic',
                    'medical centre'
                ])
            ],

            [
                'keyword_id' => 25,
                'words' => json_encode([
                    'insurance card'
                ])
            ],

            [
                'keyword_id' => 26,
                'words' => json_encode([
                    'pain relief',
                    'medical prescription'
                ])
            ],

            [
                'keyword_id' => 27,
                'words' => json_encode([
                    'clinician',
                    'booking',
                    'medical consultation',
                    'medical professional',
                    'primary care provider',
                    'primary physician'
                ])
            ],
            
            [
                'keyword_id' => 28,
                'words' => json_encode([
                    'doctor\'s prescription',
                    'prescription medication'
                ])
            ],

            [
                'keyword_id' => 29,
                'words' => json_encode([
                    'emotional wellbeing',
                    'psychological support',
                    'counselling',
                    'mental wellbeing'
                ])
            ],

            [
                'keyword_id' => 30,
                'words' => json_encode([
                    'influenza vaccine'
                ])
            ],

            [
                'keyword_id' => 31,
                'words' => json_encode([
                    'charges',
                    'health insurance'
                ])
            ],

            [
                'keyword_id' => 32,
                'words' => json_encode([
                    'dental pain',
                    'dental care'
                ])
            ],

            [
                'keyword_id' => 33,
                'words' => json_encode([
                    'purchase medication',
                    'pain relief medicine',
                    'flu medicine',
                    'antihistamines'
                ])
            ],

            [
                'keyword_id' => 34,
                'words' => json_encode([
                    'health coverage',
                    'medical records',
                    'Eurpean medical card',
                    'trip insurance',
                    'healthcare insurance',
                    'medical card',
                    'EU health card'
                ]),
            ],

            [
                'keyword_id' => 35,
                'words' => json_encode([
                    'accessibility needs',
                    'health condition',
                    'long-term illness',
                    'daily medication',
                    'accessibility requirements'
                ])
            ],

            // ------ MEETING PLACES ------
            [
                'keyword_id' => 36,
                'words' => json_encode([
                    'gathering',
                    'cathedral',
                    'place',
                    'hour',
                    'timetable'
                ])
            ],

            // ------ SIGHTSEEING ------
            [
                'keyword_id' => 37,
                'words' => json_encode([
                    'top attractions',
                    'monuments',
                    'activities',
                    'downtown'
                ])
            ],

            [
                'keyword_id' => 38,
                'words' => json_encode([
                    'activities',
                    'places to visit',
                    'green sapces'
                ])
            ],
            
            [
                'keyword_id' => 39,
                'words' => json_encode([
                    'gallery',
                    'museum exhibition',
                    'historical museum'
                ])
            ],

            [
                'keyword_id' => 40,
                'words' => json_encode([
                    'seaside',
                    'ocean',
                    'bathing'
                ])
            ],

            [
                'keyword_id' => 41,
                'words' => json_encode([
                    'stroll',
                    'parks',
                    'outdoors'
                ])
            ],

            [
                'keyword_id' => 42,
                'words' => json_encode([
                    'one-day excursion',
                    'short trip',
                    'nearby destinations'
                ])
            ],

            [
                'keyword_id' => 43,
                'words' => json_encode([
                    'reduced price',
                    'admission ticket'
                ])
            ],

            [
                'keyword_id' => 44,
                'words' => json_encode([
                    'celebration',
                    'live music',
                    'performance',
                    'activities'
                ])
            ],

            [
                'keyword_id' => 45,
                'words' => json_encode([
                    'taking pictures',
                    'panorama'
                ]),
            ],

            [
                'keyword_id' => 46,
                'words' => json_encode([
                    'historical site',
                    'fortress',
                    'landmark'
                ])
            ],

            [
                'keyword_id' => 47,
                'words' => json_encode([
                    'sea animals',
                    'aquatic animals'
                ])
            ],

            [
                'keyword_id' => 48,
                'words' => json_encode([
                    'keepsake',
                    'traditional products',
                    'buy souvenirs',
                    'postcards and cards'
                ])
            ],

            [
                'keyword_id' => 49,
                'words' => json_encode([
                    'seightseeing cruise',
                    'river tejo',
                    'boat excursion'
                ])
            ],
            
            [
                'keyword_id' => 50,
                'words' => json_encode([
                    'sunset viewpoint',
                    'panoramic view'
                ])
            ],

            // ------ EMERGENCY ------
            [
                'keyword_id' => 51,
                'words' => json_encode([
                    'emergency medical services',
                    'law enforcement',
                    'emergency services',
                    'emergency assistance'
                ])
            ],

            [
                'keyword_id' => 52,
                'words' => json_encode([
                    'health emergency',
                    'major accident',
                    'immediate risk',
                    'emergency'
                ])
            ],

            [
                'keyword_id' => 53,
                'words' => json_encode([
                    'Erasmus coordiantor',
                    'assistance',
                    'guidance'
                ])
            ],

            [
                'keyword_id' => 54,
                'words' => json_encode([
                    'headquarters',
                    'location',
                    'opening hours',
                    'come to visit office'
                ])
            ],

            [
                'keyword_id' => 55,
                'words' => json_encode([
                    'tourist support police',
                    'criminal incident',
                    'stealing',
                    'missing passport'
                ])
            ],

            [
                'keyword_id' => 56,
                'words' => json_encode([
                    'travel document',
                    'identifaction documents',
                    'missing'
                ]),
            ],

            [
                'keyword_id' => 57,
                'words' => json_encode([
                    'missing keys',
                    'cannot enter',
                    'accommodation key'
                ])
            ],

            [
                'keyword_id' => 58,
                'words' => json_encode([
                    'stealing',
                    'stolen wallet',
                    'criminal incident'
                ])
            ],

            [
                'keyword_id' => 59,
                'words' => json_encode([
                    'emergency medical services',
                    'accident',
                    'medical emergency',
                    'emergency healthcare'
                ])
            ],

            [
                'keyword_id' => 60,
                'words' => json_encode([
                    'fire hazard',
                    'leave the building'
                ])
            ],
            
            [
                'keyword_id' => 61,
                'words' => json_encode([
                    'seismic activity',
                    'severe weather',
                    'flooding',
                    'natural emergency'
                ])
            ],
            
            [
                'keyword_id' => 62,
                'words' => json_encode([
                    'missing',
                    'stolen documents',
                    'identification documents'
                ])
            ]
        ]);
    }
}
