<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Avocat - AvocatConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.all.min.js"></script>
</head>

<body class="bg-[#f2dcb3]">

    <!-- Navbar -->
    <header class="bg-[#735a3d] text-[#f2dcb3] shadow-md">
        <nav class="max-w-screen-xl mx-auto flex justify-between items-center p-4">
            <div class="flex items-center">
                <img src="/asset/brand_logo.jpg" alt="Logo" class="w-16 h-16 object-contain rounded-full">
                <span class="ml-3 text-xl font-bold">AvocatConnect</span>
            </div>
            <div class="flex space-x-6">
                <a href="/logout" class="text-[#f2dcb3] hover:text-[#d9910d]">Se Déconnecter</a>
            </div>
        </nav>
    </header>

    <!-- Dashboard Layout -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-[#735a3d] text-[#f2dcb3] py-6">
            <div class="space-y-6 px-4">
                <h2 class="text-xl font-bold">Dashboard Avocat</h2>
                <ul>
                    <li><a href="#reservations" class="block py-2 hover:bg-[#bf9e60]/30 rounded">Mes Réservations</a></li>
                    <li><a href="#profile" class="block py-2 hover:bg-[#bf9e60]/30 rounded">Mon Profil</a></li>
                    <li><a href="#availability" class="block py-2 hover:bg-[#bf9e60]/30 rounded">Mes Disponibilités</a></li>
                    <li><a href="#statistics" class="block py-2 hover:bg-[#bf9e60]/30 rounded">Statistiques</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Section Réservations -->
            <section id="reservations" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-[#735a3d]">Mes Réservations</h2>
                <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-[#735a3d]">Client</th>
                            <th class="py-2 px-4 border-b text-[#735a3d]">Date & Heure</th>
                            <th class="py-2 px-4 border-b text-[#735a3d]">Statut</th>
                            <th class="py-2 px-4 border-b text-[#735a3d]">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemple de réservation -->
                        <tr>
                            <td class="py-2 px-4 border-b">M. Pierre Martin</td>
                            <td class="py-2 px-4 border-b">2024-12-24 14:00</td>
                            <td class="py-2 px-4 border-b">En attente</td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-[#d9910d] hover:text-[#bf9e60]" onclick="confirmAction('Accepter cette réservation ?')">Accepter</button>
                                <button class="ml-2 text-[#d9910d] hover:text-[#bf9e60]" onclick="confirmAction('Refuser cette réservation ?')">Refuser</button>
                            </td>
                        </tr>
                        <!-- Répéter pour d'autres réservations -->
                    </tbody>
                </table>
            </section>

            <!-- Section Profil -->
            <section id="profile" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-[#735a3d]">Mon Profil</h2>
                <form>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-[#735a3d]">Prénom</label>
                            <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg" value="Jean" required>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-[#735a3d]">Nom</label>
                            <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg" value="Dupont" required>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-[#735a3d]">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg" value="jean.dupont@example.com" required>
                    </div>
                    <div class="mt-4">
                        <label for="phone" class="block text-sm font-medium text-[#735a3d]">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg" value="0123456789" required>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="bg-[#d9910d] text-white py-2 px-4 rounded-lg hover:bg-[#bf9e60]">
                            Mettre à jour mon profil
                        </button>
                    </div>
                </form>
            </section>

            <!-- Section Disponibilités -->
            <section id="availability" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-[#735a3d]">Mes Disponibilités</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="date" class="block text-sm font-medium text-[#735a3d]">Date</label>
                        <input type="date" id="date" name="date" class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg">
                    </div>
                    <div>
                        <label for="time" class="block text-sm font-medium text-[#735a3d]">Heure</label>
                        <input type="time" id="time" name="time" class="w-full px-4 py-2 border border-[#735a3d]/30 rounded-lg">
                    </div>
                </div>
                <div class="mt-6">
                    <button class="bg-[#d9910d] text-white py-2 px-4 rounded-lg hover:bg-[#bf9e60]">
                        Ajouter Disponibilité
                    </button>
                </div>
            </section>

            <!-- Section Statistiques -->
            <section id="statistics" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-[#735a3d]">Mes Statistiques</h2>
                <div class="bg-white shadow-md p-4 rounded-lg">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-[#735a3d]">Réservations Acceptées</h3>
                        <p class="text-xl text-[#d9910d]">25</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-[#735a3d]">Réservations en Attente</h3>
                        <p class="text-xl text-[#d9910d]">5</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#735a3d]">Réservations Refusées</h3>
                        <p class="text-xl text-[#d9910d]">3</p>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        function confirmAction(message) {
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: message,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d9910d',
                cancelButtonColor: '#0d0d0d',
                confirmButtonText: 'Oui, accepter',
                cancelButtonText: 'Non, revenir',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Réservation acceptée!',
                        'La réservation a été acceptée avec succès.',
                        'success'
                    );
                }
            });
        }
    </script>
</body>

</html>