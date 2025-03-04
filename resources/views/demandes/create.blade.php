<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumettre une demande - NavShuttle</title>
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
            <h1 class="text-3xl font-bold">Soumettre une demande de navette</h1>
            <p class="mt-2">Vous ne trouvez pas ce que vous cherchez ? Soumettez une demande et les sociétés de transport pourront vous proposer des offres adaptées.</p>
        </div>
    </div>

    <!-- Request Form -->
    <div class="flex-grow container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <form>
                    <div class="space-y-6">
                        <div>
                            <h2 class="text-xl font-semibold mb-4 text-wine">Informations de trajet</h2>
                            
                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="depart" class="block text-sm font-medium text-gray-700 mb-1">Ville de départ</label>
                                        <select id="depart" name="depart" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                            <option value="">Sélectionner une ville</option>
                                            <option value="casablanca">Casablanca</option>
                                            <option value="rabat">Rabat</option>
                                            <option value="marrakech">Marrakech</option>
                                            <option value="tanger">Tanger</option>
                                            <option value="agadir">Agadir</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="arrivee" class="block text-sm font-medium text-gray-700 mb-1">Ville d'arrivée</label>
                                        <select id="arrivee" name="arrivee" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                            <option value="">Sélectionner une ville</option>
                                            <option value="casablanca">Casablanca</option>
                                            <option value="rabat">Rabat</option>
                                            <option value="marrakech">Marrakech</option>
                                            <option value="tanger">Tanger</option>
                                            <option value="agadir">Agadir</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="heure_depart" class="block text-sm font-medium text-gray-700 mb-1">Heure de départ souhaitée</label>
                                        <input type="time" id="heure_depart" name="heure_depart" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                    </div>
                                    <div>
                                        <label for="flexibilite" class="block text-sm font-medium text-gray-700 mb-1">Flexibilité</label>
                                        <select id="flexibilite" name="flexibilite" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                            <option value="exact">Heure exacte</option>
                                            <option value="30min">±30 minutes</option>
                                            <option value="1h">±1 heure</option>
                                            <option value="2h">±2 heures</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h2 class="text-xl font-semibold mb-4 text-wine">Période d'abonnement</h2>
                            
                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="date_debut" class="block text-sm font-medium text-gray-700 mb-1">Date de début</label>
                                        <input type="date" id="date_debut" name="date_debut" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                    </div>
                                    <div>
                                        <label for="date_fin" class="block text-sm font-medium text-gray-700 mb-1">Date de fin</label>
                                        <input type="date" id="date_fin" name="date_fin" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="jours" class="block text-sm font-medium text-gray-700 mb-1">Jours souhaités</label>
                                    <div class="grid grid-cols-7 gap-2">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="lundi" name="jours[]" value="lundi" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="lundi" class="ml-2 text-sm text-gray-700">Lun</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="mardi" name="jours[]" value="mardi" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="mardi" class="ml-2 text-sm text-gray-700">Mar</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="mercredi" name="jours[]" value="mercredi" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="mercredi" class="ml-2 text-sm text-gray-700">Mer</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="jeudi" name="jours[]" value="jeudi" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="jeudi" class="ml-2 text-sm text-gray-700">Jeu</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="vendredi" name="jours[]" value="vendredi" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="vendredi" class="ml-2 text-sm text-gray-700">Ven</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="samedi" name="jours[]" value="samedi" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="samedi" class="ml-2 text-sm text-gray-700">Sam</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="dimanche" name="jours[]" value="dimanche" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="dimanche" class="ml-2 text-sm text-gray-700">Dim</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h2 class="text-xl font-semibold mb-4 text-wine">Préférences</h2>
                            
                            <div class="space-y-4">
                                <div>
                                    <label for="nb_personnes" class="block text-sm font-medium text-gray-700 mb-1">Nombre de personnes</label>
                                    <input type="number" id="nb_personnes" name="nb_personnes" min="1" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent" required>
                                </div>
                                
                                <div class="space-y-2">
                                    <p class="block text-sm font-medium text-gray-700">Équipements souhaités</p>
                                    
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="climatisation" name="equipements[]" value="climatisation" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="climatisation" class="ml-2 text-sm text-gray-700">Climatisation</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="wifi" name="equipements[]" value="wifi" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="wifi" class="ml-2 text-sm text-gray-700">WiFi</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="prises" name="equipements[]" value="prises" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="prises" class="ml-2 text-sm text-gray-700">Prises électriques</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="usb" name="equipements[]" value="usb" class="h-4 w-4 text-wine focus:ring-wine border-gray-300 rounded">
                                            <label for="usb" class="ml-2 text-sm text-gray-700">Prises USB</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="commentaires" class="block text-sm font-medium text-gray-700 mb-1">Commentaires supplémentaires</label>
                                    <textarea id="commentaires" name="commentaires" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wine focus:border-transparent"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-dutch-white/20 p-4 rounded-lg">
                            <p class="text-sm text-gray-700">En soumettant cette demande, vous acceptez que les sociétés de transport partenaires puissent vous contacter pour vous proposer des offres adaptées à vos besoins.</p>
                        </div>
                        
                        <div class="flex justify-end space-x-4">
                            <button type="button" class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 transition">Annuler</button>
                            <button type="submit" class="px-6 py-2 bg-wine text-white rounded-md hover:bg-wine/90 transition">Soumettre la demande</button>
                        </div>
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

