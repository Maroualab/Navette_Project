<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une offre - NavShuttle</title>
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
                <a href="/offres" class="hover:text-dutch-white transition">Mes offres</a>
                <a href="/demandes" class="hover:text-dutch-white transition">Demandes</a>
                <div class="relative">
                    <button class="flex items-center space-x-1 hover:text-dutch-white transition">
                        <span>TransExpress</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
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
            <h1 class="text-3xl font-bold">Créer une nouvelle offre de navette</h1>
            <p class="mt-2">Définissez les détails de votre service de navette</p>
        </div>
    </div>

    <!-- Create Offer Form -->
    <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <form action="{{ route("offers.store") }}" method="POST">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h2 class="text-xl font-semibold mb-4 text-wine">Informations de base</h2>

                            <div class="space-y-4 mb-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre de
                                        l'offre</label>
                                    <input type="text" id="title" name="title"
                                        placeholder="Ex: Navette quotidienne Casablanca-Rabat"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                        required>
                                </div>
                             

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="depart" class="block text-sm font-medium text-gray-700 mb-1">Ville
                                            de départ</label>
                                        <select id="depart" name="depart"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                            required>
                                            <option value="">Sélectionner une ville</option>
                                            <option value="casablanca">Casablanca</option>
                                            <option value="rabat">Rabat</option>
                                            <option value="marrakech">Marrakech</option>
                                            <option value="tanger">Tanger</option>
                                            <option value="agadir">Agadir</option>
                                        </select>
                                    </div>
                                    @error('depart')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    <div>
                                        <label for="arrivee" class="block text-sm font-medium text-gray-700 mb-1">Ville
                                            d'arrivée</label>
                                        <select id="arrivee" name="arrivee"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                            required>
                                            <option value="">Sélectionner une ville</option>
                                            <option value="casablanca">Casablanca</option>
                                            <option value="rabat">Rabat</option>
                                            <option value="marrakech">Marrakech</option>
                                            <option value="tanger">Tanger</option>
                                            <option value="agadir">Agadir</option>
                                        </select>
                                    </div>
                                    @error('arrivee')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="heure_depart"
                                            class="block text-sm font-medium text-gray-700 mb-1">Heure de départ</label>
                                        <input type="time" id="heure_depart" name="heure_depart"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                            required>
                                    </div>
                                    @error('heure_depart')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    <div>
                                        <label for="heure_arrivee"
                                            class="block text-sm font-medium text-gray-700 mb-1">Heure d'arrivée</label>
                                        <input type="time" id="heure_arrivee" name="heure_arrivee"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                            required>
                                    </div>
                                    @error('heure_arrivee')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="date_debut"
                                            class="block text-sm font-medium text-gray-700 mb-1">Date de début</label>
                                        <input type="date" id="date_debut" name="date_debut"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                            required>
                                    </div>
                                    @error('date_debut')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    <div>
                                        <label for="date_fin" class="block text-sm font-medium text-gray-700 mb-1">Date
                                            de fin</label>
                                        <input type="date" id="date_fin" name="date_fin"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                            required>
                                    </div>
                                    @error('date_fin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>



                                <div>
                                    <label for="places" class="block text-sm font-medium text-gray-700 mb-1">Nombre de
                                        places disponibles</label>
                                    <input type="number" id="places" name="available_places" min="1"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                        required>
                                </div>
                                @error('available_places')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                            </div>
                        </div>

                        <div>
                            <h2 class="text-xl font-semibold mb-4 text-wine">Informations sur l'autocar</h2>

                            <div class="space-y-4 mb-6">


                                <div>
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                                    <textarea id="description" name="description" rows="4"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"
                                        required></textarea>
                                </div>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>


                        </div>
                    </div>

                    <div class="mt-8 flex justify-end space-x-4">
                        <button type="button"
                            class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 transition">Annuler</button>
                        <button type="submit"
                            class="px-6 py-2 bg-wine text-white rounded-md hover:bg-wine/90 transition">Créer
                            l'offre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">NavShuttle</h3>
                    <p class="text-gray-300">La plateforme de référence pour les navettes et abonnements de transport
                        interurbain.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-dutch-white transition">Accueil</a></li>
                        <li><a href="/offres" class="text-gray-300 hover:text-dutch-white transition">Offres</a></li>
                        <li><a href="/demandes/create" class="text-gray-300 hover:text-dutch-white transition">Soumettre
                                une demande</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-dutch-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Pour les sociétés</h4>
                    <ul class="space-y-2">
                        <li><a href="/societes/inscription"
                                class="text-gray-300 hover:text-dutch-white transition">Devenir partenaire</a></li>
                        <li><a href="/societes/login" class="text-gray-300 hover:text-dutch-white transition">Espace
                                société</a></li>
                        <li><a href="/offres/create" class="text-gray-300 hover:text-dutch-white transition">Créer une
                                offre</a></li>
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