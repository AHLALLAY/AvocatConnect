<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AvocatConnect - Cabinet d'Avocats</title>
</head>

<body class="min-h-screen bg-[#f2dcb3] text-[#0d0d0d]">
    <header class="relative">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 w-full z-50 bg-[#735a3d]/90 shadow-md">
            <div class="container mx-auto px-4 py-3">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="/asset/brand_logo.jpg" alt="Logo AvocatConnect" class="w-16 h-16 object-contain rounded-full border-2 border-[#d9910d]">
                        <span class="ml-3 text-xl font-bold text-[#f2dcb3]">AvocatConnect</span>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-8">
                        <nav class="flex space-x-6">
                            <a href="#home" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">Accueil</a>
                            <a href="#services" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">Services</a>
                            <a href="#about" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">À Propos</a>
                            <a href="#contact" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">Contact</a>
                        </nav>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <a href="/views/commun/log_in.php" class="bg-[#d9910d] text-[#0d0d0d] px-6 py-2 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300 shadow-md">Connexion</a>
                            <a href="/views/commun/not_found.php" class="bg-[#bf9e60] text-[#0d0d0d] px-6 py-2 rounded-lg hover:bg-[#d9910d] transition-colors duration-300 shadow-md">S'inscrire</a>
                        </div>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <div class="md:hidden">
                        <button id="mobile-menu-toggle" class="text-[#f2dcb3] focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="md:hidden absolute left-0 w-full bg-[#735a3d] shadow-lg hidden">
                    <div class="px-4 pt-2 pb-4 space-y-2">
                        <a href="#home" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">Accueil</a>
                        <a href="#services" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">Services</a>
                        <a href="#about" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">À Propos</a>
                        <a href="#contact" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">Contact</a>
                        <div class="flex flex-col space-y-2 pt-4">
                            <a href="/views/commun/log_in.php" class="bg-[#d9910d] text-[#0d0d0d] text-center py-2 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300">Connexion</a>
                            <a href="/views/commun/sing_in.php" class="bg-[#bf9e60] text-[#0d0d0d] text-center py-2 rounded-lg hover:bg-[#d9910d] transition-colors duration-300">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative">
            <div class="w-full h-[80vh] overflow-hidden">
                <img src="/asset/hero_image.jpg" alt="Image de cabinet d'avocats" class="w-full h-full object-cover brightness-50">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-[#f2dcb3]">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Bienvenue chez AvocatConnect</h1>
                    <p class="text-xl max-w-2xl mx-auto mb-8">
                        Votre partenaire juridique de confiance. Nous vous accompagnons avec expertise et professionnalisme dans tous vos besoins juridiques.
                    </p>
                    <a href="#services" class="bg-[#d9910d] text-[#0d0d0d] px-8 py-3 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300 shadow-lg">
                        Nos Services
                    </a>
                </div>
            </div>
        </section>
    </header>

    <!-- Services Section -->
    <section id="services" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12 text-[#735a3d]">Nos Services Juridiques</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-[#bf9e60]/20 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow border border-[#735a3d]/20">
                <h3 class="text-xl font-semibold mb-4 text-[#d9910d]">Droit des Affaires</h3>
                <p class="text-[#0d0d0d]">Accompagnement juridique complet pour les entreprises, conseils stratégiques et support dans vos projets commerciaux.</p>
            </div>
            <div class="bg-[#bf9e60]/20 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow border border-[#735a3d]/20">
                <h3 class="text-xl font-semibold mb-4 text-[#d9910d]">Droit Civil</h3>
                <p class="text-[#0d0d0d]">Résolution de litiges, conseils et représentation dans tous les domaines du droit civil, de la famille aux successions.</p>
            </div>
            <div class="bg-[#bf9e60]/20 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow border border-[#735a3d]/20">
                <h3 class="text-xl font-semibold mb-4 text-[#d9910d]">Droit du Travail</h3>
                <p class="text-[#0d0d0d]">Assistance juridique complète en droit du travail, contrats, relations employeurs-employés et résolution de conflits.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-[#bf9e60]/10 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#735a3d]">Qui Sommes-Nous ?</h2>
            <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:mr-8">
                    <img src="/asset/team.jpg" alt="Notre équipe d'avocats" class="rounded-lg shadow-md border-4 border-[#d9910d]/50">
                </div>
                <div class="md:w-1/2">
                    <p class="text-[#0d0d0d] mb-4">
                        AvocatConnect est un cabinet d'avocats moderne et dynamique, fort d'une expertise juridique de pointe et d'un engagement total envers nos clients.
                    </p>
                    <p class="text-[#0d0d0d]">
                        Notre équipe de professionnels passionnés met son expérience et sa créativité à votre service, pour des solutions juridiques sur mesure et innovantes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12 text-[#735a3d]">Contactez-Nous</h2>
        <div class="max-w-lg mx-auto bg-[#bf9e60]/20 p-8 rounded-lg shadow-md border border-[#735a3d]/20">
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-[#735a3d] mb-2">Nom Complet</label>
                    <input type="text" id="name" class="w-full px-3 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-[#735a3d] mb-2">Email</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-[#735a3d] mb-2">Message</label>
                    <textarea id="message" rows="4" class="w-full px-3 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]"></textarea>
                </div>
                <button type="submit" class="w-full bg-[#d9910d] text-[#0d0d0d] py-3 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300">
                    Envoyer
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#735a3d] text-[#f2dcb3] py-8">
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