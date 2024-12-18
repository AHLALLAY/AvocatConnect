<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AvocatConnect - Cabinet d'Avocats</title>
</head>

<body class="min-h-screen bg-gray-50 text-gray-900">
    <header class="relative">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 w-full z-50 bg-white/10 shadow-md">
            <div class="container mx-auto px-4 py-3">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="/asset/brand_logo.jpg" alt="Logo AvocatConnect" class="w-16 h-16 object-contain">
                        <span class="ml-3 text-xl font-bold text-[#3b1e08]">AvocatConnect</span>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-8">
                        <nav class="flex space-x-6">
                            <a href="#home" class="text-white hover:border-b-2 rounded-lg px-2 transition-colors duration-300 font-medium">Accueil</a>
                            <a href="#services" class="text-white hover:border-b-2 rounded-lg px-2 transition-colors duration-300 font-medium">Services</a>
                            <a href="#about" class="text-white hover:border-b-2 rounded-lg px-2 transition-colors duration-300 font-medium">À Propos</a>
                            <a href="#contact" class="text-white hover:border-b-2 rounded-lg px-2 transition-colors duration-300 font-medium">Contact</a>
                        </nav>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <a href="/login" class="bg-[#857D66] text-white px-6 py-2 rounded-lg hover:bg-[#9F8551] transition-colors duration-300 shadow-md">Connexion</a>
                            <a href="/subscribe" class="bg-[#9F8551] text-white px-6 py-2 rounded-lg hover:bg-[#857D66] transition-colors duration-300 shadow-md">S'inscrire</a>
                        </div>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <div class="md:hidden">
                        <button id="mobile-menu-toggle" class="text-gray-700 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="md:hidden absolute left-0 w-full bg-white shadow-lg hidden">
                    <div class="px-4 pt-2 pb-4 space-y-2">
                        <a href="#home" class="block py-2 text-gray-700 hover:bg-gray-100">Accueil</a>
                        <a href="#services" class="block py-2 text-gray-700 hover:bg-gray-100">Services</a>
                        <a href="#about" class="block py-2 text-gray-700 hover:bg-gray-100">À Propos</a>
                        <a href="#contact" class="block py-2 text-gray-700 hover:bg-gray-100">Contact</a>
                        <div class="flex flex-col space-y-2 pt-4">
                            <a href="/login" class="bg-[#857D66] text-white text-center py-2 rounded-lg hover:bg-[#9F8551] transition-colors duration-300">Connexion</a>
                            <a href="/subscribe" class="bg-[#9F8551] text-white text-center py-2 rounded-lg hover:bg-[#857D66] transition-colors duration-300">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative">
            <div class="w-full h-[80vh] overflow-hidden">
                <img src="/asset/hero_image.jpg" alt="Image de cabinet d'avocats" class="w-full h-full object-cover brightness-50">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Bienvenue chez AvocatConnect</h1>
                    <p class="text-xl max-w-2xl mx-auto mb-8">
                        Votre partenaire juridique de confiance. Nous vous accompagnons avec expertise et professionnalisme dans tous vos besoins juridiques.
                    </p>
                    <a href="#services" class="bg-[#9F8551] text-white px-8 py-3 rounded-lg hover:bg-[#857D66] transition-colors duration-300 shadow-lg">
                        Nos Services
                    </a>
                </div>
            </div>
        </section>
    </header>

    <!-- Services Section -->
    <section id="services" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12 text-[#857D66]">Nos Services Juridiques</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-semibold mb-4 text-[#9F8551]">Droit des Affaires</h3>
                <p>Accompagnement juridique complet pour les entreprises, conseils stratégiques et support dans vos projets commerciaux.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-semibold mb-4 text-[#9F8551]">Droit Civil</h3>
                <p>Résolution de litiges, conseils et représentation dans tous les domaines du droit civil, de la famille aux successions.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-semibold mb-4 text-[#9F8551]">Droit du Travail</h3>
                <p>Assistance juridique complète en droit du travail, contrats, relations employeurs-employés et résolution de conflits.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#857D66]">Qui Sommes-Nous ?</h2>
            <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:mr-8">
                    <img src="/asset/team.jpg" alt="Notre équipe d'avocats" class="rounded-lg shadow-md">
                </div>
                <div class="md:w-1/2">
                    <p class="text-gray-700 mb-4">
                        AvocatConnect est un cabinet d'avocats moderne et dynamique, fort d'une expertise juridique de pointe et d'un engagement total envers nos clients.
                    </p>
                    <p class="text-gray-700">
                        Notre équipe de professionnels passionnés met son expérience et sa créativité à votre service, pour des solutions juridiques sur mesure et innovantes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12 text-[#857D66]">Contactez-Nous</h2>
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2">Nom Complet</label>
                    <input type="text" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9F8551]">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9F8551]">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 mb-2">Message</label>
                    <textarea id="message" rows="4" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9F8551]"></textarea>
                </div>
                <button type="submit" class="w-full bg-[#857D66] text-white py-3 rounded-lg hover:bg-[#9F8551] transition-colors duration-300">
                    Envoyer
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#857D66] text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>2024 AvocatConnect &copy;. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>