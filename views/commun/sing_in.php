<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inscription - AvocatConnect</title>
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
                            <a href="/index.php" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">Accueil</a>
                            <a href="/index.php#services" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">Services</a>
                            <a href="/index.php#about" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">À Propos</a>
                            <a href="/index.php#contact" class="text-[#f2dcb3] hover:text-[#d9910d] hover:border-b-2 border-[#d9910d] rounded-lg px-2 transition-colors duration-300 font-medium">Contact</a>
                        </nav>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <a href="/views/commun/log_in.php" class="bg-[#d9910d] text-[#0d0d0d] px-6 py-2 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300 shadow-md">Connexion</a>
                            <a href="/views/commun/sing_in.php" class="bg-[#bf9e60] text-[#0d0d0d] px-6 py-2 rounded-lg hover:bg-[#d9910d] transition-colors duration-300 shadow-md">S'inscrire</a>
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
                        <a href="/index.php" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">Accueil</a>
                        <a href="/index.php#services" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">Services</a>
                        <a href="/index.php#about" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">À Propos</a>
                        <a href="/index.php#contact" class="block py-2 text-[#f2dcb3] hover:bg-[#d9910d]/20">Contact</a>
                        <div class="flex flex-col space-y-2 pt-4">
                            <a href="/views/commun/log_in.php" class="bg-[#d9910d] text-[#0d0d0d] text-center py-2 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300">Connexion</a>
                            <a href="/views/commun/sing_in.php" class="bg-[#bf9e60] text-[#0d0d0d] text-center py-2 rounded-lg hover:bg-[#d9910d] transition-colors duration-300">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="w-full flex justify-center py-16 px-4">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg border border-[#735a3d]/40">
            <!-- Form Header -->
            <div class="bg-[#735a3d] text-[#f2dcb3] text-center py-6">
                <h2 class="text-3xl font-bold">Inscription</h2>
                <p class="text-sm mt-2">Créez un compte AvocatConnect</p>
            </div>

            <!-- Form -->
            <form action="/signup" method="POST" class="space-y-4 p-6">

                <!-- Part 1: Common Fields (for both Lawyer and Client) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-[#735a3d] font-medium mb-2">Prénom</label>
                        <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]" placeholder="Votre prénom">
                    </div>

                    <div>
                        <label for="last_name" class="block text-[#735a3d] font-medium mb-2">Nom</label>
                        <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]" placeholder="Votre nom">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-[#735a3d] font-medium mb-2">Adresse Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]" placeholder="votre.email@exemple.com">
                </div>

                <div>
                    <label for="password" class="block text-[#735a3d] font-medium mb-2">Mot de Passe</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]" placeholder="Votre mot de passe">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="terms" name="terms" class="h-4 w-4 text-[#d9910d] border-[#735a3d]/30 rounded" required>
                    <label for="terms" class="ml-2 text-[#735a3d]">Accepter les termes et conditions</label>
                </div>

                <!-- Part 2: Profile-Specific Fields -->
                <div>
                    <label for="profile" class="block text-[#735a3d] font-medium mb-2">Type de Profil</label>
                    <select id="profile" name="profile" class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]" required>
                        <option value="client">Client</option>
                        <option value="lawyer">Avocat</option>
                    </select>
                </div>

                <!-- Dynamic Fields Based on Profile -->
                <div id="lawyer-fields" class="hidden">
                    <div>
                        <label for="legal_topics" class="block text-[#735a3d] font-medium mb-2">Spécialité</label>
                        <select name="legal_topics" id="legal_topics" required
                            class="text-gray-400 w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#9F8551] transition duration-300">
                            <option value="arbitrage">Droit de l’arbitrage</option>
                            <option value="associations_et_fondations">Droit des associations et des fondations</option>
                            <option value="assurances">Droit des assurances</option>
                            <option value="bancaire_et_boursier">Droit bancaire et boursier</option>
                            <option value="commercial_et_concurrence">Droit commercial, des affaires et de la
                                concurrence</option>
                            <option value="credit_et_conso">Droit du crédit et de la consommation</option>
                            <option value="dommages_corporels">Droit du dommage corporel</option>
                            <option value="enfants">Droit des enfants</option>
                            <option value="environnement">Droit de l’environnement</option>
                            <option value="etrangers_et_nationalite">Droit des étrangers et de la nationalité</option>
                            <option value="famille_et_patrimoine">Droit de la famille, des personnes et de leur
                                patrimoine</option>
                            <option value="fiducie">Droit de la fiducie</option>
                            <option value="fiscal_et_douanier">Droit fiscal et droit douanier</option>
                            <option value="garanties_et_suretes">Droit des garanties, des sûretés et des mesures
                                d’exécution</option>
                            <option value="immobilier">Droit immobilier</option>
                            <option value="international_et_ue">Droit international et de l’Union européenne</option>
                            <option value="numerique_et_communications">Droit du numérique et des communications
                            </option>
                            <option value="penal">Droit pénal</option>
                            <option value="propriete_intellectuelle">Droit de la propriété intellectuelle</option>
                            <option value="protection_donnees">Droit de la protection des données personnelles</option>
                            <option value="public">Droit public</option>
                            <option value="rural">Droit rural</option>
                            <option value="sante">Droit de la santé</option>
                            <option value="securite_sociale">Droit de la sécurité sociale et de la protection sociale
                            </option>
                            <option value="societes">Droit des sociétés</option>
                            <option value="sport">Droit du sport</option>
                            <option value="transports">Droit des transports</option>
                            <option value="travail">Droit du travail</option>
                        </select>
                    </div>
                    <div>
                        <label for="experience" class="block text-[#735a3d] font-medium mb-2">Expèriences</label>
                        <input type="text" id="experience" name="experience" required class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#d9910d]" placeholder="Les années d'expèriences">
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-[#d9910d] text-white py-3 rounded-lg hover:bg-[#bf9e60] transition-colors duration-300 font-semibold">
                        S'inscrire
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#735a3d] text-[#f2dcb3] py-8">
        <div class="container mx-auto px-4 text-center">
            <p>2024 AvocatConnect &copy;. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        const profileSelect = document.getElementById('profile');
        const lawyerFields = document.getElementById('lawyer-fields');
        const clientFields = document.getElementById('client-fields');

        profileSelect.addEventListener('change', function() {
            if (profileSelect.value === 'lawyer') {
                lawyerFields.classList.remove('hidden');
                clientFields.classList.add('hidden');
            } else if (profileSelect.value === 'client') {
                lawyerFields.classList.add('hidden');
                clientFields.classList.remove('hidden');
            }
        });
    </script>
</body>

</html>