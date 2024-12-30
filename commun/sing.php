<?php
require_once('../config/conn.php');

session_start();

$msg = "";

if (isset($_POST['signin'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $choix = $_POST['role'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $naissance = $_POST['naissance'];
    $date = new DateTime();
    $currentdate = $date->format('Y-m-d');

    // Vérification si l'email existe déjà
    $get_email = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $get_email->execute([':email' => $email]);
    $result = $get_email->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $msg = "L'email existe déjà.";
    } else {
        $query = $conn->prepare("INSERT INTO users(nom, prenom, telephone, email, password_hash, date_naissance, date_inscription, roles) 
        VALUES (:nom, :prenom, :telephone, :email, :password_hash, :date_naissance, :date_inscription, :roles)");

        $query->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':telephone' => $telephone,
            ':email' => $email,
            ':password_hash' => $pass,
            ':date_inscription' => $currentdate,
            ':date_naissance' => $naissance,
            ':roles' => $choix
        ]);
        $msg = "Inscription réussie.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - Cabinet d'Avocats</title>
</head>

<body class="min-h-screen bg-[#1E1E18] text-[#857D66]">
    <header class="relative">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 w-full z-50 bg-[#796644]/90 shadow-md">
            <div class="container mx-auto px-4 py-3">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="/asset/brand_logo.jpg" alt="Logo AvocatConnect" class="w-20 h-10 object-contain rounded-full border-2 border-[#32342F]">
                        <span class="ml-3 text-xl font-bold text-[#32342F]">AvocatConnect</span>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-8">
                        <nav class="flex space-x-6">
                            <a href="/index.php" class="text-[#32342F] hover:border-b-2 border-[#32342F] rounded-lg px-2 transition-colors duration-300 font-medium">Accueil</a>
                            <a href="/index.php#services" class="text-[#32342F] hover:border-b-2 border-[#32342F] rounded-lg px-2 transition-colors duration-300 font-medium">Services</a>
                            <a href="/index.php#about" class="text-[#32342F] hover:border-b-2 border-[#32342F] rounded-lg px-2 transition-colors duration-300 font-medium">À Propos</a>
                            <a href="/index.php#contact" class="text-[#32342F] hover:border-b-2 border-[#32342F] rounded-lg px-2 transition-colors duration-300 font-medium">Contact</a>
                        </nav>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <a href="/Commun/log.php" class="bg-[#32342F] text-[#796644] px-6 py-2 rounded-lg hover:bg-[#312F24] transition-colors duration-300 shadow-md">Connexion</a>
                            <a href="/Commun/sing.php" class="bg-[#312F24] text-[#796644] px-6 py-2 rounded-lg hover:bg-[#32342F] transition-colors duration-300 shadow-md">S'inscrire</a>
                        </div>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <div class="md:hidden">
                        <button id="mobile-menu-toggle" class="text-[#796644] focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="md:hidden absolute left-0 w-full bg-[#796644] shadow-lg hidden">
                    <div class="px-4 pt-2 pb-4 space-y-2">
                        <a href="/index.php#home" class="block py-2 text-[#796644] hover:bg-[#32342F]/20">Accueil</a>
                        <a href="/index.php#services" class="block py-2 text-[#796644] hover:bg-[#32342F]/20">Services</a>
                        <a href="/index.php#about" class="block py-2 text-[#796644] hover:bg-[#32342F]/20">À Propos</a>
                        <a href="/index.php#contact" class="block py-2 text-[#796644] hover:bg-[#32342F]/20">Contact</a>
                        <div class="flex flex-col space-y-2 pt-4">
                            <a href="/Commun/log.php" class="font-semibold bg-[#32342F] text-[#796644] text-center py-2 rounded-lg hover:bg-[#312F24] transition-colors duration-300">Connexion</a>
                            <a href="/Commun/sing.php" class="font-semibold bg-[#312F24] text-[#796644] text-center py-2 rounded-lg hover:bg-[#32342F] transition-colors duration-300">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative pt-16">
            <!-- Hero Background -->
            <div class="w-full h-screen relative overflow-hidden">
                <img src="/asset/hero_image.jpg" alt="Image de cabinet d'avocats" class="w-full h-full object-cover brightness-[0.3]">

                <!-- Content Container -->
                <div class="absolute inset-0 flex flex-col md:flex-row items-center justify-center gap-8 px-4">

                    <!-- Login Form -->
                    <div class="w-full max-w-md p-6 backdrop-blur-sm bg-[#1E1E18]/50 rounded-xl shadow-2xl border border-[#796644]/20">
                        <form method="POST" class="space-y-4">
                            <div class="text-center mb-8">
                                <h2 class="text-3xl font-bold text-[#796644] mb-2">Inscription</h2>
                                <div class="h-1 w-44 bg-[#796644] mx-auto rounded">
                                    <?php echo $msg; ?>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <div>
                                    <input type="text"
                                        name="nom"
                                        id="nom"
                                        placeholder="Votre Nom"
                                        class="w-full px-4 py-3 border border-[#796644] rounded-lg bg-[#1E1E18]/60 text-[#857D66] placeholder-[#857D66]/50 focus:outline-none focus:ring-2 focus:ring-[#796644] focus:border-transparent">
                                </div>
                                <div>
                                    <input type="text"
                                        name="prenom"
                                        id="prenom"
                                        placeholder="Votre Prenom"
                                        class="w-full px-4 py-3 border border-[#796644] rounded-lg bg-[#1E1E18]/60 text-[#857D66] placeholder-[#857D66]/50 focus:outline-none focus:ring-2 focus:ring-[#796644] focus:border-transparent">
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <select name="role" id="role" class="w-full px-4 py-3 border border-[#796644] rounded-lg bg-[#1E1E18]/60 text-[#857D66] placeholder-[#857D66]/50 focus:outline-none focus:ring-2 focus:ring-[#796644] focus:border-transparent">
                                        <option value="choix">Choisissez ...</option>
                                        <option value="avocat">Avocat</option>
                                        <option value="client">Client</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="text"
                                        name="telephone"
                                        id="tele"
                                        placeholder="Votre telephone"
                                        class="w-full px-4 py-3 border border-[#796644] rounded-lg bg-[#1E1E18]/60 text-[#857D66] placeholder-[#857D66]/50 focus:outline-none focus:ring-2 focus:ring-[#796644] focus:border-transparent">
                                </div>
                                <div>
                                    <input type="date"
                                        name="naissance"
                                        id="naissance"
                                        placeholder="Votre date de naissance"
                                        class="w-full px-4 py-3 border border-[#796644] rounded-lg bg-[#1E1E18]/60 text-[#857D66] placeholder-[#857D66]/50 focus:outline-none focus:ring-2 focus:ring-[#796644] focus:border-transparent">
                                </div>
                                <div>
                                    <input type="text"
                                        name="email"
                                        id="email"
                                        placeholder="votre.email@exemple.x"
                                        class="w-full px-4 py-3 border border-[#796644] rounded-lg bg-[#1E1E18]/60 text-[#857D66] placeholder-[#857D66]/50 focus:outline-none focus:ring-2 focus:ring-[#796644] focus:border-transparent">
                                </div>
                                <div>
                                    <input type="password"
                                        name="password"
                                        id="password"
                                        placeholder="password"
                                        class="w-full px-4 py-3 border border-[#796644] rounded-lg bg-[#1E1E18]/60 text-[#857D66] placeholder-[#857D66]/50 focus:outline-none focus:ring-2 focus:ring-[#796644] focus:border-transparent">
                                </div>
                            </div>

                            <div class="flex flex-col space-y-4">
                                <button name="signin" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-[#796644] bg-[#32342F] hover:bg-[#312F24] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#796644] transition-colors duration-200">
                                    Inscription
                                </button>
                                <p class="text-center text-[#857D66]">
                                    vous êtes un membre ?
                                    <a href="/commun/log.php" class="font-medium text-[#796644] hover:text-[#312F24] transition-colors duration-200">
                                        Connectez-vous
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- Footer -->
    <footer class="bg-[#796644] text-[#32342F] py-2">
        <div class="container mx-auto px-4 text-center">
            <p>2024 AvocatConnect &copy;. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="/js/index.js"></script>

</body>

</html>