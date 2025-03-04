<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres de Navettes - NavShuttle</title>
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
                <a href="/offres" class="hover:text-dutch-white transition">Offres</a>
                <a href="/demandes/create" class="hover:text-dutch-white transition">Soumettre une demande</a>
                @guest
                    <a href="/login" class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Connexion</a>
                    <a href="/register" class="border border-dutch-white px-4 py-2 rounded-md hover:bg-dutch-white/20 transition">Inscription</a>
                @endguest
                @auth
                    <a href="/logout" class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Déconnexion</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-wine text-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Offres de Navettes</h1>
            <p class="mt-2">Trouvez et abonnez-vous aux navettes disponibles entre villes</p>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-6">
            <form class="grid md:grid-cols-5 gap-4">
                <div>
                    <label for="depart" class="block text-sm font-medium text-gray-700 mb-1">Ville de départ</label>
                    <select id="depart" name="depart" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent">
                        <option value="">Toutes les villes</option>
                        <option value="casablanca">Casablanca</option>
                        <option value="rabat">Rabat</option>
                        <option value="marrakech">Marrakech</option>
                        <option value="tanger">Tanger</option>
                        <option value="agadir">Agadir</option>
                    </select>
                </div>
                <div>
                    <label for="arrivee" class="block text-sm font-medium text-gray-700 mb-1">Ville d'arrivée</label>
                    <select id="arrivee" name="arrivee" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent">
                        <option value="">Toutes les villes</option>
                        <option value="casablanca">Casablanca</option>
                        <option value="rabat">Rabat</option>
                        <option value="marrakech">Marrakech</option>
                        <option value="tanger">Tanger</option>
                        <option value="agadir">Agadir</option>
                    </select>
                </div>
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date de début</label>
                    <input type="date" id="date" name="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent">
                </div>
                <div>
                    <label for="heure" class="block text-sm font-medium text-gray-700 mb-1">Heure de départ</label>
                    <select id="heure" name="heure" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent">
                        <option value="">Toute heure</option>
                        <option value="matin">Matin (6h-12h)</option>
                        <option value="apres-midi">Après-midi (12h-18h)</option>
                        <option value="soir">Soir (18h-00h)</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-wine text-white py-2 px-4 rounded-md font-medium hover:bg-wine/90 transition">Rechercher</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Results -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-wine">Résultats (15)</h2>
            <div class="flex items-center">
                <label for="sort" class="mr-2 text-gray-700">Trier par:</label>
                <select id="sort" name="sort" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent">
                    <option value="date">Date de départ</option>
                    <option value="price">Prix</option>
                    <option value="places">Places disponibles</option>
                </select>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Offer Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-wine text-white p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold">Casablanca → Rabat</h3>
                        <span class="bg-dutch-white text-wine px-2 py-1 rounded text-sm font-medium">Places disponibles</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between mb-3">
                        <div>
                            <p class="text-sm text-gray-600">Départ</p>
                            <p class="font-semibold">07:30</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Arrivée</p>
                            <p class="font-semibold">08:45</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Places</p>
                            <p class="font-semibold">12/20</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-600">Période</p>
                        <p class="font-semibold">01/03/2025 - 30/06/2025</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600">Équipements</p>
                        <p>Climatisation, WiFi, 30 sièges</p>
                    </div>
                    <a href="/offres/1" class="block w-full bg-wine text-white text-center py-2 rounded-md hover:bg-wine/90 transition">Voir détails</a>
                </div>
            </div>

            <!-- Offer Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-wine text-white p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold">Marrakech → Agadir</h3>
                        <span class="bg-dutch-white text-wine px-2 py-1 rounded text-sm font-medium">Places disponibles</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between mb-3">
                        <div>
                            <p class="text-sm text-gray-600">Départ</p>
                            <p class="font-semibold">09:00</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Arrivée</p>
                            <p class="font-semibold">12:30</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Places</p>
                            <p class="font-semibold">8/15</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-600">Période</p>
                        <p class="font-semibold">15/02/2025 - 15/05/2025</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600">Équipements</p>
                        <p>Climatisation, Prises USB, 25 sièges</p>
                    </div>
                    <a href="/offres/2" class="block w-full bg-wine text-white text-center py-2 rounded-md hover:bg-wine/90 transition">Voir détails</a>
                </div>
            </div>

            <!-- Offer Card 3 -->
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

            <!-- More offer cards would go here -->
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Précédent</a>
                <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-wine text-white">1</a>
                <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
                <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Suivant</a>
            </nav>
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

