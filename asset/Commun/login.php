<?php
session_start();

// Configuration de la base de données
$host = "localhost";
$dbname = "test";
$username = "root";
$password = "";

// Fonction pour afficher les messages SweetAlert
function showSweetAlert($type, $title, $text)
{
    $_SESSION['sweet_alert'] = [
        'type' => $type,
        'title' => $title,
        'text' => $text
    ];
}

// Vérifie si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Tentative de connexion à la base de données
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Vérifie si les champs sont remplis
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            // Prépare la requête pour vérifier dans la table users
            $stmt = $conn->prepare("SELECT * FROM users WHERE emails = :email LIMIT 1");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Connexion réussie
                $_SESSION['user_id'] = $user['id_users'];
                $_SESSION['user_type'] = $user['roles']; // 'avocat' ou 'client'

                // Redirection basée sur le type d'utilisateur
                if ($user['roles'] === 'avocat') {
                    showSweetAlert('success', 'Succès!', 'Connexion réussie en tant qu\'avocat');
                    header("Location: /DashBoard/dashboard_avocat.php");
                } else {
                    showSweetAlert('success', 'Succès!', 'Connexion réussie en tant que client');
                    header("Location: /DashBoard/dashboard_client.php");
                }
                exit();
            } else {
                // Identifiants incorrects
                showSweetAlert('error', 'Erreur!', 'Email ou mot de passe incorrect');
                header("Location: /Commun/login.php");
                exit();
            }
        } else {
            // Champs manquants
            showSweetAlert('warning', 'Attention!', 'Veuillez remplir tous les champs');
            header("Location: login.php");
            exit();
        }
    } catch (PDOException $e) {
        // Erreur de connexion à la base de données
        showSweetAlert('error', 'Erreur!', 'Erreur de connexion à la base de données');
        header("Location: /Commun/login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion - AvocatConnect</title>
    <style>
        body {
            background-color: #1E1E18;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 w-full z-50" style="background-color: rgba(32, 34, 31, 0.95);">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="/asset/brand_logo.jpg" alt="Logo AvocatConnect" class="w-20 h-10 object-contain rounded-full" style="border: 2px solid #796644;">
                    <span class="ml-3 text-xl font-bold" style="color: #857D66;">AvocatConnect</span>
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="focus:outline-none" style="color: #857D66;">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden absolute right-0 w-64 shadow-2xl mt-2" style="background-color: #32342F;">
                <div class="px-4 pt-2 pb-4 space-y-2">
                    <a href="/" class="block py-2 hover:text-opacity-80 transition-colors" style="color: #857D66;">Accueil</a>
                    <a href="/#services" class="block py-2 hover:text-opacity-80 transition-colors" style="color: #857D66;">Services</a>
                    <a href="/#about" class="block py-2 hover:text-opacity-80 transition-colors" style="color: #857D66;">À Propos</a>
                    <a href="/#contact" class="block py-2 hover:text-opacity-80 transition-colors" style="color: #857D66;">Contact</a>
                    <div class="flex flex-col space-y-2 pt-4">
                        <a href="/Commun/login.php" class="text-center py-2 rounded-lg transition-colors duration-300" style="background-color: #796644; color: #1E1E18;">Connexion</a>
                        <a href="/Commun/singin.php" class="text-center py-2 rounded-lg transition-colors duration-300" style="background-color: #857D66; color: #1E1E18;">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen pt-20 flex items-center justify-center px-4">
        <div class="w-full max-w-md p-8 rounded-lg shadow-2xl" style="background-color: rgba(50, 52, 47, 0.5); border: 1px solid rgba(49, 47, 36, 0.1);">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold mb-2" style="color: #796644;">Connexion</h1>
                <p style="color: #857D66;">Accédez à votre espace</p>
            </div>

            <form class="space-y-6">
                <div>
                    <label for="email" class="block mb-2" style="color: #796644;">Email</label>
                    <input
                        type="email"
                        id="email"
                        required
                        class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2"
                        style="background-color: #1E1E18; border: 1px solid rgba(49, 47, 36, 0.2); color: #857D66; focus-ring-color: #796644;"
                        placeholder="votre@email.com">
                </div>

                <div>
                    <label for="password" class="block mb-2" style="color: #796644;">Mot de passe</label>
                    <input
                        type="password"
                        id="password"
                        required
                        class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2"
                        style="background-color: #1E1E18; border: 1px solid rgba(49, 47, 36, 0.2); color: #857D66; focus-ring-color: #796644;"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            class="rounded"
                            style="background-color: #1E1E18; border: 1px solid #796644;">
                        <label for="remember" class="ml-2 block text-sm" style="color: #857D66;">Se souvenir de moi</label>
                    </div>
                    <a href="#" class="text-sm hover:underline" style="color: #796644;">Mot de passe oublié ?</a>
                </div>

                <button
                    type="submit"
                    class="w-full py-3 rounded-lg transition-colors duration-300 shadow-lg hover:opacity-90"
                    style="background-color: #796644; color: #1E1E18;">
                    Se connecter
                </button>

                <div class="text-center mt-4">
                    <p style="color: #857D66;">
                        Pas encore de compte ?
                        <a href="/Commun/singin.php" class="hover:underline" style="color: #796644;">S'inscrire</a>
                    </p>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-8 mt-auto" style="background-color: #32342F;">
        <div class="container mx-auto px-4 text-center" style="color: #857D66;">
            <p>2024 AvocatConnect &copy;. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php
        if (isset($_SESSION['sweet_alert'])) {
            $alert = $_SESSION['sweet_alert'];
            echo "
        Swal.fire({
            icon: '{$alert['type']}',
            title: '{$alert['title']}',
            text: '{$alert['text']}',
            confirmButtonColor: '#796644'
        });
    ";
            unset($_SESSION['sweet_alert']);
        }
        ?>
    </script>
    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>