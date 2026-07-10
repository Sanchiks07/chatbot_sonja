<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keywords')->insert([
            // ------ GENERAL INFORMATION ------
            [
                'faq_id' => 1,
                'keywords' => json_encode([
                    'office',
                    '',
                    '',
                    'address',
                    'location',
                    'where is the office',
                    '',
                    '',
                    'opening hours',
                    'working hours',
                    '',
                    'office open'
                ])
            ],

            [
                'faq_id' => 2,
                'keywords' => json_encode([
                    'group chat',
                    'whatsapp',
                    'whatsapp group',
                    'chat',
                    'group',
                    'messages',
                    'questions',
                    'updates',
                    'information',
                    'announcements',
                    'news'
                ])
            ],

            [
                'faq_id' => 3,
                'keywords' => json_encode([
                    'private message'
                    'private messages',
                    'dm',
                    'direct message,'
                    'personal message',
                    'contact coordinator',
                    'message coordinator',
                    'private chat',
                    'personal question'
                ])
            ],

            [
                'faq_id' => 4,
                'keywords' => json_encode([
                    'emergency',
                    'urgent',
                    'urgent help',
                    'emergency contact',
                    'serious problem',
                    'danger',
                    'accident',
                    'medical emergency'
                ])
            ],
        
            // ------ TRANSPORT ------
            [
                'faq_id' => 5,
                'keywords' => json_encode([
                    'bus',
                    'train',
                    'tram',
                    'metro',
                    'ferry',
                    'transport',
                    'public transport',
                    'ticket',
                    'travel card',
                    'navigation card',
                    'uber',
                    'bolt',
                    'navigation app'
                ])
            ],

            [
                'faq_id' => 6,
                'keywords' => json_encode([
                    'lisboa card',
                    'transport card',
                    'travel card',
                    'public transport card',
                    'navigante',
                    'navigante card',
                    'metro card',
                    'bus card',
                    'ferry card',
                    'train card',
                    'monthly pass',
                    'pass',
                    'tap card',
                    'contactless card',
                    'ticket card'
                ])
            ],

            // ------ ACCOMMODATION ------
            [
                'faq_id' => 7,
                'keywords' => json_encode([
                    'chek in',
                    'check-in',
                    'arrival',
                    'arrive',
                    'moving in',
                    'move in',
                    'first day',
                    'first arrival',
                    'accommodation',
                    'residence',
                    'aparatment',
                    'house',
                    'keys',
                    'key',
                    'door code',
                    'key box',
                    'keypad',
                    'access code'
                ])
            ],

            [
                'faq_id' => 8,
                'keywords' => json_encode([
                    'broken',
                    'damage',
                    'damaged',
                    'problem',
                    'issue',
                    'maintenance',
                    'repair',
                    'leak',
                    'water leak',
                    'electricity',
                    'power',
                    'internet',
                    'wifi',
                    'heating',
                    'not working'
                ])
            ],

            [
                'faq_id' => 9,
                'keywords' => json_encode([
                    'wifi',
                    'wi-fi',
                    'internet',
                    'wireless',
                    'password',
                    'network',
                    'connection',
                    'router',
                    'internet access',
                    'wifi password'
                ])
            ],

            [
                'faq_id' => 2,
                'keywords' => json_encode([
                    'cleaning',
                    'clean',
                    'kitchen',
                    'bathroom',
                    'trash',
                    'rubbish',
                    'garbage',
                    'bins',
                    'waste',
                    'shared spaces',
                    'houskeeping'
                ])
            ],

            [
                'faq_id' => 3,
                'keywords' => json_encode([
                    'washing machine',
                    'washer',
                    'laundry',
                    'dryer',
                    'oven',
                    'microwave',
                    'fridge',
                    'refrigerator',
                    'appliances',
                    'kitchen appliances'
                ])
            ],

            [
                'faq_id' => 4,
                'keywords' => json_encode([
                    'rules',
                    'house rules',
                    'accommodation rules',
                    'quiet hours',
                    'noise',
                    'smoking',
                    'alchohol',
                    'pets',
                    'guests',
                    'visitors',
                    'shared spaces'
                ])
            ],
        
            [
                'faq_id' => 5,
                'keywords' => json_encode([
                    'check out',
                    'check-out',
                    'moving out',
                    'move out',
                    'leave',
                    'leaving',
                    'departure',
                    'final day',
                    'end of stay'
                ])
            ],

            // ------ FOOD & GROCERIES ------
            [
                'faq_id' => 6,
                'keywords' => json_encode([
                    'supermarket',
                    'grocery store',
                    'groceries',
                    'food shop',
                    'market',
                    'where to buy food',
                    'shopping',
                    'supermarket near me',
                    'lidl',
                    'aldi',
                    'continente',
                    'pingo doce',
                    'mini preço',
                    'mini preco'
                ])
            ],

            [
                'faq_id' => 7,
                'keywords' => json_encode([
                    'restaurant',
                    'restaurants',
                    'café',
                    'cafés',
                    'cafe',
                    'cafes',
                    'food',
                    'eat out',
                    'lunch',
                    'dinner',
                    'breakfast',
                    'where to eat'
                ])
            ],

            [
                'faq_id' => 8,
                'keywords' => json_encode([
                    'cook',
                    'cooking',
                    'kitchen',
                    'meal',
                    'food',
                    'utensils',
                    'pots',
                    'pans',
                    'shared kitchen'
                ])
            ],

            [
                'faq_id' => 9,
                'keywords' => json_encode([
                    'water',
                    'tap water',
                    'drink water',
                    'drinking water',
                    'safe water',
                    'bottle water'
                ])
            ],

            [
                'faq_id' => 2,
                'keywords' => json_encode([
                    'cash',
                    'card',
                    'credit card',
                    'debit card',
                    'payment',
                    'pay',
                    'google pay',
                    'apple pay',
                    'contactless'
                ])
            ],

            [
                'faq_id' => 3,
                'keywords' => json_encode([
                    'vegetarian',
                    'vegan',
                    'gluten free',
                    'halal',
                    'kosher',
                    'allergy',
                    'food allergy',
                    'alctose free'
                ])
            ],

            [
                'faq_id' => 4,
                'keywords' => json_encode([
                    'fridge',
                    'refrigerator',
                    'freezer',
                    'food storage',
                    'store food',
                    'leftovers',
                    'shared fridge'
                ])
            ],
        
            [
                'faq_id' => 5,
                'keywords' => json_encode([
                    'portuguese food',
                    'traditional food',
                    'local food',
                    'spcialties',
                    'what to eat',
                    'portuguese cuisine'
                ])
            ],

            [
                'faq_id' => 6,
                'keywords' => json_encode([
                    'food delivery',
                    'delivery',
                    'uber eats',
                    'glovo',
                    'bolt food',
                    'order food',
                    'takeaway'
                ])
            ],

            [
                'faq_id' => 7,
                'keywords' => json_encode([
                    'sunday',
                    'holiday',
                    'opening hours',
                    'supermarket open',
                    'shops open',
                    'weekend shopping'
                ])
            ],

            // ------ HEALTHCARE ------
            [
                'faq_id' => 8,
                'keywords' => json_encode([
                    'healthcare',
                    'health care',
                    'medical care',
                    'doctor',
                    'health services',
                    'medical services',
                    'hospital',
                    'clinic',
                    'health'
                ])
            ],

            [
                'faq_id' => 9,
                'keywords' => json_encode([
                    'ehic',
                    'european health insurance card',
                    'insurance',
                    'health insurance',
                    'medical insurance',
                    'health card'
                ])
            ],

            [
                'faq_id' => 2,
                'keywords' => json_encode([
                    'pharmacy',
                    'pharmacies',
                    'medicine',
                    'medication',
                    'chemist',
                    'prescription',
                    'painkillers'
                ])
            ],

            [
                'faq_id' => 3,
                'keywords' => json_encode([
                    'doctor',
                    'gp',
                    'general pactitioner',
                    'physician',
                    'medical appointment',
                    'appointment',
                    'family doctor'
                ])
            ],

            [
                'faq_id' => 4,
                'keywords' => json_encode([
                    'prescription',
                    'medicine',
                    'medication',
                    'doctor prescription',
                    'repeat prescription',
                    'prescribed medicine'
                ])
            ],
        
            [
                'faq_id' => 5,
                'keywords' => json_encode([
                    'mental heealth',
                    'stress',
                    'anxiety',
                    'counselling',
                    'psychologist',
                    'therapy',
                    'wellbeing'
                ])
            ],

            [
                'faq_id' => 6,
                'keywords' => json_encode([
                    'vaccination',
                    'vaccine',
                    'immunisation',
                    'covid vaccine',
                    'flu vaccine'
                ])
            ],

            [
                'faq_id' => 7,
                'keywords' => json_encode([
                    'medical costs',
                    'healthcare costs',
                    'doctor cost',
                    'hospital cost',
                    'medical fees',
                    'insurance coverage'
                ])
            ],

            [
                'faq_id' => 8,
                'keywords' => json_encode([
                    'dentist',
                    'dental',
                    'tooth',
                    'toothache',
                    'dental clinic',
                    'teeth'
                ])
            ],

            [
                'faq_id' => 9,
                'keywords' => json_encode([
                    'buy medicine',
                    'medicine',
                    'medocation',
                    'painkillers',
                    'cold medicine',
                    'allergy medicine',
                    'pharmacy'
                ])
            ],

            [
                'faq_id' => 10,
                'keywords' => json_encode([
                    'health insurance',
                    'insurance documents',
                    'insurance papers',
                    'medical documents',
                    'EHIC',
                    'European Health Insurance Card',
                    'insurance card',
                    'health card',
                    'travel insurance',
                    'medical insurance'
                ])
            ],

            [
                'faq_id' => 11,
                'keywords' => json_encode([
                    'accessibility',
                    'disability',
                    'medical condition',
                    'chronic illness',
                    'special needs',
                    'wheelchair',
                    'accessible',
                    'regular medications',
                    'long term medication',
                    'medical support'
                ])
            ],

            // ------ MEETING PLACES ------
            [
                'faq_id' => 12,
                'keywords' => json_encode([
                    'meeting',
                    'meeting point',
                    'meeting place',
                    'meet',
                    'courthouse',
                    'court house',
                    'tribuanl',
                    'church',
                    'location',
                    'address',
                    'gather',
                    'assembly',
                    'group meeting',
                    'erasmus meeting',
                    'time',
                    'when',
                    'schedule'
                ])
            ],
        
            // ------ SIGHTSEEING -------
            [
                'faq_id' => 14,
                'keywords' => json_encode([
                    'lisbon',
                    'visit lisbon',
                    'tourist attractions',
                    'must see',
                    'things to do',
                    'places to visit',
                    'landmarks',
                    'sightseeing',
                    'sity centre'
                ])
            ],

            [
                'faq_id' => 15,
                'keywords' => json_encode([
                    'montijo',
                    'things to do in montijo',
                    'visit montijo',
                    'local attractions',
                    'parks',
                    'city centre'
                ])
            ],

            [
                'faq_id' => 16,
                'keywords' => json_encode([
                    'museum',
                    'museums',
                    'art museums',
                    'history museum',
                    'gallery',
                    'exhibition'
                ])
            ],

            [
                'faq_id' => 17,
                'keywords' => json_encode([
                    'beach',
                    'beaches',
                    'sea',
                    'swimming',
                    'coast',
                    'summer'
                ])
            ],

            [
                'faq_id' => 18,
                'keywords' => json_encode([
                    'park',
                    'nature',
                    'garden',
                    'green spaces',
                    'walking',
                    'picnic',
                    'hiking'
                ])
            ],

            [
                'faq_id' => 19,
                'keywords' => json_encode([
                    'day trip',
                    'one day trip',
                    'weekend trip',
                    'near lisbon',
                    'travel nearby',
                    'visit nearby'
                ])
            ],

            [
                'faq_id' => 20,
                'keywords' => json_encode([
                    'student dicount',
                    'discount',
                    'museum discount',
                    'reduce ticket',
                    'student price'
                ])
            ],

            [
                'faq_id' => 21,
                'keywords' => json_encode([
                    'events',
                    'festival',
                    'concert',
                    'culture',
                    'music',
                    'show',
                    'local events'
                ])
            ],
        
            [
                'faq_id' => 22,
                'keywords' => json_encode([
                    'photo',
                    'photography',
                    'instagram',
                    'viewpoint',
                    'miradouro',
                    'scenic view'
                ])
            ],

            [
                'faq_id' => 23,
                'keywords' => json_encode([
                    'church',
                    'cathredal',
                    'monument',
                    'history',
                    'hostoric',
                    'building',
                    'architecture',
                    'castle'
                ])
            ],

            [
                'faq_id' => 24,
                'keywords' => json_encode([
                    'oceanaruim',
                    'aquaruim',
                    'sea life',
                    'fish',
                    'marine life',
                    'lisbon oceanaruim'
                ])
            ],

            [
                'faq_id' => 25,
                'keywords' => json_encode([
                    'souvenir',
                    'souvenirs',
                    'gift',
                    'gifts',
                    'present',
                    'remember portugal',
                    'shopping',
                    'local products',
                    'postcards',
                    'magnets'
                ])
            ],

            [
                'faq_id' => 25,
                'keywords' => json_encode([
                    'boat tour',
                    'boat trip',
                    'river cruise',
                    'cruise',
                    'boat',
                    'tagus river',
                    'tejo',
                    'sightseeing boat',
                    'river tour'
                ])
            ],

            [
                'faq_id' => 26,
                'keywords' => json_encode([
                    'sunset',
                    'sunset spot',
                    'sunset view',
                    'viewpoint',
                    'mirandouro',
                    'best view',
                    'evening',
                    'golden hour'
                ])
            ],

            // ------- EMERGENCY ------
            [
                'faq_id' => 27,
                'keywords' => json_encode([
                    'emergency',
                    'emergency number',
                    'help',
                    'ambulance',
                    'police',
                    'fire deparment',
                    'fire brigade',
                    '112',
                    'call emergency',
                    'urgent help'
                ])
            ],

            [
                'faq_id' => 28,
                'keywords' => json_encode([
                    'when to call 112',
                    'call ambulance',
                    'medical emergency',
                    'serious accident',
                    'danger',
                    'unsafe',
                    'emergency situation',
                    'urgent'
                ])
            ],

            [
                'faq_id' => 29,
                'keywords' => json_encode([
                    'coordinator',
                    'erasmus coordinator',
                    'contact coordinator',
                    'private messages',
                    'help',
                    'support',
                    'epd'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'tourist police',
                    'tourist assitance',
                    'police for tourists',
                    'lost passport',
                    'stolen passport',
                    'lost id card',
                    'stolen id card',
                    'crime',
                    'theft'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'passport',
                    'lost passport',
                    'stolen passport',
                    'id card',
                    'identity card',
                    'documents',
                    'visa',
                    'residance permit'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'lost keys',
                    'keys',
                    'cannot enter',
                    'locked out',
                    'door key',
                    'house key',
                    'room key'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'crime',
                    'theft',
                    'stolen',
                    'robbery',
                    'pickpocket',
                    'assult',
                    'report crime'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'medical emergency',
                    'ambulance',
                    'injury',
                    'serious illness',
                    'hospital emergency',
                    'urgent medical help'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'fire',
                    'smoke',
                    'fire alarma',
                    'fire emergency',
                    'burning',
                    'evacuation'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'eathcuake',
                    'storm',
                    'flood',
                    'natural disaster',
                    'weather warning',
                    'emergency alert'
                ])
            ],

            [
                'faq_id' => 30,
                'keywords' => json_encode([
                    'passport',
                    'lost passport',
                    'ID card',
                    'identity card',
                    'stolen ID',
                    'travel document',
                    'lost ID',
                    'missing passport',
                    'missing ID',
                    'documents',
                    'identification'
                ])
            ]
        ]);
    }
}
