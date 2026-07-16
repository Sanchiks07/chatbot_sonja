<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('links')->insert([
            // ------ TRANSPORT ------
            [
                'faq_id' => 5,
                'title' => 'CP Trains',
                'url' => 'https://www.cp.pt'
            ],

            [
                'faq_id' => 5,
                'title' => 'Montijo central bus station',
                'url' => 'https://g.co/kgs/risf9gW'
            ],

            [
                'faq_id' => 5,
                'title' => 'Montijo ferry station',
                'url' => 'https://g.co/kgs/E4k8Ciz'
            ],

            [
                'faq_id' => 5,
                'title' => 'Ferry schedules',
                'url' => 'https://ttsl.pt/passageiros/horarios-de-ligacoes-fluviais/ligacao-montijo-cais-do-sodre/'
            ],

            [
                'faq_id' => 5,
                'title' => 'Lisbon ferry station',
                'url' => 'https://g.co/kgs/iYbHYTd'
            ],

            [
                'faq_id' => 5,
                'title' => 'Lisbon bus station',
                'url' => 'https://g.co/kgs/6YPNumK'
            ],

            [
                'faq_id' => 6,
                'title' => 'Navegante',
                'url' => 'https://www.navegante.pt'
            ],

            [
                'faq_id' => 6,
                'title' => 'Carris',
                'url' => 'https://www.carris.pt'
            ],

            [
                'faq_id' => 6,
                'title' => 'CP Trains',
                'url' => 'https://www.cp.pt'
            ],

            [
                'faq_id' => 6,
                'title' => 'TTSL Ferries',
                'url' => 'https://ttsl.pt'
            ],

            // ------ FOOD & GROCERIES ------
            [
                'faq_id' => 14,
                'title' => 'Continente',
                'url' => 'https://www.continente.pt'
            ],

            [
                'faq_id' => 14,
                'title' => 'Pingo Doce',
                'url' => 'https://www.pingodoce.pt'
            ],

            [
                'faq_id' => 14,
                'title' => 'Lidl',
                'url' => 'https://www.lidl.pt'
            ],

            [
                'faq_id' => 14,
                'title' => 'Aldi',
                'url' => 'https://www.aldi.pt'
            ],
            
            [
                'faq_id' => 15,
                'title' => 'Google Maps Restaurants',
                'url' => 'https://maps.app.goo.gl/iVMG1DoV5LYnwHny7'
            ],
            
            [
                'faq_id' => 22,
                'title' => 'Uber Eats',
                'url' => 'https://www.ubereats.com'
            ],
            
            [
                'faq_id' => 22,
                'title' => 'Glovo',
                'url' => 'https://glovoapp.com'
            ],
            
            [
                'faq_id' => 22,
                'title' => 'Bolt Food',
                'url' => 'https://food.bolt.eu'
            ],
            
            // ------ HEALTHCARE ------
            [
                'faq_id' => 24,
                'title' => 'SNS (Portuguese National Health Service)',
                'url' => 'https://www.sns.gov.pt'
            ],
            
            [
                'faq_id' => 25,
                'title' => 'European Commission EHIC',
                'url' => 'https://ec.europa.eu/social/main.jsp?catId=559'
            ],
            
            [
                'faq_id' => 26,
                'title' => 'Google Maps Pharmacies',
                'url' => 'https://maps.app.goo.gl/dBEkd89GTwu6Tet49'
            ],
            
            [
                'faq_id' => 27,
                'title' => 'SNS (Portuguese National Health Service)',
                'url' => 'https://www.sns.gov.pt'
            ],
            
            [
                'faq_id' => 28,
                'title' => 'SNS (Portuguese National Health Service)',
                'url' => 'https://www.sns.gov.pt'
            ],
            
            [
                'faq_id' => 29,
                'title' => 'SNS Mental Health',
                'url' => 'https://www.sns.gov.pt'
            ],
            
            [
                'faq_id' => 30,
                'title' => 'SNS Vacination',
                'url' => 'https://www.sns24.gov.pt/pt/servico/boletim-de-vacinas/'
            ],
            
            [
                'faq_id' => 31,
                'title' => 'SNS (Portuguese National Health Service)',
                'url' => 'https://www.sns.gov.pt'
            ],
            
            [
                'faq_id' => 32,
                'title' => 'Google Maps Dentists',
                'url' => 'https://maps.app.goo.gl/BbmENDhJYRUxdjrd6'
            ],
            
            [
                'faq_id' => 33,
                'title' => 'Google Maps Pharmacies',
                'url' => 'https://maps.app.goo.gl/Anzv2wr1TGm1kqASA'
            ],
            
            [
                'faq_id' => 34,
                'title' => 'European Commission EHIC',
                'url' => 'https://ec.europa.eu/social/main.jsp?catId=559'
            ],
            
            [
                'faq_id' => 35,
                'title' => 'SNS (Portuguese National Health Service)',
                'url' => 'https://www.sns.gov.pt'
            ],
            
            // ------ MEETING PLACES ------
            [
                'faq_id' => 36,
                'title' => 'Court House / Tribunal',
                'url' => 'https://maps.app.goo.gl/rN3LuP4mPUZbS6v7A'
            ],

            [
                'faq_id' => 36,
                'title' => 'Church',
                'url' => 'https://maps.app.goo.gl/s7NKprYaU3dBK3kW8'
            ],
            
            // ------ SEIGHTSEEING ------
            [
                'faq_id' => 38,
                'title' => 'Visit Lisbon',
                'url' => 'https://www.visitlisboa.com'
            ],
            
            [
                'faq_id' => 39,
                'title' => 'Visit Monitjo',
                'url' => 'https://www.mun-montijo.pt'
            ],
            
            [
                'faq_id' => 40,
                'title' => 'Museums in Lisbon',
                'url' => 'https://www.visitlisboa.com/en/discover/museums'
            ],
            
            [
                'faq_id' => 41,
                'title' => 'Costa da Caparica Beach',
                'url' => 'https://share.google/swAwjrraQFbhyiiS1'
            ],
            
            [
                'faq_id' => 41,
                'title' => 'Praia do Barro',
                'url' => 'https://www.turismoasturias.es/pt/descubre/costa/playas/playa-de-barro'
            ],
            
            [
                'faq_id' => 41,
                'title' => 'Paria dos Moinhos',
                'url' => 'https://www.tripadvisor.pt/Attraction_Review-g616220-d18546428-Reviews-Praia_dos_moinhos-Alcochete_Setubal_District_Alentejo.html'
            ],
            
            [
                'faq_id' => 42,
                'title' => 'Visit Lisbon Parks',
                'url' => 'https://www.visitlisboa.com/en/places?q%5Bcategories_id_in%5D%5B%5D=74&q%5Bcategories_id_in%5D%5B%5D=71'
            ],
            
            [
                'faq_id' => 43,
                'title' => 'Visit Portugal',
                'url' => 'https://www.visitportugal.com'
            ],
            
            [
                'faq_id' => 45,
                'title' => 'Visit Lisbon Eevnts',
                'url' => 'https://www.visitlisboa.com/en/events'
            ],
            
            [
                'faq_id' => 47,
                'title' => 'Visit Lisbon Heritage',
                'url' => 'https://www.visitlisboa.com/en/places?q%5Bcategories_id_in%5D%5B%5D=32'
            ],
            
            [
                'faq_id' => 48,
                'title' => 'Lisbon Oceanaruim',
                'url' => 'https://www.oceanario.pt'
            ],
            
            [
                'faq_id' => 49,
                'title' => 'Visit Lisboa Shopping',
                'url' => 'https://www.visitlisboa.com/en/discover/shopping'
            ],
            
            [
                'faq_id' => 50,
                'title' => 'Visit Lisbon River Cruises',
                'url' => 'https://www.viator.com/Lisbon-tourism/d538-r20149627571-s250080131?gclsrc=aw.ds&&m=63845&supag=173265355815&supca=12132299969&supsc=kwd-1547404216&supai=769445219984&supdv=c&supnt=g&suplp=1011771&supli=1011742&supti=kwd-1547404216&tsem=true&supci=kwd-1547404216&supap1=&supap2=&supfi=&synthetic_keyword=lisbon%20cruise&suppmas=&gad_source=1&gad_campaignid=12132299969&gbraid=0AAAAAD-gbd5JXYCVhdiuPqGSUvZKZLnfW&gclid=CjwKCAjwmdLSBhANEiwAkREMN_pon14fKVZRasY17cjof3MeG_dHO_6x_h2eTXPYfJfWX9EBgkZEbhoCqBQQAvD_BwE'
            ],
            
            [
                'faq_id' => 51,
                'title' => 'Miradouro de Santa Luiza',
                'url' => 'https://www.visitlisboa.com/pt-pt/locais/miradouro-de-santa-luzia'
            ],
            
            [
                'faq_id' => 51,
                'title' => 'Mirandouro de Senhora do Monte',
                'url' => 'https://www.visitlisboa.com/pt-pt/locais/miradouro-da-senhora-do-monte'
            ],
            
            [
                'faq_id' => 51,
                'title' => 'Miradouro do São Pedro de Alcântara',
                'url' => 'https://www.visitlisboa.com/pt-pt/locais/miradouro-de-s-pedro-de-alcantara'
            ],
            
            // ------ EMERGENCY ------
            [
                'faq_id' => 55,
                'title' => 'Google Maps EPD Office',
                'url' => 'https://maps.app.goo.gl/YkCZvPeYuTZA4VCM8'
            ],
            
            [
                'faq_id' => 56,
                'title' => 'Portuguese Police (PSP)',
                'url' => 'https://www.psp.pt/Pages/onde-estamos.aspx?lang=pt&f=turismo'
            ],
            
            [
                'faq_id' => 59,
                'title' => 'Portuguese Police (PSP)',
                'url' => 'https://www2.gov.pt/en/servicos/apresentar-uma-queixa-crime-a-policia-judiciaria'
            ],
            
            [
                'faq_id' => 63,
                'title' => 'Portuguese Civil Protection',
                'url' => 'https://www2.gov.pt/en/guias/perda-ou-roubo-da-carteira'
            ],
            
            [
                'faq_id' => 63,
                'title' => 'European e-Justice - Find Your Embassy or Consulate',
                'url' => 'https://e-justice.europa.eu '
            ],

            // ------ SHOPPING ------
            [
                'faq_id' => 66,
                'title' => 'Centro Colombo',
                'url' => 'https://www.colombo.pt'
            ],

            [
                'faq_id' => 66,
                'title' => 'Centro Vasco da Gama',
                'url' => 'https://www.centrovascodagama.pt'
            ],

            [
                'faq_id' => 66,
                'title' => 'Alegro Montijo',
                'url' => 'https://www.alegro.pt/montijo/'
            ],

            [
                'faq_id' => 67,
                'title' => 'Banco de Portugal - Notes and Coins',
                'url' => 'https://www.bportugal.pt/en/page/banknotes-and-coins'
            ],

            [
                'faq_id' => 67,
                'title' => 'Google Maps ATMs Near Montijo',
                'url' => 'https://maps.app.goo.gl/6b8Qw9hRjXfAqfRN8'
            ],

            [
                'faq_id' => 68,
                'title' => 'Uber Portugal',
                'url' => 'https://www.uber.com/pt/en/'
            ],

            [
                'faq_id' => 68,
                'title' => 'Bolt Portugal',
                'url' => 'https://bolt.eu/en/cities/lisbon/'
            ],

            [
                'faq_id' => 69,
                'title' => 'Basic Portuguese Phrases',
                'url' => 'https://www.practiceportuguese.com/learning-notes/basic-portuguese-phrases/'
            ],

            [
                'faq_id' => 71,
                'title' => 'Google Maps',
                'url' => 'https://www.google.com/maps'
            ],

            [
                'faq_id' => 72,
                'title' => 'How to Document Home Damage',
                'url' => 'https://www.wikihow.com/Document-Property-Damage'
            ]
        ]);
    }
}
