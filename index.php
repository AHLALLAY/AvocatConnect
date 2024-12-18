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
                        <span class="ml-3 text-xl font-bold text-[#4a3728]">AvocatConnect</span>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-8">
                        <nav class="flex space-x-6">
                            <a href="/index.php" class="text-white hover:text-[#9F8551] transition-colors duration-300 font-medium">Accueil</a>
                            <a href="#services" class="text-white hover:text-[#9F8551] transition-colors duration-300 font-medium">Services</a>
                            <a href="#about" class="text-white hover:text-[#9F8551] transition-colors duration-300 font-medium">À Propos</a>
                            <a href="#contact" class="text-white hover:text-[#9F8551] transition-colors duration-300 font-medium">Contact</a>
                        </nav>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <a href="/login" class="bg-[#857D66] text-white px-6 py-2 rounded-lg hover:bg-[#9F8551] transition-colors duration-300 shadow-md">Connexion</a>
                            <a href="/subscribe" class="bg-[#857D66] text-white px-6 py-2 rounded-lg hover:bg-[#9F8551] transition-colors duration-300 shadow-md">S'inscrire</a>
                        </div>
                    </div>

                    <!-- Mobile Menu Toggle (Hidden on Desktop) -->
                    <div class="md:hidden">
                        <button class="text-gray-700 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative">
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

    <!-- Main Content Placeholder -->
    <main class="container mx-auto px-4 py-12">
        <!-- Additional sections can be added here -->
    </main>

    <!-- Footer Placeholder -->
    <footer class="bg-[#857D66] text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>AvocatConnect &copy; 2024. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>