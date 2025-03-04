<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Administrateur - NavShuttle</title>
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
            <a href="/admin" class="text-2xl font-bold">NavShuttle Admin</a>
            <div class="flex items-center space-x-4">
                <a href="/admin/users" class="hover:text-dutch-white transition">Utilisateurs</a>
                <a href="/admin/companies" class="hover:text-dutch-white transition">Sociétés</a>
                <a href="/admin/offers" class="hover:text-dutch-white transition">Offres</a>
                <a href="/admin/subscriptions" class="hover:text-dutch-white transition">Abonnements</a>
                <div class="relative">
                    <button class="flex items-center space-x-1 hover:text-dutch-white transition">
                        <span>Admin</span>
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
            <h1 class="text-3xl font-bold">Tableau de Bord Administrateur</h1>
            <p class="mt-2">Gérez et surveillez l'activité de la plateforme NavShuttle</p>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Utilisateurs actifs</h3>
                <p class="text-3xl font-bold text-wine">1,234</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Sociétés partenaires</h3>
                <p class="text-3xl font-bold text-wine">56</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Offres actives</h3>
                <p class="text-3xl font-bold text-wine">89</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Abonnements en cours</h3>
                <p class="text-3xl font-bold text-wine">2,567</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-4 text-wine">Activité récente</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            <span class="text-sm">Nouvel utilisateur inscrit: Mohammed A.</span>
                            <span class="text-xs text-gray-500 ml-auto">Il y a 5 min</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                            <span class="text-sm">Nouvelle offre créée: Casablanca - Marrakech</span>
                            <span class="text-xs text-gray-500 ml-auto">Il y a 15 min</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>
                            <span class="text-sm">Abonnement renouvelé: Rabat - Fès</span>
                            <span class="text-xs text-gray-500 ml-auto">Il y a 1 heure</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-4 text-wine">Statistiques mensuelles</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-700">Nouveaux utilisateurs</h3>
                            <div class="mt-1 relative pt-1">
                                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-wine/20">
                                    <div style="width:70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-wine"></div>
                                </div>
                                <span class="text-xs font-semibold inline-block text-wine">
                                    70% (210 nouveaux utilisateurs)
                                </span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-700">Taux d'occupation des navettes</h3>
                            <div class="mt-1 relative pt-1">
                                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-wine/20">
                                    <div style="width:85%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-wine"></div>
                                </div>
                                <span class="text-xs font-semibold inline-block text-wine">
                                    85% d'occupation moyenne
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p>&copy; 2025 NavShuttle. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>

