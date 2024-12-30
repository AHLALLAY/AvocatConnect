<?php
require_once('../config/conn.php');
require_once('../commun/logout.php');

$get_reservation = $conn->prepare("SELECT * FROM rdv r join users on r.id_client= users.id_user");
$get_reservation->execute();
$result = $get_reservation->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Avocat - AvocatConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.all.min.js"></script>
</head>

<body class="bg-[#1E1E18]">

    <!-- Navbar -->
    <header class="bg-[#796644] text-[#857D66] shadow-md">
        <nav class="max-w-screen-xl mx-auto flex justify-between items-center p-4">
            <div class="flex items-center">
                <img src="/asset/brand_logo.jpg" alt="Logo" class="w-16 h-16 object-contain rounded-full">
                <span class="ml-3 text-xl font-bold">AvocatConnect</span>
            </div>

            <form method="POST" id="logout_form">
                <button type="submit" name="logout"
                    class="font-medium bg-[#32342F] rounded-lg px-4 py-2 text-[#857D66] hover:text-[#32342F] hover:bg-[#312F24]">
                    Se Déconnecter
                </button>
            </form>
        </nav>
    </header>

    <!-- Dashboard Layout -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-[#796644] text-[#857D66] py-6">
            <div class="space-y-6 px-4">
                <h2 class="text-xl font-bold">Dashboard Avocat</h2>
                <ul>
                    <li><button id="reservations_btn" class="block py-2 hover:bg-[#312F24] rounded">Mes Réservations</button></li>
                    <li><button id="profile_btn" class="block py-2 hover:bg-[#312F24] rounded">Mon Profil</button></li>
                    <li><button id="availability_btn" class="block py-2 hover:bg-[#312F24] rounded">Mes Disponibilités</button></li>
                    <li><button id="statistics_btn" class="block py-2 hover:bg-[#312F24] rounded">Statistiques</button></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Section Réservations -->
            <section id="reservations" class="mb-8 ">
                <h2 class="text-2xl font-semibold mb-4 text-[#796644]">Mes Réservations</h2>
                <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-[#796644]">Client</th>
                            <th class="py-2 px-4 border-b text-[#796644]">Date & Heure</th>
                            <th class="py-2 px-4 border-b text-[#796644]">Statut</th>
                            <th class="py-2 px-4 border-b text-[#796644]">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $res) { ?>
                            <tr>
                                <td class="py-2 px-4 border-b"><?php echo $res['nom'] . " " . $res['prenom']; ?></td>
                                <td class="py-2 px-4 border-b"><?php echo $res['date_rdv']; ?></td>
                                <td class="py-2 px-4 border-b"><?php echo $res['statut']; ?></td>
                                <td class="py-2 px-4 border-b">
                                    <button class="text-[#32342F] hover:text-[#312F24]" onclick="confirm('Accepter cette réservation ?')">Accepter</button>
                                    <button class="ml-2 text-[#32342F] hover:text-[#312F24]" onclick="confirm('Refuser cette réservation ?')">Refuser</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>

            <!-- Section Profil -->
            <section id="profile" class="mb-8 hidden">
                <h2 class="text-2xl font-semibold mb-4 text-[#796644]">Mon Profil</h2>
                <form>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-[#796644]">Prénom</label>
                            <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-[#796644]/30 rounded-lg" value="Jean" required>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-[#796644]">Nom</label>
                            <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-[#796644]/30 rounded-lg" value="Dupont" required>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-[#796644]">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-[#796644]/30 rounded-lg" value="jean.dupont@example.com" required>
                    </div>
                    <div class="mt-4">
                        <label for="phone" class="block text-sm font-medium text-[#796644]">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-[#796644]/30 rounded-lg" value="0123456789" required>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="bg-[#32342F] text-[#857D66] py-2 px-4 rounded-lg hover:bg-[#312F24]">
                            Mettre à jour mon profil
                        </button>
                    </div>
                </form>
            </section>

            <!-- Section Disponibilités -->
            <section id="availability" class="mb-8 hidden">
                <h2 class="text-2xl font-semibold mb-4 text-[#796644]">Mes Disponibilités</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="date" class="block text-sm font-medium text-[#796644]">Date</label>
                        <input type="date" id="date" name="date" class="w-full px-4 py-2 border border-[#796644]/30 rounded-lg">
                    </div>
                    <div>
                        <label for="time" class="block text-sm font-medium text-[#796644]">Heure</label>
                        <input type="time" id="time" name="time" class="w-full px-4 py-2 border border-[#796644]/30 rounded-lg">
                    </div>
                </div>
                <div class="mt-6">
                    <button class="bg-[#32342F] text-[#857D66] py-2 px-4 rounded-lg hover:bg-[#312F24]">
                        Ajouter Disponibilité
                    </button>
                </div>
            </section>

            <!-- Section Statistiques -->
            <section id="statistics" class="mb-8 hidden">
                <h2 class="text-2xl font-semibold mb-4 text-[#796644]">Mes Statistiques</h2>
                <div class="bg-white shadow-md p-4 rounded-lg">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-[#796644]">Réservations Acceptées</h3>
                        <p class="text-xl text-[#32342F]">25</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-[#796644]">Réservations en Attente</h3>
                        <p class="text-xl text-[#32342F]">5</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#796644]">Réservations Refusées</h3>
                        <p class="text-xl text-[#32342F]">3</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: 'Vous allez vous déconnecter.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32342F',
                cancelButtonColor: '#796644',
                confirmButtonText: 'Oui, se déconnecter',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("logout_form").submit();
                }
            });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('reservations_btn').addEventListener('click', () => {
                document.getElementById('reservations').classList.remove('hidden');
                document.getElementById('profile').classList.add('hidden');
                document.getElementById('availability').classList.add('hidden');
                document.getElementById('statistics').classList.add('hidden');
            });

            document.getElementById('profile_btn').addEventListener('click', () => {
                document.getElementById('reservations').classList.add('hidden');
                document.getElementById('profile').classList.remove('hidden');
                document.getElementById('availability').classList.add('hidden');
                document.getElementById('statistics').classList.add('hidden');
            });

            document.getElementById('availability_btn').addEventListener('click', () => {
                document.getElementById('reservations').classList.add('hidden');
                document.getElementById('profile').classList.add('hidden');
                document.getElementById('availability').classList.remove('hidden');
                document.getElementById('statistics').classList.add('hidden');
            });

            document.getElementById('statistics_btn').addEventListener('click', () => {
                document.getElementById('reservations').classList.add('hidden');
                document.getElementById('profile').classList.add('hidden');
                document.getElementById('availability').classList.add('hidden');
                document.getElementById('statistics').classList.remove('hidden');
            });
        });
    </script>
</body>

</html>