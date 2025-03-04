<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'offre - NavShuttle</title>
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

    <!-- Offer Details -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-wine text-white p-6">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h1 class="text-3xl font-bold mb-2">Casablanca → Rabat</h1>
                        <p class="text-dutch-white/80">Navette quotidienne pour professionnels</p>
                    </div>
                    <span class="mt-4 md:mt-0 bg-dutch-white text-wine px-3 py-1 rounded-full text-sm font-medium">Places disponibles: 12/20</span>
                </div>
            </div>
            
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-xl font-semibold mb-4 text-wine">Détails de la navette</h2>
                        
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-dutch-white/20 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Ville de départ</p>
                                <p class="font-semibold">Casablanca</p>
                            </div>
                            <div class="bg-dutch-white/20 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Ville d'arrivée</p>
                                <p class="font-semibold">Rabat</p>
                            </div>
                            <div class="bg-dutch-white/20 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Heure de départ</p>
                                <p class="font-semibold">07:30</p>
                            </div>
                            <div class="bg-dutch-white/20 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Heure d'arrivée</p>
                                <p class="font-semibold">08:45</p>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">Période d'abonnement</h3>
                            <div class="bg-dutch-white/20 p-4 rounded-lg">
                                <p class="font-semibold">Du 01/03/2025 au 30/06/2025</p>
                                <p class="text-sm text-gray-600 mt-1">Navette disponible du lundi au vendredi (jours ouvrables uniquement)</p>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">Description</h3>
                            <div class="bg-dutch-white/20 p-4 rounded-lg">
                                <p>Service de navette quotidienne destiné aux professionnels travaillant à Rabat. Départ depuis la gare routière de Casablanca et arrivée au centre-ville de Rabat. Service ponctuel et confortable pour vos déplacements professionnels.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold mb-4 text-wine">Informations sur l'autocar</h2>
                        
                        <div class="bg-dutch-white/20 p-4 rounded-lg mb-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Type de véhicule</p>
                                    <p class="font-semibold">Autocar Grand Confort</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Nombre de sièges</p>
                                    <p class="font-semibold">30 sièges</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Climatisation</p>
                                    <p class="font-semibold">Oui</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">WiFi</p>
                                    <p class="font-semibold">Oui</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Prises électriques</p>
                                    <p class="font-semibold">Oui</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Toilettes</p>
                                    <p class="font-semibold">Non</p>
                                </div>
                            </div>
                        </div>
                        
                        <h2 class="text-xl font-semibold mb-4 text-wine">Société de transport</h2>
                        
                        <div class="bg-dutch-white/20 p-4 rounded-lg mb-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                                <div>
                                    <p class="font-semibold">TransExpress Maroc</p>
                                    <p class="text-sm text-gray-600">Service de transport professionnel</p>
                                </div>
                            </div>
                            <p class="text-sm">Société spécialisée dans le transport interurbain depuis 2010. Plus de 50 véhicules et 100 000 clients satisfaits.</p>
                        </div>
                        
                        <div class="bg-wine/10 p-4 rounded-lg border border-wine/20 mb-6">
                            <h3 class="font-semibold text-wine mb-2">Conditions d'abonnement</h3>
                            <ul class="list-disc list-inside text-sm space-y-1">
                                <li>Abonnement mensuel renouvelable</li>
                                <li>Paiement à effectuer avant le 25 du mois précédent</li>
                                <li>Annulation possible jusqu'à 7 jours avant le début du mois</li>
                                <li>Carte d'abonné à présenter à chaque trajet</li>
                            </ul>
                        </div>
                        
                        <div class="text-center">
                            <a href="/login" class="inline-block w-full bg-wine text-white py-3 px-6 rounded-md font-semibold hover:bg-wine/90 transition">S'abonner à cette navette</a>
                            <p class="text-sm text-gray-600 mt-2">Connectez-vous pour vous abonner à cette navette</p>
                        </div>
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

