<!-- 
  footer.php
  This is a reusable footer component that can be included on every page.
  It helps maintain consistency and makes updates easier.
-->
<footer id="footer" class="bg-gray-800 text-white mt-auto">
    <div class="container mx-auto px-6 py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="font-bold text-lg mb-2">South-West Airlines</h3>
                <p class="text-gray-400 text-sm">Your reliable partner in air travel. We strive to provide the best fares and a seamless booking experience.</p>
            </div>
            <!-- Quick Links -->
            <div>
                <h3 class="font-bold text-lg mb-2">Quick Links</h3>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="about.php" class="hover:text-white">About Us</a></li>
                    <li><a href="contact.php" class="hover:text-white">Contact Us</a></li>
                    <li><a href="index.php#faq" class="hover:text-white">FAQs</a></li>
                </ul>
            </div>
            <!-- Legal -->
            <div>
                <h3 class="font-bold text-lg mb-2">Legal</h3>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="cookies.php" class="hover:text-white">Cookie Policy</a></li>
                    <li><a href="privacy.php" class="hover:text-white">Privacy Policy</a></li>
                    <li><a href="terms.php" class="hover:text-white">Terms & Conditions</a></li>
                </ul>
            </div>
            <!-- Social -->
            <div>
                 <h3 class="font-bold text-lg mb-2">Follow Us</h3>
                 <div class="flex space-x-4">
                     <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                 </div>
            </div>
        </div>

        <hr class="my-6 border-gray-700">

        <div class="text-center text-gray-400 text-sm">
             <p class="mb-2">© <?php echo date("Y"); ?> South-West Airlines. All rights reserved.</p>
             <p><strong>Disclaimer:</strong> We are not affiliated with any airline. All fares and availability are subject to change.</p>
        </div>
    </div>
</footer>
