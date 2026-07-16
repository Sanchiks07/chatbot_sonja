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
                    'premises',
                    'building',
                    'facility',
                    'reception',
                    'desk',
                    'front desk',
                    'administration',
                    'administrative',
                    'headoffice',
                    'branch',
                    'telephone',
                    'hotline',
                    'landline',
                    'extension',
                    'directory',
                    'location',
                    'address',
                    'visit',
                    'office hours'
                ]),
            ],

            [
                'keyword_id' => 2,
                'words' => json_encode([
                    'whatsapp',
                    'chatroom',
                    'groupchat',
                    'broadcast',
                    'announcement',
                    'updates',
                    'invite',
                    'invitation',
                    'community',
                    'channel',
                    'messenger',
                    'conversation',
                    'discussion',
                    'participants',
                    'member',
                    'members',
                    'coordinator',
                    'notices',
                    'bulletin',
                    'communication'
                ])
            ],

            [
                'keyword_id' => 3,
                'words' => json_encode([
                    'privately',
                    'directly',
                    'personal',
                    'individually',
                    'one toone',
                    'dm',
                    'direct message',
                    'inbox',
                    'chatbox',
                    'text',
                    'contact',
                    'message',
                    'private message',
                    'personalchat',
                    'confidential',
                    'discreet',
                    'separate',
                    'individual',
                    'reply',
                    'respond'
                ])
            ],

            [
                'keyword_id' => 4,
                'words' => json_encode([
                    'emergency',
                    'urgent',
                    'immediate',
                    'critical',
                    'danger',
                    'hazard',
                    'risk',
                    'unsafe',
                    'injury',
                    'accident',
                    'incident',
                    'crisis',
                    'priority',
                    'assistance',
                    'support',
                    'rescue',
                    'lifet hreatening',
                    'criticality',
                    'severity',
                    'distress'
                ])
            ],

            // ------ TRANSPORT ------
            [
                'keyword_id' => 5,
                'words' => json_encode([
                    'transport',
                    'transportation',
                    'transit',
                    'commute',
                    'commuting',
                    'journey',
                    'travel',
                    'travelling',
                    'mobility',
                    'bus',
                    'train',
                    'tram',
                    'metro',
                    'ferry',
                    'uber',
                    'bolt',
                    'route',
                    'navigation',
                    'destination',
                    'connection'
                ])
            ],
            
            [
                'keyword_id' => 6,
                'words' => json_encode([
                    'navegante',
                    'pass',
                    'travelcard',
                    'smartcard',
                    'tap',
                    'validator',
                    'validate',
                    'scan',
                    'reader',
                    'fare',
                    'reload',
                    'replacement',
                    'damaged',
                    'broken',
                    'malfunction',
                    'defective',
                    'usable',
                    'contactless',
                    'metropolitan'
                ])
            ],

            // ------ ACCOMMODATION ------
            [
                'keyword_id' => 7,
                'words' => json_encode([
                    'checkin',
                    'move in',
                    'housing',
                    'residence',
                    'apartment',
                    'room',
                    'flat',
                    'property',
                    'inspection',
                    'inspect',
                    'condition',
                    'damage',
                    'scratch',
                    'brokenness',
                    'landlord',
                    'handover',
                    'keycode',
                    'entry',
                    'arrival',
                    'unpacking'
                ])
            ],

            [
                'keyword_id' => 8,
                'words' => json_encode([
                    'maintenance',
                    'repair',
                    'fault',
                    'issue',
                    'problem',
                    'leak',
                    'plumbing',
                    'electricity',
                    'heating',
                    'cooling',
                    'malfunctioning',
                    'defect',
                    'mould',
                    'odour',
                    'appliance',
                    'fixture',
                    'resident',
                    'caretaker',
                    'photograph',
                    'evidence'
                ])
            ],

            [
                'keyword_id' => 9,
                'words' => json_encode([
                    'wifi',
                    'wireless',
                    'internet',
                    'network',
                    'ssid',
                    'router',
                    'modem',
                    'password',
                    'credential',
                    'login',
                    'access',
                    'connection',
                    'online',
                    'broadband',
                    'signal',
                    'coverage',
                    'hotspot',
                    'ethernet',
                    'bandwidth',
                    'connectivity'
                ])
            ],

            [
                'keyword_id' => 10,
                'words' => json_encode([
                    'clean',
                    'cleaning',
                    'tidy',
                    'tidiness',
                    'hygiene',
                    'housekeeping',
                    'rubbish',
                    'garbage',
                    'trash',
                    'waste',
                    'bin',
                    'bins',
                    'dispose',
                    'disposal',
                    'litter',
                    'recycling',
                    'kitchen',
                    'bathroom',
                    'shared space',
                    'housemate'
                ])
            ],

            [
                'keyword_id' => 11,
                'words' => json_encode([
                    'appliance',
                    'appliances',
                    'equipment',
                    'device',
                    'machine',
                    'washer',
                    'dishwasher',
                    'microwave',
                    'oven',
                    'refrigerator',
                    'fridge',
                    'freezer',
                    'cooker',
                    'stove',
                    'laundry',
                    'kitchenware',
                    'amenities',
                    'facilities',
                    'household',
                    'instructions'
                ])
            ],

            [
                'keyword_id' => 12,
                'words' => json_encode([
                    'rules',
                    'policy',
                    'policies',
                    'guidelines',
                    'regulations',
                    'restriction',
                    'prohibited',
                    'permitted',
                    'visitors',
                    'guests',
                    'overnight',
                    'smoking',
                    'alcohol',
                    'pets',
                    'roommates',
                    'neighbours',
                    'noise',
                    'furniture',
                    'respect',
                    'behaviour'
                ]),
            ],

            [
                'keyword_id' => 13,
                'words' => json_encode([
                    'checkout',
                    'moveout',
                    'departure',
                    'vacate',
                    'vacating',
                    'exit',
                    'leaving',
                    'belongings',
                    'possessions',
                    'luggage',
                    'final',
                    'handoff',
                    'clearance',
                    'inspection report',
                    'handover form',
                    'tenancy',
                    'occupancy',
                    'departureday',
                    'vacancy',
                    'relocate'
                ])
            ],

            // ------ FOOD & GROCERIES ------
            [
                'keyword_id' => 14,
                'words' => json_encode([
                    'supermarket',
                    'groceries',
                    'grocery',
                    'shopping',
                    'shop',
                    'store',
                    'retail',
                    'market',
                    'food',
                    'drinks',
                    'essentials',
                    'supplies',
                    'provisions',
                    'toiletries',
                    'ingredients',
                    'continente',
                    'pingo doce',
                    'lidl',
                    'aldi',
                    'mini preco'
                ])
            ],

            [
                'keyword_id' => 15,
                'words' => json_encode([
                    'hungry',
                    'im hungry',
                    'restaurant',
                    'restaurants',
                    'café',
                    'cafe',
                    'bakery',
                    'bistro',
                    'eatery',
                    'diner',
                    'canteen',
                    'brunch',
                    'breakfast',
                    'lunch',
                    'dinner',
                    'meal',
                    'cuisine',
                    'pastries',
                    'coffee',
                    'espresso',
                    'dessert',
                    'menu'
                ])
            ],

            [
                'keyword_id' => 16,
                'words' => json_encode([
                    'cook',
                    'cooking',
                    'mealprep',
                    'dishes',
                    'dishwashing',
                    'utensils',
                    'cookware',
                    'pantry',
                    'cupboard',
                    'refrigeration',
                    'label',
                    'labelling',
                    'leftovers',
                    'ingredient shelf',
                    'communal',
                    'shared kitchen',
                    'meal',
                    'prepare',
                    'recipe',
                    'cooktop'
                ])
            ],
            
            [
                'keyword_id' => 17,
                'words' => json_encode([
                    'tap',
                    'faucet',
                    'sink',
                    'water',
                    'drinkable',
                    'potable',
                    'hydration',
                    'refill',
                    'bottle',
                    'reusable',
                    'filtered',
                    'purified',
                    'municipal',
                    'pipeline',
                    'supply',
                    'aqueduct',
                    'hydrant',
                    'hydration station',
                    'consumption',
                    'beverage'
                ])
            ],

            [
                'keyword_id' => 18,
                'words' => json_encode([
                    'cash',
                    'card',
                    'debit',
                    'credit',
                    'contactless',
                    'apple pay',
                    'google pay',
                    'wallet',
                    'payment',
                    'pay',
                    'purchase',
                    'transaction',
                    'terminal',
                    'pos',
                    'checkout',
                    'currency',
                    'bankcard',
                    'visa',
                    'mastercard',
                    'payment method'
                ])
            ],

            [
                'keyword_id' => 19,
                'words' => json_encode([
                    'vegetarian',
                    'vegan',
                    'glutenfree',
                    'allergy',
                    'allergic',
                    'intolerance',
                    'celiac',
                    'lactose',
                    'halal',
                    'kosher',
                    'diet',
                    'dietary',
                    'nutrition',
                    'ingredient',
                    'ingredients',
                    'allergen',
                    'menu',
                    'preference',
                    'restriction',
                    'veggie'
                ])
            ],

            [
                'keyword_id' => 20,
                'words' => json_encode([
                    'storage',
                    'store',
                    'fresh',
                    'freshness',
                    'leftovers',
                    'perishable',
                    'refrigerated',
                    'chilled',
                    'expiry',
                    'expired',
                    'spoiled',
                    'preservation',
                    'container',
                    'containers',
                    'labelled',
                    'organize',
                    'organised',
                    'fridge space',
                    'ownership',
                    'consume'
                ])
            ],

            [
                'keyword_id' => 21,
                'words' => json_encode([
                    'portuguese',
                    'traditional',
                    'authentic',
                    'cuisine',
                    'dish',
                    'specialty',
                    'delicacy',
                    'gastronomy',
                    'culinary',
                    'regional',
                    'pasteldenata',
                    'bacalhau',
                    'bifana',
                    'francesinha',
                    'caldoverde',
                    'flavour',
                    'tasting',
                    'localdish',
                    'heritage',
                    'recipe'
                ])
            ],

            [
                'keyword_id' => 22,
                'words' => json_encode([
                    'delivery',
                    'deliver',
                    'takeaway',
                    'takeout',
                    'ubereats',
                    'glovo',
                    'boltfood',
                    'courier',
                    'dispatch',
                    'ordering',
                    'ordered',
                    'deliveroo',
                    'doorstep',
                    'dropoff',
                    'pickup',
                    'collection',
                    'express',
                    'delivery app',
                    'meal delivery',
                    'online order'
                ])
            ],

            [
                'keyword_id' => 23,
                'words' => json_encode([
                    'sunday',
                    'weekend',
                    'holiday',
                    'holidays',
                    'public holiday',
                    'opening',
                    'closing',
                    'hours',
                    'schedule',
                    'timetable',
                    'operating',
                    'availability',
                    'open',
                    'closed',
                    'weekday',
                    'business hours',
                    'retailer',
                    'trading',
                    'seasonal',
                    'closure'
                ]),
            ],

            // ------ HEALTHCARE ------
            [
                'keyword_id' => 24,
                'words' => json_encode([
                    'healthcare',
                    'health',
                    'clinic',
                    'hospital',
                    'pharmacy',
                    'physician',
                    'treatment',
                    'medicalcare',
                    'healthcentre',
                    'consultation',
                    'diagnosis',
                    'checkup',
                    'examination',
                    'practitioner',
                    'specialist',
                    'healthservice',
                    'outpatient',
                    'inpatient',
                    'medicine',
                    'wellbeing'
                ])
            ],

            [
                'keyword_id' => 25,
                'words' => json_encode([
                    'ehic',
                    'european',
                    'insurance',
                    'coverage',
                    'insured',
                    'eligibility',
                    'resident',
                    'residency',
                    'traveller',
                    'travel',
                    'eustudent',
                    'eea',
                    'cardholder',
                    'entitlement',
                    'reciprocal',
                    'benefits',
                    'documentation',
                    'identification',
                    'portable',
                    'healthcard'
                ])
            ],

            [
                'keyword_id' => 26,
                'words' => json_encode([
                    'pharmacist',
                    'pharmacists',
                    'chemist',
                    'medication',
                    'medications',
                    'prescription',
                    'prescriptions',
                    'medicines',
                    'tablets',
                    'capsules',
                    'antibiotics',
                    'painkillers',
                    'antihistamine',
                    'ointment',
                    'bandages',
                    'thermometer',
                    'blood pressure',
                    'dispense',
                    'dispensing',
                    'over the counter'
                ])
            ],

            [
                'keyword_id' => 27,
                'words' => json_encode([
                    'doctor',
                    'doctors',
                    'general practitioner',
                    'gp',
                    'appointment',
                    'consult',
                    'consulting',
                    'consultant',
                    'consultant physician',
                    'booking',
                    'schedule',
                    'referral',
                    'identity',
                    'identification',
                    'passport',
                    'document',
                    'documents',
                    'patient',
                    'visit doctor',
                    'medical appointment'
                ])
            ],
            
            [
                'keyword_id' => 28,
                'words' => json_encode([
                    'prescribe',
                    'prescribed',
                    'prescriber',
                    'script',
                    'rx',
                    'dosage',
                    'dose',
                    'tablet',
                    'capsule',
                    'antibiotic',
                    'controlled',
                    'renewal',
                    'refill',
                    'dispensed',
                    'dispensation',
                    'authorization',
                    'physician order',
                    'medication course',
                    'treatment plan',
                    'drug'
                ])
            ],

            [
                'keyword_id' => 29,
                'words' => json_encode([
                    'mental',
                    'psychological',
                    'emotional',
                    'anxiety',
                    'stress',
                    'depression',
                    'depressed',
                    'counselling',
                    'counsellor',
                    'therapist',
                    'psychologist',
                    'psychiatrist',
                    'homesick',
                    'panic',
                    'loneliness',
                    'burnout',
                    'distress',
                    'supportive',
                    'resilience',
                    'wellness'
                ])
            ],

            [
                'keyword_id' => 30,
                'words' => json_encode([
                    'vaccine',
                    'vaccines',
                    'vaccination',
                    'vaccinations',
                    'immunization',
                    'immunisation',
                    'immunize',
                    'immunise',
                    'booster',
                    'boosterdose',
                    'injection',
                    'jab',
                    'inoculation',
                    'travelvaccine',
                    'flujab',
                    'covidjab',
                    'tetanus',
                    'measles',
                    'hepatitis',
                    'immunity'
                ])
            ],

            [
                'keyword_id' => 31,
                'words' => json_encode([
                    'cost',
                    'costs',
                    'price',
                    'prices',
                    'fee',
                    'fees',
                    'expense',
                    'expenses',
                    'charge',
                    'charges',
                    'billing',
                    'invoice',
                    'payment',
                    'covered',
                    'coverage plan',
                    'copayment',
                    'deductible',
                    'reimbursement',
                    'affordability',
                    'tariff'
                ])
            ],

            [
                'keyword_id' => 32,
                'words' => json_encode([
                    'dentist',
                    'dentistry',
                    'dental',
                    'tooth',
                    'teeth',
                    'toothache',
                    'molar',
                    'cavity',
                    'filling',
                    'crown',
                    'bridge',
                    'orthodontist',
                    'orthodontics',
                    'brace',
                    'braces',
                    'gum',
                    'gums',
                    'oral',
                    'mouth',
                    'hygienist'
                ])
            ],

            [
                'keyword_id' => 33,
                'words' => json_encode([
                    'headache',
                    'fever',
                    'migraine',
                    'cold',
                    'flu',
                    'cough',
                    'allergy',
                    'allergies',
                    'sore throat',
                    'nasal spray',
                    'pain relief',
                    'paracetamol',
                    'ibuprofen',
                    'lozenges',
                    'syrup',
                    'remedy',
                    'symptoms',
                    'relief',
                    'non prescription',
                    'selfcare'
                ])
            ],

            [
                'keyword_id' => 34,
                'words' => json_encode([
                    'documents',
                    'document',
                    'paperwork',
                    'records',
                    'record',
                    'copies',
                    'copy',
                    'printed',
                    'digital',
                    'insurance policy',
                    'certificate',
                    'proof',
                    'documentation',
                    'medical history',
                    'travel insurance',
                    'private insurance',
                    'health insurance',
                    'files',
                    'archive',
                    'backup'
                ]),
            ],

            [
                'keyword_id' => 35,
                'words' => json_encode([
                    'disability',
                    'disabled',
                    'accessibility',
                    'accessible',
                    'chronic',
                    'condition',
                    'conditions',
                    'mobility',
                    'wheelchair',
                    'impairment',
                    'assistance',
                    'accommodation',
                    'support',
                    'medication',
                    'prescription copy',
                    'treatment',
                    'therapy',
                    'care plan',
                    'assistance plan',
                    'inclusion'
                ])
            ],

            [
                'keyword_id' => 36,
                'words' => json_encode([
                    'sick',
                    'ill',
                    'unwell',
                    'fever',
                    'flu',
                    'cold',
                    'doctor',
                    'physician',
                    'clinic',
                    'hospital',
                    'medical',
                    'certificate',
                    'doctors',
                    'note',
                    'leave',
                    'absence',
                    'absent',
                    'internship',
                    'workplace',
                    'supervisor',
                    'manager',
                    'employer',
                    'work',
                    'illness',
                    'vomiting',
                    'nausea',
                    'migraine',
                    'infection',
                    'health',
                    'sick leave',
                    'sick note'
                ])
            ],

            // ------ MEETING PLACES ------
            [
                'keyword_id' => 37,
                'words' => json_encode([
                    'meeting',
                    'meet',
                    'meetup',
                    'gather',
                    'gathering',
                    'assembly',
                    'rendezvous',
                    'location',
                    'venue',
                    'tribunal',
                    'courthouse',
                    'church',
                    'arrival',
                    'group',
                    'participants',
                    'coordinator',
                    'schedule',
                    'announcement',
                    'navigation',
                    'landmark'
                ])
            ],

            // ------ SIGHTSEEING ------
            [
                'keyword_id' => 38,
                'words' => json_encode([
                    'sightseeing',
                    'attraction',
                    'attractions',
                    'landmark',
                    'monument',
                    'tourism',
                    'tourist',
                    'explore',
                    'exploration',
                    'visit',
                    'belém',
                    'jerónimos',
                    'rossio',
                    'praçadocomércio',
                    'santajusta',
                    'castle',
                    'lxfactory',
                    'timeout market',
                    'heritage',
                    'lisbon',
                    'lisboa'
                ])
            ],

            [
                'keyword_id' => 39,
                'words' => json_encode([
                    'montijo',
                    'promenade',
                    'riverside',
                    'waterfront',
                    'garden',
                    'church',
                    'parish',
                    'historic',
                    'centre',
                    'downtown',
                    'square',
                    'walking',
                    'stroll',
                    'exploring',
                    'neighbourhood',
                    'architecture',
                    'scenery',
                    'viewpoint',
                    'culture',
                    'leisure'
                ])
            ],
            
            [
                'keyword_id' => 40,
                'words' => json_encode([
                    'museum',
                    'museums',
                    'gallery',
                    'galleries',
                    'exhibition',
                    'exhibitions',
                    'artwork',
                    'painting',
                    'sculpture',
                    'artifact',
                    'collection',
                    'curator',
                    'oceanarium',
                    'maat',
                    'gulbenkian',
                    'azulejo',
                    'coach museum',
                    'culture',
                    'history',
                    'science'
                ])
            ],

            [
                'keyword_id' => 41,
                'words' => json_encode([
                    'beach',
                    'beaches',
                    'coast',
                    'coastline',
                    'shore',
                    'seaside',
                    'sand',
                    'ocean',
                    'atlantic',
                    'waves',
                    'swimming',
                    'sunbathing',
                    'lifeguard',
                    'tide',
                    'bay',
                    'cove',
                    'caparica',
                    'barro',
                    'moinhos',
                    'seaview'
                ])
            ],

            [
                'keyword_id' => 42,
                'words' => json_encode([
                    'park',
                    'parks',
                    'garden',
                    'gardens',
                    'nature',
                    'outdoors',
                    'greenery',
                    'picnic',
                    'walking',
                    'hiking',
                    'jogging',
                    'trail',
                    'paths',
                    'forest',
                    'woodland',
                    'botanical',
                    'recreation',
                    'relaxation',
                    'freshair',
                    'landscape'
                ])
            ],

            [
                'keyword_id' => 43,
                'words' => json_encode([
                    'daytrip',
                    'excursion',
                    'getaway',
                    'destination',
                    'journey',
                    'travel',
                    'trip',
                    'sintra',
                    'cascais',
                    'setúbal',
                    'sesimbra',
                    'óbidos',
                    'évora',
                    'railway',
                    'bus',
                    'commute',
                    'explorer',
                    'itinerary',
                    'adventure',
                    'escape'
                ])
            ],

            [
                'keyword_id' => 44,
                'words' => json_encode([
                    'discount',
                    'discounts',
                    'studentcard',
                    'studentid',
                    'erasmusid',
                    'identification card',
                    'admission',
                    'ticket',
                    'tickets',
                    'reduced',
                    'concession',
                    'concessions',
                    'offer',
                    'offers',
                    'promotion',
                    'promotions',
                    'saving',
                    'savings',
                    'eligible',
                    'eligibility'
                ])
            ],

            [
                'keyword_id' => 45,
                'words' => json_encode([
                    'event',
                    'events',
                    'festival',
                    'festivals',
                    'concert',
                    'concerts',
                    'celebration',
                    'celebrations',
                    'exhibit',
                    'market',
                    'markets',
                    'performance',
                    'performances',
                    'livemusic',
                    'fair',
                    'carnival',
                    'parade',
                    'culturefest',
                    'calendar',
                    'schedule of events'
                ])
            ],

            [
                'keyword_id' => 46,
                'words' => json_encode([
                    'photography',
                    'photograph',
                    'photos',
                    'pictures',
                    'camera',
                    'viewpoint',
                    'viewpoints',
                    'miradouro',
                    'miradouros',
                    'sunset',
                    'sunrise',
                    'panorama',
                    'panoramic',
                    'skyline',
                    'scenic',
                    'landscape',
                    'vista',
                    'overlook',
                    'lookout',
                    'view'
                ]),
            ],

            [
                'keyword_id' => 47,
                'words' => json_encode([
                    'church',
                    'churches',
                    'monastery',
                    'monasteries',
                    'cathedral',
                    'convent',
                    'monument',
                    'monuments',
                    'heritage',
                    'architecture',
                    'architectural',
                    'historic',
                    'historical',
                    'medieval',
                    'fortress',
                    'tower',
                    'castle',
                    'chapel',
                    'basilica',
                    'sanctuary'
                ])
            ],

            [
                'keyword_id' => 48,
                'words' => json_encode([
                    'oceanarium',
                    'aquarium',
                    'marine',
                    'ocean',
                    'sea',
                    'shark',
                    'sharks',
                    'ray',
                    'rays',
                    'penguin',
                    'penguins',
                    'otter',
                    'otters',
                    'fish',
                    'reef',
                    'coral',
                    'aquatic',
                    'sealife',
                    'exhibit',
                    'underwater'
                ])
            ],

            [
                'keyword_id' => 49,
                'words' => json_encode([
                    'souvenir',
                    'souvenirs',
                    'gift',
                    'gifts',
                    'keepsake',
                    'memento',
                    'postcard',
                    'magnet',
                    'ceramics',
                    'cork',
                    'azulejo',
                    'craft',
                    'handmade',
                    'artisan',
                    'wine',
                    'olive oil',
                    'trinket',
                    'memorabilia',
                    'shop',
                    'shopping'
                ])
            ],

            [
                'keyword_id' => 50,
                'words' => json_encode([
                    'boat',
                    'boats',
                    'cruise',
                    'cruises',
                    'river',
                    'tagus',
                    'tour',
                    'tours',
                    'sailing',
                    'sail',
                    'vessel',
                    'ship',
                    'water',
                    'waterfront',
                    'harbour',
                    'marina',
                    'captain',
                    'voyage',
                    'sunset',
                    'guided'
                ])
            ],
            
            [
                'keyword_id' => 51,
                'words' => json_encode([
                    'sunset',
                    'sunrise',
                    'evening',
                    'goldenhour',
                    'dusk',
                    'twilight',
                    'sky',
                    'orange',
                    'horizon',
                    'viewpoint',
                    'miradouro',
                    'miradouros',
                    'panorama',
                    'scenery',
                    'river',
                    'tagus',
                    'nightfall',
                    'sun',
                    'glow',
                    'spectacle'
                ])
            ],

            // ------ EMERGENCY ------
            [
                'keyword_id' => 52,
                'words' => json_encode([
                    'dying',
                    'emergency',
                    'urgent',
                    '112',
                    'ambulance',
                    'police',
                    'fire',
                    'injury',
                    'accident',
                    'danger',
                    'unsafe',
                    'crisis',
                    'urgentcare',
                    'rescue',
                    'help',
                    'life threatening',
                    'victim',
                    'injured',
                    'unconscious',
                    'emergency service',
                    'operator'
                ])
            ],

            [
                'keyword_id' => 53,
                'words' => json_encode([
                    'emergency',
                    'urgent',
                    'immediate',
                    'serious',
                    'critical',
                    'danger',
                    'risk',
                    'unsafe',
                    'accident',
                    'injury',
                    'injured',
                    'crisis',
                    'threat',
                    'safety',
                    'crime',
                    'fire',
                    'medical',
                    'severe',
                    'critical condition',
                    'life threatening'
                ])
            ],

            [
                'keyword_id' => 54,
                'words' => json_encode([
                    'coordinator',
                    'erasmus',
                    'support',
                    'assistance',
                    'help',
                    'guidance',
                    'contact',
                    'message',
                    'question',
                    'problem',
                    'issue',
                    'matter',
                    'personal',
                    'private',
                    'housing',
                    'keys',
                    'programme',
                    'advisor',
                    'staff',
                    'office'
                ])
            ],

            [
                'keyword_id' => 55,
                'words' => json_encode([
                    'epd',
                    'office',
                    'address',
                    'location',
                    'hours',
                    'schedule',
                    'staff',
                    'support',
                    'assistance',
                    'help',
                    'visit',
                    'contact',
                    'coordinator',
                    'erasmus',
                    'centre',
                    'building',
                    'opening',
                    'available',
                    'information',
                    'guidance'
                ])
            ],

            [
                'keyword_id' => 56,
                'words' => json_encode([
                    'police',
                    'psp',
                    'theft',
                    'stolen',
                    'steal',
                    'robbery',
                    'crime',
                    'victim',
                    'passport',
                    'id',
                    'identity',
                    'document',
                    'documents',
                    'wallet',
                    'phone',
                    'bag',
                    'embassy',
                    'consulate',
                    'report',
                    'complaint'
                ])
            ],

            [
                'keyword_id' => 57,
                'words' => json_encode([
                    'passport',
                    'id',
                    'identity',
                    'document',
                    'documents',
                    'identification',
                    'papers',
                    'lost',
                    'missing',
                    'stolen',
                    'theft',
                    'embassy',
                    'consulate',
                    'replacement',
                    'copy',
                    'digital',
                    'travel',
                    'permit',
                    'card',
                    'official'
                ]),
            ],

            [
                'keyword_id' => 58,
                'words' => json_encode([
                    'key',
                    'keys',
                    'lock',
                    'locked',
                    'door',
                    'entry',
                    'access',
                    'room',
                    'house',
                    'apartment',
                    'residence',
                    'accommodation',
                    'landlord',
                    'replacement',
                    'spare',
                    'lost',
                    'missing',
                    'outside',
                    'inside',
                    'unlock'
                ])
            ],

            [
                'keyword_id' => 59,
                'words' => json_encode([
                    'crime',
                    'incident',
                    'report',
                    'victim',
                    'police',
                    'assault',
                    'attack',
                    'threat',
                    'danger',
                    'unsafe',
                    'harm',
                    'violence',
                    'complaint',
                    'statement',
                    'case',
                    'officer',
                    'authority',
                    'support',
                    'safety',
                    'help'
                ])
            ],

            [
                'keyword_id' => 60,
                'words' => json_encode([
                    'medical',
                    'medicine',
                    'health',
                    'emergency',
                    'urgent',
                    'ambulance',
                    'injury',
                    'injured',
                    'pain',
                    'sick',
                    'ill',
                    'illness',
                    'breathing',
                    'unconscious',
                    'seizure',
                    'accident',
                    'crisis',
                    'hospital',
                    'rescue',
                    'treatment'
                ])
            ],

            [
                'keyword_id' => 61,
                'words' => json_encode([
                    'fire',
                    'smoke',
                    'flame',
                    'flames',
                    'burning',
                    'burn',
                    'alarm',
                    'evacuation',
                    'escape',
                    'exit',
                    'danger',
                    'hazard',
                    'emergency',
                    'firefighter',
                    'firefighters',
                    'rescue',
                    'building',
                    'explosion',
                    'heat',
                    'safety'
                ])
            ],
            
            [
                'keyword_id' => 62,
                'words' => json_encode([
                    'disaster',
                    'natural',
                    'weather',
                    'storm',
                    'earthquake',
                    'flood',
                    'warning',
                    'alert',
                    'evacuation',
                    'safety',
                    'hazard',
                    'danger',
                    'emergency',
                    'conditions',
                    'climate',
                    'rain',
                    'wind',
                    'official',
                    'instruction',
                    'preparedness'
                ])
            ],
            
            [
                'keyword_id' => 63,
                'words' => json_encode([
                    'passport',
                    'id',
                    'identity',
                    'card',
                    'document',
                    'travel',
                    'embassy',
                    'consulate',
                    'replacement',
                    'lost',
                    'missing',
                    'stolen',
                    'theft',
                    'report',
                    'police',
                    'psp',
                    'national',
                    'emergency',
                    'copy',
                    'digital'
                ])
            ],

            // ------ SHOPPING ------
            [
                'keyword_id' => 64,
                'words' => json_encode([
                    'clothes',
                    'clothing',
                    'apparel',
                    'garments',
                    'fashion',
                    'outfit',
                    'outfits',
                    'wardrobe',
                    'jacket',
                    'coat',
                    'hoodie',
                    'shirt',
                    'tshirt',
                    'trousers',
                    'jeans',
                    'shoes',
                    'sneakers',
                    'dress',
                    'store',
                    'shop'
                ])
            ],

            [
                'keyword_id' => 65,
                'words' => json_encode([
                    'buy',
                    'purchase',
                    'shopping',
                    'checkout',
                    'discount',
                    'sale',
                    'saldos',
                    'offer',
                    'deal',
                    'budget',
                    'cheap',
                    'affordable',
                    'price',
                    'cost',
                    'return',
                    'exchange',
                    'receipt',
                    'fitting room',
                    'try on',
                    'second hand'
                ])
            ],

            [
                'keyword_id' => 66,
                'words' => json_encode([
                    'shopping centre',
                    'shopping center',
                    'mall',
                    'malls',
                    'centre',
                    'center',
                    'complex',
                    'retail',
                    'stores',
                    'food court',
                    'colombo',
                    'vasco da gama',
                    'alegro montijo',
                    'indoor',
                    'indoor shopping',
                    'opening hours',
                    'escalator',
                    'parking',
                    'cinema',
                    'hypermarket'
                ])
            ],

            [
                'keyword_id' => 67,
                'words' => json_encode([
                    'money',
                    'cash',
                    'withdraw',
                    'withdrawal',
                    'atm',
                    'multibanco',
                    'bank',
                    'bank machine',
                    'card',
                    'debit card',
                    'credit card',
                    'pin',
                    'fees',
                    'commission',
                    'euros',
                    'currency',
                    'exchange',
                    'balance',
                    'receipt',
                    'cashback'
                ])
            ],

            [
                'keyword_id' => 68,
                'words' => json_encode([
                    'taxi',
                    'cab',
                    'ride',
                    'rideshare',
                    'uber',
                    'bolt',
                    'driver',
                    'pickup',
                    'dropoff',
                    'fare',
                    'meter',
                    'booking',
                    'trip',
                    'airport transfer',
                    'transport',
                    'night ride',
                    'private hire',
                    'ride app',
                    'car service',
                    'vehicle'
                ])
            ],

            [
                'keyword_id' => 69,
                'words' => json_encode([
                    'portuguese',
                    'phrases',
                    'phrase',
                    'vocabulary',
                    'words',
                    'expressions',
                    'greetings',
                    'hello',
                    'obrigado',
                    'obrigada',
                    'desculpe',
                    'por favor',
                    'fala ingles',
                    'onde fica',
                    'quanto custa',
                    'translation',
                    'pronunciation',
                    'beginner',
                    'language',
                    'basics'
                ])
            ],

            [
                'keyword_id' => 70,
                'words' => json_encode([
                    'sonja',
                    'chatbot',
                    'assistant',
                    'bot',
                    'help',
                    'support',
                    'information',
                    'guide',
                    'questions',
                    'answers',
                    'purpose',
                    'features',
                    'capabilities',
                    'topics',
                    'erasmus',
                    'coordinator',
                    'advice',
                    'service',
                    'digital assistant',
                    'faq'
                ])
            ],

            [
                'keyword_id' => 71,
                'words' => json_encode([
                    'lost',
                    'missing',
                    'directions',
                    'way',
                    'location',
                    'map',
                    'maps',
                    'navigation',
                    'route',
                    'where am i',
                    'find my way',
                    'share location',
                    'address',
                    'landmark',
                    'station',
                    'safe place',
                    'unsafe',
                    'guidance',
                    'return home',
                    'orientation'
                ])
            ],

            [
                'keyword_id' => 72,
                'words' => json_encode([
                    'broken',
                    'broke',
                    'damage',
                    'damaged',
                    'repair',
                    'maintenance',
                    'fix',
                    'landlord',
                    'residence',
                    'accommodation',
                    'house',
                    'apartment',
                    'room',
                    'leak',
                    'electricity',
                    'plumbing',
                    'appliance',
                    'report',
                    'photos',
                    'issue'
                ])
            ]
        ]);
    }
}
