<?php
// Include the configuration file to access constants like the phone number.
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South-West Airlines - Book Flights</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background-color: #f1f5f9; /* slate-100 */ color: #334155 /* slate-700 */; }
        .hero-section { background: linear-gradient(rgba(15, 23, 42, 0.6), rgba(15, 23, 42, 0.6)), url('https://images.pexels.com/photos/358319/pexels-photo-358319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover; }
        .pac-container { border-radius: 8px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); z-index: 1050; }
        .destination-card { position: relative; overflow: hidden; border-radius: 0.75rem; box-shadow: 0 4px 6px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .destination-card:hover { transform: translateY(-8px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .destination-card img { transition: transform 0.4s ease; }
        .destination-card:hover img { transform: scale(1.05); }
        .destination-card-overlay { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); padding: 1.5rem; color: white; }
        .hero-section h1 { text-shadow: 2px 2px 8px rgba(0,0,0,0.6); }
        .faq-question { transition: background-color 0.2s ease; }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out, padding 0.3s ease; padding: 0 1.5rem; }
        .faq-item.active .faq-answer { max-height: 200px; padding: 1.5rem 1.5rem; }
        .faq-item.active .faq-icon { transform: rotate(180deg); }
        .faq-icon { transition: transform 0.3s ease; }
        .passenger-counter-btn {
            width: 32px; height: 32px; border-radius: 50%; border: 1px solid #cbd5e1;
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 1.5rem; line-height: 1; color: #0f172a; /* slate-900 */
            background-color: white;
            transition: background-color 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        .passenger-counter-btn:hover { background-color: #f8fafc; }
        .passenger-counter-btn:disabled { opacity: 0.4; cursor: not-allowed; background-color: #e2e8f0; }
        .passenger-popover-content h4 { font-size: 1.125rem; font-weight: 600; color: #1e293b; }
        .passenger-popover-content p { color: #64748b; }
        form input, form select {
            color: #0f172a; /* slate-900 */
        }
    </style>
</head>
<body class="text-slate-800">

    <?php include 'header.php'; ?>

    <main>
        <section class="hero-section text-white py-20 md:py-32 relative z-20">
            <div class="container mx-auto px-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-center mb-8">Your Journey Begins Here</h1>
                <div class="max-w-2xl mx-auto bg-white/95 backdrop-blur-sm rounded-xl p-6 md:p-8 shadow-2xl">
                    <form action="results.php" method="POST">
                        <div class="mb-6 text-slate-800">
                            <label class="mr-6"><input type="radio" name="trip-type" value="one-way" class="mr-2 text-blue-600 focus:ring-blue-500" onchange="toggleReturnDate(true)">One-way</label>
                            <label><input type="radio" name="trip-type" value="round-trip" class="mr-2 text-blue-600 focus:ring-blue-500" checked onchange="toggleReturnDate(false)">Round-trip</label>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div><label for="from" class="block text-sm font-medium text-slate-700">From</label><input type="text" id="from" name="from" class="mt-1 block w-full border-slate-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm p-2" placeholder="Departure Airport" required></div>
                            <div><label for="to" class="block text-sm font-medium text-slate-700">To</label><input type="text" id="to" name="to" class="mt-1 block w-full border-slate-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm p-2" placeholder="Arrival Airport" required></div>
                            <div><label for="departure-date" class="block text-sm font-medium text-slate-700">Departure</label><input type="date" id="departure-date" name="departure-date" class="mt-1 block w-full border-slate-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm p-2" value="<?php echo date('Y-m-d'); ?>" required></div>
                            <div id="return-date-wrapper"><label for="return-date" class="block text-sm font-medium text-slate-700">Return</label><input type="date" id="return-date" name="return-date" class="mt-1 block w-full border-slate-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm p-2"></div>
                            
                            <!-- Passenger & Class Selector -->
                            <div class="md:col-span-2 relative">
                                <label for="passenger-info-btn" class="block text-sm font-medium text-slate-700">Passengers & Class</label>
                                <button type="button" id="passenger-info-btn" class="mt-1 flex items-center justify-between w-full border border-slate-300 rounded-md shadow-sm p-2 text-left bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <span id="passenger-display" class="text-slate-900"><i class="fas fa-user mr-2 text-slate-500"></i>1 Adult, Economy</span>
                                    <i class="fas fa-chevron-down text-slate-500"></i>
                                </button>
                                
                                <!-- Popover -->
                                <div id="passenger-popover" class="hidden absolute z-50 mt-2 w-full bg-white rounded-lg shadow-xl p-6 passenger-popover-content">
                                    <div class="mb-5">
                                        <h4>Cabin class</h4>
                                        <div class="flex flex-wrap gap-2 text-sm mt-2">
                                            <label class="has-[:checked]:bg-blue-100 has-[:checked]:text-blue-800 has-[:checked]:border-blue-500 border text-slate-700 rounded-full px-3 py-1 cursor-pointer transition-colors hover:border-blue-400"><input type="radio" name="class" value="Economy" class="sr-only class-radio" checked> Economy</label>
                                            <label class="has-[:checked]:bg-blue-100 has-[:checked]:text-blue-800 has-[:checked]:border-blue-500 border text-slate-700 rounded-full px-3 py-1 cursor-pointer transition-colors hover:border-blue-400"><input type="radio" name="class" value="Premium Economy" class="sr-only class-radio"> Premium</label>
                                            <label class="has-[:checked]:bg-blue-100 has-[:checked]:text-blue-800 has-[:checked]:border-blue-500 border text-slate-700 rounded-full px-3 py-1 cursor-pointer transition-colors hover:border-blue-400"><input type="radio" name="class" value="Business" class="sr-only class-radio"> Business</label>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center py-4 border-t">
                                        <div><h4>Adults</h4><p class="text-sm">Aged 18+</p></div>
                                        <div class="flex items-center gap-4"><button type="button" data-type="adults" data-action="decrement" class="passenger-counter-btn">-</button><span class="adults-count w-5 text-center font-semibold text-lg">1</span><button type="button" data-type="adults" data-action="increment" class="passenger-counter-btn">+</button></div>
                                    </div>
                                    <div class="flex justify-between items-center py-4 border-t">
                                        <div><h4>Children</h4><p class="text-sm">Aged 0 to 17</p></div>
                                        <div class="flex items-center gap-4"><button type="button" data-type="children" data-action="decrement" class="passenger-counter-btn">-</button><span class="children-count w-5 text-center font-semibold text-lg">0</span><button type="button" data-type="children" data-action="increment" class="passenger-counter-btn">+</button></div>
                                    </div>
                                    <div class="text-xs text-slate-500 mt-4 border-t pt-4">
                                        <p>Your age at time of travel must be valid for the age category booked. Airlines have restrictions on under 18s travelling alone.</p>
                                    </div>
                                    <button type="button" id="apply-passengers" class="w-full bg-blue-600 text-white font-bold mt-5 py-2.5 rounded-lg hover:bg-blue-700 transition-colors">Done</button>
                                </div>
                                <input type="hidden" name="adults" id="adults-input" value="1">
                                <input type="hidden" name="children" id="children-input" value="0">
                                <input type="hidden" name="cabin_class" id="cabin-class-input" value="Economy">
                            </div>

                            <div class="md:col-span-2 mt-4 text-center">
                                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-16 rounded-lg text-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-search mr-2"></i>Search Flights
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="py-16">
            <div class="container mx-auto px-6 space-y-20">
                 <!-- Worldwide Destinations -->
                <section id="destinations">
                    <h2 class="text-4xl font-extrabold text-center text-slate-900 mb-10">Worldwide Destinations</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="destination-card"><img src="https://images.pexels.com/photos/1530259/pexels-photo-1530259.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Paris" class="w-full h-96 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/400x600/3498db/ffffff?text=Paris';"><div class="destination-card-overlay"><h3 class="font-bold text-xl">Paris, France</h3><p class="text-sm">The city of lights, love, and iconic landmarks.</p></div></div>
                        <div class="destination-card"><img src="https://images.pexels.com/photos/356629/pexels-photo-356629.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Kyoto" class="w-full h-96 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/400x600/e74c3c/ffffff?text=Kyoto';"><div class="destination-card-overlay"><h3 class="font-bold text-xl">Kyoto, Japan</h3><p class="text-sm">Experience ancient temples and serene gardens.</p></div></div>
                        <div class="destination-card"><img src="https://images.pexels.com/photos/1797161/pexels-photo-1797161.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Rome" class="w-full h-96 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/400x600/2ecc71/ffffff?text=Rome';"><div class="destination-card-overlay"><h3 class="font-bold text-xl">Rome, Italy</h3><p class="text-sm">Walk through history in the Eternal City.</p></div></div>
                        <div class="destination-card"><img src="https://images.pexels.com/photos/2193300/pexels-photo-2193300.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Sydney" class="w-full h-96 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/400x600/f1c40f/ffffff?text=Sydney';"><div class="destination-card-overlay"><h3 class="font-bold text-xl">Sydney, Australia</h3><p class="text-sm">Harbour views and sun-kissed beaches await.</p></div></div>
                    </div>
                </section>

                <!-- Travel Advisories -->
                <section id="advisory">
                    <h2 class="text-4xl font-extrabold text-center text-slate-900 mb-10">Latest Travel Advisories</h2>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="font-bold text-lg text-slate-800">Important Information for Travelers (as of <?php echo date('F j, Y'); ?>):</h3>
                        <ul class="list-disc list-inside mt-4 space-y-3 text-slate-700">
                            <li><strong>Digital Entry Forms:</strong> Many countries require travelers to complete a digital arrival form online before their flight. Check your destination's official government website.</li>
                            <li><strong>Increased Security Screening:</strong> We recommend arriving at the airport at least 3 hours before international flights and 2 hours before domestic flights.</li>
                            <li><strong>E-Visa Requirements:</strong> Check if your destination requires an e-visa. Countries like India and Australia have online visa processes that must be completed prior to travel.</li>
                            <li><strong>REAL ID (Domestic US Travel):</strong> Reminder that starting May 7, 2025, a REAL ID-compliant license will be mandatory for domestic air travel in the United States.</li>
                        </ul>
                    </div>
                </section>

                <!-- FAQs -->
                <section id="faq">
                    <h2 class="text-4xl font-extrabold text-center text-slate-900 mb-10">Frequently Asked Questions</h2>
                    <div class="max-w-3xl mx-auto space-y-4">
                        <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden"><div class="faq-question flex justify-between items-center p-5 cursor-pointer hover:bg-slate-50"><h4 class="font-semibold text-lg text-slate-800">What is the check-in process?</h4><i class="fas fa-chevron-down faq-icon text-slate-500"></i></div><div class="faq-answer bg-slate-50 text-slate-700"><p>You can check in for your flight online through the airline's website starting 24 hours before departure. You can also check in at the airport using a self-service kiosk or at the airline's check-in counter.</p></div></div>
                        <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden"><div class="faq-question flex justify-between items-center p-5 cursor-pointer hover:bg-slate-50"><h4 class="font-semibold text-lg text-slate-800">What are the baggage allowances?</h4><i class="fas fa-chevron-down faq-icon text-slate-500"></i></div><div class="faq-answer bg-slate-50 text-slate-700"><p>Baggage allowances vary by airline and destination. Typically for Economy, you are allowed one carry-on bag and one personal item. We recommend checking the airline's specific policy for your flight.</p></div></div>
                        <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden"><div class="faq-question flex justify-between items-center p-5 cursor-pointer hover:bg-slate-50"><h4 class="font-semibold text-lg text-slate-800">What happens if my flight is delayed or canceled?</h4><i class="fas fa-chevron-down faq-icon text-slate-500"></i></div><div class="faq-answer bg-slate-50 text-slate-700"><p>In case of a delay or cancellation, the airline is responsible for rebooking you. We recommend contacting the airline directly at the airport for the quickest assistance. Our support team is also available to help.</p></div></div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1KUnGje_tXveNAo8bi1WygGtW4y5S94c&libraries=places&callback=initAutocomplete" async defer></script>
    <script>
        function initAutocomplete() {
            const options = { types: ['airport'] };
            new google.maps.places.Autocomplete(document.getElementById('from'), options);
            new google.maps.places.Autocomplete(document.getElementById('to'), options);
        }
        
        function toggleReturnDate(isDisabled) {
            const returnDateWrapper = document.getElementById('return-date-wrapper');
            const returnDateInput = document.getElementById('return-date');
            if (isDisabled) {
                returnDateWrapper.style.display = 'none';
                returnDateInput.value = '';
                returnDateInput.required = false;
            } else {
                returnDateWrapper.style.display = 'block';
                returnDateInput.required = true;
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            // --- PASSENGER DROPDOWN LOGIC ---
            const popoverBtn = document.getElementById('passenger-info-btn');
            const popover = document.getElementById('passenger-popover');
            const applyBtn = document.getElementById('apply-passengers');
            const adultsCountSpan = document.querySelector('.adults-count');
            const childrenCountSpan = document.querySelector('.children-count');
            const classRadios = document.querySelectorAll('.class-radio');
            
            let adults = 1;
            let children = 0;
            let cabinClass = 'Economy';
            const MAX_PASSENGERS = 8;

            function updateCountersAndButtons() {
                document.querySelector('[data-type="adults"][data-action="decrement"]').disabled = adults <= 1;
                document.querySelector('[data-type="adults"][data-action="increment"]').disabled = adults >= MAX_PASSENGERS;
                document.querySelector('[data-type="children"][data-action="decrement"]').disabled = children <= 0;
                document.querySelector('[data-type="children"][data-action="increment"]').disabled = children >= MAX_PASSENGERS;
            }
            
            function updateDisplay() {
                let displayText = `<i class="fas fa-user mr-2 text-slate-500"></i>${adults} Adult`;
                if (adults > 1) displayText += 's';
                if (children > 0) displayText += `, ${children} Child` + (children > 1 ? 'ren' : '');
                displayText += `, ${cabinClass}`;
                document.getElementById('passenger-display').innerHTML = displayText;

                // Also update hidden inputs for form submission
                document.getElementById('adults-input').value = adults;
                document.getElementById('children-input').value = children;
                document.getElementById('cabin-class-input').value = cabinClass;
            }

            popoverBtn.addEventListener('click', () => popover.classList.toggle('hidden'));
            
            applyBtn.addEventListener('click', () => {
                popover.classList.add('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!popover.classList.contains('hidden') && !popoverBtn.contains(e.target) && !popover.contains(e.target)) {
                    popover.classList.add('hidden');
                }
            });

            popover.addEventListener('click', (e) => {
                const button = e.target.closest('.passenger-counter-btn');
                if (!button) return;

                const type = button.dataset.type;
                const action = button.dataset.action;

                if (type === 'adults') {
                    if (action === 'increment' && adults < MAX_PASSENGERS) adults++;
                    else if (action === 'decrement' && adults > 1) adults--;
                    adultsCountSpan.textContent = adults;
                } else if (type === 'children') {
                    if (action === 'increment' && children < MAX_PASSENGERS) children++;
                    else if (action === 'decrement' && children > 0) children--;
                    childrenCountSpan.textContent = children;
                }
                updateCountersAndButtons();
                updateDisplay(); // Live update the display
            });

            classRadios.forEach(radio => {
                radio.addEventListener('change', () => {
                    if (radio.checked) {
                        cabinClass = radio.value;
                        updateDisplay(); // Live update the display
                    }
                });
            });

            // --- FAQ ACCORDION LOGIC ---
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    faqItems.forEach(i => i.classList.remove('active'));
                    if (!isActive) item.classList.add('active');
                });
            });
            
            // --- INITIALIZE PAGE STATE ---
            updateCountersAndButtons(); // Set initial button states
            const isOneWay = document.querySelector('input[name="trip-type"][value="one-way"]').checked;
            toggleReturnDate(isOneWay);
        });
    </script>
</body>
</html>
