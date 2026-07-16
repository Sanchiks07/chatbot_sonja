<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            // ------ GENERAL INFORMATION ------
            [
                'category_id'=> 1,
                'title' => 'EPD Office',
                'answer' => <<<TEXT
                The EPD Office is located at:
                Pr. da República 40 - 2 Frente, Montijo

                Office Hours
                Monday to Friday
                • 09:15 - 13:00
                • 14:00 - 17:00

                Contact info
                +351 917 347 571
                TEXT,
                'priority' => 4,
            ],

            [
                'category_id'=> 1,
                'title' => 'Group Chat',
                'answer' => <<<TEXT
                The group chat is the main place for communication between Erasmus students and the coordinators.

                Please use it for:
                • General questions.
                • Important updates.
                • Announcements.
                • Information that may be useful for everyone.

                This helps keep everyone informed and avoids answering the same question multiple times.
                TEXT,
                'priority' => 3,
            ],

            [
                'category_id'=> 1,
                'title' => 'Private Messages',
                'answer' => <<<TEXT
                For personal questions or non-urgent matters, please use your own group chats instead of contacting the coordinators privately.

                Private messages should only be used when the information cannot be shared in the group chat.
                TEXT,
                'priority' => 3,
            ],

            [
                'category_id'=> 1,
                'title' => 'Emergencies',
                'answer' => <<<TEXT
                Contact the coordinators privately only in the case of a real emergency that requires immediate attention.

                Examples of emergencies include:
                • Serious accidents.
                • Medical emergencies.
                • Situations where your safety is at risk.

                Getting lost, missing the bus, or arriving late are not considered emergencies. For these situations, please use the group chat instead.
                TEXT,
                'priority' => 10,
            ],

            // ------ TRANSPORT ------
            [
                'category_id'=> 2,
                'title' => 'Public Transport',
                'answer' => <<<TEXT
                Portugal has an extensive public transport network including buses, trains, trams and ferries.

                • Use Google Maps to plan routes and check live departure times.
                • Uber and Bolt are widely available if you prefer private transport.

                For more detailed information, use the helpful links below.
                TEXT,
                'priority' => 7,
            ],

            [
                'category_id'=> 2,
                'title' => 'Lisboa Transport Card',
                'answer' => <<<TEXT
                During your Erasmus stay, you will receive a Navegante (Lisboa Transport) Card, which gives you access to public transport throughout the Lisbon metropolitan area.

                The card can be used on:
                • Buses.
                • Metro.
                • Trams.
                • Ferries.
                • Most local trains.

                Simply tap your card on the validator when entering the transport. There is no need to buy a separate ticket each time you travel.

                If your card is lost, damaged or stops working, contact your Erasmus coordinator as soon as possible.
                TEXT,
                'priority' => 7,
            ],

            // ----- ACCOMMODATION ------
            [
                'category_id'=> 3,
                'title' => 'Check-In and Moving In',
                'answer' => <<<TEXT
                After arriving at your accommodation, follow the instructions provided by your Erasmus coordinator.

                When you move in:
                • Inspect your room or apartment carefully.
                • Report any existing damage as soon as possible to avoid being held responsible later.
                • Follow all check-in instructions before settling in.

                Door Code: 5812
                TEXT,
                'priority' => 7,
            ],

            [
                'category_id'=> 3,
                'title' => 'Accommodation Problems',
                'answer' => <<<TEXT
                If something in your accommodation is damaged or not working properly, report it as soon as possible.

                You can contact:
                • The residence manager.
                • Your Erasmus coordinator.

                If possible, include photos of the problem to help explain the issue and speed up the repair process.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 3,
                'title' => 'Wi-Fi and Internet',
                'answer' => <<<TEXT
                Free Wi-Fi is available in your accommodation.

                The Wi-Fi network name and password are usually displayed somewhere inside the house, such as:

                • The kitchen.
                • The living room.
                • Near the router.

                If you cannot find the information, ask your friends or the other people who are living with you in your accommodation.
                TEXT,
                'priority' => 8,
            ],

            [
                'category_id'=> 3,
                'title' => 'Cleaning Responsibilities',
                'answer' => <<<TEXT
                Students are responsible for keeping both their private rooms and shared spaces clean.

                Please remember to:
                • Clean up after yourself.
                • Keep the kitchen and bathroom tidy.
                • Take out the rubbish regularly.
                • Respect shared areas so everyone can enjoy a clean and comfortable living environment.

                The trash bins are located in front of the houses.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 3,
                'title' => 'Household Appliances',
                'answer' => <<<TEXT
                Most accommodations include basic household appliances such as:
                • Washing machine.
                • Dishwasher.
                • Oven.
                • Microwave.
                • Refrigerator.

                Always follow the instructions provided by your Erasmus coordinator and avoid using any appliance that appears damaged or unsafe.

                Report broken equipment as soon as possible.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 3,
                'title' => 'Accommodation Rules',
                'answer' => <<<TEXT
                Please respect the accommodation rules throughout your stay.

                These include:
                • Keeping noise to a minimum, especially during quiet hours.
                • Do not move any furniture around.
                • Maintaining cleanliness in shared areas.
                • Following the rules regarding smoking, alcohol, guests and pets.
                • Respecting your roommates and neighbours.

                Following these rules helps create a safe, comfortable and enjoyable environment for everyone.
                TEXT,
                'priority' => 8,
            ],

            [
                'category_id'=> 3,
                'title' => 'Check-Out and Leaving Accommodation',
                'answer' => <<<TEXT
                Before leaving your accommodation:
                • Clean your room and any shared spaces you used.
                • Remove all personal belongings.
                • Follow the check-out procedures provided by your Erasmus coordinator.

                Completing the check-out process correctly helps avoid unnecessary charges or delays after your departure.
                TEXT,
                'priority' => 6,
            ],

            // ----- FOOD & GROCERIES ------
            [
                'category_id'=> 4,
                'title' => 'Supermarkets',
                'answer' => <<<TEXT
                Several supermarkets are available near the accommodation where you can buy food, drinks and everyday essentials.

                The most common supermarket chains in Portugal include:
                • Continente
                • Pingo Doce
                • Lidl
                • Aldi
                • Mini Preço

                Most supermarkets are open every day, although opening hours may vary.
                TEXT,
                'priority' => 8,
            ],

            [
                'category_id'=> 4,
                'title' => 'Restaurants and Cafés',
                'answer' => <<<TEXT
                There are many restaurants, cafés and bakeries around Montijo offering Portuguese and international cuisine.

                Google Maps is the easiest way to discover nearby places, check reviews and opening hours.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 4,
                'title' => 'Cooking at Home',
                'answer' => <<<TEXT
                Students are responsible for preparing their own meals.

                Please remember to:
                • Clean the kitchen after cooking.
                • Wash your dishes.
                • Respect shared kitchen spaces.
                • Label your food if you are sharing a refrigerator.

                Keeping the kitchen clean makes living together much easier.
                TEXT,
                'priority' => 5,
            ],
            
            [
                'category_id'=> 4,
                'title' => 'Tap Water',
                'answer' => <<<TEXT
                Tap water in Portugal is safe to drink unless you are informed otherwise.

                You can refill reusable water bottles directly from the tap.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 4,
                'title' => 'Paying for Groceries',
                'answer' => <<<TEXT
                Most supermarkets, cafés and restaurants accept both cash and card payments.

                Many places also accept contactless payments such as Apple Pay and Google Pay.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 4,
                'title' => 'Dietary Requirements',
                'answer' => <<<TEXT
                Many supermarkets sell vegetarian, vegan and gluten-free products.

                Restaurants often indicate dietary options on their menus, but if you have allergies or special dietary requirements, always ask the staff before ordering.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 4,
                'title' => 'Food Sotrage',
                'answer' => <<<TEXT
                Store your food properly to keep it fresh and avoid waste.

                When sharing a refrigerator:
                • Label your food if necessary.
                • Do not take food that belongs to other students.
                • Clean up expired or spoiled food regularly.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 4,
                'title' => 'Local Portuguese Food',
                'answer' => <<<TEXT
                While studying in Portugal, don't miss the opportunity to try some traditional dishes, such as:

                • Pastel de Nata
                • Bacalhau
                • Bifana
                • Francesinha
                • Caldo Verde

                Exploring local cuisine is a great way to experience Portuguese culture.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 4,
                'title' => 'Food Delivery',
                'answer' => <<<TEXT
                If you don't feel like cooking, you can order food using delivery services such as Uber Eats, Glovo or Bolt Food.

                Availability depends on your location and the restaurant's opening hours.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 4,
                'title' => 'Shopping on Sundays and Holidays',
                'answer' => <<<TEXT
                Many supermarkets are open on Sundays, although they may have shorter opening hours.

                On public holidays, some shops may be closed or operate with reduced hours, so it is a good idea to buy groceries in advance.
                TEXT,
                'priority' => 5,
            ],

            // ----- HEALTHCARE ------
            [
                'category_id'=> 5,
                'title' => 'Healthcare',
                'answer' => <<<TEXT
                If you need medical assistance during your Erasmus stay, Portugal offers a wide range of healthcare services.

                Depending on your situation, you may visit:
                • A pharmacy.
                • A health centre.
                • A medical clinic.
                • A hospital.

                For serious medical emergencies, follow the emergency procedures provided by your Erasmus coordinator.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'European Health Insurance Card (EHIC)',
                'answer' => <<<TEXT
                If you are an EU or EEA student, you should bring your European Health Insurance Card (EHIC).

                The EHIC allows you to receive medically necessary healthcare during your stay under the same conditions as Portuguese residents.

                Keep your card with you whenever you travel.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Pharmacies',
                'answer' => <<<TEXT
                Pharmacies are widely available throughout Portugal.

                You can visit a pharmacy to:
                • Buy over-the-counter medicines.
                • Collect prescription medication.
                • Receive advice about minor health concerns.

                Some pharmacies also provide additional healthcare services, such as blood pressure monitoring.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Finding a Doctor',
                'answer' => <<<TEXT
                If you need to see a doctor during your stay, you can visit a health centre, private clinic or hospital.

                If you are unsure where to go, contact your Erasmus coordinator for guidance.

                Remember to bring your identification and any health insurance documents if required.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Medical Prescriptions',
                'answer' => <<<TEXT
                Prescription medicines in Portugal can only be purchased with a valid prescription issued by a doctor.

                Always follow the dosage instructions and never share prescription medication with other students.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Mental Health Support',
                'answer' => <<<TEXT
                Moving to another country can sometimes feel overwhelming.

                If you are experiencing stress, anxiety or other mental health concerns, do not hesitate to seek professional support.

                If you are unsure where to begin, your Erasmus coordinator can help direct you to the appropriate services.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Vaccinations',
                'answer' => <<<TEXT
                No additional vaccinations are generally required for students travelling to Portugal.

                If you require a specific vaccination during your stay, consult a healthcare professional or visit a medical clinic.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Medical Costs',
                'answer' => <<<TEXT
                The cost of healthcare depends on the type of medical service you need and your health insurance coverage.

                Students with a valid European Health Insurance Card (EHIC) may be eligible for reduced-cost or covered healthcare services.

                Private healthcare services usually have additional fees.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Dental Care',
                'answer' => <<<TEXT
                If you need dental treatment during your stay, you can visit a private dental clinic.

                Routine dental care is generally not covered by the European Health Insurance Card (EHIC), so treatment may involve additional costs.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Buying Medicine',
                'answer' => <<<TEXT
                Many common medicines, such as painkillers, allergy medication and cold remedies, can be purchased directly from a pharmacy.

                For certain medicines, a doctor's prescription is required.

                If you are unsure which medication you need, ask the pharmacist for advice.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Health Insurance Documents',
                'answer' => <<<TEXT
                Before travelling to Portugal, make sure you bring all necessary health insurance documents.

                These may include:
                • Your European Health Insurance Card (EHIC), if applicable.
                • Travel insurance documents.
                • Any private health insurance information.
                • Copies of important medical documents if you have an ongoing medical condition.

                Keeping both digital and printed copies of these documents can be during your stay.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id'=> 5,
                'title' => 'Accessibility and Medical Conditions',
                'answer' => <<<TEXT
                If you have a disability, chronic illness or any ongoing medical condition, it is a good idea to inform your Erasmus coordinator before or shortly after your arrival.

                If you take regular medication:
                • Bring enough medication for your stay whenever possible.
                • Carry copies of any important prescriptions or medical documents.
                • Make sure your medication is transported according to travel regulations.

                If you need additional support or accessibility arrangements during your Erasmus stay, your coordinator can help direct you to the appropriate services.
                TEXT,
                'priority' => 9,
            ],

            [
                'category_id' => 5,
                'title' => 'Feeling Sick During Your Internship',
                'answer' => <<<TEXT
                If you become ill during your internship, you should not go to work if your condition prevents you from working safely.

                As soon as possible:
                • Visit a doctor or a healthcare centre for a medical examination.
                • If necessary, ask the doctor for a medical certificate (sick leave).
                • Inform your workplace supervisor immediately that you are unwell and unable to attend work.
                • Send your medical certificate to your supervisor if they request it.

                If your illness lasts for several days or affects your internship, you should also inform your Erasmus coordinator so they are aware of your situation and can provide support if needed.

                Always communicate with your supervisor as early as possible. Keeping your workplace informed helps avoid misunderstandings and ensures your absence is properly documented.
                TEXT,
                'priority' => 9,
            ],

            // ------ MEETING PLACES ------
            [
                'category_id'=> 6,
                'title' => 'Common Meeting Points',
                'answer' => <<<TEXT
                Erasmus meetings take place at one of the designated meeting points provided by your coordinator.

                The most common locations are:
                • Court House / Tribunal
                • Church

                The exact meeting time is always shared in the official WhatsApp group or your designated communication platform. Please check the latest announcements carefully, as meeting times may change.

                You can use the Google Maps link below to navigate to the meeting location.
                TEXT,
                'priority' => 6,
            ],

            // ------ SIGHTSEEING ------
            [
                'category_id'=> 7,
                'title' => 'Must-Visit Places in Lisbon',
                'answer' => <<<TEXT
                Lisbon offers many famous attractions that are worth visiting during your Erasmus stay.

                Some of the most popular places include:
                • Belém Tower
                • Jerónimos Monastery
                • Praça do Comércio
                • Rossio Square
                • Santa Justa Lift
                • São Jorge Castle
                • LX Factory
                • Time Out Market

                Many of these locations can easily be reached using public transport.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Places to Visit in Montijo',
                'answer' => <<<TEXT
                Montijo is a quieter city, but there are still several places worth exploring.

                Some popular locations include:
                • The riverside promenade.
                • Igreja Matriz de Montijo.
                • Municipal Garden.
                • Local cafés and bakeries.
                • Traditional Portuguese restaurants.

                It is a great place to experience everyday Portuguese life.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Museums',
                'answer' => <<<TEXT
                Lisbon has museums covering history, science, art and culture.

                Some popular museums include:
                • National Tile Museum.
                • MAAT Museum.
                • National Coach Museum.
                • Calouste Gulbenkian Museum.
                • Lisbon Oceanarium.

                Student discounts are available at many museums, so remember to carry your student card.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Beaches',
                'answer' => <<<TEXT
                Portugal is famous for its beautiful beaches.

                The closest popular beaches include:
                • Costa da Caparica.
                • Praia do Barro.
                • Praia dos Moinhos.

                During the summer months, beaches can become very busy, especially on weekends.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Parks and Nature',
                'answer' => <<<TEXT
                If you enjoy spending time outdoors, there are many parks and gardens around Lisbon and Montijo.

                They are perfect for:
                • Walking.
                • Relaxing.
                • Picnics.
                • Studying outside.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Day Trips',
                'answer' => <<<TEXT
                Many beautiful destinations can be visited in a single day from Lisbon.

                Popular choices include:
                • Sintra.
                • Cascais.
                • Setúbal.
                • Sesimbra.
                • Óbidos.
                • Évora.

                Most destinations are accessible by train or bus.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Student Discounts',
                'answer' => <<<TEXT
                Many museums, attractions and cultural sites offer discounts for students.

                Always carry your student card or Erasmus identification, as you may be asked to present it when purchasing tickets.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Cultural Events',
                'answer' => <<<TEXT
                Throughout the year, Lisbon and the surrounding areas host many cultural events, including:
                • Music festivals.
                • Street festivals.
                • Food markets.
                • Art exhibitions.
                • Traditional Portuguese celebrations.

                Check local event calendars to discover what's happening during your stay.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Photography Spots',
                'answer' => <<<TEXT
                Lisbon is known for its beautiful viewpoints, called miradouros.

                Some of the most popular include:
                • Miradouro de Santa Luzia.
                • Miradouro da Senhora do Monte.
                • Miradouro de São Pedro de Alcântara.
                • Miradouro das Portas do Sol.

                These are excellent places to watch the sunset and enjoy panoramic views of the city.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Churches and Historic Monuments',
                'answer' => <<<TEXT
                Portugal has a rich cultural heritage, with many historic churches, monasteries and monuments open to visitors.

                Some of the most famous include:
                • Jerónimos Monastery.
                • Lisbon Cathedral.
                • São Jorge Castle.
                • Belém Tower.
                • Carmo Convent.

                These sites offer a glimpse into Portugal's history and architectural heritage.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Oceanarium',
                'answer' => <<<TEXT
                The Lisbon Oceanarium is one of the largest indoor aquariums in Europe and is one of the city's most popular attractions.

                Visitors can explore exhibits featuring:
                • Sharks.
                • Rays.
                • Penguins.
                • Sea otters.
                • Tropical fish.

                It is suitable for visitors of all ages and can easily be reached by public transport.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Souvenirs and Gifts',
                'answer' => <<<TEXT
                If you would like to take a piece of Portugal home, there are many shops selling traditional souvenirs and locally made products.

                Popular souvenirs include:
                • Pastéis de Nata gift boxes.
                • Portuguese cork products.
                • Azulejo (traditional tile) decorations.
                • Handmade ceramics.
                • Magnets and postcards.
                • Portuguese wines and olive oil.

                Many souvenir shops can be found in Lisbon city centre, especially around Baixa, Chiado and Belém.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Boat Tours and River Cruises',
                'answer' => <<<TEXT
                One of the best ways to see Lisbon is from the Tagus River.

                Boat tours offer unique views of many famous landmarks, including:
                • Belém Tower.
                • 25 de Abril Bridge.
                • MAAT Museum.
                • Praça do Comércio.
                • Christ the King (Cristo Rei).

                Several companies offer sightseeing cruises, sunset cruises and guided boat tours throughout the year.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 7,
                'title' => 'Sunset Spots',
                'answer' => <<<TEXT
                Lisbon is famous for its beautiful sunsets, and the city's viewpoints (miradouros) are the perfect places to enjoy them.

                Some of the most popular sunset spots include:
                • Miradouro de Santa Luzia.
                • Miradouro da Senhora do Monte.
                • Miradouro de São Pedro de Alcântara.
                • Miradouro das Portas do Sol.

                Arrive a little before sunset to find a good spot and enjoy panoramic views over the city and the Tagus River. These viewpoints are especially popular during spring and summer.
                TEXT,
                'priority' => 6,
            ],

            // ----- EMERGENCY ------
            [
                'category_id'=> 8,
                'title' => 'Emergency Numbers',
                'answer' => <<<TEXT
                If you are in a life-threatening or urgent situation, call 112, the national emergency number in Portugal.

                Emergency services available through 112 include:
                • Ambulance.
                • Police.
                • Fire deparment.

                The service is available 24 hours a day and operators can usually assist in English.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'When Should I Call 112?',
                'answer' => <<<TEXT
                Only call 112 if the situation requires immediate assistance.

                Examples include:
                • Serious injuries.
                • Medical emergencies.
                • Fire.
                • Crimes in progress.
                • Situations where someone's safety is at immediate risk.

                Missing the bus, getting lost or forgetting your keys are not emergencies.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Contacting Your Erasmus Coordinator',
                'answer' => <<<TEXT
                If you need assistance that is not life-threatening, contact your Erasmus coordinator first.

                Examples include:
                • Accommodation issues.
                • Lost accommodation keys.
                • Problems with your Erasmus programme.
                • Questions that cannot be answered in the group chat.

                For personal matters, avoid contacting coordinators privately unless it is genuinely necessary.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'EPD Office - Emergency',
                'answer' => <<<TEXT
                If you require assistance during office hours, you can visit the EPD Office.

                Address
                Pr. da República 40 - 2 Frente, Montijo

                Office Hours
                Monday to Friday
                09:15 - 13:00
                14:00 - 17:00

                Outside office hours, contact your coordinator only if the situation is urgent.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Tourist Police',
                'answer' => <<<TEXT
                If you are the victim of theft, lose important documents or require police assistance, contact the Portuguese Police (PSP).

                If your passport or national ID has been lost or stolen, you should also contact your country's embassy or consulate as soon as possible.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Lost or Stolen Documents',
                'answer' => <<<TEXT
                If your passport, ID card or other important documents are lost or stolen:
                • Report the incident to the police.
                • Contact your embassy or consulate.
                • Inform your Erasmus coordinator if the situation affects your stay.

                Keep digital copies of important documents whenever possible.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Lost Keys',
                'answer' => <<<TEXT
                If you lose your accommodation keys or are locked out, contact your Erasmus coordinator or landlord as soon as possible.

                Do not attempt to force entry or damage the property.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Reporting a Crime',
                'answer' => <<<TEXT
                If you are the victim of a crime:
                • Move to a safe location.
                • Contact the police if necessary.
                • Report the incident as soon as possible.
                • Inform your Erasmus coordinator if you need additional support.

                If anyone is in immediate danger, call 112.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Medical Emergencies',
                'answer' => <<<TEXT
                If you or someone else requires urgent medical attention:
                • Call 112 immediately.
                • Clearly explain your location and what has happened.
                • Follow the operator's instructions until help arrives.

                For non-urgent medical concerns, visit a health centre, clinic or pharmacy instead.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Fire Safety',
                'answer' => <<<TEXT
                If you discover a fire:
                • Leave the building immediately if it is safe to do so.
                • Warn others nearby.
                • Call 112.
                • Never use lifts during a fire evacuation.

                Only return to the building once emergency services confirm it is safe.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Natural Emergencies',
                'answer' => <<<TEXT
                Although serious natural disasters are uncommon, it is important to follow official instructions during severe weather or other emergency situations.

                If authorities issue warnings:
                • Stay informed through official channels.
                • Follow evacuation or safety instructions if required.
                • Contact your Erasmus coordinator if the situation affects your accommodation or travel.
                TEXT,
                'priority' => 10,
            ],

            [
                'category_id'=> 8,
                'title' => 'Lost or Stolen Passport / ID Card',
                'answer' => <<<TEXT
                If your passport or national ID card is lost or stolen during your Erasmus stay:
                • Report the loss or theft to the Portuguese Police (PSP) as soon as possible.
                • Contact your country's embassy or consulate to request a replacement passport, emergency travel document or guidance on replacing your national ID card.
                • Inform your Erasmus coordinator if the situation affects your stay or your ability to travel.

                If you are travelling with only a national ID card, the process is generally the same. Your embassy or consulate will explain the next steps based on your country's procedures.

                To make the process easier, keep digital copies of your passport or ID card stored securely before travelling.
                TEXT,
                'priority' => 10,
            ],

            // ------ SHOPPING ------
            [
                'category_id'=> 9,
                'title' => 'Clothes',
                'answer' => <<<TEXT
                If you need clothes during your Erasmus stay, you can find affordable and premium options in Montijo and Lisbon.

                Useful options include:
                • Fast-fashion stores for basics and seasonal clothes.
                • Sportswear stores.
                • Second-hand and outlet options.

                Bring a light jacket for windy days and a warmer layer for winter evenings.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 9,
                'title' => 'Buying Clothes',
                'answer' => <<<TEXT
                Before buying clothes, compare prices and check for student discounts.

                Tips:
                • Look for end-of-season sales (saldo/saldos).
                • Keep receipts in case you need exchanges or returns.
                • Check store return policies before purchasing.
                • For cheaper options, explore outlets or second-hand shops.

                If you are unsure where to start, ask in the group chat for local recommendations.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 9,
                'title' => 'Shopping Centre',
                'answer' => <<<TEXT
                You can find shopping centres with clothing stores, supermarkets and food courts in and around Lisbon.

                Shopping centres are useful for:
                • Buying clothes and essentials in one place.
                • Indoor shopping during bad weather.
                • Access to public transport and longer opening hours.

                Popular options include Colombo, Vasco da Gama and Alegro Montijo.
                TEXT,
                'priority' => 6,
            ],

            [
                'category_id'=> 9,
                'title' => 'Money and Withdrawing Cash',
                'answer' => <<<TEXT
                You can withdraw cash safely from ATMs (Multibanco) available in shopping centres, supermarkets and bank branches.

                Useful tips:
                • Prefer ATMs attached to banks or busy public places.
                • Choose to be charged in EUR to avoid poor conversion rates.
                • Keep your card covered while entering your PIN.
                • If an ATM keeps your card, contact your bank immediately.

                Most places in Portugal accept card payments, but carrying a small amount of cash is useful for small shops and emergencies.
                TEXT,
                'priority' => 7,
            ],

            [
                'category_id'=> 2,
                'title' => 'Taxi and Ride Apps',
                'answer' => <<<TEXT
                You can use taxis and ride-hailing apps like Uber and Bolt in Montijo and Lisbon.

                Quick tips:
                • Confirm your destination before starting the trip.
                • If possible, use apps to see estimated prices in advance.
                • Share your trip details with a friend when travelling late.
                • Keep your phone charged for maps and emergency contact.

                Public transport is usually cheaper, but taxis are useful at night or when carrying luggage.
                TEXT,
                'priority' => 7,
            ],

            [
                'category_id'=> 1,
                'title' => 'Helpful Portuguese Phrases',
                'answer' => <<<TEXT
                Here are useful Portuguese phrases for daily situations:

                • Olá = Hello
                • Obrigado / Obrigada = Thank you
                • Desculpe = Sorry / Excuse me
                • Fala inglês? = Do you speak English?
                • Onde fica ...? = Where is ...?
                • Quanto custa? = How much does it cost?
                • Preciso de ajuda = I need help

                Locals usually appreciate even simple Portuguese, so do not worry about perfect pronunciation.
                TEXT,
                'priority' => 5,
            ],

            [
                'category_id'=> 1,
                'title' => 'Who is Sonja?',
                'answer' => <<<TEXT
                Sonja is your Erasmus support chatbot for practical questions during your stay.

                Sonja can help with:
                • Transport and moving around.
                • Accommodation and daily life questions.
                • Food, shopping and local services.
                • Emergency guidance and useful contacts.

                For urgent or sensitive situations, always contact your coordinator or emergency services directly.
                TEXT,
                'priority' => 4,
            ],

            [
                'category_id'=> 2,
                'title' => 'If You Are Lost',
                'answer' => <<<TEXT
                If you are lost, stay calm and move to a safe, well-lit public place.

                Steps to follow:
                • Open Google Maps and check your live location.
                • Share your location with a classmate or coordinator.
                • Ask for help in a nearby shop, pharmacy or station.
                • If you feel unsafe, call 112 immediately.

                Save your accommodation address on your phone so you can show it quickly if needed.
                TEXT,
                'priority' => 8,
            ],

            [
                'category_id'=> 3,
                'title' => 'If Something Broke in the House',
                'answer' => <<<TEXT
                If something breaks in your accommodation, report it as soon as possible.

                Recommended steps:
                • Take clear photos of the issue.
                • Inform your landlord, residence manager or coordinator.
                • Explain what happened and when it started.
                • Avoid trying risky repairs yourself.

                Reporting problems early helps protect you from being blamed for bigger damage later.
                TEXT,
                'priority' => 8,
            ]
        ]);
    }
}
