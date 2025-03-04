<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Demandes - NavShuttle</title>
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
                @auth
                    <a href="/logout" class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Déconnexion</a>
                @endauth
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
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold">Mes Demandes</h1>
                    <p class="mt-2">Suivez l'état de vos demandes de navettes et consultez les propositions reçues.</p>
                </div>
                <a href="/demandes/create" class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Nouvelle demande</a>
            </div>
        </div>
    </div>

    <!-- Requests Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <!-- Tabs -->
        <div class="mb-6 border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#" class="inline-block py-2 px-4 text-wine font-medium border-b-2 border-wine">Demandes en cours</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block py-2 px-4 text-gray-500 hover:text-gray-700 font-medium border-b-2 border-transparent hover:border-gray-300">Demandes terminées</a>
                </li>
            </ul>
        </div>

        <!-- Active Requests -->
        <div class="mb-8">
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

        <!-- Request Cards for Mobile -->
        <div class="md:hidden space-y-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-wine text-white p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold">Marrakech → Agadir</h3>
                        <span class="bg-dutch-white text-wine px-2 py-1 rounded text-sm font-medium">En cours</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="grid grid-cols-2 gap-4 mb-3">
                        <div>
                            <p class="text-sm text-gray-600">Horaires souhaités</p>
                            <p class="font-semibold">09:00 - 12:30</p>
                            <p class="text-xs text-gray-500">Lun, Mer, Ven</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Période</p>
                            <p class="font-semibold">15/04/2025 - 15/07/2025</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600">Propositions</p>
                        <p class="font-semibold">3 propositions</p>
                    </div>
                    <a href="/demandes/1" class="block w-full bg-wine text-white text-center py-2 rounded-md hover:bg-wine/90 transition">Voir détails</a>
                </div>
            </div>
        </div>

        <!-- No Requests Message (if needed) -->
        <div class="hidden bg-white rounded-lg shadow-md p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">Aucune demande en cours</h3>
            <p class="text-gray-500 mb-6">Vous n'avez pas encore soumis de demande de navette.</p>
            <a href="/demandes/create" class="inline-block bg-wine text-white px-6 py-3 rounded-md font-semibold hover:bg-wine/90 transition">Soumettre une demande</a>
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

