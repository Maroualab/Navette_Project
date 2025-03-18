<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavShuttle - Service de Navettes</title>
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
<body class="bg-dutch-white/30 min-h-screen">
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
                    @if(auth()->user()->role == 'transport-companies')
                        <a href="/transport-companies/dashboard" class="hover:text-dutch-white transition">Dashboard</a>
                    @else
                        <a href="/dashboard" class="hover:text-dutch-white transition">Dashboard</a>
                    @endif
                    <a href="/logout" class="bg-dutch-white text-wine px-4 py-2 rounded-md hover:bg-dutch-white/80 transition">Déconnexion</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-wine text-white py-16">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Voyagez en toute simplicité</h1>
                <p class="text-lg mb-8">Trouvez des navettes régulières entre villes ou proposez vos services de transport avec notre plateforme d'abonnement.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/offres" class="bg-dutch-white text-wine px-6 py-3 rounded-md font-semibold text-center hover:bg-dutch-white/80 transition">Voir les offres</a>
                    <a href="/demandes/create" class="border border-dutch-white px-6 py-3 rounded-md font-semibold text-center hover:bg-dutch-white/20 transition">Soumettre une demande</a>
                </div>
            </div>
            <div class="md:w-1/2">
            <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/7073b298-2047-4233-8d81-1d9a4e6aa2bb/Ghe1DWCGps.lottie" background="transparent" speed="1" style="width: 350px; height: 350px ;  margin-left: 200px;" loop autoplay></dotlottie-player>               </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-wine">Comment ça fonctionne</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg shadow-md bg-dutch-white/30">
                    <div class="bg-wine text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h3 class="text-xl font-semibold mb-3 text-wine">Pour les voyageurs</h3>
                    <p>Inscrivez-vous, trouvez une navette qui correspond à vos besoins et abonnez-vous pour réserver votre place.</p>
                </div>
                <div class="text-center p-6 rounded-lg shadow-md bg-dutch-white/30">
                    <div class="bg-wine text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h3 class="text-xl font-semibold mb-3 text-wine">Pour les transporteurs</h3>
                    <p>Créez des offres de navettes entre villes avec tous les détails nécessaires et gérez vos abonnés.</p>
                </div>
                <div class="text-center p-6 rounded-lg shadow-md bg-dutch-white/30">
                    <div class="bg-wine text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                    <h3 class="text-xl font-semibold mb-3 text-wine">Demandes spéciales</h3>
                    <p>Pas d'offre qui vous convient ? Soumettez une demande et les transporteurs pourront y répondre.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Offers -->
    <section class="py-16 bg-dutch-white/20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-wine">Offres populaires</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($offres as $offre)
                <!-- Offer Card -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-wine text-white p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold">{{ $offre->depart }} → {{ $offre->arrivee }}</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between mb-3">
                            <div>
                                <p class="text-sm text-gray-600">Départ</p>
                                <p class="font-semibold">{{ $offre->heure_depart }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Arrivée</p>
                                <p class="font-semibold">{{ $offre->heure_arrivee }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Places</p>
                                <p class="font-semibold">{{ $offre->available_places }}</p>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                            <p class="text-sm text-gray-600">Période</p>
                            <p class="font-semibold">{{ $offre->date_debut}} - {{ $offre->date_fin }}</p>
                        </div>
                        <a href="/offres/{{ $offre->id }}" class="block w-full bg-wine text-white text-center py-2 rounded-md hover:bg-wine/90 transition">Voir détails</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-wine text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Vous ne trouvez pas ce que vous cherchez ?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Soumettez une demande de navette et les sociétés de transport pourront vous proposer des offres adaptées à vos besoins.</p>
            <a href="/demandes/create" class="inline-block bg-dutch-white text-wine px-6 py-3 rounded-md font-semibold hover:bg-dutch-white/80 transition">Soumettre une demande</a>
        </div>
    </section>

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

