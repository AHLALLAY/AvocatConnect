<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion - AvocatConnect</title>
</head>

<body class="min-h-screen bg-[#f2dcb3] flex-col items-center justify-center">
    <header class="relative">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 w-full z-50 bg-[#735a3d]/90 shadow-md">
            <div class="container mx-auto px-4 py-3">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="/asset/brand_logo.jpg" alt="Logo AvocatConnect" class="w-20 h-10 object-contain rounded-full border-2 border-[#d9910d]">
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

        <!-- Hero Section with Form Overlay -->
        <section id="home" class="relative w-full h-[100vh] overflow-hidden">
            <img src="/asset/hero_image.jpg" alt="Image de cabinet d'avocats" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/10 opacity-10"></div> <!-- Overlay to improve form visibility -->
            <div class="absolute inset-0 flex justify-center items-center z-10">
                <div class="w-full max-w-md bg-white shadow-lg rounded-lg border border-[#735a3d]/20 px-8 py-6">
                    <div class="text-[#735a3d] text-center py-6">
                        <h2 class="text-3xl font-bold">Connexion</h2>
                        <p class="text-sm mt-2">Connectez-vous à votre compte AvocatConnect</p>
                    </div>

                    <form action="/login" method="POST" class="space-y-6">
                        <div>
                            <label for="email" class="block text-[#735a3d] font-medium mb-2">Adresse Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]"
                                placeholder="votre.email@exemple.com">
                        </div>

                        <div>
                            <label for="password" class="block text-[#735a3d] font-medium mb-2">Mot de Passe</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]"
                                placeholder="Votre mot de passe">
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember" type="checkbox" class="h-4 w-4 text-[#d9910d] border-[#735a3d]/30 rounded">
                                <label for="remember" class="ml-2 block text-[#735a3d]">
                                    Se souvenir de moi
                                </label>
                            </div>

                            <div>
                                <a href="/views/commun/not_found.php" class="text-[#d9910d] hover:text-[#bf9e60] text-sm">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        </div>

                        <div>
                            <button
                                type="submit"
                                class="w-full bg-[#d9910d] text-white py-3 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300 font-semibold">
                                Se Connecter
                            </button>
                        </div>
                    </form>

                    <div class="bg-[#bf9e60]/10 border-t border-[#735a3d]/20 p-6 text-center">
                        <p class="text-[#735a3d]">
                            Pas de compte ?
                            <a href="/views/commun/not_found.php" class="text-[#d9910d] hover:text-[#bf9e60] font-semibold">
                                Inscrivez-vous
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </header>

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