<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - NavShuttle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dutch-white': '#EFDFBB',
                        'wine': '#722F37',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dutch-white/30 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-wine text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">NavShuttle</a>
            <div class="flex items-center space-x-4">
                <a href="/dashboard" class="hover:text-dutch-white transition">Tableau de bord</a>
                <a href="/abonnements" class="hover:text-dutch-white transition">Mes abonnements</a>
                <a href="/demandes" class="hover:text-dutch-white transition">Mes demandes</a>
                <div class="relative">
                    <button class="flex items-center space-x-1 hover:text-dutch-white transition">
                        <span>Mohammed Alami</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-wine text-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Tableau de bord</h1>
            <p class="mt-2">Bienvenue, Mohammed. Gérez vos abonnements et demandes de navettes.</p>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <!-- Stats Cards -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Abonnements actifs</h3>
                <p class="text-3xl font-bold text-wine">2</p>
                <div class="mt-4">
                    <a href="/abonnements" class="text-wine hover:underline text-sm flex items-center">
                        Voir tous les abonnements
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Demandes en cours</h3>
                <p class="text-3xl font-bold text-wine">1</p>
                <div class="mt-4">
                    <a href="/demandes" class="text-wine hover:underline text-sm flex items-center">
                        Voir toutes les demandes
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Propositions reçues</h3>
                <p class="text-3xl font-bold text-wine">3</p>
                <div class="mt-4">
                    <a href="/propositions" class="text-wine hover:underline text-sm flex items-center">
                        Voir toutes les propositions
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Active Subscriptions -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-wine mb-4">Abonnements actifs</h2>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trajet</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Horaires</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Période</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Société</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="font-medium text-gray-900">Casablanca → Rabat</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">07:30 - 08:45</div>
                                    <div class="text-xs text-gray-500">Lun - Ven</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">01/03/2025 - 30/06/2025</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">TransExpress Maroc</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="/abonnements/1" class="text-wine hover:text-wine/80 mr-3">Détails</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="font-medium text-gray-900">Rabat → Casablanca</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">18:00 - 19:15</div>
                                    <div class="text-xs text-gray-500">Lun - Ven</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">01/03/2025 - 30/06/2025</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">TransExpress Maroc</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="/abonnements/2" class="text-wine hover:text-wine/80 mr-3">Détails</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recent Requests -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-wine mb-4">Demandes récentes</h2>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trajet</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Horaires souhaités</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Période</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Propositions</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="font-medium text-gray-900">Marrakech → Agadir</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">09:00 - 12:30</div>
                                    <div class="text-xs text-gray-500">Lun, Mer, Ven</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">15/04/2025 - 15/07/2025</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">3 propositions</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">En cours</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="/demandes/1" class="text-wine hover:text-wine/80 mr-3">Voir détails</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recommended Offers -->
        <div>
            <h2 class="text-2xl font-bold text-wine mb-4">Offres recommandées</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Offer Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-wine text-white p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold">Tanger → Tétouan</h3>
                            <span class="bg-dutch-white text-wine px-2 py-1 rounded text-sm font-medium">Places disponibles</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between mb-3">
                            <div>
                                <p class="text-sm text-gray-600">Départ</p>
                                <p class="font-semibold">17:30</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Arrivée</p>
                                <p class="font-semibold">18:15</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Places</p>
                                <p class="font-semibold">5/18</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="text-sm text-gray-600">Période</p>
                            <p class="font-semibold">01/04/2025 - 30/09/2025</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">Équipements</p>
                            <p>Climatisation, TV, 20 sièges</p>
                        </div>
                        <a href="/offres/3" class="block w-full bg-wine text-white text-center py-2 rounded-md hover:bg-wine/90 transition">Voir détails</a>
                    </div>
                </div>

                <!-- Offer Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-wine text-white p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold">Fès → Meknès</h3>
                            <span class="bg-dutch-white text-wine px-2 py-1 rounded text-sm font-medium">Places disponibles</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between mb-3">
                            <div>
                                <p class="text-sm text-gray-600">Départ</p>
                                <p class="font-semibold">08:00</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Arrivée</p>
                                <p class="font-semibold">08:45</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Places</p>
                                <p class="font-semibold">10/15</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="text-sm text-gray-600">Période</p>
                            <p class="font-semibold">01/05/2025 - 31/08/2025</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">Équipements</p>
                            <p>Climatisation, WiFi, 15 sièges</p>
                        </div>
                        <a href="/offres/4" class="block w-full bg-wine text-white text-center py-2 rounded-md hover:bg-wine/90 transition">Voir détails</a>
                    </div>
                </div>

                <!-- Offer Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-wine text-white p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold">Casablanca → Marrakech</h3>
                            <span class="bg-dutch-white text-wine px-2 py-1 rounded text-sm font-medium">Places disponibles</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between mb-3">
                            <div>
                                <p class="text-sm text-gray-600">Départ</p>
                                <p class="font-semibold">10:00</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Arrivée</p>
                                <p class="font-semibold">13:30</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Places</p>
                                <p class="font-semibold">7/25</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="text-sm text-gray-600">Période</p>
                            <p class="font-semibold">15/03/2025 - 15/09/2025</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">Équipements</p>
                            <p>Climatisation, WiFi, Prises USB, 25 sièges</p>
                        </div>
                        <a href="/offres/5" class="block w-full bg-wine text-white text-center py-2 rounded-md hover:bg-wine/90 transition">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">NavShuttle</h3>
                    <p class="text-gray-300">La plateforme de référence pour les navettes et abonnements de transport interurbain.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-dutch-white transition">Accueil</a></li>
                        <li><a href="/offres" class="text-gray-300 hover:text-dutch-white transition">Offres</a></li>
                        <li><a href="/demandes/create" class="text-gray-300 hover:text-dutch-white transition">Soumettre une demande</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-dutch-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Pour les sociétés</h4>
                    <ul class="space-y-2">
                        <li><a href="/societes/inscription" class="text-gray-300 hover:text-dutch-white transition">Devenir partenaire</a></li>
                        <li><a href="/societes/login" class="text-gray-300 hover:text-dutch-white transition">Espace société</a></li>
                        <li><a href="/offres/create" class="text-gray-300 hover:text-dutch-white transition">Créer une offre</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>contact@navshuttle.com</li>
                        <li>+212 5XX XX XX XX</li>
                        <li>Casablanca, Maroc</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2025 NavShuttle. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>

