<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Demande - NavShuttle</title>
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
            <h1 class="text-3xl font-bold">Détails de la Demande</h1>
            <p class="mt-2">Marrakech → Agadir</p>
        </div>
    </div>

    <!-- Request Details Content -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-xl font-semibold mb-4 text-wine">Informations de la demande</h2>
                        <div class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Ville de départ</p>
                                    <p class="font-semibold">Marrakech</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Ville d'arrivée</p>
                                    <p class="font-semibold">Agadir</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Horaires souhaités</p>
                                    <p class="font-semibold">09:00 - 12:30</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Jours</p>
                                    <p class="font-semibold">Lun, Mer, Ven</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Période</p>
                                <p class="font-semibold">15/04/2025 - 15/07/2025</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Nombre de personnes</p>
                                <p class="font-semibold">12</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Équipements souhaités</p>
                                <p class="font-semibold">Climatisation, WiFi</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Commentaires supplémentaires</p>
                                <p>Nous sommes un groupe d'étudiants qui cherchent une navette régulière pour nos stages.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-4 text-wine">Statut de la demande</h2>
                        <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-md mb-4">
                            <p class="font-semibold">En cours</p>
                            <p class="text-sm">3 propositions reçues</p>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Propositions reçues</h3>
                        <div class="space-y-4">
                            <div class="border rounded-md p-4">
                                <h4 class="font-semibold">TransExpress Maroc</h4>
                                <p class="text-sm text-gray-600 mb-2">Proposition reçue le 12/02/2025</p>
                                <ul class="list-disc list-inside text-sm space-y-1">
                                    <li>Départ : 09:15 - Arrivée : 12:15</li>
                                    <li>Jours : Lun, Mer, Ven</li>
                                    <li>Véhicule : Minibus 15 places</li>
                                    <li>Équipements : Climatisation, WiFi, Prises USB</li>
                                    <li>Prix par personne : 150 MAD / trajet</li>
                                </ul>
                                <div class="mt-4">
                                    <button class="bg-wine text-white px-4 py-2 rounded-md hover:bg-wine/90 transition">Accepter la proposition</button>
                                </div>
                            </div>
                            <div class="border rounded-md p-4">
                                <h4 class="font-semibold">SudTransport</h4>
                                <p class="text-sm text-gray-600 mb-2">Proposition reçue le 13/02/2025</p>
                                <ul class="list-disc list-inside text-sm space-y-1">
                                    <li>Départ : 09:00 - Arrivée : 12:30</li>
                                    <li>Jours : Lun, Mer, Ven</li>
                                    <li>Véhicule : Autocar 30 places</li>
                                    <li>Équipements : Climatisation, WiFi, Toilettes</li>
                                    <li>Prix par personne : 180 MAD / trajet</li>
                                </ul>
                                <div class="mt-4">
                                    <button class="bg-wine text-white px-4 py-2 rounded-md hover:bg-wine/90 transition">Accepter la proposition</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex justify-end space-x-4">
                    <button class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition">Modifier la demande</button>
                    <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">Annuler la demande</button>
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

